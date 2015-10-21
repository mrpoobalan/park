<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//set_value('reference')
?>

<?php
$url = $this->uri->segment(2);
$id = $this->uri->segment(3);
?>

<div class="col-md-9">
    <div id="restables" class="tabcontent">
        <h4 class="animated zoomIn">Direct Volume Grille Record Sheet</h4>
        <form role="form" method="post" action="<?php echo base_url(); ?>projectmaster/<?php echo $url; ?>/<?php echo $id; ?>">
            <div class="box animated zoomIn">
                <?php if (isset($insert_id)) { ?>
                    <div style="align:center;color:red">Direct Volume created successfully</div>
                <?php } ?>
                <div class="box-body ">
                    <div class="form-group">
                        <label >Reference</label>
                        <input type="text" class="form-control" name="reference" id="username" placeholder="Reference" value="<?php echo isset($direct_volume['reference']) ? $direct_volume['reference'] : ""; ?>" required ><span style='color: red'><?php echo form_error('reference'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Grille Size (mm)</label>
                        <input type="text" class="form-control" name="grille" id="grille" placeholder="Grille Size (mm)" value="<?php echo isset($direct_volume['grillesize']) ? $direct_volume['grillesize'] : ""; ?>" required><span style='color: red'><?php echo form_error('grille'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Design Volume l/s</label>
                        <input type="text" class="form-control" name="design" id="design" placeholder="Design Volume l/s" value="<?php echo isset($direct_volume['designvolume']) ? $direct_volume['designvolume'] : ""; ?>" required><span style='color: red'><?php echo form_error('design'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Final Volume l/s</label>
                        <input type="text" class="form-control" name="finalvol" id="finalvol" placeholder="Final Volume l/s" value="<?php echo isset($direct_volume['finalvolume']) ? $direct_volume['finalvolume'] : ""; ?>" required><span style='color: red'><?php echo form_error('finalvol'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Correction Factor</label>
                        <input type="text" class="form-control" name="correctionfact" id="correctionfact" placeholder="Correction Factor" value="<?php echo isset($direct_volume['correctionfactor']) ? $direct_volume['correctionfactor'] : ""; ?>" required><span style='color: red'><?php echo form_error('correctionfact'); ?></span>
                    </div>

                    <div class="form-group">
                        <label >Setting</label>
                        <input type="text" class="form-control" name="settings" id="settings" placeholder="Setting" value="<?php echo isset($direct_volume['settings']) ? $direct_volume['settings'] : ""; ?>" required><span style='color: red'><?php echo form_error('settings'); ?></span>
                    </div>
                    <div class="form-group">
                        <label >Comments</label>
                        <textarea name="comments" id="comments" class="form-control custom-control" rows="5" style="resize:none" ><?php echo isset($direct_volume['comments']) ? $direct_volume['comments'] : ""; ?></textarea>
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