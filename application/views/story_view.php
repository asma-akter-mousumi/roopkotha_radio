<script type="text/javascript">
	function SearchFilter(value){
		$.ajax({
			type:"POST",
			cache:false,
			url: "<?=base_url()?>index.php/form/story_view",
			data: {"id":value},    // multiple data sent using ajax
			success: function (result) {
				$('#test').hide();
				$('#search_result').html(result);
				
			}
		});
		
	}
		
</script>

<!-- Introduction Row -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Roopkotha</h1>
	</div>
	<div class="input-group">
		<input type="text" id="keywords" placeholder="Type keywords to filter posts" onkeyup="SearchFilter(this.value)"/>
	</div>
	<button onclick="frd_story()">Friend's Story</button>
	
</div>  

<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Our Story</h2>
	</div>
	<div id="test">
		<?php	 foreach($results as $row)
            { ?>
            <div class="col-lg-4 col-sm-6 data_search">
                
                
				<h3><?php  echo $row->story_des;?> </h3>
				
				
				<iframe width="200" height="150" src="<?php  echo $row->story_link;?>" frameborder="0" allowfullscreen></iframe>   </br> 
				<label>Teller Name :  </label><small><?php  echo $row->teller_name;?></small></br>
				
				<label>Teller School Name :  </label><small><?php  echo $row->school_name;?></small></br>
				<label>Teller Class :  </label>  <small><?php  echo $row->teller_age;?></small></br>
				
				
			</div>
			<?php
			}
		?>
	</div>
	
</div>

<?php echo $links; ?>
<div class="row">
	<div id="search_result"></div>
</div>


<!-- Team Members Row -->


<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
<hr>


