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
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class AdminController extends Controller
{

public function view(){
    $reports = Reports::orderBy('id', 'desc')->get();

    return view('report.view')->with(['reports' => $reports]);        
}
	
public function viewuser(){
    $users = User::orderBy('id', 'desc')->get();

    return view('admin.viewuser')->with(['users' => $users]);        
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect(route('dashboard', absolute: false));
    }
}








