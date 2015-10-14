<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <div class="tabcontent">

        <h4 class="animated zoomIn">Back Flushing Report</h4>
<!--        <a  href="<?php echo base_url(); ?>projectmaster/createBlackflush"><button class="btn btn-primary" type="button">Create Backflush</button></a>-->

        <div class="box animated zoomIn">
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <th>Project:</th>
                            <th><?php echo $project['project']; ?></th>
                            <th>Ref:</th>
                            <th><?php echo $project['refno']; ?></th>
                            <th>Rev No.</th>
                            <th>10</th>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

        <div class="box animated zoomIn">
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tbody>
                        <tr >
                            <th>System</th>
                            <th><?php echo $project['system'] ?></th>
                            <th>Sheet:</th>
                            <th><?php echo $project['totnopages'] ?></th>
                            <th>of</th>
                            <th>0</th>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

        <div class="box animated zoomIn">
            <div class="box-body no-padding">
                <?php if (isset($affect_row)) { ?>
                    <div style="color:red;padding-left:250px;">Back Flush Deleted Successfully</div>
                <?php } ?>
                <table  id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr style="font-size: 12px !important;">
                            <th>Action</th>
                            <th>SI No</th>
                            <th>Reference</th>
                            <th>Comments</th>
                            <th>Temperature</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($backflush as $result) {
                            ?>
                            <tr>
                                <td><a title="Edit" href="<?php echo base_url(); ?>projectmaster/edit_black_flush/<?php echo $result['id'] ?>"><span class="glyphicon glyphicon-pencil" ></span></a>&nbsp;&nbsp;<a title="Delete" onclick="return confirmDelete();" href="<?php echo base_url(); ?>projectmaster/delete_backflush/<?php echo $result['id'] ?>"><span class="glyphicon glyphicon-trash"style="color:red;"></span></a></td>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['reference']; ?></td>
                                <td><?php echo $result['comments']; ?></td>
                                <td><?php echo $result['temperature']; ?></td>

                            </tr>
                            <?php $i++; ?>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

                <div class="box-footer">
                    <a href="<?php echo base_url(); ?>projectmaster/createBlackflush"><button class="btn btn-primary" type="button">Create Backflush</button></a>
                </div>
                <div class="box-footer">

                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div>
</div>