<div class="row">

    <div class="col-md-2 col-xs-6 col-sm-6" style="text-align: center" id="logo">
        <?php if($this->router->fetch_method()=='story' || $this->router->fetch_method()=='contact'){?>
        <a href="<?php echo site_url()?>/form/home">
        <img src="<?php echo base_url() ?>/images/logo.png"
             style="height: 200px;width: 100%"></a>
        <?php } ?>
    </div>
    <div class="col-md-6 col-md-offset-4">
        <ul style="float: right;margin: 6px">
        <li style="float:left;display: inline"><a href="<?php echo site_url()?>/form/home" style="padding: 10px;background-color: #383839;color: white;text-decoration: none;">হোম</a></li>

            <li style="float:left;display: inline";"><a href="<?php echo site_url()?>/form/story" style="padding: 10px;background-color: #F68A43;color: white;text-decoration: none;">&#2476;&#2472;&#2509;&#2471;&#2497;&#2470;&#2503;&#2480; &#2455;&#2482;&#2509;&#2474; </a> </li>
            <li style="float:left;display: inline"><a href="<?php echo site_url()?>/form/contact" style="padding: 10px;background-color: #383839;color: white;text-decoration: none;">&#2479;&#2507;&#2455;&#2494;&#2479;&#2507;&#2455;</a></li>

        </ul>
    </div>

</div>
