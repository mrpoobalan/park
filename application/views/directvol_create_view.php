<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <div class="content">
        <h4 class="animated zoomIn">Direct Volume Grille Record Sheet</h4>
        <form role="form" method="post" action="<?php echo base_url(); ?>projectmaster/create_direct_volume">
            <div class="box animated zoomIn">

                <div class="box-body ">
                    <div class="form-group">
                        <label >Reference</label>
                        <input type="text" class="form-control" name="reference" id="username" placeholder="Reference" value="<?php echo set_value('reference'); ?>" required ><span style='color: red'><?php echo form_error('reference'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Grille Size (mm)</label>
                        <input type="text" class="form-control" name="grille" id="grille" placeholder="Grille Size (mm)" value="<?php echo set_value('grille'); ?>" required><span style='color: red'><?php echo form_error('grille'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Design Volume l/s</label>
                        <input type="text" class="form-control" name="design" id="design" placeholder="Design Volume l/s" value="<?php echo set_value('design'); ?>" required><span style='color: red'><?php echo form_error('design'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Final Volume l/s</label>
                        <input type="text" class="form-control" name="finalvol" id="finalvol" placeholder="Final Volume l/s" value="<?php echo set_value('finalvol'); ?>" required><span style='color: red'><?php echo form_error('finalvol'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Correction Factor</label>
                        <input type="text" class="form-control" name="correctionfact" id="correctionfact" placeholder="Correction Factor" value="<?php echo set_value('correctionfact'); ?>" required><span style='color: red'><?php echo form_error('correctionfact'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Setting</label>
                        <input type="text" class="form-control" name="settings" id="settings" placeholder="Setting" value="<?php echo set_value('settings'); ?>" required><span style='color: red'><?php echo form_error('settings'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Comments</label>
                        <textarea name="comments" id="comments" class="form-control custom-control" rows="5" style="resize:none" ><?php echo set_value('comments'); ?></textarea>
                    </div>
                    <div>

                        <button class="btn btn-primary" type="submit">Submit</button>

                        &nbsp;<a href="<?php echo base_url(); ?>projectmaster/directvol"><button class="btn btn-primary" type="button">Back  </button></a>
                    </div>

                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </form>
    </div>
</div>