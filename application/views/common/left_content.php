<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="icontab">
                <h4 class="animated fadeInDownBig"><a href="<?php echo base_url(); ?>projectmaster" style="color:white;" role="button">Project Process</a></h4>
                <div class="icntabs">
                    <div class="tabbox animated zoomIn element">
                        <a href="<?php echo base_url(); ?>projectmaster/airSystem"  id="airSystem">
                            <p><i class="fa fa-soundcloud" id="airSystemli"></i></p>
                            <p>Air System Pre-commissioning Checks</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="<?php echo base_url(); ?>projectmaster/backflush" id="backflush">
                            <p><i class="fa fa-backward"  id="backflushli"></i></p>
                            <p>Back Flushing Report</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="<?php echo base_url(); ?>projectmaster/directvol" id="directvol">
                            <p><i class="fa fa-volume-up" id="directvolli"></i></p>
                            <p>Direct Volume Grille Record</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-chain-broken"></i></p>
                            <p>Duct Leakage</p>
                        </a>
                    </div>
                </div>
                <div class="icntabs">
                    <div class="tabbox animated zoomIn element">
                        <a href="#" class="active">
                            <p><i class="fa fa-soundcloud selected"></i></p>
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

                <div class="icntabs">
                    <div class="tabbox animated zoomIn element">
                        <a href="#" class="active">
                            <p><i class="fa fa-soundcloud selected"></i></p>
                            <p>Grille Balance</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-backward"></i></p>
                            <p>Hws Blending Valves</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-volume-up"></i></p>
                            <p>Intial Grille Volume Test </p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-chain-broken"></i></p>
                            <p>Installation Check Air </p>
                        </a>
                    </div>
                </div>

                <div class="icntabs">
                    <div class="tabbox animated zoomIn element">
                        <a href="#" class="active">
                            <p><i class="fa fa-soundcloud selected"></i></p>
                            <p>Installation Check Water</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-backward"></i></p>
                            <p>Iris Damper</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-volume-up"></i></p>
                            <p>Mains Chlorination</p>
                        </a>
                    </div>
                    <div class="tabbox animated zoomIn element">
                        <a href="#">
                            <p><i class="fa fa-chain-broken"></i></p>
                            <p>Mixer Valve Set</p>
                        </a>
                    </div>
                </div>
                <div class="loadmre">
                    <a href="javascript:;" class="page-backward"><i class="fa fa-step-backward"></i></a>
                    <span class="currentPagePagination"></span>/<span class="totalPagesPagination"></span>
                    <a href="javascript:;" class="page-forward"><i class="fa fa-step-forward"></i></a>
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

                    jQuery("#airSystemli").addClass('selected');
                    jQuery("#backflushli").removeClass('selected');
                    jQuery("#directvolli").removeClass('selected');
                }
                else if (activeclass == 'backflush' || activeclass == 'createBlackflush' || activeclass == 'edit_black_flush' || activeclass == 'delete_backflush') {
                    jQuery("#backflush").addClass('active');
                    jQuery("#airSystem").removeClass('active');
                    jQuery("#directvol").removeClass('active');

                    jQuery("#backflushli").addClass('selected');
                    jQuery("#airSystemli").removeClass('selected');
                    jQuery("#directvolli").removeClass('selected');

                } else if (activeclass == 'directvol' || activeclass == 'create_direct_volume' || activeclass == 'edit_direct_vol' || activeclass == 'delete_direct_vol') {
                    jQuery("#directvol").addClass('active');
                    jQuery("#airSystem").removeClass('active');
                    jQuery("#backflush").removeClass('active');

                    jQuery("#directvolli").addClass('selected');
                    jQuery("#airSystemli").removeClass('selected');
                    jQuery("#backflushli").removeClass('selected');
                } else {
                    jQuery("#airSystem").addClass('active');
                    jQuery("#backflush").removeClass('active');
                    jQuery("#directvol").removeClass('active');

                    jQuery("#airSystemli").addClass('selected');
                    jQuery("#backflushli").removeClass('selected');
                    jQuery("#directvolli").removeClass('selected');
                }
            });
        </script>