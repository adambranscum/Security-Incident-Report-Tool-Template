<x-app-layout>
    <div class="p-4">
    <div class="container shadow mt-5 mb-5 bg-light">
    <h2 class="text-form-blue fw-bolder text-center display-5 mb-4">Security Incident Reports</h2>
                                    <div class="row text-center mt-4 text-form-blue">
                                    <div class="border-end col-3 border-bottom"><b>Staff/Branch/Date</b></div>                         
                                    <div class="border-end col-2 border-bottom"><b>Offender</b></div>
                                    <div class="border-end col-2 border-bottom"><b>Victim</b></div>
                                    <div class="border-end col-4 border-bottom"><b>Header</b></div>
                                    <div class="border-end col-1 border-bottom"><b></b></div>
                                    </div>
                                    @foreach($reports as $report)
                                    <div class='row text-center'>
                                    <div class='border col-3  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto small'>{{$report->staff}}<br>{{$report->branch}}<br>{{$report->date}}</p></div>                         
                                    <div class='border col-2 border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto small'>{{$report->offender}}</p></div>
                                    <div class='border col-2  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto small'>{{$report->victim}}</p></div>
                                    <div class='border col-4  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto text-wrap small'>{{$report->header}}</p></div>
                                    <div class='border col-1  border-1 d-flex'><p class='text-form-blue mt-auto mb-auto ms-auto me-auto small'><a class="btn hvr-grow bg-form-blue text-white dropshadow" href="{{route('report.details', ['report' => $report])}}">view</a></p></div>
                                </div>
                              @endforeach
                                    
                                    
                           
                        
                     
                      
         </div>
        </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
      </x-app-layout>