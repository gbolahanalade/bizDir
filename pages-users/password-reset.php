<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Password Reset | Biz Directory</title>            
        <?php include 'header.html'; ?>              
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div><a href="../index.html" class="login-logo"></a></div>
                <div class="login-body">
                    <div class="login-title"><h2>Password reset</h2>
                        <p>Please enter your email address. You will receive a link to 
                            create a new password via email.</p>   
                    </div>
                    <form action="index.html" class="form-horizontal" method="post">                
                        <div class="form-group">
                            <div class="col-md-12">
                                <input required type="email" class="validate[required] form-control" 
                                    placeholder="E-mail"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="login-subtitle text-center col-md-6">
                                Back to <a href="login.php">Log in</a>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Submit</button>
                            </div>
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






