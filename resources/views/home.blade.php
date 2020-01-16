<!DOCTYPE html>
<html lang="en">

@extends('header')

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part">
                <!--<a class="logo" href="home.blade.php">-->
                <!--<b>-->
                <!--&lt;!&ndash;This is dark logo icon&ndash;&gt;<img src="../inverse/images/black-logo.png" alt="home" class="dark-logo" />&lt;!&ndash;This is light logo icon&ndash;&gt;<img src="../inverse/images/black-logo.png" alt="home" class="light-logo" />-->
                <!--</b>-->
                <span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{ asset('images/black-logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{ asset('images/black-logo.png') }}" alt="home" class="light-logo" />
                     </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
@extends('nav')
<!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li><a href="home.blade.php">Home</a></li>
                        <li class="active">Dashboard 1</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- .col -->
                <!-- /.col -->
                <div class="col-md-12 col-sm-6">
                    <div class="row">
                        <!-- .col -->
                        <a href="{{ route('outreach_table') }}">
                        <div class="col-md-3 col-sm-12">
                            <div class="white-box text-center bg-megna">
                                <h1 class="text-white counter">{{ $outreachs->count() }}</h1>
                                <p class="text-white">Outreach</p>
                            </div>
                        </div>
                        </a>
                        <!-- /.col -->
                        <!-- .col -->
                        <a href="{{ route('testimony_table') }}">
                        <div class="col-md-3 col-sm-12">
                            <div class="white-box text-center bg-inverse">
                                <h1 class="text-white counter">{{ $testimonial->count() }}</h1>
                                <p class="text-white">Testimonials</p>
                            </div>
                        </div>
                            </a>
                        <!-- /.col -->
                        <!-- .col -->
                        <a href="{{ route('rhemastars_table') }}">
                        <div class="col-md-3 col-sm-12">
                            <div class="white-box text-center bg-info">
                                <h1 class="counter text-white">{{ $rhemastars->count() }}</h1>
                                <p class="text-white">Rhema Stars</p>
                            </div>
                        </div>
                        </a>
                        <!-- /.col -->
                        <!-- .col -->
                        <a href="gallery_table">
                        <div class="col-md-3 col-sm-12">
                            <div class="white-box text-center bg-danger">
                                <h1 class="text-white counter">{{ $gallery->count() }}</h1>
                                <p class="text-white">Gallery</p>
                            </div>
                        </div>
                        </a>
                        <!-- /.col -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Recent Outreaches</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Short Script</th>
                                    <th>Date</th>
                                    <th class="text-center">Created at</th>
                                    <th class="text-center">Updated at</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($outreachs as $outreach)
                                    <td>{{$outreach->id}}</td>
                                    <td>{{$outreach->title}}</td>
                                    <td>{{$outreach->location}}</td>
                                    <td>{{$outreach->short}}</td>
                                    <td>{{$outreach->date}}</td>
                                    <td class="text-center">
                                        <div>{{$outreach->created_at}}</div>
                                    </td>
                                    <td class="text-center">{{$outreach->updated_at}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul>
                            <li><b>Layout Options</b></li>
                            <li>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> Fix Header </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4"> Toggle Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox2" type="checkbox" class="fxsdr">
                                    <label for="checkbox2"> Fix Sidebar </label>
                                </div>
                            </li>
                        </ul>
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                            <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../inverse/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }}"></script>
<!--Counter js -->
<script src="{{ asset('bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('bower_components/morrisjs/morris.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{ asset('js/dashboard1.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ asset('bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
<script src="{{ asset('bower_components/toast-master/js/jquery.toast.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Rhema',
            text: 'A place of timely insight and fresh understanding of the word of God.',
            position: 'top-center',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 9500,
            stack: 6
        })
    });
</script>
<!--Style Switcher -->
<script src="{{ asset('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/home.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 14:59:06 GMT -->
</html>
