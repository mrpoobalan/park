<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="icontab">
                <h4 class="animated fadeInDownBig">Lorem ipsum text</h4>
                <div class="tabbox animated zoomIn element">
                    <a href="<?php echo base_url(); ?>projectmaster/airSystem"  id="airSystem">
                        <p><i class="fa fa-soundcloud selected"></i></p>
                        <p>Air System Pre-commissioning Checks</p>
                    </a>
                </div>
                <div class="tabbox animated zoomIn element">
                    <a href="<?php echo base_url(); ?>projectmaster/backflush" id="backflush">
                        <p><i class="fa fa-backward"></i></p>
                        <p>Back Flushing Report</p>
                    </a>
                </div>
                <div class="tabbox animated zoomIn element">
                    <a href="<?php echo base_url(); ?>projectmaster/directvol" id="directvol">
                        <p><i class="fa fa-volume-up"></i></p>
                        <p>Direct Volume Grille Record</p>
                    </a>
                </div>
                <div class="tabbox animated zoomIn element">
                    <a href="#">
                        <p><i class="fa fa-chain-broken"></i></p>
                        <p>Duct Leakage</p>
                    </a>
                </div>
                <div id="hide" style="display:none;">
                    <div class="tabbox animated zoomIn element" >
                        <a href="#">
                            <p><i class="fa fa-soundcloud"></i></p>
                            <p>Electric Water Heaters</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-backward"></i></p>
                            <p>Fan Coil Performance</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-volume-up"></i></p>
                            <p>Fan Detail & Performance</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-chain-broken"></i></p>
                            <p>Fan Static</p>
                        </a>
                    </div>
                </div>
                <div class="loadmre" id="loadmore">
                    <a href="#"><i class="fa fa-refresh"></i> Load More</a>
                </div>
                <div class="loadmre" id="hidemore" style="display:none;">
                    <a href="#"><i class="fa fa-refresh"></i> Hide More</a>
                </div>
            </div>
        </div>
        <?php $uri = $this->uri->segment(2); ?>
        <script>

            jQuery(document).ready(function() {
                var activeclass = '<?php echo $uri; ?>';
                if (activeclass == 'airSystem') {
                    jQuery("#airSystem").addClass('active');
                    jQuery("#backflush").removeClass('active');
                    jQuery("#directvol").removeClass('active');
                }
                else if (activeclass == 'backflush' || activeclass == 'createBlackflush' || activeclass == 'edit_black_flush' || activeclass == 'delete_backflush') {
                    jQuery("#backflush").addClass('active');
                    jQuery("#airSystem").removeClass('active');
                    jQuery("#directvol").removeClass('active');
                } else if (activeclass == 'directvol' || activeclass == 'create_direct_volume' || activeclass == 'edit_direct_vol' || activeclass == 'delete_direct_vol') {
                    jQuery("#directvol").addClass('active');
                    jQuery("#airSystem").removeClass('active');
                    jQuery("#backflush").removeClass('active');
                } else {
                    jQuery("#airSystem").addClass('active');
                    jQuery("#backflush").removeClass('active');
                    jQuery("#directvol").removeClass('active');
                }


                $("#loadmore").click(function() {
                    $("#hide").show();
                    $("#hidemore").show();
                    $("#loadmore").hide();
                });
                $("#hidemore").click(function() {
                    $("#hide").hide();
                    $("#hidemore").hide();
                    $("#loadmore").show();
                });
            });
        </script>