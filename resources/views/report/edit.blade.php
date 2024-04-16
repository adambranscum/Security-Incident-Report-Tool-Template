<x-app-layout>
    <div class="container mt-4 mb-5 shadow bg-white">  
        <a class="btn border border-dark bg-form-blue hvr-grow dropshadow text-white mt-3" href="{{route('report.myreports')}}" type="button">Back</a>
        <form class="p-5 mt-4 mb-5" action="{{route('report.update', ['report' => $report])}}}" method="post">
            @csrf 
            @method('PUT') 

            <h1 class="text-center text-form-blue fw-bolder display-3 mt-4 mb-4">Update Incident Report</h1>
            <div class="mb-4 d-flex">
                @if($errors->any())
                <ul class="ms-auto me-auto">
                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                </ul>
            
            
                @endif
            </div>
            <div class="mb-4 d-flex">
                @if(session()->has('success'))
                    <div class="text-success ms-auto me-auto">
                        {{session('success')}}
                    </div>
                @endif
            </div>
            
                                <div class="row">
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                    <label for="branch" class="form-label text-form-blue fw-bolder">Branch Location:</label>
                                    <input type="hidden" name="staff" id="staff" value="{{$report->staff}}" class="form-control" placeholder="" >
                                    <input type="hidden" name="id" id="id" value="{{$report->id}}" class="form-control" placeholder="" >
                                    <input type="text" name="branch" id="branch" value="{{$report->branch}}" class="form-control" placeholder="" >                                     
                                  </div>	
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-4">
                                  <label for="staff name" class="form-label text-form-blue fw-bolder">Date:</label>
                                  <input type="date" name="date" value="{{$report->date}}" id="date" class="form-control" placeholder="" >                                 
                                  </div>	

                                <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Time" class="form-label text-form-blue fw-bolder">Time:</label>
                                      <input type="time" name="time" value="{{$report->time}}" id="time" class="form-control" placeholder="" >
                                                                    
                                  </div>
          </div>
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Nature of Incident</h2>
        <div class="mb-3 col-12 col-md-12 col-lg-12">
                                      <label for="Header" class="form-label text-form-blue fw-bolder">Summary:</label>
                                      <input type="text" name="header" value="{{$report->header}}" id="header" class="form-control" placeholder="" >         
                                  </div>
          <div class="row border-bottom pt-4 pb-4">
            <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Nature</h2>
            <textarea type="text" name="nature" id="nature" rows="10" class="form-control">{{$report->nature}}</textarea> 
                                  
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Offender</h2>
          <div class="row border-bottom">
                                   
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="Instagram Impressions" class="form-label text-form-blue fw-bolder">Name:</label>
                                      <input type="text" value="{{$report->offender}}" name="offender" id="offender" class="form-control" placeholder="" >
                                                                     
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Offender Age" class="form-label text-form-blue fw-bolder">Age:</label>
                                      <input type="text" name="offender_age" value="{{$report->offender_age}}" id="offender_age" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Libcard" class="form-label text-form-blue fw-bolder">Library Card:</label>
                                      <input type="text" name="offender_lib" id="offender_lib" value="{{$report->offender_lib}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_phone" class="form-label text-form-blue fw-bolder">Phone Number:</label>
                                      <input type="phone" name="offender_phone" id="offender_phone" value="{{$report->offender_phone}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="offender_address" class="form-label text-form-blue fw-bolder">Address:</label>
                                      <input type="text" name="offender_address" id="offender_address" value="{{$report->offender_address}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_city" class="form-label text-form-blue fw-bolder">City:</label>
                                      <input type="text" name="offender_city" id="offender_city" value="{{$report->offender_city}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_state" class="form-label text-form-blue fw-bolder">State:</label>
                                      <input type="text" name="offender_state" id="offender_state" value="{{$report->offender_state}}" class="form-control" placeholder="" >
                                 
                                  </div>
                             <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_zip" class="form-label text-form-blue fw-bolder">Zip:</label>
                                      <input type="text" name="offender_zip" id="offender_zip" value="{{$report->offender_zip}}" class="form-control" placeholder="" >
                                 
                                  </div>
                                  <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Description</h2>
                                  <textarea type="text" name="description" id="description" rows="10" class="form-control">{{$report->description}}</textarea> 
                          
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Affected Patron</h2>
          <div class="row border-bottom">
                                   
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="Instagram Impressions" class="form-label text-form-blue fw-bolder">Name:</label>
                                      <input type="text" name="victim" id="victim" value="{{$report->victim}}" class="form-control" placeholder="" >
                                                                     
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim Age" class="form-label text-form-blue fw-bolder">Age:</label>
                                      <input type="text" name="victim_age" id="victim_age" value="{{$report->victim_age}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Libcard" class="form-label text-form-blue fw-bolder">Library Card:</label>
                                      <input type="text" name="victim_lib" id="victim_lib" value="{{$report->victim_lib}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_phone" class="form-label text-form-blue fw-bolder">Phone Number:</label>
                                      <input type="phone" name="victim_phone" id="victim_phone" value="{{$report->phone}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="victim_address" class="form-label text-form-blue fw-bolder">Address:</label>
                                      <input type="text" name="victim_address" id="victim_address" value="{{$report->victim_address}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_city" class="form-label text-form-blue fw-bolder">City:</label>
                                      <input type="text" name="victim_city" id="victim_city" value="{{$report->victim_city}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_state" class="form-label text-form-blue fw-bolder">State:</label>
                                      <input type="text" name="victim_state" id="victim_state" value="{{$report->victim_state}}" class="form-control" placeholder="" >
                                 
                                  </div>
                             <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_zip" class="form-label text-form-blue fw-bolder">Zip:</label>
                                      <input type="text" name="victim_zip" id="victim_zip" value="{{$report->victim_zip}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Action Taken</h2>
          <div class="row border-bottom">                       
            <textarea type="text" name="action" id="action" rows="10" class="form-control col-12" placeholder="Describe the action...">{{$report->action}}</textarea> 		
          </div>
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Witness</h2>
          <div class="row border-bottom">
                                   
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_one" id="witness" value="{{$report->witness}}" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_two" value="{{$report->witness_two}}" id="witness" class="form-control" placeholder="" >
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_three" value="{{$report->witness_three}}" id="witness" class="form-control" placeholder="" >
                                 
                                  </div>
                                </div>
                                <div class="form-group col-12 col-lg-12 text-form-blue pb-5">
                                    <input class="btn btn-success mt-4 float-end  dropshadow" type="submit" name="submit" value="Update">
                                    </div>
                               
                                  </form>

                                  <h1 class="text-center text-form-blue fw-bolder display-5 mt-4 mb-4">Supporting Document</h1>
                                  <div class="d-flex">
                                    <form class="ms-auto me-auto border p-4 mb-4" action="{{route('report.storesupdoc', ['report' => $report])}}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                    @method('post') 
                                    <h1 class="text-center text-form-blue mb-4 fw-bolder">Upload Supporting documentation</h1>
                                    <input type="file" name="file" id="filename" class="form-control" placeholder="" >   
                                    <input type="hidden" name="uid" id="uid" value="{{$report->id}}" class="form-control" placeholder="" >
                                    <input type="hidden" name="staff" id="staff" value="{{$report->staff}}" class="form-control" placeholder="" >
                                    <input class="btn btn-success mt-4 float-end  dropshadow" type="submit" name="submit" value="Submit">
                                    </form>    
                                  </div>
                                  <div class="d-flex">
                                  <div class="ms-auto me-auto border p-4 mb-5">
                                  @foreach($supdocs as $supdoc)
                                  <li class="mb-4"><a class="text-center text-form-blue h5" href="/storage/supdocs/{{$supdoc->filename}}">{{$supdoc->filename}}</a></li>
                                  @endforeach
                                  </div>
                                </div>
                                </div> 
                            </div>

    </div>
    </x-app-layout>
    