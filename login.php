<?php require_once('header.php') ?>

  <?php
  if(isset($_SESSION['user_email'])){
    echo '<div class="notification">You already Logged in</div>';
  } else
    { ?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="process/logincheck.php" method="post">
                <input type="email" name="email" placeholder="Email Address"/>
								<input type="password" name="pass" placeholder="Password"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" name="login" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="process/registerprocess.php" method="post">
							<input type="text" name="customer_name" placeholder="Name"/>
							<input type="email" name="email" placeholder="Email Address"/>
              <input type="address" name="address" placeholder="Your Address"/>
							<input type="password" name="pass" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

<?php } ?>	
<?php require_once('footer.php') ?>