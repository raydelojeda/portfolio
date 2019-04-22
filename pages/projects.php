<?php require 'config.php';?>
<link rel="stylesheet" href="../assets/css/pages/portfolio-v1.css">

<style>

    .thumbnail_container {
        position: relative;
        width: 100%;
        padding-bottom: 48%;
        float:left;
        margin-bottom: 0px;
    }

    .thumbnail {
        position:absolute;
        width:100%;
        height:100%;
        background:#eee;
        text-align:center;
    }
    .thumbnail .img {
        position: absolute;
        top: -10px;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

</style>

<!--=== Content Part ===-->
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="view view-tenth">

                <div style="background-color:#eee;" class="thumbnail_container">
                    <div class="thumbnail">
                        <img class="img-responsive" src="<?php echo $base_url;?>/assets/img/apps/acs/0.png" alt="Advanced Cosmetic Surgery" />
                    </div>
                </div>

                <div class="mask">
                    <h2>Advanced Cosmetic Surgery</h2>
                    <p>ACS is a portal web where patients can log in and book appointments in the schedule of esthetician doctors<?php echo $base_url;?>.</p>
                    <a href="#" data-link="acs.php" class="info">View More</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="view view-tenth">

                <div style="background-color:#eee;" class="thumbnail_container post_media">
                    <div class="thumbnail">
                        <img class="img-responsive" src="<?php echo $base_url;?>/assets/img/apps/ehhs/1.png" alt="EHHS" />
                    </div>
                </div>

                <div class="mask">
                    <h2>EHHS</h2>
                    <p>Esperanza Home Health Service is a software to manage the employees and their documentation, clients, jobs<?php echo $base_url;?>.</p>
                    <a href="#" data-link="ehhs.php" class="info">View More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="view view-tenth">

                <div style="background-color:#eee;" class="thumbnail_container">
                    <div class="thumbnail">
                        <img class="img-responsive" src="<?php echo $base_url;?>/assets/img/apps/airbosch/1.png" alt="Bosch Airconditioning" />
                    </div>
                </div>

                <div class="mask">
                    <h2>Bosch Airconditioning Website</h2>
                    <p>Website of the Bosch Air Conditioning company located in Tampa, Florida.</p>
                    <a href="#" data-link="atenas.php" class="info">View More</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="view view-tenth">

                <div style="background-color:#eee;" class="thumbnail_container post_media">
                    <div class="thumbnail">
                        <img class="img-responsive" src="<?php echo $base_url;?>/assets/img/apps/mclopez/MCLopez%201.png" alt="MCLopez" />
                    </div>
                </div>

                <div class="mask">
                    <h2>MCLopez Website</h2>
                    <p>Website of the MCLopez business located in Ambato, Ecuador.</p>
                    <a href="#" data-link="mclopez.php" class="info">View More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="view view-tenth">

                <div style="background-color:#eee;" class="thumbnail_container">
                    <div class="thumbnail">
                        <img class="img-responsive" src="<?php echo $base_url;?>/assets/img/apps/atenas/Atenas%2012.png" alt="Unidad Educativa Atenas" />
                    </div>
                </div>

                <div class="mask">
                    <h2>Atenas Website</h2>
                    <p>Website of the School Atenas located in Ambato, Ecuador.</p>
                    <a href="#" data-link="atenas.php" class="info">View More</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="view view-tenth">

                <div style="background-color:#eee;" class="thumbnail_container post_media">
                    <div class="thumbnail">
                        <img class="img-responsive" src="<?php echo $base_url;?>/assets/img/apps/minerva/1.png" alt="Minerva" />
                    </div>
                </div>

                <div class="mask">
                    <h2>ERP Minerva</h2>
                    <p>Suite of modules that manages core business processes such as: Accounting, Sales, Human Resources, Academic, Library, Admissions and enrollment, etc...</p>
                    <a href="#" data-link="minerva.php" class="info">View More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="view view-tenth">

                <div style="background-color:#eee;" class="thumbnail_container">
                    <div class="thumbnail">
                        <img class="img-responsive" src="<?php echo $base_url;?>/assets/img/apps/ipcuba/8.png" alt="IPCuba" />
                    </div>
                </div>

                <div class="mask">
                    <h2>IPCuba</h2>
                    <p>The main goal of this software is to serve as data entry of more than 20 000 prices per month around the country and to compute this data to get the inflation in Cuba. It is hosted in a main server...</p>
                    <a href="#" data-link="ipcuba.php" class="info">View More</a>
                </div>
            </div>
        </div>


    </div>
</div>


<script type="text/javascript">

    $(document).ready(function()
    {
        $('.info').on('click', function ()
        {
            var url=$(this).attr('data-link');

            $.ajax({
                url: '<?php echo $base_url;?>' + '/pages/apps/' + url
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    $('#main-content').html(response);
                }
            });
        });
    });

</script>