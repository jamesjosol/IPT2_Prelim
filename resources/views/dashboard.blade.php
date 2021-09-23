@extends('base')

@section('content')
    <h1 class="font-weight-light text-white"><i class="fas fa-th-large"></i> Dashboard</h1>
    <div class="container bg-white p-3 rounded dashcon">
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                        <div class="circle-tile-content dark-blue">
                            <div class="circle-tile-description text-faded"> Users</div>
                            <div class="circle-tile-number text-faded ">265</div>
                            <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                        <a href="#"><div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                        <div class="circle-tile-content red">
                            <div class="circle-tile-description text-faded"> Users Online </div>
                            <div class="circle-tile-number text-faded ">10</div>
                            <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                    <a href="#"><div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded"> Admin </div>
                        <div class="circle-tile-number text-faded ">2</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                    <a href="#"><div class="circle-tile-heading purple"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                    <div class="circle-tile-content purple">
                        <div class="circle-tile-description text-faded"> Manager </div>
                        <div class="circle-tile-number text-faded ">10</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                    </div>
                </div> 
            </div> 
            
        </div>  
    </div>
@endsection