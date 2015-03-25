<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login | Biz Directory</title>            
        <?php include 'header.html'; ?>
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div><a href="../index.html" class="login-logo"></a></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form action="index.html" class="form-horizontal" method="post">
                    <!-- SOCIAL LOGIN -->
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    
                    <div class="login-or">OR</div>
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input required type="text" class="validate[required] form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input required type="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="password-reset.php" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="register-user.php">Create an account</a>
                    </div>
                    </form>
                </div>
                
                <div class="login-footer">
                    <div class="text-center">
                        &copy; 
                        <script type="text/javascript">
                            var currentYr = new Date();
                            var insertYr = currentYr.getFullYear();
                            document.write(insertYr);
                        </script>
                        Biz Directory - All Rights Reserved.
                    </div>
                </div>
            </div>
            
        </div>
        
       <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>        
        
        <script type='text/javascript' src='../js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='../js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='../js/plugins/jquery-validation/jquery.validate.js'></script>                
        <!-- END THIS PAGE PLUGINS -->  
        
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 3
                        },
                        password: {
                                required: true,
                                minlength: 6,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 6,
                                maxlength: 10,
                                equalTo: "#password2"
                        }
                    }                                        
                });                                    

	        </script>
	        
	    <!-- END SCRIPTS -->    
    </body>
</html>






