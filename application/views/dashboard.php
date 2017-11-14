<?php //var_dump($this->data)?>
<script>

    function delete_banner(id, form_id) {
        var r = confirm("Do you want to delete?");
        //alert(form_id);
        if (r == true) {

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url();?>/admin/delete',
                data: '&deleteId=' + id + '&form_id=' + form_id,
                success: function (data) {
                    Alert("Row deleted", "Success");
                    location.reload();

                }

            })


        }
        else {
            //return false;
        }
    }
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-6 ">
            <table class="table table-responsive table-hover table-striped">
                <tr class="warning">
                    <th>SI</th>
                    <th>School Name</th>
                    <th>Division</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>

                </tr>
                <?php $j = 1;
                foreach ($this->data['school'] as $row) { ?>
                    <tr>
                        <td><?php echo $j++; ?></td>
                        <td><?php echo $row['school_name'] ?></td>
                        <td><?php echo $row['city'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td>
                            <a href="<?php echo site_url() . '/admin/sc_edit_form/' . $row['id'] ?>"><i
                                        class="icon icon-pencil"></i></a>
                            <a href="" onclick="delete_banner(<?php echo $row['id'] ?>,'school')"><i
                                        class="icon icon-remove"></i></a>
                            <a href="<?php echo site_url() ?>/admin/school_name"><i class="icon icon-plus"></i></a>
                        </td>

                    </tr>
                <?php } ?>
            </table>

        </div>
        <div class="col-md-6 col-xs-6 ">
            <table class="table  table-hover table-striped">
                <tr class="warning">
                    <th>SI</th>
                    <th>Story Name</th>
                    <th>Teller Name</th>
                    <th>School Name</th>

                    <th>Action</th>
                </tr>
                <?php $i = 1;
                foreach ($this->data['story'] as $row) { ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['story_des'] ?></td>
                        <td><?php echo $row['teller_name'] ?></td>
                        <td><?php echo $row['school_name'] ?></td>

                        <td>
                            <a href="<?php echo site_url() . '/admin/st_edit_form/' . $row['id'] ?>"><i
                                        class="icon icon-pencil"></i></a>
                            <a href=""onclick="delete_banner(<?php echo $row['id'] ?>,'story')"><i class="icon icon-remove"></i></a>
                            <a href="<?php echo site_url() ?>/admin/story_info"><i class="icon icon-plus"></i></a>
                    </tr>
                <?php } ?>


            </table>

        </div>


    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="success pull-right">
                <tr class="info">
                    <td class="pull-right">
                        <a href="<?php echo site_url() ?>/admin/table_view/1" role="button" class="btn btn-xs btn-success">View all</a></td>
                </tr>
            </div>
        </div>
        <div class="col-md-6">
            <div class="success pull-right">
                <tr class="info">
                    <td class="pull-right">
                        <a href="<?php echo site_url() ?>/admin/table_view/2" role="button" class="btn btn-xs btn-success">View all</a></td>
                </tr>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover table-striped">
                <tr>
                    <th>SI</th>
                    <th>Playlist Name</th>
                    <th>File Name</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1;
                foreach ($this->data['playlist'] as $row) { ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['file_name'] ?></td>

                        <td>
                            <a href="<?php echo site_url() . '/admin/sc_edit_form/' . $row['id'] ?>"><i
                                        class="icon icon-pencil"></i></a>
                            <a href="" onclick="delete_banner(<?php echo $row['id'] ?>,'playlist')"><i class="icon icon-remove"></i></a>
                            <a href=""><i class="icon icon-plus"></i></a>
                    </tr>
                <?php } ?>
            </table>


        </div>
        <div class="col-md-6">
            <table class="table table-responsive table-striped">
                <tr>
                    <th>SI</th>
                    <th>Schedule Time</th>
                    <th>Schedule Date</th>
                    <th>Playlist Name</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1;
                foreach ($this->data['schedule'] as $row) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['start_time']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['playlist_name']; ?></td>
                        <td>
                            <a href="<?php echo site_url() . '/admin/sc_edit_form/' . $row['id'] ?>"><i
                                        class="icon icon-pencil"></i></a>
                            <a href=""><i class="icon icon-remove"></i></a>
                            <a href=""><i class="icon icon-plus"></i></a>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="success pull-right">
                <tr class="info">
                    <td class="pull-right">
                        <a href="" role="button" class="btn btn-xs btn-success">View all</a></td>
                </tr>
            </div>
        </div>
        <div class="col-md-6">
            <div class="success pull-right">
                <tr class="info">
                    <td class="pull-right">
                        <a href="" role="button" class="btn btn-xs btn-success">View all</a></td>
                </tr>
            </div>

        </div>
    </div>
</div>