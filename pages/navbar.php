<div class="sticky-top" style="background-color: #f8f9fa;">
    <div class="topbar">
        <div class="container">
            <!-- Topbar Navigation -->
            <ul class="loginbar pull-right" style="padding: 0px;">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a style="text-transform: none;">raydelojeda@hotmail.com</a>
                </li>
                <li class="topbar-devider"></li>
                <li>
                    <i class="fa fa-phone"></i>
                    <a>(239) 333 5877</a>
                </li>
            </ul>
            <!-- End Topbar Navigation -->
        </div>
    </div>

    <div class="header">
        <div class="navbar-default" role="navigation">
            <div class="container">

                <nav class="navbar-expand-lg navbar-light ">
                    <button style="margin-bottom:10px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="index.html">
                            <img id="logo-header" src="../assets/img/logo1-default.png1" alt="Logo">
                        </a>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-link="home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-link="timeline.php">Work & Education</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-link="projects.php">Projects</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-link="erd.php">DB Design</a>
                            </li>

                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function()
    {
        $('.nav-link').on('click', function ()
        {
            var this_one=this;

            $('.nav-item').each(function () {
                $(this).removeClass('active');
                $(this).parent().attr('style', '');
            });

            $(this_one).parent().addClass('active');

            var url=$(this_one).attr('data-link');

            $.ajax({
                url: '<?php echo $base_url;?>' + '/pages/' + url
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    $('#main-content').empty();
                    $('#main-content').html(response);
                }
            });
        });
    });

</script>