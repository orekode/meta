<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Luli Champions</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset("css/base.css")}}">
    <link rel="stylesheet" href="{{asset("css/vendor.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">

    <!-- script
    ================================================== -->
    <script src="{{asset("js/modernizr.js")}}"></script>
    <script defer src="{{asset("js/fontawesome/all.min.js")}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">

<!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- site header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="#">
                <!-- <img src="{{asset("images/logo.svg")}}" alt="Homepage"> -->
                LULI CHAMPIONS
            </a>
        </div>

        <div class="header-email">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z"/></svg>
            <a href="mailto:#0">09161856603</a>
        </div>

    </header> <!-- end s-header -->


    <!-- intro
    ================================================== -->
    <section id="intro" class="s-intro s-intro--slides">

        <div class="intro-slider">
            <div class="intro-slider-img bg-opacity-40" style="background-image: url(images/slides/slide-01.jpg);"></div>
            <div class="intro-slider-img" style="background-image: url(images/slides/slide-02.jpg);"></div>
            <div class="intro-slider-img" style="background-image: url(images/slides/slide-03.jpg);"></div>
        </div>

        <div class="grid-overlay">
            <div></div>
        </div> 

        <div class="row intro-content">

            <div class="column">

                <div class="intro-content__text">

                    <h3>
                    Coming Soon
                    </h3>
                    
                    <h1>
                    Get ready everyone. <br>
                    Luli Champions <br>
                    are comming Soon
                    </h1>

                </div> <!-- end intro-content__text -->

                <div class="intro-content__bottom">

                    <div class="intro-content__counter-wrap">
                        <h4>Launching in</h4>
            
                        <div class="counter">
                            <div class="counter__time days">
                                365
                                <span>D</span>
                            </div>
                            <div class="counter__time hours">
                                09
                                <span>H</span>
                            </div>
                            <div class="counter__time minutes">
                                54
                                <span>M</span>
                            </div>
                            <div class="counter__time seconds">
                                57
                                <span>S</span>
                            </div>
                        </div>  <!-- end counter -->
                    </div> <!-- end intro-content__counter-wrap -->

                    <div class="intro-content__notify">
                        <button type="button" class="btn--stroke btn--small modal-trigger">
                            Notify Me
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12l-9-9v7h-15v4h15v7z"/></svg>
                        </button>
                    </div> <!-- end intro-content__notify -->
    
                </div> <!-- end intro-content__bottom -->

            </div> <!-- end column -->

        </div> <!--  end intro-content -->

        <div class="modal">
            <div class="modal__inner">

                <span class="modal__close"></span>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>

                <h3>Sign Up</h3>
                <p>
                Be the first to know about the latest updates and
                get exclusive offer on our grand opening.
                </p>

                <form id="mc-form" class="group mc-form" novalidate="true">
                    <input type="email" value="" name="EMAIL" class="email h-full-width h-text-center h-add-half-bottom" id="mc-email" placeholder="Email Address" required="">
                    <input type="submit" name="subscribe" value="Subscribe" class="btn--small h-full-width">
                    <label for="mc-email" class="subscribe-message"></label>
                </form>

            </div> <!-- end modal inner -->
        </div> <!-- end modal -->

        <ul class="intro-social">
            <li><a href="#0"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <!-- <li><a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li> -->
            <!-- <li><a href="#0"><i class="fab fa-behance" aria-hidden="true"></i></a></li> -->
        </ul> <!-- end intro social -->

        <div class="intro-scroll">
            <a href="#info" class="scroll-link smoothscroll">
                Scroll For More
            </a>
        </div> <!-- end intro scroll -->

    </section> <!-- end s-intro -->




    <!-- Java Script
    ================================================== -->
    <script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("js/plugins.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>

</body>
</html>