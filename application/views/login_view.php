<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login // GIreport</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.ico" type="image/x-icon">
    <link href="<?= base_url();?>assets/login/css/preview.css" rel="stylesheet" />
    <script src="<?= base_url();?>assets/login/js/modernizr.js"></script>
    <link href='<?= base_url();?>assets/roboto/robotcss.css' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->
</head>
<body class="eternity-form">
   
    <section class="colorBg1 colorBg" id="demo1" data-panel="first">

        <div class=" container">

            <div class="login-form-section">
                <div class="login-content " data-animation="bounceIn">
<!--                    <form class="form-1" action="<?= base_url();?>index.php/auth/login" method="post">-->
                    <?php echo form_open('auth/login','class="form-1"')?>
                        <div class="section-title">
                            <img src="<?= base_url(); ?>assets/img/logo.png" title="Logo Garuda Indonesia" class="img-responsive" />
                            <h3 style="text-align: center;">Login Dashboard Report</h3>                            
                        </div>
                        <?php if(isset($error)){ ?><div class="error-wrap"><h4><?= $error; ?></h4></div><?php } ?>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                <input type="text" required class="form-control" name="username" placeholder="Username" />
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                <input type="password" required class="form-control " name="password" placeholder="Password" />
                            </div>
                        </div>
                        <div class="login-form-action clearfix">
                            <div class="checkbox pull-left">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="iCheck">
                                </div>
                                <span class="checkbox-text pull-left">&nbsp;Ingat Saya</span>
                            </div>
                            <button type="submit" class="btn btn-success pull-right green-btn">Masuk &nbsp; <i class="icon-chevron-right"></i></button>
                        </div>
                    <?php echo form_close(); ?>
                    <!--</form>-->
                </div>
            </div>



        </div>
    </section>

    <script src="<?= base_url();?>assets/login/js/jquery-1.9.1.js"></script>
    <script src="<?= base_url();?>assets/login/js/bootstrap.js"></script>
    <script src="<?= base_url();?>assets/login/js/respond.src.js"></script>
    <script src="<?= base_url();?>assets/login/js/jquery.icheck.js"></script>
    <script src="<?= base_url();?>assets/login/js/placeholders.min.js"></script>
    <script src="<?= base_url();?>assets/login/js/waypoints.min.js"></script>
    <script src="<?= base_url();?>assets/login/js/jquery.panelSnap.js"></script>

    <script type="text/javascript">
        $(function () {
            $("input").iCheck({
                checkboxClass: 'icheckbox_square-blue',
                increaseArea: '20%' // optional
            });
            $(".form-control").focus(function () {
                $(this).closest(".textbox-wrap").addClass("focused");
            }).blur(function () {
                $(this).closest(".textbox-wrap").removeClass("focused");
            });

            //On Scroll Animations


            if ($(window).width() >= 968 && !Modernizr.touch && Modernizr.cssanimations) {

                $("body").addClass("scroll-animations-activated");
                $('[data-animation-delay]').each(function () {
                    var animationDelay = $(this).data("animation-delay");
                    $(this).css({
                        "-webkit-animation-delay": animationDelay,
                        "-moz-animation-delay": animationDelay,
                        "-o-animation-delay": animationDelay,
                        "-ms-animation-delay": animationDelay,
                        "animation-delay": animationDelay
                    });

                });
                $('[data-animation]').waypoint(function (direction) {
                    if (direction == "down") {
                        $(this).addClass("animated " + $(this).data("animation"));

                    }
                }, {
                    offset: '90%'
                }).waypoint(function (direction) {
                    if (direction == "up") {
                        $(this).removeClass("animated " + $(this).data("animation"));

                    }
                }, {
                    offset: $(window).height() + 1
                });
            }

            //End On Scroll Animations


            $(".main-nav a[href]").click(function () {
                var scrollElm = $(this).attr("href");

                $("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

                $(".main-nav a[href]").removeClass("active");
                $(this).addClass("active");
            });




            if ($(window).width() > 1000 && !Modernizr.touch) {
                var options = {
                    $menu: ".main-nav",
                    menuSelector: 'a',
                    panelSelector: 'section',
                    namespace: '.panelSnap',
                    onSnapStart: function () { },
                    onSnapFinish: function ($target) {
                        $target.find('input:first').focus();
                    },
                    directionThreshold: 50,
                    slideSpeed: 200
                };
                $('body').panelSnap(options);

            }

            $(".colorBg a[href]").click(function () {
                var scrollElm = $(this).attr("href");

                $("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

                return false;
            });


           

        });
    </script>

</body>
</html>