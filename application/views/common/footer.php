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
            "aaSorting": [],
            'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': 0,
                }]

        });

        $("#example2").DataTable({
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

    console.log(window.location.hostname);
    function equalHeights() {
        $(".element").removeAttr('style');
        var heights = $(".element").map(function() {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);
        $(".element").height(maxHeight);
    }

    $(document).ready(function() {

        $("a[data-href]").click(function(e) {
            window.location = window.location.protocol + '//' + window.location.host + window.location.pathname + '#' + $(this).attr("data-href");
            location.reload();
        });

        var x = location.hash;
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };
        setTimeout(function() {
            if (isMobile.any()) {
                var e = $("[data-id='" + x.replace('#', '') + "']");
                if (e.length) {
                    $('html,body').animate({
                        scrollTop: e.offset().top - 20
                    }, 800);
                }
            }
        }, 500);


        equalHeights();
        $(window).resize(function() {
            equalHeights();
            setTimeout(function() {
                equalHeights();
            }, 500);
        });

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