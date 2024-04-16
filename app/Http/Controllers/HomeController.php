<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reports;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id())
        {
          $usertype=Auth()->user()->usertype;
  
          if($usertype=='user')
          {
              $recents = Reports::orderBy('id', 'desc')->take(5)->get();
  
              return view('dashboard')->with(['recents' => $recents]);
          }

          else if($usertype=='admin')
          {
              $recents = Reports::orderBy('id', 'desc')->take(5)->get();

              return view('admin.home')->with(['recents' => $recents]);
          }
          else
          {
              return redirect()->back();
          }
        }
  
      }
}
