<script type="text/javascript">

    function configureDropDownLists(ddl1, ddl2) {

        var Rajshahi = ['রাজশাহী', 'বগুড়া', 'পাবনা', 'চাঁপাইনবাবগঞ্জ', 'জয়পুরহাট', 'নাটোর', 'নওগা', 'সিরাজগঞ্জ'];
        var Khulna = ['খুলনা', 'চুয়াডাঙ্গা', 'কুষ্টিয়া', 'নড়াইল', 'মেহেরপুর', 'মাগুরা', 'ঝিনাইদহ', 'যশোর', 'সাতক্ষীরা'];
        var Barisal = ['বরিশাল', 'ঝালকাঠি', 'বাগেরহাট', 'ভোলা', 'পটুয়াখালী', 'পিরোজপুর', 'বরগুনা'];
        var Dhaka = ['ঢাকা', 'গোপালগঞ্জ', 'গাজীপুর', 'কিশোরগঞ্জ', 'মানিকগঞ্জ', 'নারায়ণগঞ্জ', 'নরসিংদী', 'রাজবাড়ী', 'ফরিদপুর', 'মুন্সিগঞ্জ', 'মাদারীপুর', 'শরীয়তপুর', 'টাঙ্গাইল', ];
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
        $.ajax({
            url: '<?php echo site_url() ?>/form/search_story',
            type: 'POST',
            data: 'divi=' + ddl1.value,
            success: function (result) {
                document.getElementById('main_content').innerHTML = result;
            }

        });

    }

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);

    }
    function story_dist(dist, divi) {
        var dist = dist.value;
        var divi = divi.value;

        $.ajax({
            url: '<?php echo site_url() ?>/form/search_story',
            type: 'POST',
            data: 'dist=' + dist + '&divi=' + divi,
            success: function (result) {
                document.getElementById('main_content').innerHTML = result;
            }

        });
    }

    function search_story() {
        var search = document.getElementById("search").value;
        //alert(search);
        $.ajax({
            url: '<?php echo site_url() ?>/form/search_mobile',
            type: 'POST',
            data: 'search=' + search,
            success: function (result) {
                document.getElementById('main_content').innerHTML = result;
            }

        });

    }

    function togglePlaystory(id) {

        var myAudio = document.getElementById("story-" + id);
//alert(myAudio);
        //alert(myAudio);
        if (myAudio.paused) {
            document.getElementById("story_pa-" + id).classList.remove("icon-play-circle");
            document.getElementById("story_pa-" + id).classList.add("icon-pause");

            myAudio.play();


        } else {
            document.getElementById("story_pa-" + id).classList.remove("icon-pause");
            document.getElementById("story_pa-" + id).classList.add("icon-play-circle");
            myAudio.pause();

        }
    }
    function search_school() {
        var dist = document.getElementById("ddl2").value;
        var div = document.getElementById("ddl").value;
        $.ajax({
            url: '<?php echo site_url() ?>/form/search_school',
            type: 'POST',
            data: 'dist=' + dist + '&divi=' + div,
            success: function (result) {
                document.getElementById('school').innerHTML = result;
            }

        });
    }
    function all_story() {
        var dist = document.getElementById("ddl2").value;
        var div = document.getElementById("ddl").value;
        var school = document.getElementById("school").value;
//alert(school);
        $.ajax({
            url: '<?php echo site_url() ?>/form/search_story',
            type: 'POST',
            data: 'dist=' + dist + '&divi=' + div + '&school=' + school,
            success: function (result) {
                document.getElementById('main_content').innerHTML = result;
            }

        });
    }
    document.addEventListener('play', function (e) {
        var audios = document.getElementsByTagName('audio');
        var len = audios.length;

        for (var i = 0, len = audios.length; i < len; i++) {

            if (audios[i] != e.target) {

                audios[i].pause();
                document.getElementById("story_pa-" + i).classList.remove("icon-pause");
                document.getElementById("story_pa-" + i).classList.add("icon-play-circle");



            } else {
                audios[i].play();
                document.getElementById("story_pa-" + i).classList.remove("icon-play-circle");
                document.getElementById("story_pa-" + i).classList.add("icon-pause");




            }


        }
    }, true);

</script>

<?php //var_dump($this->data);  ?>

<div class="row" style="margin-top: 40px">
    <div class="col-md-6  col-md-offset-2" style="margin-top: 4px">
        <div class="row">
            <div class="col-md-12" style="width: 80%;
                 float:right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2"
                           style="background-color: rgba(90, 57, 53, 0.79);color:white" id="search" onkeyup="search_story()">
                    <span class="input-group-addon " id="basic-addon2"
                          style="color: white;background: rgba(90, 57, 53, 0.79);"><i
                            class="icon icon-search"></i></span>
                </div>
            </div>
        </div>
        <div id="main_content">
            <?php
            $i = 0;
            foreach ($results as $row) {
                ?>
                <div class="row"  id=""style="background-color: #EE4323; border-radius: 4px;    margin-top: 10px;    margin-right: 0px;padding: 6px">

                    <div class="col-md-2" style="text-align: center"><img src="<?php echo $row['picture'] ?>"
                                                                          style="height: 40px;width: 40px"></div>
                    <div class="col-md-8" style="text-align: center">
                        <div class="row">

                            <p> <h5 style="color: white"><?php echo html_entity_decode($row['teller_name']); ?></h5></p>
                            <p style="color: white;font-size: 8px"> <?php echo $row['story_des'] ?></p>

                        </div>
                    </div>
                    <div class="col-md-2" style="margin-top: 15px;text-align: center">

                        <p><i id="story_pa-<?php echo $i; ?>" class="icon icon-play-circle icon-2x" style="color: white" onclick="togglePlaystory(<?php echo $i ?>)"></i><small style="color: #dad7d7">১০:১৫</small></p>
                    </div>

                    <audio id="story-<?php echo $i++ ?>" src="<?php echo base_url() . $row['story_link'] ?>" preload="none"></audio>
                </div>
            <?php } ?>
            <ul class="pagination pull-right">
                <?php
                foreach ($link as $link) {
                    echo "<li>" . $link . "</li>";
                }
                ?>
            </ul>
        </div>


    </div>


    <div class=" col-md-4 col-sm-12 col-xs-12 pull-right " >
        <div style="" class="left_panel">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;padding: 7px;">
                    <select class="classic" onchange="configureDropDownLists(this, document.getElementById('ddl2'))" id="ddl">
                        <option selected disabled>বিভাগের নাম</option>
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
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;padding: 7px;" id="">

                    <select class="classic" id="ddl2" onchange="story_dist(this, document.getElementById('ddl'));search_school()">
                        <option selected disabled> জেলার নাম </option>


                    </select>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;padding: 7px;">

                    <select class="classic" id="school" onchange="all_story()">

                        <option disabled selected>বিদ্যালয়ের নাম</option>


                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center;padding: 5px;margin: 0px">
                    <input type="submit" value="খোজ করুন" role="button" class="btn"style="background-color: #EE4323;color: white;margin-left:98px">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center;
                     margin-top: 49px;">
                    <img src="<?php echo base_url() ?>/images/Golpo Shono Logo.png" style="width: 60%">
                </div>
            </div>


        </div>
    </div>
</div>
</div>