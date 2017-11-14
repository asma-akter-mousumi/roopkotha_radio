<?php //var_dump($this->data['id']); exit;?>
<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading">
			<h2>User Account</h2>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<a href="<?php echo site_url(); ?>/users/logout" class="logoutBtn">Logout</a>
						<div class="input-info">
							<h3>Welcome <?php echo $this->data['name']; ?>!</h3>
						</div>
						<div class="account-info">
							<p><b>Name: </b><?php echo $this->data['name']; ?></p>
							<p><b>Email: </b><?php $this->data['email']; ?></p>
							<p><b>Phone: </b><?php $this->data['phone']; ?></p>
							<p><b>Gender: </b><?php $this->data['gender']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div>
	<!-- //validation -->
</div>
