@extends('layouts.inc.master')

@section('title','KRA Reporting System')

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
                <script> swal("No Entry Fount!", "Invalid pin!", "error");</script>
                
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
        <form method="POST" action="{{url('storeservice')}}" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-3 pr-1">
                   
                    <div class="form-group">
                        <label>Taxpayer Pin</label>
                       
                        <input type="hidden" name="officer" value="{{$username}}">
                        <input type="hidden" name="region" value="North Rift">
                        <input type="hidden" name="station" value="{{$station}}">
                        <input type="hidden" name="phoneupdate" value="no">
                        <input type="hidden" name="emailchange" value="no">
                        <input type="hidden" name="workstation" value="Nandi Huduma Centre">
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="pin"
                         onchange="validatepin(pin.value);" class="form-control" id="pin" placeholder="Enter KRA Pin" required>
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Taxpayer Name</label>
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="taxpayername"
                            class="form-control" id="taxpayername" placeholder="Enter Taxpayer Names" required>
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Taxpayer's Telephone</label>
                        <input type="text" name="phone" onkeyup="this.value = this.value.toUpperCase();"
                            class="form-control" id="phone" placeholder="Enter Taxpayer Mobile number" required>
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Taxpayer's Email</label>
                        <input type="text" name="email" onkeyup="this.value = this.value.toUpperCase();"
                            class="form-control" id="email" placeholder="Enter Taxpayer Email" required>
                    </div>
                </div>
                <br>
                <!--<div class="col-md-2 pr-1">
                    <div class="form-group">
                        <label>Changed Phone</label>
                        <select name="phoneupdate" id="phoneupdate" class="form-control">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 pr-1">
                    <div class="form-group">
                        <label>Changed Email</label>
                        <select name="emailchange" id="emailchange" class="form-control">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                    </div>
                </div>-->

                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Resolved</label>
                        <select name="resolved" id="resolved" class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label>Service Category</label>
                        <select name="options" id="options" class="form-control" required>
                            <option value="" disabled selected>Select a service</option>
							<option value="Registration">	DTD PIN REGISTRATION</option>
							<option value="Amendment">		DTD PIN AMENDMENT</option>
							<option value="Updates">		DTD iPAGE UPDATE</option>
							<option value="Filing">			DTD FILING</option>
							<option value="Payment">		DTD PAYMENT</option>
							<option value="TCC">			DTD TCC</option>
							<option value="Enqueries">		DTD GENERAL ENQUIRIES</option>
							<option value="Tickets">		DTD OS TICKETS</option>
							<option value="Documenting">	DTD DOCUMENT DELIVERY</option>
							<option value="Password">		DTD PASSWORD</option>
							<option value="Others">			DTD OTHER SERVICES</option>
							<option value="Customs">		CUSTOMS</option>
                        </select>


                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label>Specific Service</label>
                        <select name="choices" id="choices"  class="form-control" required>
                            <option value="" disabled selected>Please select a service</option>
						</select>


                    </div>
                </div>
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
<script>
    @if($message = Session::get('success'))
    
    swal("{{ $message }}");
    @endif
    </script>

@endsection