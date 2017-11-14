<?php //var_dump($this->data['info'])?>
<div class="container">

    <div class="row">

        <div class="col-md-12" style="height:500px;overflow: scroll;overflow-y: visible">

            <?php if (isset($this->data['s']) && $this->data['s'] == 1) { ?>
                <h1>School Information</h1>
                <table class="table">
                    <tr>
                        <th>School Name</th>
                        <th>School Division</th>
                        <th>School Phone</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($this->data['info'] as $row) { ?>
                        <tr>
                            <td><?php echo isset($row['school_name']) ? $row['school_name'] : '' ?></td>
                            <td><?php echo isset($row['city']) ? $row['city'] : '' ?></td>
                            <td><?php echo isset($row['phone']) ? $row['phone'] : '' ?></td>
                            <td>
                                <a href="<?php echo site_url() . '/admin/st_edit_form/' . $row['id'] ?>"><i
                                            class="icon icon-pencil"></i></a>
                                <a href="" onclick="delete_banner(<?php echo $row['id'] ?>,'story')"><i
                                            class="icon icon-remove"></i></a>
                                <a href="<?php echo site_url() ?>/admin/story_info"><i class="icon icon-plus"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
            <?php if (isset($this->data['s']) && $this->data['s'] == 2) { ?>
                <h1>Story Information</h1>
                <table class="table">
                    <tr>
                        <th>Teller Name</th>
                        <th>School Name</th>
                        <th>Story Description</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($this->data['info'] as $row) { ?>
                        <tr>
                            <td><?php echo isset($row['teller_name']) ? $row['teller_name'] : '' ?></td>
                            <td><?php echo isset($row['school_name']) ? $row['school_name'] : '' ?></td>
                            <td><?php echo isset($row['story_des']) ? $row['story_des'] : '' ?></td>
                            <td>
                                <a href="<?php echo site_url() . '/admin/st_edit_form/' . $row['id'] ?>"><i
                                            class="icon icon-pencil"></i></a>
                                <a href="" onclick="delete_banner(<?php echo $row['id'] ?>,'story')"><i
                                            class="icon icon-remove"></i></a>
                                <a href="<?php echo site_url() ?>/admin/story_info"><i class="icon icon-plus"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>

        </div>


    </div>