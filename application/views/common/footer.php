<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div> <!--  closed <div class="container">-->
</div><!--  closed <div class="row">-->
<div class="footerlast">
    <div class="container">
        <div class="pull-right hidden-xs">
            Lorem Ipsum sinmple dummy text
        </div>
        <strong>Copyright &copy; 2015 <a href="#">Parklane</a>.</strong> All rights reserved.
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/backend/js/smooth-scroll.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/datepicker/bootstrap-datepicker.js"></script>


<script>
    $(function() {
        //Date Picker
        $('#startdate').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd',
        });

    });
</script>
<script>
    $(document).ready(function() {
        var heights = $(".element").map(function() {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);

        $(".element").height(maxHeight);
    });
</script>


</body>
</html>