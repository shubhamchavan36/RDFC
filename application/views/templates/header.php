<!DOCTYPE >
<html>

<head>
    <!-- <title>AstroPark</title> -->
    <link rel="shortcut icon" href="<?php echo base_url('assests/images/favicon.png'); ?>" rel="SHORTCUT ICON" type="images/icon" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rare Dare</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/sty.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assests/css/device.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assests/css/slick.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assests/css/jquery.mCustomScrollbar.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assests/css/tmp-style.css'); ?>" type="text/css" />

<style type="text/css">
    .left-button {
    position: fixed;
    left: 0px;
    top: 50%;
    margin-top: -75px;
    transition-duration: .5s;
    z-index: 11;
}

.left-button.active {
    position: fixed;  transition-duration:.5s; 
}
div.hdr-main a.logo img{ width:70%;}
</style>
</head>

<body>


<!--  -->
<!--  -->
    <a href="register.php" class="left-button"><img src="<?php echo base_url('assests/images/join.jpg');?>" /></a>
    <div class="pageScroll white">
        <a href="#" class="downscroll">
            <div class="img-wrap"><img src="<?php echo base_url('assests/images/dwn-arr.png');?>"></div>
        </a>
        <a href="#" class="upscroll" style="display:none">
            <div class="img-wrap"><img src="<?php echo base_url('assests/images/up-arr.png');?>"></div>
        </a>
    </div>

    <input type="hidden" name="pageUri" id="pageUri" value="">
    <div class="loader"></div>
    <div class="header">
        <div class="header-top">
            <div class="wrapper">
                <a href="contact-us/" class="get-in"><i class="fa fa-map-marker"></i> Get in touch</a>
                <a class="get-in" style="padding: 4px 30px 20px 20px; font-size:15px"><b>Mob. No.: 999-999-9999</b></a>
                <a class="get-in" style="padding: 4px 30px 20px 20px;font-size:15px"><b>Email : adversify@gmail.com</b></a>
                <div class="hdr-right">

                    <ul class="hdr-social">
                        <li><a href="" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" target="blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" target="blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div class="usr-name log-reg desk-only">
                        <a href="<?php echo base_url('Admin/login');?>" class="button-green log-In login-register">REGISTER NOW</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hdr-main">
                <div class="wrapper">
                    <a href="index.php" class="logo img-responsive"><img src="<?php echo base_url('assests/images/logoo.png');?>" width="50" height="144" alt="Logo"/></a>
                    <div id="nav-icon" class="">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                                        
                  <div class="menu-wrap">
    <ul class="main-menu">
        <li><a href="<?php echo base_url('');?>" title="Club & Academy">Club & Academy</a></li>
        <li><a href="<?php echo base_url('Raredare/achive');?>" title="Achievements">Achievements</a></li>
        <li><a href="<?php echo base_url('Raredare/growth');?>" title="Growth Path">Growth Path</a></li>
        <li><a href="<?php echo base_url('Raredare/member');?>" title="Membership & FanClub">Membership</a></li>
        <li class="dropdown">
            <a href="<?php echo base_url('Raredare/event');?>" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('Raredare/event');?>">Leagues & Tournaments</a></li>
                <li><a href="<?php echo base_url('Raredare/event');?>">Special Events </a></li>
                <li><a href="<?php echo base_url('Raredare/event');?>">Corporate Events </a></li>
            </ul>
        </li>
        <li><a href="<?php echo base_url('Raredare/fan');?>" title="Fan Club">Fan Club</a></li>
        <li><a href="<?php echo base_url('Raredare/sponsors');?>" title="Sponsors">Sponsors</a></li>
    </ul>
    <div class="usr-name log-reg mobile-only">
        <a href="<?php echo base_url('Raredare/login')?>">REGISTER NOW</a>
    </div>
</div>
                      
                </div>
            </div>
        </div>

       
    </div>
    

    <script language="javascript" type="text/javascript" src="js/x-home.inc.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assests/css/jquery.ui.all.css');?>">
    <script src="<?php echo base_url('assests/js/jquery.ui.datepicker.min.js');?>"></script>
    <script src="<?php echo base_url('assests/js/jquery.ui.core.min.js');?>"></script>
    <script src="<?php echo base_url('assests/js/jquery.ui.widget.min.js');?>"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {

            $(window).scroll(function () {
                var distanceFromTop = $(this).scrollTop();
                if (distanceFromTop >= ($('.header').height() + $(".section.banner").height() - 0)) {
                    $('.section.book-slot').addClass('stick');
                    $('.container').addClass('active');
                } else {
                    $('.section.book-slot').removeClass('stick');
                    $('.container').removeClass('stick');
                }
            });
        });
    </script>
