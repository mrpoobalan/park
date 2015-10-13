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
                    <a href="#" id="directvolume">
                        <p><i class="fa fa-volume-up"></i></p>
                        <p>Direct Volume Grille Record</p>
                    </a>
                </div>
                <div class="tabbox animated zoomIn element">
                    <a href="<?php echo base_url(); ?>projectmaster">
                        <p><i class="fa fa-chain-broken"></i></p>
                        <p>Project Process</p>
                    </a>
                </div>
                <div class="loadmre">
                    <a href="#"><i class="fa fa-refresh"></i> Load More</a>
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
                }
                else if (activeclass == 'backflush') {
                    jQuery("#airSystem").removeClass('active');
                    jQuery("#backflush").addClass('active');
                }

            });
        </script>