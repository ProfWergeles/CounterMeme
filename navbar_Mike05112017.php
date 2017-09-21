<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div >
	<img id='cmlogo' src="img/cmlogo2.png" alt='cmLogo'>
</div>

<nav class="navbar navbar-custom">
	<div class="container-fluid">
    	<div class="navbar-header">
    	</div>
    <ul class="nav navbar-nav">
		<li class="active"><a href="howItWorks.php">How it works</a></li>
 		<li><a href="index.php">Browse Smackdowns</a></li>
<!--    Mike's-->
        <li>
            <a class="btn" data-toggle="modal" data-target="#loginModal" href="#">Login</a>
        </li>
<!--    Devante's
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login/Create Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
          	<form action="login1.php" method="POST">
				<div class="form-group">
      				<label for="fName">Username:</label>
      				<input  class="form-control" id="uName" name="uName">
    			</div>
				<div class="form-group">
      				<label for="fName">Password:</label>
      				<input  type="password" class="form-control" id="pass" name="pass">
				</div>
				<button class="btn btn-sm"><a href="createAccount.php">Create Account</a></button>
				<button type="submit" class="btn btn-sm" name="submit">Login</button>
			</form>
			
        </ul>
      </li>
-->
	 </ul>
	 <form class="navbar-form navbar-right" action="./searchresults.php" method="post">
  		<div class="input-group">
    		<input type="text" class="form-control" name="search" id="search" placeholder="Search for smackdowns">
    		<div class="input-group-btn">
      			<button class="btn btn-default" type="submit">
        		<i class="glyphicon glyphicon-search"></i>
      			</button>
    		</div>
  		</div>
	</form>
  	</div>	
</nav>

<!-- Login Modal   -->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content jumbotron text-center thick-margin">
                <div class="modal-header">
                    <h2 class="modal-title">Login to resume smacking</h2>
                </div>
                <div class="modal-body">
                    <form method="POST" action="login1.php"> <!--name="login_form"-->
                        <input type="text" class="span3" name="uName" id="uName" placeholder="Username" required>
                        <input type="password" class="span3" id="pass" name="pass" placeholder="Password" required>
                        <p><button action="/login.php" type="submit" class="btn orange-background">Sign in</button>
                            <a href="#">Forgot Password?</a>
                        </p>
                        <p>New to CounterMeme?
                            <button type="submit"><a class="btn grey-background" data-toggle="modal" data-target="#registerModal">Register</a></button>
                        </p>
                    </form> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<!-- Register Modal -->
    <div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content jumbotron text-center thick-margin">
                <div class="modal-header">
                    <h2 class="modal-title">Create <span class="orange-color">Account</span></h2>
                </div>
                <div class="modal-body">
                    <form method="post" action='' name="register_form">
                        <p><input type="text" class="span3" name="email" id="email" placeholder="Email" required></p>
                        <p><input type="text" class="span3" name="username" id="username" placeholder="Username" required></p>
                        <p><input type="text" class="span3" name="password" id="password" placeholder="Password" required></p>
                        <p><input type="text" class="span3" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required></p>
                        <p><button action="/register.php" type="submit" class="btn orange-background">Register</button>
                    </form>              
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>