<?php require_once 'header.php';?>

<body>
    <div class="wrapper">

<?php require_once 'navbar.php';?>

        <!--=== Content Part ===-->
        <div class="container content" style="margin-top: 0px;">
            <div class="row">
                <!-- Begin Content -->
                <div class="col-md-12">

                    <?php //require_once 'timeline.php'?>
                    <?php require_once 'home.php'?>

                </div>
                <!-- End Content -->
            </div>
        </div><!--/container-->
        <!--=== End Content Part ===-->


        <div id="myModalimg" class="modalimg">
            <span class="closeimg">&times;</span>
            <img class="modalimg-content" id="img01" style="image-orientation: from-image;">
            <div id="caption"></div>
        </div>

<?php require_once 'footer.php';?>

<script>

    $(document).ready(function ()
    {

        $('.myImg').on('click', function () {
            var element = $(this);

            var modal = document.getElementById('myModalimg');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            modal.style.display = "block";

            if (typeof element.attr("src") === 'undefined')
                modalImg.src = element.attr("data-link");
            else
                modalImg.src = element.attr("src");

            if(element.attr("alt")!="" && element.attr("alt") === 'undefined')
            captionText.innerHTML = element.attr("alt");

            var span = document.getElementsByClassName("closeimg")[0];

            span.onclick = function() {
                modal.style.display = "none";
            }
        });

    });


</script>
