<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('form/story_info_save',array('class' => 'well form-horizontal', 'id' => 'contact_form'));?>

<fieldset>

<!-- Form Name -->
<legend>Roopkotha</legend>
<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="present_playlist">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Schedule" aria-expanded="true" aria-controls="collapseOne">
									Schedule A playlist
								</a>
							</h4>
						</div>
						<div id="Schedule" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Schedule">
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="name1" class="col-sm-2 control-label">Name:</label>
										<div class="col-sm-4">
											<input type="email" class="form-control inputstl" id="name1" placeholder="Enter Your Full Name">
										</div>
									</div>
									<div class="form-group">
										<label for="gender1" class="col-sm-2 control-label">Select a Playlist:</label>
										<div class="col-sm-2">
											<select class="form-control inputstl" id="gender1">
												<option>Playlist 1</option>
												<option>Playlist 2</option>
												<option>Playlist 3</option>
												<option>Playlist 4</option>
												
											</select>          
											
										</div>
									</div>      
									<div class="form-group">
										<label for="email1" class="col-sm-2 control-label">Set Time:</label>
										<div class="col-sm-5">
											<div class="clearfix">
												
												<div class="form-group">
													
													<div class="clearfix">
														<div class="input-group clockpicker">
															<input type="text" class="form-control" value="23:30">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-time"></span>
															</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="password1" class="col-sm-2 control-label">Date:</label>
										<div class="col-sm-3">
											<input class="form-control" id="datepicker" name="date" placeholder="MM/DD/YYY" type="text"/>
										</div>
									</div>
									
									
									
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-4">
											<button type="submit" class="btn btn-lg btn-block btn-info">Create</button>
										</div>
									</div>
								</form>
								
								
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			<div class="row">
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="present_playlist">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#firstOne" aria-expanded="true" aria-controls="collapseOne">
									Default Playlist
								</a>
							</h4>
						</div>
						<div id="firstOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								
									<div class="form-group">
										<label for="gender1" class="col-sm-2 control-label">Select a Playlist:</label>
										<div class="col-sm-2">
											<select class="form-control inputstl" id="gender1">
												<option>Playlist 1</option>
												<option>Playlist 2</option>
												<option>Playlist 3</option>
												<option>Playlist 4</option>
												
											</select>          
											
										</div>
									</div> 
								
								
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			
			<div class="row">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									Create a playlist
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label for="exampleInputEmail1">Name of playlist</label>
										<input type="text" class="form-control" id="name_playlist" placeholder="Name of palylists">
									</div>
									
									<div class="form-group">
										<label for="exampleInputFile">File input</label>
										<input type="file" id="exampleInputFile">
										
									</div>
									
									<button type="submit" class="btn btn-default">Submit</button>
								</form>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			</div>
			
	



<!-- Text input-->
 


<!-- Text input-->
       


<!-- Text input-->
      


<!-- Text input-->
 


<!-- Select Basic -->
   
<!-- Text input-->




<!-- radio checks -->


<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">গল্পের বিবরন</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="story_des" placeholder="Story Description"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<?php if($this->session->flashdata('success_msg')){?>
<div class="alert alert-success" role="alert" id="success_message"> <i class="icon icon-thumbs-up"></i> <?php echo $this->session->flashdata('success_msg');?></div>
<?php }?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
      <input type="submit" class="btn btn-success" name="story_save" value="সেভ">

  </div>
</div>

</fieldset>
</form>
</div>
    
