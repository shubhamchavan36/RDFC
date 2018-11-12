<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<style type="text/css">
    .left-button {
    position: fixed;
    left: 0px;
    top: 50%;
    margin-top: -75px;
    transition-duration: .5s;
    z-index: 11;
}
.animated{
    animation-duration: 4s;
}

.left-button.active {
    position: fixed;  transition-duration:.5s; 
}
.list{

    list-style-image: url('images/btn-arrow-g.png');
    

}
div.hdr-main a.logo img{ width:70%;}

</style>
</head>
<body>

<div class="pg-banner pnp">
            <div class="overlay"></div>
            <img src="<?php echo base_url('assests/images/Pay-n-Play-mobile-banner.png" class="mob');?>">
                        <!--<h1>Pay N' Play</h1>-->
        </div>
        <section style="background-image: url('<?php echo base_url("assests/images/pg-bg.png");?>');">
            <div class="container" style="background-image: url('<?php echo base_url("assests/images/pg-bg.png");?>');" >
            <div class="animated bounceInUp " style="box-shadow: 2px 2px 2px 2px gray;">
                <h1 class="text-center title" style="color: #82c64d">FANCLUB </h1><br><br>
                <p style="padding: 50px 50px 50px 50px;font-family: 'Roboto Condensed', sans-serif; font-weight: 400;font-size: 16px;line-height: 24px; color: white"><?php echo $fan; ?>
                </p>
            </div>
            </div>
           
            
</body>
</html>