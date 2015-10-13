<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <div class="content">
        <h4 class="animated zoomIn">Back Flushing Report</h4>
        <form role="form" method="post" action="<?php echo base_url(); ?>projectmaster/createBlackflush">
            <div class="box animated zoomIn">

                <div class="box-body ">
                    <div class="form-group">
                        <label >Reference</label>
                        <input type="text" class="form-control" name="reference" id="username" placeholder="Reference" value="" required ><span style='color: red'><?php echo form_error('reference'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Temperature</label>
                        <input type="text" class="form-control" name="temperature" id="temperature" placeholder="Temperature" value="" required><span style='color: red'><?php echo form_error('temperature'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Comments</label>
                        <textarea name="comments" id="comments" class="form-control custom-control" rows="5" style="resize:none" <?php echo set_value('comments'); ?>></textarea>
                    </div>
                    <div >
                        <?php if (empty($airsystem)) { ?>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        <?php } ?>
                        &nbsp;<a href="<?php echo base_url(); ?>projectmaster/backflush"><button class="btn btn-primary" type="button">Back  </button></a>
                    </div>

                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </form>
    </div>
</div>