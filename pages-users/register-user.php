<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Register | Biz Directory</title>            
        <?php include 'header.html'; ?>                     
    </head>
    <body>
        
        <div class="login-container register-container">
        
            <div class="register-box animated fadeInDown">
                <div><a href="../index.html" class="login-logo"></a></div>
                <div class="login-body">
                    <div class="login-title text-center"><strong>Register</strong> as a new user</div>
                    <form action="index.html" class="form-horizontal" method="post">
                    <div class="row form-group padding015">
                    <!-- SOCIAL LOGIN -->
                    <div class="social-login col-md-4 col-sm-4">
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    </div> 
                    <!-- SOCIAL LOGIN ENDS -->
                    <div class="col-md-2  col-sm-2 login-or">OR</div>
                    <!-- REGISTER FORM -->
                    <div class="col-md-6  col-sm-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input required type="text" class="form-control" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input required type="email" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input required type="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input required type="password" class="form-control" placeholder="Retype password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block">Submit</button>
                        </div>
                    </div>
                    </div>
                    <!-- REGISTER FORM ENDS -->
                    </div> <!-- row ends -->
                    <div class="login-subtitle text-center">
                        Already register? <a href="login.php">Log in</a>
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
                    <!-- <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div> -->
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






