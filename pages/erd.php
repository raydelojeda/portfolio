<?php require 'config.php';?>
<style>


    #all1{
        width:100%;
        height:100%;
        overflow-x:hidden;
        overflow-y: visible;
        position:relative;
    }


    a:link, a:visited {
        color: #333;
        border-bottom:1px solid #333;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        transition: .3s;
        text-decoration:none;
    }

    a:hover {
        color: #000;
        border-bottom:1px solid #000;
        text-decoration:none;
    }

    img{
        /*width:100%;*/
    }

    #allcontent{
        margin:0px auto 0 auto;
        height:850px;
        position:relative;
        -webkit-animation: comein 1.5s ease-in-out;
        -moz-animation: comein 1.5s ease-in-out;
        animation: comein 1.5s ease-in-out;
    }

    .zoom{
        position: absolute;
        bottom:-30px;
        right:20px;
        opacity:0.8;
        color:#000;
        padding:10px;
        background-color: #dddddd;
        font-size: 16px;
        display: none;
        z-index: 1001;
    }

    .zoom i{
        cursor: pointer;
    }


    .zoom:hover{
        font-size: 28px;
        -webkit-transition:font-size 0.5s;
        -moz-transition:font-size 0.5s;
        -o-transition:font-size 0.5s;
        transition:font-size 0.5s;
    }

    .portfolio{

        position:absolute;
        right:0;
        top:0;
        -webkit-transition: .2s;
        -moz-transition: .2s;
        transition: .2s;
        cursor:pointer;
        min-height: 800px;
        max-height: 800px;
        height: auto;
        background-color: #ffffff;
        overflow: hidden;
        border: solid 1px #dddddd;
    }

    .portfolio:not(.opened) img {
        max-width: 100%;
    }


    .portfolio:nth-child(1) {
        left: 0px;
    }
    .portfolio:not(.opened):nth-child(1):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: -5%;
    }


    .portfolio:nth-child(2) {
        left: 5%;
    }
    .portfolio:not(.opened):nth-child(2):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 0%;
    }

    .portfolio:nth-child(3) {
        left: 10%;
    }
    .portfolio:not(.opened):nth-child(3):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 5%;
    }

    .portfolio:nth-child(4) {
        left: 15%;
    }
    .portfolio:not(.opened):nth-child(4):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 10%;
    }

    .portfolio:nth-child(5) {
        left: 20%;
    }
    .portfolio:not(.opened):nth-child(5):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 15%;
    }

    .portfolio:nth-child(6) {
        left: 25%;
    }
    .portfolio:not(.opened):nth-child(6):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 20%;
    }

    .portfolio:nth-child(7) {
        left: 30%;
    }
    .portfolio:not(.opened):nth-child(7):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 25%;
    }

    .portfolio:nth-child(8) {
        left: 35%;
    }
    .portfolio:not(.opened):nth-child(8):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 30%;
    }

    .portfolio:nth-child(9) {
        left: 40%;
    }
    .portfolio:not(.opened):nth-child(9):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 35%;
    }

    .portfolio:nth-child(10) {
        left: 45%;
    }
    .portfolio:not(.opened):nth-child(10):hover {
        -webkit-transform: rotate(-4deg);
        -moz-transform: rotate(-4deg);
        transform: rotate(-4deg);
        left: 40%;
    }
    .opened {
        z-index: 1000;
        left:0 !important;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-box-shadow:0 0 3px rgba(0,0,0,0.3);
        -moz-box-shadow:0 0 3px rgba(0,0,0,0.3);
        box-shadow:0 0 3px rgba(0,0,0,0.3);
        overflow: scroll;
        max-width:100%;
    }

    .opened img{
        z-index:10;width:100%;
    }

    .txt{
        display:block;
        margin:-2px 0 0 0;
        padding-top:20px;
        width:100%;
        padding-left:2%;
        height:50px;
        background: #f7f7f7;
    }


    #navi{
        position:absolute;
        bottom:-10px;
        left:50%;
        margin:0 0 0 -105px;
        opacity:0.8;
        color:#000;
        height:24px;
        -webkit-border-radius:20px;
        -moz-border-radius:20px;
        border-radius:20px;
        padding:7px 10px 0 10px;
    }

    .circle{
        display:inline-block;
        width:15px;
        height:15px;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
        border: 1px solid;
        border-radius:10px;
        background:#efefef;
        border:1px solid #ccc;
        margin-right:6px;
        cursor:pointer;
    }

    .circle:hover{
        background:#fff;
        border:1px solid #ccc;
    }

    .circle:active,
    .activenav,
    .activenav:hover{
        background:#ccc;
        border:1px solid #333;
    }

    .activenav{
        cursor: default;
    }

    .circle:last-child{
        margin-right: 0;
    }

    /*enter*/
    @-webkit-keyframes comein {
        0% { opacity: 0; -webkit-transform: translateY(-3000px); }
        80% { opacity: 1; -webkit-transform: translateY(40px); }
        100% { -webkit-transform: translateY(0); }
    }
    @-moz-keyframes comein {
        0% { opacity: 0; -moz-transform: translateY(-3000px); }
        80% { opacity: 1; -moz-transform: translateY(40px); }
        100% { -moz-transform: translateY(0); }
    }
    @keyframes comein {
        0% { opacity: 0; transform: translateY(-3000px); }
        80% { opacity: 1; transform: translateY(40px); }
        100% { transform: translateY(0); }
    }
