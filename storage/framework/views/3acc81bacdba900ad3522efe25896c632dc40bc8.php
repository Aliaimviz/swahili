<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="_token" content="<?php echo e(Session::token()); ?>"/>

    <title>Swahili - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
   <!-- <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>"> -->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>"> 
    <link rel="stylesheet" href="<?php echo e(asset('public/css/font-awesome.min.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo e(asset('public/css/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/emoji.css')); ?>">
    <link href="<?php echo e(asset('public/css/custom.css')); ?>" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">    

    <!-- scripts -->
    <script src="<?php echo e(asset('public/js/jquery-3.2.1.min.js')); ?>"></script>  
  
</head>
<body>
    <div id="app">
        <div id="container">
            <header id="main-header">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 float-left">
                    <div class="logo">
                        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/img/logo.png')); ?>" alt="logo"></a>
                    </div>
                </div>
                <div class="main_menu col-xs-12 col-sm-12 col-md-6 col-lg-8 float-right">
                    <ul class="main-nav">
                        <li><a href="<?php echo e(url('/')); ?>">HOME</a></li>
                        <li><a href="<?php echo e(route('viewAllCourses')); ?>">COURSES</a></li>
                        <li><a href="#">LANGUAGE TUTORS</a></li>
                        <li><a href="#">FAQ</a></li>
                        <?php if(Auth::guest()): ?>
                        <li><a href="" data-toggle="modal" data-target="#login">LOGIN</a></li>
                        <li class="sign-in-button"><a href="<?php echo e(route('register')); ?>">REGISTER</a></li>
                        <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1>login</h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="login-fileds">
                                        <h1>Don’t have Account?</h1>              
                                        <div class="text-center">
                                            <a href="<?php echo e(route('register')); ?>">Create Account</a>
                                        </div>
                                        <form method="POST" action="<?php echo e(route('login')); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                                <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                                    <?php if($errors->has('email')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                                <label for="password" class="col-md-12 control-label">Password</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    <?php if($errors->has('password')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Login
                                                    </button>

                                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                        Forgot Your Password?
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>        
        <div class="clearfix"></div>
        <?php echo $__env->yieldContent('content'); ?>
        <footer id="main-footer">
            <div id="container">
                <div class="footer-area-1  col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Request Demo</a></li>
                    </ul>
                </div>
                <div class="footer-area-2 col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                    <h2>Company</h2>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="#">Language Programmers</a></li>
                    </ul>
                </div>
                <div class="footer-area-3 col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                    <h2>FeedBack</h2>
                    <input type="text">
                    <div class="slider-center-button new-bottom-button footer-button">
                        <a href="#">Submit</a>
                    </div>
                </div>
            </div>
        </footer>
        <footer id="copyright">
            <!-- <div id="container"> -->
            <p>All rights Reserved © 2016 <span>SwahiliPro,</span> Designed & Developed by<span><a href="#">Startupbug.net</a></span></p>
            <!-- </div> -->
        </footer>
    </div>
    <!-- scripts -->
    <script src="<?php echo e(asset('public/js/jquery-3.2.1.min.js')); ?>"></script>  
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('public/js/config.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/util.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.emojiarea.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/emoji-picker.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/tether.min.js')); ?>"></script>    
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="<?php echo e(asset('public/js/app.js')); ?>"></script>


   

</body>
</html>
