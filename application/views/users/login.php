


<div class="container login_div">
    <!-- validation -->

		


							<?php 
								if(!empty($success_msg)){
									echo '<p class="statusMsg">'.$success_msg.'</p>';
								}elseif(!empty($error_msg)){
									echo '<p class="statusMsg">'.$error_msg.'</p>';
								}
							?>


							<form action="" method="post" class="well form-horizontal">


								<div class="form-group has-feedback">
									<input type="email" class="form-control login" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="">
									<?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control login" name="password" placeholder="Password" required="">
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
									<input type="submit" name="loginSubmit" class="btn-success login_btn" value="Login"/>
                                    <p class="footInfo">Don't have an account? <a href="<?php echo site_url(); ?>/users/registration">Register here</a></p>

                                </div>

                            </form>




			<div class="clear"> </div>
			</div>

	<!-- //validation -->
</div>
