<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//set_value('reference');
?>
<div class="col-md-9">
    <div id="restables"  class="tabcontent">
        <h4 class="animated zoomIn">Back Flushing Report</h4>
        <?php
        $url = $this->uri->segment(2);
        $id = $this->uri->segment(3);
        ?>
        <form role="form" method="post" action="<?php echo base_url(); ?>projectmaster/<?php echo $url; ?>/<?php echo $id; ?>">
            <input type="hidden"  value="<?php echo $id; ?>" name="editid" id="editid">
            <div class="box animated zoomIn">
                <?php if (isset($insert_id)) { ?>
                    <div style="align:center;color:red">Back Flushing created successfully</div>
                <?php } ?>
                <div class="box-body ">
                    <div class="form-group">

                        <label >Reference</label>
                        <input type="text" class="form-control" name="reference" id="username" placeholder="Reference" value="<?php echo isset($backflush['reference']) ? $backflush['reference'] : ""; ?>" required ><span style='color: red'><?php echo form_error('reference'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Temperature</label>
                        <input type="text" class="form-control" name="temperature" id="temperature" placeholder="Temperature" value="<?php echo isset($backflush['temperature']) ? $backflush['temperature'] : ""; ?>" required><span style='color: red'><?php echo form_error('temperature'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Comments</label>
                        <textarea name="comments" id="comments" class="form-control custom-control" rows="5" style="resize:none"><?php echo isset($backflush['comments']) ? $backflush['comments'] : ""; ?></textarea>
                    </div>
                    <div >

                        <button class="btn btn-primary" type="submit">Submit</button>

                        &nbsp;<a href="<?php echo base_url(); ?>projectmaster/backflush"><button class="btn btn-primary" type="button">Back  </button></a>
                    </div>

                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </form>
    </div>
</div>