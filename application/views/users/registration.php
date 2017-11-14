
<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading">
			<h2>User Registration</h2>
		</div>


							<form action="" method="post" class="well">
								<div class="form-group valid-form">
									<input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
									<?php echo form_error('name','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group has-feedback">
									<input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
									<?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group valid-form">
									<input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								</div>
								<div class="form-group">
								  <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control" data-match=".inputPassword" data-match-error="Whoops, these don't match" name="conf_password" placeholder="Confirm password" required="">
								  <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
									<?php
									if(!empty($user['gender']) && $user['gender'] == 'Female'){
										$fcheck = 'checked="checked"';
										$mcheck = '';
									}else{
										$mcheck = 'checked="checked"';
										$fcheck = '';
									}
									?>
									<div class="radio">
										<label>
										<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
										Male
										</label>
									</div>
									<div class="radio">
										<label>
										  <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
										  Female
										</label>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
								</div>
							</form>

						<p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>

			<div class="clear"> </div>
			</div>
		</div>
	</div>
	<!-- //validation -->
</div>
