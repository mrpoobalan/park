<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <div class="tabcontent">
        <h4 class="animated zoomIn">Back Flushing Report</h4>

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
                        <tr>
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
                <table   id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr>
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

                    &nbsp;<a href="<?php echo base_url(); ?>projectmaster/createBlackflush"><button class="btn btn-primary" type="button">Create Backflush</button></a>
                </div>
                <div class="box-footer">

                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div>
</div>