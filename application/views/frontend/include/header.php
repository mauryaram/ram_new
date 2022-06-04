<header class="site-header header-two">
            <div class="top-bar">
                <div class="container">
                    <div class="inner-container">
                        <div class="logo-block">
                            <a href="<?=FRONTURL;?>"><img src="<?=IMGURL.$setting['logo'];?>" alt="Raj one way cab" style="height: 45px;width: 162px;"/></a>
                        </div><!-- /.logo-block -->
                        <div class="right-block">
                            <ul class="contact-infos">
                                <li><a href="mailto:<?=$setting['careEmail'];?>"><i class="fa fa-envelope"></i> <?=$setting['careEmail'];?></a></li>
                                <li class="social-block">
                                    <a target="_blank" href="tel:+91<?=$setting['careMobile'];?>"><i class="conexi-icon-phone-call"></i> +91-<?=$setting['careMobile'];?></a>
                                       </li>
                            </ul><!-- /.contact-infos -->
                        </div><!-- /.right-block -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.top-bar -->
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <button class="menu-toggler" data-target="#main-nav-bar">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation" id="main-nav-bar">
                        <ul class="navigation-box">
                            
                            <li><a href="<?=FRONTURL.'welcome/index'?>">Home</a></li>
                           
                            <li><a href="<?=FRONTURL.'contact/index'?>">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a href="tel:+91<?=$setting['personalMobile'];?>" class="contact-btn-block">
                            <span class="icon-block">
                                <i class="conexi-icon-phone-call"></i>
                            </span>
                            <span class="text-block">
                                +91-<?=$setting['personalMobile'];?>
                            </span>
                        </a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header header-one -->