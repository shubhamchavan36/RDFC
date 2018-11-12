    <div class="footer">
    <div class="ftr-top">
        <div class="wrapper">
            <div class="col stay-connected">
                <h4>Stay Connected</h4> <span>& get the latest updates</span>
            </div>
            <div class="col form-field">
                <form enctype="multipart/form-data" class="stay-connected" name="stay-connected" id="stay-connected"
                    method="post" onsubmit="return false;"> <input type="text" class="text userEmail" name="subsEmail"
                        id="subsEmail" placeholder="Your e-mail" /> <input type="hidden" name="subsType" id="subsType"
                        value="site" /> <input type="hidden" name="" class="" id="" value="" />
                    <input type="submit" class="btn" value="Send" />
            </div>
            
            <div class="col social">
                <!--<h5>Find us</h5>                    <p>Mumbai 400024, India</p>-->
                <ul class="ftr-social">
                    <li><a href="" target="blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" target="blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" target="blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
        <div class="ftr-main">
            <div class="wrapper">
                <ul class="ftr-nav">
                    <li><a href="<?php echo base_url('');?>" title="club n' play">Club & Academy</a></li>
                    <li><a href="<?php echo base_url('Raredare/achive');?>" title="Achievements">Achievements</a></li>
                    <li><a href="<?php echo base_url('Raredare/growth');?>" title="Growth Path">Growth Path</a></li>
                    <li><a href="<?php echo base_url('Raredare/member');?>" title="Membership">Membership</a></li>
                    <li><a href="<?php echo base_url('Raredare/event');?>" title="Events">Events</a></li>
                    <li><a href="<?php echo base_url('Raredare/event');?>" title="Leagues & Tournaments">Leagues & Tournaments</a></li>
                    <li><a href="<?php echo base_url('Raredare/event');?>" title="Special Events">Special Events</a></li>
                    <li><a href="<?php echo base_url('Raredare/event');?>" title="Corporate Events">Corporate Events</a></li>
                    <li><a href="<?php echo base_url('Raredare/fan');?>" title="Fan Club">Fan Club</a></li>
                    <li><a href="<?php echo base_url('Raredare/sponsors');?>" title="Sponsors">Sponsors</a></li>
                </ul>
                <ul class="ftr-nav-other">
                    <li><a href="" title="Join a League">Join a League</a></li>
                    <li><a href="" title="Join Marketplace">Join Marketplace</a></li>
                    <li><a href="" title="View marketplace">View marketplace</a></li>
                </ul>
                <ul class="ftr-nav-btm">
                    <li class="desk">
                        <p class="copy">&copy; Premier League 2017 </p>
                    </li>
                    <li><a href="" title="Terms & Conditions">Terms &
                            Conditions</a></li>
                    <li><a href="" title="Privacy Policy">Privacy Policy</a></li>
                    <li><a href="" title="Disclaimer">Disclaimer</a></li>
                    <li class="mob">
                        <p class="copy">&copy; Premier League 2017 </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/jquery-1.7.2.min.js');?>"></script>


    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/common.inc.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/mxslider.inc.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/mxdialog.inc.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/common.inc.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/validate.inc.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/site.inc.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/notification.inc.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/jquery.mCustomScrollbar.js');?>"></script>

    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/jquery.ui.core.min.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/jquery.ui.widget.min.js');?>"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/jquery.ui.position.min.js');?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/tipsy.css');?>" />
    <script language="javascript" type="text/javascript" src="<?php echo base_url('assests/js/jquery.tipsy.js');?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assests/js/slick.js');?>"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".home-banner").slick({
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000
            });
            $('.home-event').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                centerMode: true,
                focusOnSelect: true,
                arrows: true,
                autoplay: true,
                fade: true,
                autoplaySpeed: 4000,
            });

            if ($(window).width() > 640) {
                if ($(".tbl-responsive").length > 0) {
                    $(".tbl-responsive").mCustomScrollbar({
                        axis: "y"
                    });
                }
                setInterval(function () {
                    $(".notification_list").mCustomScrollbar({
                        axis: "y"
                    });
                }, 3000);
            }
        });		
    </script>

    