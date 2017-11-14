<div id="test">


				<?php	if(!empty($results)) {foreach($results as $row)
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
				}
            ?>
			</div>
			             
 <?php echo $links; ?>