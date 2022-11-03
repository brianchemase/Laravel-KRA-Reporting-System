@extends('layouts.inc.master')

@section('title','Dashboard')

@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="home.php">Dashboard</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Service Report Form</li>
                            </ul>
                        </div>
                        <form class="au-form-icon--sm" action="" method="post">
                            <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-2">Station: 
                        <span>{{$station}}</span> {{$username}} 
                        
                    </h5>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

            <section class="statistic statistic2">
                <div class="container">
                <div class="col-md-12">
        <div class="form-group">
            <div id="formprocessing" name="formprocessing" style="color:green; font-style: italic;" size="250" ></div>
            <div id="error" name="error" style="color:red; font-style: italic;" size="250" ></div>
          </div>
          @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <form method="POST" action="{{url('storecomplain')}}" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-3 pr-1">
                   
                    <div class="form-group">
                        <label>Taxpayer Pin</label>
                       
                        <input type="hidden" name="officer" value="<?php echo $username;?>">
                        <input type="hidden" name="region" value="North Rift">
                        <input type="hidden" name="station" value="<?php echo $station;?>">
                        <input type="hidden" name="date" value="<?php date_default_timezone_set('Africa/Nairobi'); echo $date = date('Y-m-d h:i:s');;?>">
                        <input type="hidden" name="emailchange" value="no">
                        <input type="hidden" name="workstation" value="Nandi Huduma Centre">
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="pin"
                         onchange="validatepin(pin.value);" class="form-control" id="pin" placeholder="Enter KRA Pin" required>
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Complainant</label>
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="taxpayername"
                            class="form-control" id="taxpayername" placeholder="Enter Taxpayer Names" required>
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Task No</label>
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="taskno"
                            class="form-control" placeholder="Enter Task Number" maxlength='15' required>
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Complain Registered By</label>
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();"
                            class="form-control" id="officer" placeholder="Enter Officer Names" value="<?php echo $username;?>" readonly>
                    </div>
                </div>
                <div class="col-md-8 pr-1">
                    <div class="form-group">
                        <label>Task</label>
                        <textarea class="form-control" id="task" name="task" rows="4" cols="150" placeholder="Enter Taxpayer Email" required></textarea>
                       
                    </div>
                </div>
                <br>
               

            </div>



            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Actions</label><br>
                <button type="reset" class="btn btn-warning btn-lg"><i class="fa fa-refresh fa-spin"></i> Clear</button>
                <button name="save"  class="btn btn-success btn-lg"></span><i class="fa fa-save"></i> Save</button>
								
                    </div>
                </div>
            </div>
            <hr>
        </form>
    </div>
                
                </div>
            </section>

</div>

@endsection