</style>
<div class="container">
    <div id="all">
        <div id="allcontent">
            <div id="maincontent">
                <div class="portfolio"><span class="txt">Gebiat</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/GEBIAT.jpg" alt="Portfolio img">
                </div>
                <div class="portfolio"><span class="txt">ACS CIQ</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/acs_ciq.png" alt="Portfolio img">
                </div>
                <div class="portfolio"><span class="txt">EHHS</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/ehhs.png" alt="Portfolio img">
                </div>
                <div class="portfolio"><span class="txt">JKR CRM</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/jkr_crm.png" alt="Portfolio img">
                </div>

                <div class="portfolio"><span class="txt">Sport</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/Ligas%20deportivas.png" alt="Portfolio img">
                </div>

                <div class="portfolio"><span class="txt">IPCuba</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/IPCuba.png" alt="Portfolio img">
                </div>

                <div class="portfolio"><span class="txt">Atenas Bar</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/Bar%20Atenas.jpg" alt="Portfolio img">
                </div>

                <div class="portfolio"><span class="txt">Siveser</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/SIVESER.jpg" alt="Portfolio img">
                </div>
                <div class="portfolio">
                    <span class="txt">Minerva</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/Minerva.png" alt="Portfolio img">
                </div>

                <div class="portfolio"><span class="txt">RentaCar</span>
                    <img src="<?php echo $base_url;?>/assets/img/erd/RentaCar.png" alt="Portfolio img">
                    
                </div>
            </div>
            <div id="navi"></div><div class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i> <i class="fa fa-search-minus" aria-hidden="true"></i></div>
        </div>
    </div>
</div>

<script>



    $('.portfolio').each(function(index)
    {
        $(this).attr('id', 'img' + (index + 1));
        $(this).children('.zoom').attr('id', 'zoom' + (index + 1));
    });

    $('.portfolio').each(function(){
        $('#navi').append('<div class="circle"></div>');
    });

    $('.circle').each(function(index)
    {
        $(this).attr('id', 'circle' + (index + 1));
    });

    $('.fa-search-plus').click(function()
    {
        var width=$('.opened').children('img').width();//alert(width);
        width=width+50;
        zoom(width);
    });

    $('.fa-search-minus').click(function()
    {
        var width=$('.opened').children('img').width();//alert(width);
        width=width-50;
        zoom(width);
    });

    function zoom(width) {
        $('.opened').children('img').css('width', width);
        $('.opened').children('.txt').css('width', width);
    }

    $('.portfolio').click(function(){
        if($(this).hasClass('opened')){
            $(this).removeClass('opened');
            $(".portfolio").fadeIn("fast");
            //$(this).find('.ombra').fadeOut();
            $("#navi div").removeClass("activenav");
            $('.zoom').hide();
        }
        else{
            var indexi = $("#maincontent .portfolio").index(this) + 1;
            $(this).addClass('opened');
            $(".portfolio").not(this).fadeOut("fast");
            //$(this).find('.ombra').fadeIn();
            $("#circle" + indexi).addClass('activenav');
            $('.zoom').show();
        }
    });

    //navi buttons
    $("#navi div").click(function() {
        if($(this).hasClass("activenav")){
            return false;
        }

        $("#navi div").removeClass("activenav");
        $(".portfolio").removeClass('opened');
        $(".portfolio").show();
        //$('.ombra').hide();

        var index = $("#navi div").index(this) + 1;
        $("#img" + index).addClass('opened');
        $(".portfolio").not("#img" + index).fadeOut("fast");
        //$("#img" + index).find('.ombra').fadeIn();

        $(this).addClass("activenav");
    });
</script>