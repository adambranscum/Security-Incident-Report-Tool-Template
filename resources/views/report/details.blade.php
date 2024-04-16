<x-app-layout>
    <div class="container mt-4 mb-5 shadow bg-white">  
        <a class="btn border border-dark bg-form-blue hvr-grow dropshadow text-white mt-3" onclick="history.back()" type="button">Back</a>
        <form class="p-5 mt-4 mb-5" action="{{route('report.store')}}" method="post">
            @csrf 
            @method('post') 

            <h1 class="text-center text-form-blue fw-bolder display-3 mt-4 mb-4">Incident Report</h1>
            
                                  <div class="row">
                                    <div class="mb-3 col-12 col-md-12 col-lg-6">
                                        <label for="branch" class="form-label text-form-blue fw-bolder">Staff Member:</label>
                                        <input type="text" name="staff" id="staff" value="{{$report->staff}}" class="form-control" placeholder="" Readonly>
                                    </div>
                                </div>

                                <div class="row">

                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                    <label for="branch" class="form-label text-form-blue fw-bolder">Branch Location:</label>
                                    <input type="text" name="staff" id="staff" value="{{$report->branch}}" class="form-control" placeholder="" Readonly>                                     
                                  </div>	
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-4">
                                  <label for="staff name" class="form-label text-form-blue fw-bolder">Date:</label>
                                  <input type="date" name="date" value="{{$report->date}}" id="date" class="form-control" placeholder="" Readonly>
                                 
                              </div>	
                                <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Time" class="form-label text-form-blue fw-bolder">Time:</label>
                                      <input type="time" name="time" value="{{$report->time}}" id="time" class="form-control" placeholder="" Readonly>
                                                                    
                                  </div>
          </div>
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Nature of Incident</h2>
        <div class="mb-3 col-12 col-md-12 col-lg-12">
                                      <label for="Header" class="form-label text-form-blue fw-bolder">Summary:</label>
                                      <input type="text" name="header" value="{{$report->header}}" id="header" class="form-control" placeholder="" Readonly>         
                                  </div>
          <div class="row border-bottom pt-4 pb-4">
                      <div class="w-100 border border-dark"><p class="p-3">{{$report->nature}}</p></div> 
                                  
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Offender</h2>
          <div class="row border-bottom">
                                   
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="Instagram Impressions" class="form-label text-form-blue fw-bolder">Name:</label>
                                      <input type="text" value="{{$report->offender}}" name="offender" id="offender" class="form-control" placeholder="" Readonly>
                                                                     
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Offender Age" class="form-label text-form-blue fw-bolder">Age:</label>
                                      <input type="text" name="offender_age" value="{{$report->offender_age}}" id="offender_age" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Libcard" class="form-label text-form-blue fw-bolder">Library Card:</label>
                                      <input type="text" name="offender_lib" id="offender_lib" value="{{$report->offender_lib}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_phone" class="form-label text-form-blue fw-bolder">Phone Number:</label>
                                      <input type="phone" name="offender_phone" id="offender_phone" value="{{$report->offender_phone}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="offender_address" class="form-label text-form-blue fw-bolder">Address:</label>
                                      <input type="text" name="offender_address" id="offender_address" value="{{$report->offender_address}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_city" class="form-label text-form-blue fw-bolder">City:</label>
                                      <input type="text" name="offender_city" id="offender_city" value="{{$report->offender_city}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_state" class="form-label text-form-blue fw-bolder">State:</label>
                                      <input type="text" name="offender_state" id="offender_state" value="{{$report->offender_state}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                             <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_zip" class="form-label text-form-blue fw-bolder">Zip:</label>
                                      <input type="text" name="offender_zip" id="offender_zip" value="{{$report->offender_zip}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                                  <div class="w-100 border border-dark"><p class="p-3">{{$report->description}}</p></div>  
                          
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Affected Patron</h2>
          <div class="row border-bottom">
                                   
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="Instagram Impressions" class="form-label text-form-blue fw-bolder">Name:</label>
                                      <input type="text" name="victim" id="victim" value="{{$report->victim}}" class="form-control" placeholder="" Readonly>
                                                                     
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim Age" class="form-label text-form-blue fw-bolder">Age:</label>
                                      <input type="text" name="victim_age" id="victim_age" value="{{$report->victim_age}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Libcard" class="form-label text-form-blue fw-bolder">Library Card:</label>
                                      <input type="text" name="victim_lib" id="victim_lib" value="{{$report->victim_lib}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_phone" class="form-label text-form-blue fw-bolder">Phone Number:</label>
                                      <input type="phone" name="victim_phone" id="victim_phone" value="{{$report->phone}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="victim_address" class="form-label text-form-blue fw-bolder">Address:</label>
                                      <input type="text" name="victim_address" id="victim_address" value="{{$report->victim_address}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_city" class="form-label text-form-blue fw-bolder">City:</label>
                                      <input type="text" name="victim_city" id="victim_city" value="{{$report->victim_city}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_state" class="form-label text-form-blue fw-bolder">State:</label>
                                      <input type="text" name="victim_state" id="victim_state" value="{{$report->victim_state}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                             <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_zip" class="form-label text-form-blue fw-bolder">Zip:</label>
                                      <input type="text" name="victim_zip" id="victim_zip" value="{{$report->victim_zip}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Action Taken</h2>
          <div class="row border-bottom">
                                   
            <div class="w-100 border border-dark"><p class="p-3">{{$report->action}}</p></div>  	
          </div>
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Witness</h2>
          <div class="row border-bottom">
                                   
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_one" id="witness" value="{{$report->witness}}" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_two" value="{{$report->witness_two}}" id="witness" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_three" value="{{$report->witness_three}}" id="witness" class="form-control" placeholder="" Readonly>
                                 
                                  </div>
                                </div>
                                  </div>
                                  </form>



    </div>
    </x-app-layout>
    