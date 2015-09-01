<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<?php echo validation_errors(); ?>
                                                <?php
                                                $login_attributes = array('class' => 'login_form', 'id' => 'login_form','name'=>'login_form');
                                                echo form_open('users/logincheck', $login_attributes);
                                                
                                                ?>
							<input type="text" placeholder="Username" name="username">
							<input type="password" name="password" placeholder="Email Address">
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button class="btn btn-default" type="submit">Login</button>
						<?php echo form_close();?>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form" method="post"><!--sign up form-->
						<h2>New User Signup!</h2>
                                                <?php
						$login_attributes = array('class' => 'register_form', 'id' => 'register_form','name'=>'register_form');
                                                echo form_open('users/register');
                                                ?>
							<input type="text" placeholder="Username">
							<input type="email" placeholder="Email Address">
							<input type="password" placeholder="Password">
							<button class="btn btn-default" type="submit">Signup</button>
						<?php echo form_close();?>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>