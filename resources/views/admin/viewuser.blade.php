<x-app-layout>
    <div class="p-4">
    <div class="container shadow mt-5 mb-5 bg-light">
    <h2 class="text-form-blue fw-bolder text-center display-5 mb-4">User Accounts</h2>
                                    <div class="row text-center mt-4 text-form-blue">
                                    <div class="border-end col-3 border-bottom"><b>Display Name</b></div>                         
                                    <div class="border-end col-3 border-bottom"><b>Email</b></div>
                                    <div class="border-end col-3 border-bottom"><b>Created On</b></div>
                                    <div class="border-end col-2 border-bottom"><b>User Type</b></div>
                                    <div class="border-end col-1 border-bottom"><b></b></div>
                                    </div>
                                    @foreach($users as $user)
                                    <div class='row text-center'>
                                    <div class='border col-3 border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto small'>{{$user->name}}</p></div>
                                    <div class='border col-3  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto small'>{{$user->email}}</p></div>
                                    <div class='border col-3  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto text-wrap small'>{{$user->created_at}}</p></div>
                                    <div class='border col-2  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto text-wrap small'>{{$user->usertype}}</p></div>
                                    <div class='border col-1  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto small'></div>
                                    
                                </div>
                              @endforeach
                                    
                                    
                           
                        
                     
                      
         </div>
        </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
      </x-app-layout>