<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-9">
    <div id="restables" class="tabcontent">
        <h4 class="animated zoomIn">Air System Pre-commissioning Checks</h4>
        <div class="box animated zoomIn">
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <th>Project</th>
                            <th><?php echo $project['project']; ?></th>
                            <th>Ref:</th>
                            <th><?php echo $project['refno']; ?></th>
                            <th>Rev No.</th>
                            <th>1011</th>
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
                            <th>Sheet</th>
                            <th><?php echo $project['totnopages'] ?></th>
                            <th>of</th>
                            <th>100</th>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

        <form role="form" method="post">
            <div class="box animated zoomIn">
                <div class="box-body no-padding">
                    <table class="table table-condensed">

                        <?php
                        $process1 = "";
                        $i = 0;

                        foreach ($process as $processstep) {
                            //echo $processstep['processtitle'] . '<br>';
                            ?>
                            <?php if (($i == 0 && $processstep['processtitle'] == 'General') || ($i == 6 && $processstep['processtitle'] == 'Fan Mechanical Checks') || ($i == 12 && $processstep['processtitle'] == 'Electrical Checks') || ($i == 14 && $processstep['processtitle'] == 'Initial Start')) { ?>

                                <thead >
                                    <tr>
                                        <th><?php echo $processstep['processtitle']; ?></th>
                                        <?php if ($i == 0) { ?>
                                            <th>Check</th>
                                            <th>Comments</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php } ?>


                                <tr >

                            <input type="hidden" class="form-control" name="check<?php echo $processstep['id']; ?>[propertyname]" id="propertyname<?php echo $processstep['id']; ?>" value="<?php echo $processstep['projectprocess']; ?>" >
                            <td data-title="General"><?php echo $processstep['projectprocess']; ?></td>
                            <td data-title="Check">
                                <?php
                                $checkedyes = "";
                                $checkedno = "";
                                $checkedna = "";
                                if (!empty($airsystem)) {
                                    if ($airsystem[$processstep['id'] - 1]['propertycheck'] == "Y") {
                                        $checkedyes = "checked";
                                    } elseif ($airsystem[$processstep['id'] - 1]['propertycheck'] == "N") {
                                        $checkedno = "checked";
                                    } elseif ($airsystem[$processstep['id'] - 1]['propertycheck'] == "N/A") {
                                        $checkedna = "checked";
                                    }
                                }
                                ?>
                                <label><input  type="radio" <?php echo $checkedyes; ?> name="check<?php echo $processstep['id']; ?>[checkbox]" value="Y" <?php echo set_radio('check' . $processstep['id'] . '[checkbox]', 'Y'); ?> required>Yes</label>
                                <label><input type="radio" <?php echo $checkedno; ?> name="check<?php echo $processstep['id']; ?>[checkbox]" value="N" <?php echo set_radio('check' . $processstep['id'] . '[checkbox]', 'N'); ?>>No</label>
                                <label><input type="radio" <?php echo $checkedna; ?> name="check<?php echo $processstep['id']; ?>[checkbox]" value="N/A" <?php echo set_radio('check' . $processstep['id'] . '[checkbox]', 'N/A'); ?>>N/A</label>
                            </td><span style='color: red'><?php echo form_error('check' . $processstep['id'] . '[checkbox]'); ?></span>

                            <td data-title="Comments"><textarea name="check<?php echo $processstep['id']; ?>[comments]" class="form-control custom-control" rows="1" style="resize:none" <?php echo set_value($processstep['id'] . '[comments]'); ?>><?php
                                    if (!empty($airsystem)) {
                                        echo $airsystem[$processstep['id'] - 1]['comments'];
                                    }
                                    ?></textarea>
                            </td>
                            </tr>

                            <?php
                            $process1 = $processstep['processtitle'];
                            $i++;
                        }
                        ?>
                        <tr>
                            <!--<td data-title="General"></td>-->
                            <td data-title="Comments" colspan="3"><span class="comm-hide">Comments</span><textarea class="comment-area" id="projproc_comments" name="projproc_comments" class="form-control custom-control" rows="5" col="15"><?php
                                    if (!empty($projectcomments)) {
                                        echo $projectcomments['comments'];
                                    } else {
                                        echo set_value('projproc_comments');
                                    }
                                    ?></textarea>
                            </td>

                        </tr>
                        </tbody>
                    </table>

                    <div class="box-footer">
                        <?php if (empty($airsystem)) { ?>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        <?php } ?>
                        &nbsp;<a href="<?php echo base_url(); ?>projectmaster"><button class="btn btn-primary" type="button">Back  </button></a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </form>
    </div>
</div>