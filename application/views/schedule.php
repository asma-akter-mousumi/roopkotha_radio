<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
<?php echo validation_errors(); ?>

<fieldset>
    <?php //var_dump($this->data);exit();?>
	<!-- Form Name -->
	<legend>Roopkotha</legend>
	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default schedule_panel">
					<div class="panel-heading" role="tab" id="present_playlist">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Schedule" aria-expanded="true" aria-controls="collapseOne">
								Schedule A playlist
							</a>
						</h4>
					</div>
					<form action="schedule_save" method="post"class="form-horizontal">
					<div id="Schedule" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Schedule">
						<div class="panel-body">
						
								
								<div class="form-group">
									<label for="play_name" class="col-sm-4 control-label">Select a Playlist:</label>
									<div class="col-sm-4">
										<select class="form-control inputstl" name="play_name">
											<?php 

											foreach($this->data as $row)
											{?>
												<option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>';
											<?php }?>

											
										</select>          
										
									</div>
								</div>      
								<div class="form-group">
									<label for="play_time" class="col-sm-4 control-label">Set Time:</label>
									<div class="col-sm-4">
										
										
										<div class="form-group">
											
											
											<div class="input-group clockpicker clock">
												<input type="text" name="play_time" class="form-control" value="23:30" id='clockpicker'>
												<span class="input-group-addon">
													<span class="icon icon-time"></span>
												</span>
												
											</div>
											
											
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label for="play_date" class="col-sm-4 control-label">Set Date:</label>
									<div class="col-sm-4">
										
										
										<div class="form-group">
											
											
											<div class="input-group  clock" id="">
												<input class="form-control" id="datepicker" name="play_date" placeholder="MM/DD/YYY" type="text"/>
												<span class="input-group-addon">
													<span class="icon icon-calendar"></span>
												</span>
												
											</div>
											
											
										</div>
									</div>
								</div>
					<div class="form-group">
									<div class="col-sm-offset-2 col-sm-4">
										<button type="submit" class="btn btn-lg btn-block btn-info">Create</button>
									</div>
								</div>
					
							
							
						</div>
					</div>
					</form>
				</div>
				
				
			</div>
		</div>
		<div class="row">
			
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default schedule_panel">
					<div class="panel-heading" role="tab" id="present_playlist">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#firstOne" aria-expanded="true" aria-controls="collapseOne">
								Default Playlist
							</a>
						</h4>
					</div>
					<div id="firstOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<form action="default_play" method="post">
							<div class="form-group">
								<label for="gender1" class="col-sm-4 control-label">Select a Playlist:</label>
								<div class="col-sm-8">
									<select name="playlist_name" class="form-control selectpicker" required >
                                        <?php

                                        foreach($this->data as $row)
                                        {?>
                                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>';
                                        <?php }?>


                                    </select>
                                </div>
							</div> 
									<button type="submit" style="margin-left: 208px;
    margin-top: 10px"class="btn btn-success" >Submit</button>
							</form>
							
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		
		<div class="row">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default schedule_panel" >
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								Create a playlist
							</a>
						</h4>
					</div>
				<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body" style="margin:20px;">
				<?php echo form_open_multipart('admin/create_playlist',array('class' => 'well form-horizontal', 'id' => 'schedule_form'));?>
				<div class="form-group">
				<label for="exampleInputEmail1">Name of playlist</label>
				<input type="text" class="form-control" name="name_playlist" id="name_playlist" placeholder="Name of palylists">
				</div>
				
				<div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" name="audiofile">
				
				</div>
				
				<button type="submit" class="btn btn-default" >Submit</button>
				</form>
				</div>
				</div>
				</div>
				
				</div>
				</div>
				</div>
				
				
				
				
				
				
				</fieldset>
				</form>
				</div>
				<script>
				$( "#datepicker" ).datepicker({
				inline: true,dateFormat: 'yy-mm-dd'
				});
				
				
				</script>
				<script type="text/javascript">
				$('.clockpicker').clockpicker({
				placement: 'bottom', // clock popover placement
				align: 'left',       // popover arrow align
				donetext: 'Done',     // done button text
				autoclose: false,    // auto close when minute is selected
				vibrate: true,
				// vibrate the device when dragging clock hand
				});
				</script>
				
								