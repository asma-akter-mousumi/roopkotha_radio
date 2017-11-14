<script type="text/javascript">
    function configureDropDownLists(ddl1, ddl2) {

        var Rajshahi = ['রাজশাহী', 'বগুড়া', 'পাবনা', 'চাঁপাইনবাবগঞ্জ', 'জয়পুরহাট', 'নাটোর', 'নওগা', 'সিরাজগঞ্জ'];
        var Khulna = ['খুলনা', 'চুয়াডাঙ্গা', 'কুষ্টিয়া', 'নড়াইল', 'মেহেরপুর', 'মাগুরা', 'ঝিনাইদহ', 'যশোর', 'সাতক্ষীরা'];
        var Barisal = ['বরিশাল', 'ঝালকাঠি', 'বাগেরহাট', 'ভোলা', 'পটুয়াখালী', 'পিরোজপুর', 'বরগুনা'];
        var Dhaka = ['ঢাকা', 'গোপালগঞ্জ', 'গাজীপুর', 'কিশোরগঞ্জ', 'মানিকগঞ্জ', 'নারায়ণগঞ্জ', 'নরসিংদী', 'রাজবাড়ী', 'ফরিদপুর', 'মুন্সিগঞ্জ', 'মাদারীপুর', 'শরীয়তপুর', 'টাঙ্গাইল',];
        var Chittagang = ['কুমিল্লা', 'চট্টগ্রাম', 'চাঁদপুর', 'ব্রাহ্মণবাড়িয়া', 'বান্দরবান', 'লক্ষ্মীপুর', 'নোয়াখালী', 'ফেনী', 'রাঙ্গামাটি', 'খাগড়াছড়ি', 'কক্সবাজার'];
        var Rangpur = ['রংপুর', 'দিনাজপুর', 'পঞ্চগড়', 'নীলফামারী', 'গাইবান্ধা', 'কুড়িগ্রাম', 'লালমনিরহাট', 'ঠাকুরগাঁও'];
        var Shylet = ['সিলেট', 'সুনামগঞ্জ', 'হবিগঞ্জ', 'মৌলভীবাজার'];
        var Mymonshing = ['ময়মনসিংহ', 'শেরপুর', 'জামালপুর', 'নেত্রকোণা'];

        switch (ddl1.value) {
            case 'রাজশাহী':
                ddl2.options.length = 0;
                for (i = 0; i < Rajshahi.length; i++) {
                    createOption(ddl2, Rajshahi[i], Rajshahi[i]);
                }
                break;
            case 'খুলনা':
                ddl2.options.length = 0;
                for (i = 0; i < Khulna.length; i++) {
                    createOption(ddl2, Khulna[i], Khulna[i]);
                }
                break;
            case 'বরিশাল':
                ddl2.options.length = 0;
                for (i = 0; i < Barisal.length; i++) {
                    createOption(ddl2, Barisal[i], Barisal[i]);
                }
                break;
            case 'ঢাকা':
                ddl2.options.length = 0;
                for (i = 0; i < Dhaka.length; i++) {
                    createOption(ddl2, Dhaka[i], Dhaka[i]);
                }
                break;
            case 'রংপুর':
                ddl2.options.length = 0;
                for (i = 0; i < Rangpur.length; i++) {
                    createOption(ddl2, Rangpur[i], Rangpur[i]);
                }
                break;
            case "চট্টগ্রাম":
                ddl2.options.length = 0;
                for (i = 0; i < Chittagang.length; i++) {
                    createOption(ddl2, Chittagang[i], Chittagang[i]);
                }
                break;
            case 'সিলেট':
                ddl2.options.length = 0;
                for (i = 0; i < Shylet.length; i++) {
                    createOption(ddl2, Shylet[i], Shylet[i]);
                }
                break;
            case 'ময়মনসিংহ':
                ddl2.options.length = 0;
                for (i = 0; i < Mymonshing.length; i++) {
                    createOption(ddl2, Mymonshing[i], Mymonshing[i]);
                }
                break;

            default:
                ddl2.options.length = 0;
                break;
        }

    }

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = text;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>




