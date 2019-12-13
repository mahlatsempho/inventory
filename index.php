<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="plugins/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="plugins/bootstrap.js"></script>
<script src="plugins/jquery.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
	<div class="row text-center mb-4">
		<div class="col-md-12">
            <br><br><br><br><br><br>
		    <h4>Divine Wesels Meriki Solomon</h4>
            <h4>Divine Wesels Meriki Solomon</h4>
		</div>
	</div>
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
	                <div class="login-title">
	                    <h4>Log In</h4>
	                </div>
	                <div class="login-form mt-4">
	                    <form action="views/dashbord.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <input id="email" name="Full Name" placeholder="Email Address" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-12">
                              <input type="pass" class="form-control" id="pass" placeholder="Password">
                            </div>
                          </div>
                         <div class="form-row">
                        <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="updatecheck1">
                                  <label class="form-check-label" for="updatecheck1">
                                    <small>By submitting this form you agree to our <a href="#">terms and conditions </a> </small>
                                    
                                  </label>
                                </div>
                              </div>
                    </div>                        
                        
                        <div class="form-row">
                            <button type="submit" class="btn btn-danger btn-block">login</button>
                        </div>
                    </form>
	                </div>
	                <div class="logi-forgot text-right mt-2">
	                    <a href="#">Reset Password </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
    
</body>
</html>