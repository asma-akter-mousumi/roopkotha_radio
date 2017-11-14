<?php
/**
 * Created by PhpStorm.
 * User: mou
 * Date: 3/27/2017
 * Time: 4:04 PM
 */
?>

<div class="container">
    <?php echo validation_errors() ; ?>
    <div class="row">
    <div class="col-md-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3651.4118384115213!2d90.3651023!3d23.7683446!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755c0a8b9b3e269%3A0xb23c66de39bdf242!2sDnet%2C+Block+-+B%2C+4%2F8+Humayun+Rd%2C+Dhaka+1207!3m2!1d23.7683446!2d90.367291!5e0!3m2!1sen!2sbd!4v1491375889264" width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen ></iframe>

    </div>

        <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-4 pull-right"
             style="background-color: #5A3935;height: 600px;text-align: center">
            <img src="<?php echo base_url() ?>/images/logo.png" style="width: 30%;">
            <form action="contact_mail" style="padding-top: 22px;" class="form-horizontal" method="post">
                <input class="form-control" name="user_name"
                       style="border: solid 3px #F68A43;background-color: #5a3935;margin-top: 10px;color: white;"
                       placeholder="নাম" value="<?php echo set_value('user_name'); ?>" required>
                <input class="form-control" name="user_email"
                       style="border: solid 3px #F68A43;background-color: #5a3935;margin-top: 10px;color: white;"
                       placeholder="ইমেইল" value="<?php echo set_value('user_email'); ?>" type="email" required>
                <input class="form-control" name="user_phone"
                       style="border: solid 3px #F68A43;background-color: #5a3935;margin-top: 10px;color: white;"
                       placeholder="ফোন" value="<?php echo set_value('user_phone'); ?>" required>
                <textarea class="form-control" name="user_msg"
                          style="border: solid 3px #F68A43;background-color: #5a3935;margin-top: 10px;color: white;resize: none"
                          rows="8" cols="50"></textarea>
                <button class="btn pull-right" style="margin-top: 10px;background-color: #EE4323;color: white"
                        name="user_submit">পাঠান
                </button>
            </form>

        </div>
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
    </div>
    <?php if ($this->session->flashdata('msg')) { ?>
        <div class="alert alert-success" role="alert" id="success_message"><i
                    class="icon icon-thumbs-up"></i> <?php echo $this->session->flashdata('msg'); ?></div>
    <?php } ?>
</div>


