<x-app-layout>
    <div class="container mt-4 mb-5 shadow bg-white">  
        <form class="p-5 mt-4 mb-5" action="{{route('report.store')}}" method="post">
            @csrf 
            @method('post') 

            <h1 class="text-center text-form-blue fw-bolder display-3 mt-4 mb-4">Incident Report Form</h1>
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
            <p class="mb-4 text-form-blue body-font">This form is to be used by staff to record information about problem or unusual incidents in the library or
      on library grounds. Types of problem incidents may include cases of intentionally excessive noise or raucous
      behavior, loitering, public intoxication, sexually related overtures, vandalism, fires, theft, physical violence or the
      threat of physical violence or any other disturbances. Unusual incidents may include accidents or illness,
      police or fire department activities, bomb threats, car accidents or towing. Fill in as much of the form as
      appropriate.</p>
                                
                                  <div class="row">
                         
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                    <label for="branch" class="form-label text-form-blue fw-bolder">Branch Location:</label>
                                    <input type="hidden" name="staff" id="staff" value="{{ Auth::user()->email}}" class="form-control" placeholder="" Required>
                                    <select class="form-select" name="branch" required>
                                    <option selected></option>
                                    <option value="Laman">Laman Branch</option>
                                    <option value="Argenta">Argenta Branch</option>
                                    <option value="Rover">Rover Branch</option>
                                    </select>
                                     
                                  </div>	
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-4">
                                  <label for="staff name" class="form-label text-form-blue fw-bolder">Date:</label>
                                  <input type="date" name="date" id="date" class="form-control" placeholder="" Required>
                                 
                              </div>	
                                <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Time" class="form-label text-form-blue fw-bolder">Time:</label>
                                      <input type="time" name="time" id="time" class="form-control" placeholder="">
                                                                    
                                  </div>
          </div>
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Nature of Incident</h2>
        <div class="mb-3 col-12 col-md-12 col-lg-12">
                                      <label for="Header" class="form-label text-form-blue fw-bolder">Summary:</label>
                                      <input type="text" name="header" id="header" class="form-control" placeholder="">
                                      <input type="hidden" name="uid" id="uid" class="form-control" value="' . $_SESSION['users'] . '">             
                                  </div>
          <div class="row border-bottom pt-4 pb-4">
                      <textarea type="text" name="nature" id="nature" rows="10" class="form-control" placeholder="Insert text here..."></textarea> 
                                  
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Offender</h2>
          <div class="row border-bottom">
                                   
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="Instagram Impressions" class="form-label text-form-blue fw-bolder">Name:</label>
                                      <input type="text" name="offender" id="offender" class="form-control" placeholder="">
                                                                     
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Offender Age" class="form-label text-form-blue fw-bolder">Age:</label>
                                      <input type="text" name="offender_age" id="offender_age" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Libcard" class="form-label text-form-blue fw-bolder">Library Card:</label>
                                      <input type="text" name="offender_lib" id="offender_lib" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_phone" class="form-label text-form-blue fw-bolder">Phone Number:</label>
                                      <input type="phone" name="offender_phone" id="offender_phone" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="offender_address" class="form-label text-form-blue fw-bolder">Address:</label>
                                      <input type="text" name="offender_address" id="offender_address" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_city" class="form-label text-form-blue fw-bolder">City:</label>
                                      <input type="text" name="offender_city" id="offender_city" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_state" class="form-label text-form-blue fw-bolder">State:</label>
                                      <input type="text" name="offender_state" id="offender_state" class="form-control" placeholder="">
                                 
                                  </div>
                             <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="offender_zip" class="form-label text-form-blue fw-bolder">Zip:</label>
                                      <input type="text" name="offender_zip" id="offender_zip" class="form-control" placeholder="">
                                 
                                  </div>
                          <textarea type="text" name="description" id="description" rows="10" class="form-control col-12" placeholder="Description of person..."></textarea> 
                          
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Affected Patron</h2>
          <div class="row border-bottom">
                                   
                                  
                                  <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="Instagram Impressions" class="form-label text-form-blue fw-bolder">Name:</label>
                                      <input type="text" name="victim" id="victim" class="form-control" placeholder="">
                                                                     
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim Age" class="form-label text-form-blue fw-bolder">Age:</label>
                                      <input type="text" name="victim_age" id="victim_age" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="Libcard" class="form-label text-form-blue fw-bolder">Library Card:</label>
                                      <input type="text" name="victim_lib" id="victim_lib" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_phone" class="form-label text-form-blue fw-bolder">Phone Number:</label>
                                      <input type="phone" name="victim_phone" id="victim_phone" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-6">
                                      <label for="victim_address" class="form-label text-form-blue fw-bolder">Address:</label>
                                      <input type="text" name="victim_address" id="victim_address" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_city" class="form-label text-form-blue fw-bolder">City:</label>
                                      <input type="text" name="victim_city" id="victim_city" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_state" class="form-label text-form-blue fw-bolder">State:</label>
                                      <input type="text" name="victim_state" id="victim_state" class="form-control" placeholder="">
                                 
                                  </div>
                             <div class="mb-3 col-12 col-md-12 col-lg-2">
                                      <label for="victim_zip" class="form-label text-form-blue fw-bolder">Zip:</label>
                                      <input type="text" name="victim_zip" id="victim_zip" class="form-control" placeholder="">
                                 
                                  </div>
                          
          </div> 
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Action Taken</h2>
          <div class="row border-bottom">
                                   
                              <textarea type="text" name="action" id="action" rows="10" class="form-control col-12" placeholder="Describe the action..."></textarea> 	
          </div>
          <h2 class="text-center border-bottom mt-4 pb-2 text-form-blue fw-bolder">Witness</h2>
          <div class="row border-bottom">
                                   
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness" id="witness" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_two" id="witness" class="form-control" placeholder="">
                                 
                                  </div>
                          <div class="mb-3 col-12 col-md-12 col-lg-3">
                                      <label for="witness" class="form-label text-form-blue fw-bolder">Witness:</label>
                                      <input type="text" name="witness_three" id="witness" class="form-control" placeholder="">
                                 
                                  </div>
                                  <div class="form-group col-12 col-lg-12 text-form-blue">
                                    <input class="btn btn-success mt-4 float-end  dropshadow" type="submit" name="submit" value="Submit">
                                    </div>
                                  </div>
                                  </form>



    </div>
    </x-app-layout>
    