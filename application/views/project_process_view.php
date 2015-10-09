<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/daterangepicker-bs3.css">
<script src="<?php echo base_url(); ?>assets/backend/js/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/js/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/js/jquery.inputmask.extensions.js"></script>
<div class="col-md-8">
    <div class="content">
        <h4 class="animated zoomIn">Project Master</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Information Sheet</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <?php
                        if (!empty($value)) {
                            $disabled = "disabled";
                        } else {
                            $disabled = "";
                        }
                        ?>

<!--action="<?php echo base_url(); ?>projectmaster/insert_project_master"-->
                        <form role="form" method="post" >
                            <!-- text input -->
                            <div class="form-group">
                                <label >Engineer Name</label>
                                <input type="text" class="form-control" name="engineername" id="engineername" placeholder="Engineer Name" value="<?php echo $value['engineername'] ? $value['engineername'] : set_value('engineername'); ?>" required <?php echo $disabled ?> >
                                <span style='color: red'><?php echo form_error('engineername'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Project</label>
                                <input type="text" class="form-control" name="project" id="project" placeholder="Project" value="<?php echo $value['project'] ? $value['project'] : set_value('project'); ?>" required <?php echo $disabled ?>>
                                <span style='color: red'><?php echo form_error('project'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>System</label>
                                <input type="text" class="form-control" name="system" id="system" placeholder="System" value="<?php echo $value['system'] ? $value['system'] : set_value('system'); ?>" required <?php echo $disabled ?>>
                                <span style='color: red'><?php echo form_error('system'); ?></span>
                            </div>
                            <!-- Date mm/dd/yyyy -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="datemask" type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group" class="input-group-addon">
                                <label>Date</label>
                                <!--<input type="text" class="form-control" >-->
                                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="startdate" id="startdate"  value="<?php echo $value['date'] ? $value['date'] : set_value('startdate'); ?>" required <?php echo $disabled ?>>
                                <span style='color: red'>Date Format:YYYY-MM-DD <?php echo '  ' . form_error('startdate'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Ref No</label>
                                <input type="text" class="form-control" name="refno" id="refno" placeholder="Ref No" value="<?php echo $value['refno'] ? $value['refno'] : set_value('refno'); ?>" required <?php echo $disabled ?>>
                                <span style='color: red'><?php echo form_error('refno'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Total No of Pages</label>
                                <input type="text" class="form-control" name="totpage" id="totpage" placeholder="Total No of Pages" value="<?php echo $value['totnopages'] ? $value['totnopages'] : set_value('totpage'); ?>" required <?php echo $disabled ?>>
                                <span style='color: red'><?php echo form_error('totpage'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Clients</label>
                                <input type="text" class="form-control" name="client" id="client" placeholder="Client" value="<?php echo $value['client'] ? $value['client'] : set_value('client'); ?>" required <?php echo $disabled ?>>
                                <span style='color: red'><?php echo form_error('client'); ?></span>
                            </div>
                            <?php if (empty($value)) { ?>
                                <div class="box-footer">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            <?php } ?>
                        </form>
                        <?php //}       ?>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>

        </div>
    </div>
</div>

<script>
    $(function() {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();
    });
</script>