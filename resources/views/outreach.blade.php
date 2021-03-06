<!DOCTYPE html>
<html lang="en">
@extends('header')

<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="{{ route('home') }}"><b><img src="{{ asset('images/black-logo.png') }}" alt="home" class="dark-logo" /><img src="{{ asset('images/black-logo.png') }}" alt="home" class="light-logo" /></b><span class="hidden-xs"></span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

            </ul>

        </div>
    </nav>
    @extends('nav')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Outreach</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li><a href="home">Dashboard</a></li>
                        <li class="active">Outreach</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{ route('create_outreach') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12">Title</label>
                                <div class="col-md-12">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Location</label>
                                <div class="col-md-12">
                                    <input type="text" name="location" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Short Script</label>
                                <div class="col-md-12">
                                    <textarea type="text" name="short" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Date</label>
                                <div class="col-md-12">
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
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
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('bower_components/switchery/dist/switchery.min.js') }}"></script>
<script src="{{ asset('bower_components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bower_components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{ asset('bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());

        });
        // For select 2

        $(".select2").select2();
        $('.selectpicker').selectpicker();

        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }

        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();

        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });

        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });

        // For multiselect

        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });

        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });

    });
</script>
<!--Style Switcher -->
<script src="{{ asset('bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>



</html>
