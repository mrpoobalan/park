<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <div class="content">

        <h4 class="animated zoomIn">Direct Volume Grille Record Sheet</h4>
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
                <table   id="example2" class="table table-bordered table-striped">
                    <thead>

                        <tr style="font-size: 12px !important;">
                            <th>SI No</th>
                            <th>Reference</th>
                            <th>Grille size</th>
                            <th>Design Volume</th>
                            <th>Final Volume</th>
                            <th>Correction Factor</th>
                            <th>Actual Volume</th>
                            <th>Percentage</th>
                            <th>Settings</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($direct_volume as $result) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['reference']; ?></td>
                                <td><?php echo $result['grillesize']; ?></td>
                                <td><?php echo $result['designvolume']; ?></td>
                                <td><?php echo $result['finalvolume']; ?></td>
                                <td><?php echo $result['correctionfactor']; ?></td>
                                <td><?php echo $result['actualvolume']; ?></td>
                                <td><?php echo $result['percentage']; ?></td>
                                <td><?php echo $result['settings']; ?></td>
                                <td><?php echo $result['comments']; ?></td>
                            </tr>
                            <?php $i++; ?>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

                <div class="box-footer">
                    <a href="<?php echo base_url(); ?>projectmaster/create_direct_volume"><button class="btn btn-primary" type="button">Create Direct Volume</button></a>
                </div>
                <div class="box-footer">

                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div>
</div>