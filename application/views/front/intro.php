<html>
<head>
    <meta charset = "utf-8">
    <title>Roopkotha</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.min.css">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=1">

    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/jquery-ui.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style_front.css">
    <script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery-ui.js"></script>



</head>
<body>
<div class="intro" style="text-align: center">
<div class="row" style="display: inline-block;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 300px;
    height: 300px;
    margin: auto;
    background-color: #f3f3f3;">

<img src="<?php echo base_url() ?>images/logo.png" style="max-height: 100%;max-width: 100%">
   
</div>
    <div class="row" style="display: inline-block;
    position: fixed;
    top: 400px;
    bottom: 0;
    left: 0;
    right: 0;
width: 10%;
    height: 50px;
    margin: auto;
    ">
        <audio src="<?php echo base_url()?>uploads/vedio/intro.mp3" autoplay></audio>
<a href="<?php echo site_url("form/home")?>">Skip</a>

    </div>
</div>

</body>
<script>
    setTimeout(function() {
        $('#intro').hide();
    }, 1000);

</script>
</html>