<form class="well form-horizontal"
      action="<?php echo site_url() ?>/admin/school_save/<?php echo isset($this->data['edit_info']['id']) ? $this->data['edit_info']['id'] : ''; ?>"
      method="post" id="contact_form">
    <fieldset>


        <legend>School Information</legend>





        <div class="form-group">
            <label class="col-md-4 control-label">স্কুলের নাম</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-user"></i></span>
                    <input name="school_name"  class="form-control" type="text" value="<?php echo isset($this->data['edit_info']['school_name']) ? $this->data['edit_info']['school_name'] : set_value('school_name'); ?>" >

                </div>

            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_name'); ?> </span></div>
        </div>

        <!-- Text input-->


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">ই মেইল</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-envelope"></i></span>
                    <input name="school_email" class="form-control" type="text"
                           value="<?php echo isset($this->data['edit_info']['email']) ? $this->data['edit_info']['email'] : ''; ?>">
                </div>
            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_email'); ?> </span></div>
        </div>


        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">ফোন </label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-phone"></i></span>
                    <input name="school_phone" class="form-control" type="text"
                           value="<?php echo isset($this->data['edit_info']['phone']) ? $this->data['edit_info']['phone'] : ''; ?>">
                </div>
            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_phone'); ?> </span></div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label">ঠিকানা</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-home"></i></span>
                    <input name="school_address" class="form-control" type="text"
                           value="<?php echo isset($this->data['edit_info']['address']) ? $this->data['edit_info']['address'] : ''; ?>">
                </div>
            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_address'); ?> </span></div>
        </div>

        <!-- Text input-->


        <!-- Select Basic -->

        <div class="form-group">
            <label class="col-md-4 control-label">বিভাগ</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-list"></i></span>
                    <select name="school_divsion" class="form-control selectpicker" id="ddl"
                            onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
                        <option value=" ">Please select your City</option>
                        <option value="ঢাকা" <?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "ঢাকা") echo "selected"; ?>>
                            ঢাকা
                        </option>
                        <option value="খুলনা" <?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "খুলনা") echo "selected"; ?>>
                            খুলনা
                        </option>
                        <option value="রাজশাহী" <?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "রাজশাহী") echo "selected"; ?>>
                            রাজশাহী
                        </option>
                        <option value="বরিশাল" <?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "বরিশাল") echo "selected"; ?>>
                            বরিশাল
                        </option>
                        <option value="সিলেট" <?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "রাজশাহী") echo "selected"; ?>>
                            সিলেট
                        </option>
                        <option value="রংপুর" <?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "সিলেট") echo "selected"; ?>>
                            রংপুর
                        </option>
                        <option value="চট্টগ্রাম"<?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "চট্টগ্রাম") echo "selected"; ?>>
                            চট্টগ্রাম
                        </option>
                        <option value="ময়মনসিংহ" <?php if (isset($this->data['edit_info']) && $this->data['edit_info']['city'] == "ময়মনসিংহ") echo "selected"; ?>>
                            ময়মনসিংহ
                        </option>

                    </select>
                </div>
            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_divsion'); ?> </span></div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">জেলা</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-list"></i></span>
                    <select name="school_dist" class="form-control selectpicker" id="ddl2">


                    </select>
                </div>
            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_dist'); ?> </span></div>
        </div>


        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">জিপ কোড</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-home"></i></span>
                    <input name="school_zip" class="form-control" type="text"
                           value="<?php echo isset($this->data['edit_info']['zip_code']) ? $this->data['edit_info']['zip_code'] : ''; ?>">
                </div>
            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_zip'); ?> </span></div>
        </div>

        <!-- Text input-->


        <!-- Text area -->

        <div class="form-group">
            <label class="col-md-4 control-label">স্কুলের বর্ণনা </label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon icon-pencil"></i></span>
                    <textarea class="form-control" name="school_des"
                              value="<?php echo isset($this->data['edit_info']['history']) ? $this->data['edit_info']['history'] : ''; ?>"></textarea>
                </div>
            </div>
            <div class="col-md-4"><span>  <?php echo form_error('school_des'); ?> </span></div>
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
                <button type="submit" class="btn btn-warning">Submit <span class="icon icon-send"></span></button>
            </div>
        </div>

    </fieldset>

</form>

</div>
    

