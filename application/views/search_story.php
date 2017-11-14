
<script type="text/javascript">
     function configureDropDownLists(ddl1,ddl2) {
	
    var Rajshahi = ['রাজশাহী', 'বগুড়া', 'পাবনা','চাঁপাইনবাবগঞ্জ','জয়পুরহাট','নাটোর','নওগা','সিরাজগঞ্জ'];
    var Khulna = ['খুলনা', 'চুয়াডাঙ্গা', 'কুষ্টিয়া','নড়াইল','মেহেরপুর','মাগুরা','ঝিনাইদহ','যশোর','সাতক্ষীরা'];
    var Barisal = ['বরিশাল', 'ঝালকাঠি', 'বাগেরহাট','ভোলা','পটুয়াখালী','পিরোজপুর','বরগুনা'];
    var Dhaka = ['ঢাকা', 'গোপালগঞ্জ', 'গাজীপুর','কিশোরগঞ্জ','মানিকগঞ্জ','নারায়ণগঞ্জ','নরসিংদী','রাজবাড়ী','ফরিদপুর','মুন্সিগঞ্জ','মাদারীপুর','শরীয়তপুর','টাঙ্গাইল',];
    var Chittagang = ['কুমিল্লা', 'চট্টগ্রাম', 'চাঁদপুর','ব্রাহ্মণবাড়িয়া','বান্দরবান','লক্ষ্মীপুর','নোয়াখালী','ফেনী','রাঙ্গামাটি','খাগড়াছড়ি','কক্সবাজার'];
    var Rangpur = ['রংপুর','দিনাজপুর', 'পঞ্চগড়','নীলফামারী','গাইবান্ধা','কুড়িগ্রাম','লালমনিরহাট','ঠাকুরগাঁও'];
    var Shylet = ['সিলেট', 'সুনামগঞ্জ', 'হবিগঞ্জ','মৌলভীবাজার'];
    var Mymonshing = ['ময়মনসিংহ','শেরপুর', 'জামালপুর', 'নেত্রকোণা'];

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
			case 'চট্টগ্রাম':
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
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
	function schoolname(value){
			//alert(dist.val);
			division=$('#ddl').val();
			$.ajax({
			type:"POST",
			cache:false,
			url: "<?=base_url()?>index.php/form/search",
			data: {"dist":value,"division":division},    // multiple data sent using ajax
			success: function (result) {
				
				$('#school_name').html(result);
				
			}
		});
		
	}
</script>


    <form class="well form-horizontal" action="school_save" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>





      

   
<div class="form-group"> 
  <label class="col-md-4 control-label">বিভাগ</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="icon icon-list"></i></span>
    <select name="school_divsion" class="form-control selectpicker" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))" >
      <option value=" " >Please select your City</option>
      <option value="ঢাকা">ঢাকা</option>
      <option value="খুলনা">খুলনা</option>
      <option value="রাজশাহী">রাজশাহী</option>
      <option value="বরিশাল">বরিশাল</option>
      <option value="সিলেট">সিলেট</option>
      <option value="রংপুর">রংপুর</option>
      <option value="চট্টগ্রাম">চট্টগ্রাম</option>
      <option value="ময়মনসিংহ">ময়মনসিংহ</option>

    </select>
  </div>
</div>
</div>
 <div class="form-group"> 
  <label class="col-md-4 control-label">জেলা</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="icon icon-list"></i></span>
    <select name="school_dist" class="form-control selectpicker" id="ddl2" onchange="schoolname(this.value)">
     

    </select>
  </div>
</div>
</div>  

<div class="form-group"> 
  <label class="col-md-4 control-label">স্কুল নাম</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="icon icon-list"></i></span>
    <select name="school_name" class="form-control selectpicker" required id="school_name">
  

     
    </select>
  </div>
</div>
</div>




<!-- Text input-->

<!-- Text input-->




<!-- Text area -->
  


<!-- Success message -->
<?php if($this->session->flashdata('success_msg')){?>
<div class="alert alert-success" role="alert" id="success_message"> <i class="icon icon-thumbs-up"></i> <?php echo $this->session->flashdata('success_msg');?></div>
<?php }?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Submit <span class="icon icon-send"></span></button>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>
<div id="row">
	<div class="col-md-3">
		<p><img src="<?php echo base_url(); ?>/images/Hydrangeas.jpg" alt="..." class="img-thumbnail"></p>
		<p>স্কুলের নামঃ</p>
		<p>ঝিনাইদহ সরকারী উচ্চ বালিকা বিদ্যালয়</p>
		<p>বন্ধুর নাম  :আসমা আকতার মৌসুমি</p>
		
		</div>
	<div class="col-md-3"><p><img src="<?php echo base_url(); ?>/images/Jellyfish.jpg" alt="..." class="img-thumbnail"></p>
		<p>স্কুলের নামঃ</p>
		<p>ঝিনাইদহ সরকারী উচ্চ বালিকা বিদ্যালয়</p>
		<p>বন্ধুর নাম  :আসমা আকতার মৌসুমি</p>
		</div>
	<div class="col-md-3"><p><img src="<?php echo base_url(); ?>/images/Koala.jpg" alt="..." class="img-thumbnail"></p>
		<p>স্কুলের নামঃ</p>
		<p>ঝিনাইদহ সরকারী উচ্চ বালিকা বিদ্যালয়</p>
		<p>বন্ধুর নাম  :আসমা আকতার মৌসুমি</p>
		</div>
	<div class="col-md-3"><p><img src="<?php echo base_url(); ?>/images/Hydrangeas.jpg" alt="..." class="img-thumbnail"></p>
		<p>স্কুলের নামঃ</p>
		<p>ঝিনাইদহ সরকারী উচ্চ বালিকা বিদ্যালয়</p>
		<p>বন্ধুর নাম  :আসমা আকতার মৌসুমি</p>
		</div>
	</div>
</form>
    

