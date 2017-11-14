<style>
@media screen and (min-device-width: 280px) and (max-device-width: 965px) { 
    #big_logo{
       margin-top:-350px !important;
       
       height: 150px; 
width:40%;
float: left;
    }
    #radio_img{
    margin-top:50px !important;
    
    }
    #mobile_btn{

    position: absolute;
    top:30%;
    left: 12%;
    /* right: 0; */
    margin: 0 auto;
    
}
#vlo{
 position: absolute;
    top:30%;
    left: 100%;
    /* right: 0; */
    margin-left: 0 auto;

}
    
    
}
</style>
<script>
$(document).ready(function() {
    $("#main_audio").get(0).play();
});

          var myvideo = document.getElementsByTagName('audio')[0];

          myvideo.addEventListener('loadeddata', function() {
            console.log("** RECEIVED loadeddata **");
            myvideo.play();//this first play is needed for Android 4.1+
          }, false);

          myvideo.addEventListener('canplaythrough', function() {
            console.log("** RECEIVED canplaythrough **");
            myvideo.play();//this second play is needed for Android 4.0 only
          }, false);

        
  function togglePlay() {
        var myAudio = document.getElementById("main_audio");


        if (myAudio.paused) {
            document.getElementById("pl_pa").classList.remove("icon-play");
            document.getElementById("pl_pa").classList.add("icon-pause");

            myAudio.play()


        }
        else {
            document.getElementById("pl_pa").classList.remove("icon-pause");
            document.getElementById("pl_pa").classList.add("icon-play");
            myAudio.pause();

        }
    }

    function getvolum(value) {
        var myAudio = document.getElementById("main_audio");
        myAudio.volume = value / 100;
    }

</script>
<?php ?>
<div class="container">
    <?php //var_dump($de_play);exit(); ?>
    <div class="row" style="margin-top: 160px;">
        <div class="col-md-7 " style="overflow: hidden;text-align: center;position: relative" id="radio_img">
            <img src="<?php echo base_url() ?>/images/Radio.png" alt="logo" style="
    width: 100%;
}">
 <div class="play_btn" id="mobile_btn">
                <button class="round-button" id="paly_pause" onclick="togglePlay()"><i class="icon icon-pause icon-2x"
                                                                                       id="pl_pa"></i></button>
                <input type="range" value="" class="range_input" id="vlo"
                       oninput="getvolum(this.value)">
            </div>
            <audio controls autoplay="autoplay" style="display:none" src="http://192.168.3.69:8000/;stream.mp3" type="audio/mpeg"id="main_audio" controls  id="main_audio">Your browser does not support the audio element.</audio>
        


        </div>
        <div class="col-md-4 col-md-offset-1 " id="test_img">
            <img src="<?php echo base_url(); ?>images/logo.png"
                  id="big_logo">

        </div>

    </div>
    <div class="footer">
        <div style="row">
            <div class="col-md-6">
                <ul>
                    <li style="display: block;    padding-bottom: 11px"><span style="border-radius: 50%;background: #5a3935;padding:5px"><i
                                    class="icon icon-phone" style="color: white;margin-left: 4px"></i> </span>
                                    &nbsp&nbsp <strong>+01743211988</strong>
                    </li>
                    <li style="display: block;    padding-bottom: 11px"><span style="border-radius: 50%;background: #5a3935;padding:5px"><i
                                    class="icon icon-envelope" style="color: white;margin-left: 4px"></i> </span>
                        &nbsp&nbsp<strong>roopkotha@kite.bd.com</strong></li>
                    <li style="display: block;    padding-bottom: 11px"><span style="
   
    border-radius: 50%;background: #5a3935;padding:5px"><i class="icon icon-map-marker" style="color: white;    margin-left: 4px"></i> </span>
                        &nbsp&nbsp<strong>4/8 Humayun Road, Block-B, Mohammadpur, Dhaka 1207</strong></li>
                </ul>
            </div>
            <div class="col-md-4 col-md-offset-2 ">
                <a href="https://play.google.com/store/apps/details?id=com.mcc.rupkothanew"><img src="<?php echo base_url() ?>/images/app.png" style="height: 100px;width: 300px;"></a>

            </div>

        </div>
    </div>
</div>


<div id="demo"></div>

 
