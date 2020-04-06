@extends('inc.main')
@section('title-styles')
  <title>Wines Administration</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('/dash/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/dash/css/sb-admin-2.min.css')}}" rel="stylesheet">
@endsection
@section('content')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard main</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Pendientee</a>
          </div>
        @yield('inc.graphs')

          <!-- Wines Form Row -->            
              <div class="card shadow mb-4 row">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New Wine For Sale</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Inspectionate:</div>
                      <a class="dropdown-item" href="#"><i class="fas fa-wine-bottle">See all Wines </i></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <p class="text-center font-italic font-weight-bolder text-dark h4">First things First <i class="fas fa-wine-glass-alt"></i></p>
                  <hr>
                  <form action="{{route('admin.store')}}" method="POST" id="specificationForm">
                    @csrf <!--token that identyfies the petition for laravel-->
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input name="name" type="text"
                              class="form-control form-control" name="" id="" aria-describedby="helpId" placeholder="Cabernet Sauvignon... example">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-success">$</span>
                          </div>
                          <input name="cost" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="1000000">
                        </div>
                      </div>                    
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input name="reference" type="text"
                              class="form-control form-control" name="" id="" aria-describedby="helpId" placeholder="Reference, example: "
                              data-toggle="tooltip" data-placement="bottom" title="Text for futures searches">
                        </div>                      
                      </div>
                    </div> 
                    <hr>
                    <p class="text-center font-italic font-weight-bolder text-dark h5">Specify a bit more... <i class="fas fa-clipboard-list    "></i></i></p>                
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input name="region" type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="Region.. (Mexico, Italy, France...)">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input name="brand" type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="Brand.. (Robert Mondavi...)">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <select name="color" class="custom-select" id="wcolor">
                            <option selected>Wine color...</option>
                            <option value="Red Wine">Red Wine</option>
                            <option value="Pink Wine">Pink Wine</option>
                            <option value="White Wine">White Wine</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <select name="age" class="custom-select" id="wage">
                            <option selected>Wine age...</option>
                            <option value="probandoo">probandoo</option>                        
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <select name="sugar" class="custom-select" id="wcolor">
                            <option selected >Wine sugar</option>
                            <option value="Red Wine">Red Wine</option>
                            <option value="Pink Wine">Pink Wine</option>
                            <option value="White Wine">White Wine</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group">
                          <input name="alevel" type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"placeholder=" Alcohol level : 8, 9.5, 11, etc..">
                          <div class="input-group-append">
                            <span class="input-group-text bg-success">°</span>
                          </div>
                        </div>
                      </div>                    
                    </div>                  
                    <div class="row  mt-sm-3 mt-lg-0">
                      <div class="col">
                        <div class="input-group mb-3">                        
                          <div class="custom-file">
                            <input name="img" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>                  
                    <hr>
                    <input type="submit" class="btn btn-outline-primary" value="Save">
                  </form>
                </div>
              </div>
@endsection
@section('scripts')
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/dash/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('/dash/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('/dash/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('/dash/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('/dash/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('/dash/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{ asset('/dash/js/demo/chart-pie-demo.js')}}"></script>
@endsection