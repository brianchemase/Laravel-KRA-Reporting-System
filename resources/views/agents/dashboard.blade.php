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
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
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
                    <h1 class="title-4">loged in as
                        <span>{{$username}}</span>
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

     <!-- STATISTIC-->
     <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-2">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number"><?php echo $tally;?></h2>
                        <span class="desc">Clients Tally Today</span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number"><?php echo $jana;?></h2>
                        <span class="desc">Yesterday Served</span>
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number"><?php echo $weekly;?></h2>
                        <span class="desc">this week</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number"><?php echo $thismonth;?></h2>
                        <span class="desc">this Month</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number"><?php echo $lastmonth;?></h2>
                        <span class="desc">Last month</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number"><?php echo $yearly;?></h2>
                        <span class="desc">Total Annual Serviced</span>
                        <div class="icon">
                            <i class="zmdi zmdi-receipt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->


    <!-- STATISTIC CHART-->
    <section class="statistic-chart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">statistics</h3>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6 col-lg-6">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">top serving Officers</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                    <tbody>
                                            
                                        <tr>
                                            <td>1</td>
                                            <td>Brian Chemase</td>
                                            <td>ELDORET</td>
                                            <td>10</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Emmanuel Kelwon</td>
                                            <td>Eldoret</td>
                                            <td>5</td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>3</td>
                                            <td>Evance Amondo</td>
                                            <td>Eldoret</td>
                                            <td>4</td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>4</td>
                                            <td>Service officer</td>
                                            <td>Eldoret</td>
                                            <td>1</td>
                                        </tr>
                                        
                                                                                </tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TOP CAMPAIGN-->
                </div>
              
                <div class="col-md-6 col-lg-6">
                    <!-- CHART PERCENT-->
                 
                    <!-- END CHART PERCENT-->
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC CHART-->




 




@endsection