
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('admin/dashboard');?>">ROOPKOTHA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               	<?php if (isset($this->session->userdata['logged_in'])) {?>
				
			
                <li class="<?php if($this->router->fetch_method()=='schedule'){echo "active";}?>"><a href="<?php echo site_url('admin/schedule');?>" >Schedule</a></li>
                <li class="<?php if($this->router->fetch_method()=='school_save'){echo "active";}?>"><a href="<?php echo site_url('admin/school_save');?>" >School Information</a></li>
                <li class="<?php if($this->router->fetch_method()=='story_info'){echo "active";}?>"><a href="<?php echo site_url('admin/story_info');?>" >Story Information</a></li>
                <li class="<?php if($this->router->fetch_method()=='logout'){echo "active";}?>"><a href="<?php echo site_url('login/logout');?>" >Logout</a></li>
               <?php  }else{?> 
			    <li class="<?php if($this->router->fetch_method()=='index'){echo "active";}?>"><a href="<?php echo site_url('form');?>" >Home</a></li>
                <li class="<?php if($this->router->fetch_method()=='story_view'){echo "active";}?>"><a href="<?php echo site_url('form/story_view');?>" >STORY</a></li>
                <li class="<?php if($this->router->fetch_method()=='story_view'){echo "active";}?>"><a href="<?php echo site_url('form/search_story');?>" >Friend's Story</a></li>
                <li class="<?php if($this->router->fetch_method()=='story_view'){echo "active";}?>"><a href="<?php echo site_url('login');?>" >Admin</a></li>
			  	<li> <button name="off" onclick="off()">radio off</button></li>
			  <?php }?>
             


            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
<script>
	function off(){
	var vid = document.getElementById("audio-player");
    vid.autoplay = false;
    vid.load();

	
	}
	</script>
	
	
