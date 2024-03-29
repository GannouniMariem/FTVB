<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/plugins/images/ftvb.png">
    <title>FTVB</title>
    <!-- Bootstrap Core CSS -->
    <link href="/back-office/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/back-office/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/back-office/css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="/back-office/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                  </div>
                @endif
                <form class="form-horizontal form-material" id="loginform" action="/login" method="POST">
                    @csrf
                    <h3 class="box-title m-b-20">Sign In</h3>
                 
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="email" placeholder="Email"> 
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" name="password" placeholder="Password"> 
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Create new account? <a href="/register" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>
   
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign In</button>
                        </div>
                    </div>
                 
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/back-office/bootstrap/dist/js/tether.min.js"></script>
    <script src="/back-office/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/back-office/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/back-office/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/back-office/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>