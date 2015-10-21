<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div> <!--  closed <div class="row">-->
</div> <!--  closed <div class="container-fluid">-->
<div class="footerlast">
    <div class="container-fluid">
        <div class="righttxt">
            Lorem Ipsum sinmple dummy text
        </div>
        <strong>Copyright &copy; 2015 <a href="#">Parklane</a>.</strong> All rights reserved.
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/backend/js/smooth-scroll.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/datepicker/bootstrap-datepicker.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/backend/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/datatables/dataTables.bootstrap.min.js"></script>

<script>
    $(function() {
        //Date Picker
        $('#startdate').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd-mm-yyyy',
        });
        $("#example1").DataTable({
            "scrollX": true,
            "aaSorting": [],
            'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': 0,
                }]
        });

        $("#example2").DataTable({
            "scrollX": true,
            "aaSorting": [],
            'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': 0,
                }]
        });
    });

</script>
<script>
//    $(document).ready(function() {
//        var heights = $(".element").map(function() {
//            return $(this).height();
//        }).get(),
//                maxHeight = Math.max.apply(null, heights);
//        $(".element").height(maxHeight);
//    });

</script>


<script>

    function heightElement() {
        var set = 0;
        var check = setInterval(function() {
            e = $(".element");
            e.css({height: "auto"});
            var heights = e.map(function() {
                return $(this).height();
            }).get(),
                    maxHeight = Math.max.apply(null, heights);
            $(".element").height(maxHeight);
            set += 10;
            if (set >= 500) {
                clearInterval(check);
            }
        }, 10);
    }
    $(document).ready(function() {

        $(window).resize(heightElement);
        $(window).trigger('resize');

        //* Pagination *//
        var paginate = $('.icntabs'),
                paginationForward = $('.page-forward'),
                paginationBackward = $('.page-backward'),
                totalPages = $('.icntabs').length,
                pageNumber = 0;


        $('.totalPagesPagination').text(totalPages);

        function showPage(pageNo) {
            paginate.hide().eq(pageNo).show();
        }

        function activePaginationIcons() {
            paginationForward.removeClass('disable').removeAttr('disable');
            paginationBackward.removeClass('disable').removeAttr('disable');
            $('.currentPagePagination').text(pageNumber + 1);
            if (pageNumber == 0) {
                paginationBackward.addClass('disable').attr('disable', true);
            }
            if (pageNumber == (totalPages - 1)) {
                paginationForward.addClass('disable').attr('disable', true);
            }
        }

        showPage(pageNumber);
        activePaginationIcons();

        paginationForward.click(function() {
            if (paginationForward.hasClass('disable')) {
                e.preventDefault();
                return false;
            }
            pageNumber++;
            showPage(pageNumber);
            activePaginationIcons();
        });

        paginationBackward.click(function(e) {
            if (paginationBackward.hasClass('disable')) {
                e.preventDefault();
                return false;
            }
            pageNumber--;
            showPage(pageNumber);
            activePaginationIcons();
        });

    });

    function confirmDelete() {
        return confirm('Are you sure want to delete this Item?');
    }

</script>

</body>
</html>