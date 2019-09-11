<?php
if (!defined('fileIncluded')) {
    exit();
}

?>
<!DOCTYPE html>

<html class="wow-animation desktop landscape rd-navbar-static-linked" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="<?php echo $metakey; ?>" >
        <meta name="description" content="<?php echo $metades; ?>" >

        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">


        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/color.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/default-animation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/layerslider.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/flaticon.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"/>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <!-- Page-->


        <div class="page text-center">
            <div class="theme-loader">
                <div id="ajaxbar1">
                    <div id="block1" class="barlittle"></div>
                    <div id="block2" class="barlittle"></div>
                    <div id="block3" class="barlittle"></div>
                    <div id="block4" class="barlittle"></div>
                    <div id="block5" class="barlittle"></div>
                </div>
            </div>

            <!-- Page Head-->
            <header id="header" class="header">
                <div id="main_nav" class="navbar_one full-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <nav class="navbar navbar-expand-lg navbar-light">
<!--                                    <img style="width: 250px; height: 130px; position: absolute;left: 100px;" src="assets/images/offer.gif" alt="logo"/>-->
                                    <a class="navbar-brand" title="Star Gym &AMP; Fitness" href="index.php">
                                        <img class="img-responsive" src="assets/images/logo1.png" alt="logo"/>
                                    </a>


                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <?php
                                            foreach ($menuarray as $key => $val) {
                                                $liclassname = 'class="nav-item"';
                                                $aclassname = 'class="nav-link"';
                                                if ($key == "index") {
                                                    ?>
                                                    <li <?php echo $liclassname; ?>><a <?php echo $aclassname; ?> href="index.php"><?php echo $val['name']; ?></a></li>
                                                    <?php
                                                } else if ($key == "onlinefeepayment") {
                                                    ?>
                                                    <li <?php echo $liclassname; ?>><a <?php echo $aclassname; ?> target="_blank" href="http://stargymfitness.com/feepayment/"><?php echo $val['name']; ?></a></li>
                                                    <?php
                                                } else if ($key == "branch") {
                                                    ?>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="branch.php">Branch</a>
                                                        <ul class="dropdown-menu"> 
                                                            <li><a class="dropdown-item" href="shivmandir_branch.php">Shiv Mandir</a></li> 
                                                            <li><a class="dropdown-item" href="bagdogra_branch.php">Bagdogra</a></li>
                                                            <li><a class="dropdown-item" href="naxalbari_branch.php">Naxalbari</a></li>
                                                            <li><a class="dropdown-item" href="islampur_branch.php">Islampur</a></li>
                                                            <li><a class="dropdown-item" href="bidhannagar_branch.php">Bidhan Nagar</a></li>
                                                            <li><a class="dropdown-item" href="mirik_branch.php">Mirik</a></li>
                                                        </ul>
                                                    </li>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <li <?php echo $liclassname; ?>><a <?php echo $aclassname; ?> href="<?php echo $key; ?>.php"><?php echo $val['name']; ?></a></li>  
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <li>
                                                <a type="button" class="btn btn_default" target="_blank" href="http://stargymfitness.com/feepayment/register.php">Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <!-- Slider HTML markup -->
            <section class="full-row overflow-hidden">
                <div id="slider" style="width:1200px; height:800px; margin:0 auto;margin-bottom: 0px;">

                    <!-- Slide 1-->
                    <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
                        <img width="1920" height="1080" src="assets/images/slider/5.jpg" class="ls-bg"  alt="" />
                        <div style="width:100%; height:100%; background:rgba(11, 15, 41, 0.6); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; position:fixed;"></div>
                        <div style="width:440px; height:440px; background:transparent; border: 10px solid #7cb908; top:54%; left:50%;" class="ls-l" data-ls="delayin:1500; durationout:400; easingin:easeOutExpo; scalexin:0.8; parallaxlevel:0;"></div>
                        <p style="font-weight:700; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:'Barlow', sans-serif; font-size:80px; line-height:80px; color:#ffffff; top:330px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:250; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:400; parallax:true; parallaxlevel:3;">Exercise Your Mind and Body</p>
                        <p style="font-weight:600; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:'Barlow', sans-serif; font-size:25px; line-height:50px; color:#ffffff; top:280px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:true; parallaxlevel:4;">Be an inspiration</p>
                        <p style="font-weight:300; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);width:720px; font-family:'Barlow', sans-serif; font-size:20px; line-height:30px; color:#ffffff; top:517px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:700; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:true; parallaxlevel:2;">Say good bye your big multi gym if you are not geeting assurance to help your body-building better look.</p>

                    </div>
                    <!-- Slide 2-->
                    <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
                        <img width="1920" height="1080" src="assets/images/slider/4.jpg" class="ls-bg" alt="" />
                        <div style="width:100%; height:100%; background:rgba(11, 15, 41, 0.6); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; position:fixed;"></div>
                        <div style="width:440px; height:440px; background:transparent; border: 10px solid #7cb908; top:54%; left:50%;" class="ls-l" data-ls="delayin:1500; durationout:400; easingin:easeOutExpo; scalexin:0.8; parallaxlevel:0;"></div>
                        <p style="font-weight:700; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:'Barlow', sans-serif; font-size:80px; line-height:80px; color:#ffffff; top:330px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:250; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:400; parallax:true; parallaxlevel:3;">Exercise Your Mind and Body</p>
                        <p style="font-weight:600; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:'Barlow', sans-serif; font-size:25px; line-height:50px; color:#ffffff; top:280px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:true; parallaxlevel:4;">Be an inspiration</p>
                        <p style="font-weight:300; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);width:720px; font-family:'Barlow', sans-serif; font-size:20px; line-height:30px; color:#ffffff; top:517px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:700; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:true; parallaxlevel:2;">Let us help you to build your body better and faster with proper guidance and scientific training.</p>
                    </div>

                    <!-- Slide 3-->
                    
                </div>
            </section>
            <!--Slider Section End-->


            <?php
            if (is_readable("./pages/$pagefile.php")) {
                include ("./pages/$pagefile.php");
            } else {
                echo $sys->showError('danger', '! 404 file not found. Please try after some time');
            }
            ?>


            <!-- Default footer-->
            <footer class="full-row bg_primary">                
                <div class="full-row  bg_black py_10">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 text-left color_white">
                                <a href="https://www.apexinvention.com" target="_blank" title="apexinvention.com">
                                    <img alt="" src="assets/images/apexinvention.png" title="Apex Invention" style="height:40px; width: auto; ">
                                </a>                           
                                <p style="    display: inline-block;
                                   float: right;">All Rights Reserved by Star Gym & Fitness</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


       

            <!--</div>-->
            <!--</div>-->
            <!-- Global Mailform Output-->
            <div class="snackbars" id="form-output-global"></div>
            <!-- Java script-->
            <script src="assets/js/jquery.min.js" type="text/javascript"></script>

            <script src="assets/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
            <script src="assets/js/layerslider.transitions.js" type="text/javascript"></script>
            <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

            <script src="assets/js/greensock.js" type="text/javascript"></script>
            <script src="assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
            <script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
            <script src="assets/js/jquery.magnify.js" type="text/javascript"></script>



            <script src="assets/js/mixitup.js" type="text/javascript"></script>
            <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
            <script src="assets/js/popper.min.js" type="text/javascript"></script>
            <script src="assets/js/validate.js" type="text/javascript"></script>
            <script src="assets/js/wow.js" type="text/javascript"></script>

            <script src="assets/js/custom.js" type="text/javascript"></script>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
    </body>

</html>