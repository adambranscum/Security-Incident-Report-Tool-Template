<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reports;
use App\Models\Supdocs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Mail\ReportMail;
use Mail;

class Reportcontroller extends Controller
{
    public function store(Request $request){
        $report = $request->validate([
            'branch' => 'nullable',
            'date' => 'nullable',
            'time' => 'nullable',
            'staff' => 'nullable',
            'header' => 'nullable',
            'nature' => 'nullable',
            'offender' => 'nullable',
            'offender_age' => 'nullable',
            'offender_phone' => 'nullable',
            'offender_lib' => 'nullable',
            'offender_address' => 'nullable',
            'offender_city' => 'nullable',
            'offender_state' => 'nullable',
            'offender_zip' => 'nullable',
            'description' => 'nullable',
            'victim' => 'nullable',
            'victim_age' => 'nullable',
            'victim_phone' => 'nullable',
            'victim_lib' => 'nullable',
            'victim_address' => 'nullable',
            'victim_city' => 'nullable',
            'victim_state' => 'nullable',
            'victim_zip' => 'nullable',
            'action' => 'nullable',
            'witness' => 'nullable',
            'witness_two' => 'nullable',
            'witness_three' => 'nullable',
        ]);

        $new = Reports::create($report);

        $adminEmail = [$request->input('staff'), 'email@email.com'];

        Mail::to($adminEmail)->send(new ReportMail($request));

        return redirect(route('report.create'))->with('success', 'Your report was entered Successfully!');

}

public function view(){
    $reports = Reports::orderBy('id', 'desc')->get();

    return view('report.view')->with(['reports' => $reports]);        
}

public function details(Reports $report){
    return view('report.details', ['report' => $report]);
}

public function myrep(){
    $staff = Auth()->user()->email;
    $reports = Reports::orderBy('id', 'desc')->where('staff', '=', $staff)->get();

    return view('report.myreports')->with(['reports' => $reports]);        
}

public function edit(Reports $report){
        $uid = $report->id;
        $supdocs = Supdocs::orderBy('id', 'desc')->where('uid', '=', $uid)->get();
        $email = $report->staff;
        $staff = Auth()->user()->email;
        if($staff==$email)
        {
            return view('report.edit', ['report' => $report], ['supdocs' => $supdocs]);
        }

        abort(401);
    }

    public function storesupdoc(Request $request){       

        $request->validate([
            'file' => 'required',
            'staff' => 'required',
            'uid' => 'required',
        ]);
        
        $staff = $request->input('staff');
        $uid = $request->input('uid');
        $report = Reports::orderBy('id', 'desc')->where('id', '=', $uid)->get();

            if($request)
            {
            $allowedfileExtension=['pdf','jpg','png','docx', 'txt', 'mov'];
            $file = $request->file('file');
            $filename = time().'_'.$request->file->getClientOriginalName();
            $extension = $request->file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            //dd($check);
            if($check)
            {
            $request->file->storeAs('./public/supdocs', $filename);
            $user = DB::table('supdocs')->insert([
                'uid' => $uid,
                'staff' => $staff,
                'filename' => $filename,
                'created_at' => Now(),
                'updated_at' => Now(),
            ]); 
    
                        
        }
        $report = Reports::orderBy('id', 'desc')->where('id', '=', $uid)->get();

       return redirect()->back()->with('success', 'File uploaded successfully!');

}
else
{
return redirect(route('report.edit'))->with('error', 'File upload failed!');
}
}

public function update(Request $request)
{
 $update = $request->validate([
   			'branch' => 'nullable',
            'date' => 'nullable',
            'time' => 'nullable',
            'staff' => 'nullable',
            'header' => 'nullable',
            'nature' => 'nullable',
            'offender' => 'nullable',
            'offender_age' => 'nullable',
            'offender_phone' => 'nullable',
            'offender_lib' => 'nullable',
            'offender_address' => 'nullable',
            'offender_city' => 'nullable',
            'offender_state' => 'nullable',
            'offender_zip' => 'nullable',
            'description' => 'nullable',
            'victim' => 'nullable',
            'victim_age' => 'nullable',
            'victim_phone' => 'nullable',
            'victim_lib' => 'nullable',
            'victim_address' => 'nullable',
            'victim_city' => 'nullable',
            'victim_state' => 'nullable',
            'victim_zip' => 'nullable',
            'action' => 'nullable',
            'witness' => 'nullable',
            'witness_two' => 'nullable',
            'witness_three' => 'nullable',
]);

$id = $request->input('id');

$push = Reports::where('id', $id)->update($update);

    return redirect()->back()->with('success','incident updated!');
}

public function search(Request $request)
{
    $search = $request->input('search');

    $topic = $request->input('subject');

  
    $reports = Reports::orderBy('id', 'desc')->where($topic, '=', $search)->get();
                  
    return view('report.view')->with(['reports' => $reports]); 
}


}



