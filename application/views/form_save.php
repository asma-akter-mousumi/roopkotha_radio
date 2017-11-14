<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>


<form method="post" enctype="multipart/form-data"  action="story_info_save" class="well form-horizontal" id="contact_form">
<fieldset>
    <?php //var_dump($this->data['edit_info']);exit();?>
    <!-- Form Name -->
    <legend>Roopkotha</legend>

    <!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label">গল্পকারের নাম</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon icon-user"></i></span>
                <input name="teller_name" placeholder="Story Teller Name" class="form-control" type="text"
                       value="<?php echo isset($this->data['edit_info']['teller_name']) ? $this->data['edit_info']['teller_name'] : ''; ?>"
                >
            </div>
        </div>
        <div class="col-md-4"><span> <?php echo form_error('teller_name'); ?> </span></div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">স্কুল নাম</label>
        <div class="col-md-4 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon icon-list"></i></span>
                <select name="school_name" class="form-control selectpicker" required>
                    <?php

                    foreach ($this->data as $row) {
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['school_name'] ?></option>;
                        <?php
                    } ?>


                </select>
            </div>
        </div>
        <div class="col-md-4"><span>  <?php echo form_error('school_name'); ?> </span></div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">শ্রেণি</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon icon-cogs"></i></span>
                <select name="teller_class" class="form-control selectpicker" required>
                    <option>শ্রেণি</option>
                    <option>১</option>
                    <option>২</option>
                    <option>৩</option>
                    <option>৪</option>

                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">বয়স</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon icon-certificate"></i></span>
                <input name="teller_age" placeholder="" class="form-control" type="text" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">গল্প কভার</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon icon-film"></i></span>
                <input type="file" name="userfile" size="20" class="form-control"/>

            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">গল্প লিংক</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon icon-film"></i></span>
                <input type="file" name="story_file" size="20" class="form-control"/>
            </div>
        </div>

    </div>

    <!-- Text input-->


    <div class="form-group">
        <label class="col-md-4 control-label">গল্পের নাম</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="story_des" placeholder="Story Description"></textarea>
            </div>
        </div>
    </div>

    <!-- Success message -->
    <?php if ($this->session->flashdata('success_msg')) { ?>
        <div class="alert alert-success" role="alert" id="success_message"><i
                    class="icon icon-thumbs-up"></i> <?php echo $this->session->flashdata('success_msg'); ?></div>
    <?php } ?>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <input type="submit" class="btn btn-success" name="story_save" value="সেভ">

        </div>
    </div>

</fieldset>
</form>
<?php echo $this->session->flashdata('error_msg'); ?>
</div>
    
