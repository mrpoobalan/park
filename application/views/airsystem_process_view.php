<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <div class="tabcontent">
        <h4 class="animated zoomIn">Air System Pre-commissioning Checks</h4>
        <?php
//        echo "<pre>";
//        print_r($project);
//        exit;
        ?>
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

        <?php
        //echo "<pre>";
        //print_r($process);
        //exit;
        ?>
        <form role="form" method="post">
            <div class="box animated zoomIn">
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tbody>

                            <?php
                            // echo "<pre>";
                            // print_r($airsystem);
//                            print_r($process);
//                            exit;
                            $process1 = "";
                            foreach ($process as $processstep) {

                                if ($processstep['processtitle'] != $process1) {
                                    ?>

                                    <tr>
                                        <th><?php echo $processstep['processtitle']; ?></th>
                                        <?php if ($processstep['processtitle'] == 'General') { ?>
                                            <th>Check</th>
                                            <th>Comments</th>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                <tr>
                            <input type="hidden" class="form-control" name="check<?php echo $processstep['id']; ?>[propertyname]" id="propertyname<?php echo $processstep['id']; ?>" value="<?php echo $processstep['projectprocess']; ?>" >
                            <td><?php echo $processstep['projectprocess']; ?></td>
                            <td>
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
    <!--                            <td><input type="textarea" class="form-control" name="check<?php echo $processstep['id']; ?>[comments]" id="comments<?php //echo $processstep['id'];                                                                          ?>" value="<?php
                            if (!empty($airsystem)) {
                                $airsystem[$processstep['id'] - 1]['comments'];
                            }
                            ?>" ></td>-->
                            <td><textarea name="check<?php echo $processstep['id']; ?>[comments]" class="form-control custom-control" rows="1" style="resize:none" <?php echo set_value($processstep['id'] . '[comments]'); ?>><?php
                                    if (!empty($airsystem)) {
                                        echo $airsystem[$processstep['id'] - 1]['comments'];
                                    }
                                    ?></textarea>
                            </td>
                            </tr>

                            <?php
                            $process1 = $processstep['processtitle'];
                        }
                        ?>


                        </tbody>
                    </table>

                    <div class="animated zoomIn">
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <td>Comments</td>
                                        <td ><textarea id="projproc_comments" name="projproc_comments" class="form-control custom-control" rows="5" col="15" style="resize:none" <?php echo set_value('projproc_comments'); ?>><?php
                                                if (!empty($projectcomments)) {
                                                    echo $projectcomments['comments'];
                                                }
                                                ?></textarea></td>

                                    </tr>
                                </tbody></table>
                        </div>
                    </div>

                    <div class="box-footer">
                        <?php if (empty($airsystem)) { ?>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        <?php } ?>
                        &nbsp;<a href="<?php echo base_url(); ?>projectmaster"><button class="btn btn-primary" type="button">Back  </button></a>
                    </div>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </form>
    </div>
</div>