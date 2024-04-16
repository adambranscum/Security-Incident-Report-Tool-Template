<x-app-layout>
    <div class="container mt-4 mb-5 shadow bg-white">  
       <h1 class=" p-4 text-form-blue text-center mt-5 display-2 fw-bolder">Welcome {{ Auth::user()->name}}!</h1>
       <div class="row ms-auto me-auto container">  
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-4">
       <div class="row">
       <div class="col-12 col-md-12 col-lg-12 text-form-blue">
             <form class="p-5" method="post" action="{{route('report.search')}}" method="post" >
                @csrf 
                @method('post')                            
             <h1 class="text-form-blue text-center fw-bolder display-5 mb-3">Search Reports</h1>
             <div class="d-flex">       
            <input class="form-control dropshadow" type="search" name="search" placeholder="Search" aria-label="Search">
            <select class="form-select w-25 dropshadow" name="subject" required>
             <option value="header">Topic</option>
             <option value="offender">Offending Patron</option>
             <option value="staff">Staff</option>
             <option value="victim">Victim</option>
             </select>
              
             <button class="btn bg-form-blue text-white dropshadow hvr-grow" type="submit">Search</button>
             </div>
           </form>	
           </div>
       <div class="col-12 col-md-12 col-lg-6 mt-4">
       <div class="p-4">
       <h3 class="text-form-blue fw-bolder text-center display-5">Quick Actions</h3>
       <div class="list-group">
       <a href="{{route('report.create')}}" class="list-group-item list-group-item-action hvr-grow text-form-blue border border text-center">Enter a Incident</a>
       <a href="{{route('admin.view')}}" class="list-group-item list-group-item-action hvr-grow text-form-blue border border text-center">View</a>
       <a href="{{route('report.myreports')}}" class="list-group-item list-group-item-action hvr-grow text-form-blue border border text-center">My Reports</a>
       <a href="{{route('admin.register')}}" class="list-group-item list-group-item-action hvr-grow text-form-blue border border text-center">Register New User</a>
       <a href="{{route('admin.viewusers')}}" class="list-group-item list-group-item-action hvr-grow text-form-blue border border text-center">Edit Users</a>
     </div>
     </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
            <div class="p-4">
            <h1 class="display-5 text-form-blue fw-bolder text-center">Recent Reports</h1>
            <div class="list-group text-center">
                @foreach($recents as $recent)
                <a href="{{route('report.details', ['report' => $recent])}}" class="list-group-item list-group-item-action">{{$recent->header}}</a>
                 @endforeach
              </div>
             </div>
                    </div>
                
                   
           </div> 
           
          </div>
         </div>
    </x-app-layout>
    