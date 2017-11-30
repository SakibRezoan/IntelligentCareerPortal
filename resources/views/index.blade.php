<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Intelligent Career Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>+8801521209914</a>
                                <a href="#"><i class="fa fa-envelope"></i>bsse0611@iit.du.ac.bd</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <p class="navbar-brand" style="font-size: 1.5em">
                        <span style=" color: green">Intelligent</span>
                        <span style=" color: #c0a16b">Career</span>
                        <span style=" color: chartreuse">Portal</span></p>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#features">PRODUCT</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#price">PRICE</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="login"><a data-toggle="modal" data-target="#signUpModal" href="#">Create Account</a></li>
                        <li class="login"><a data-toggle="modal" data-target="#signInModal" href="#">Sign In</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">

                                    <p style="font-size: 1.5em">Bring your Dream to Life With</p><h1>Intelligent Career Portal</h1>
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                            <div class="home-contact">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search Jobs">
                                                    <input type="submit" class="form-control" value="Search">

                                                </div><!-- /input-group -->


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </header>

        <!-- Sections -->
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                        <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="images/feature-2.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2>Intelligent Career Portal</h2>
                                <p><b><i>Intelligent Career Portal</i></b> aims to facilitate the applicant to apply for the job online. It also
                                    facilitates the managerial department of an organization for an optimized and systematic employee
                                    recruitment process.</p>
                                <ul>
                                    <li>Advance Search.</li>
                                    <li>Recommendation System.</li>
                                    <li>Invite Candidate Through SMS.</li>
                                    <li>Apply Jobs Online</li>
                                </ul>
                                <div class="features_buttom">
                                    <a href="{{route('read.feature')}}" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--End of Features 2 Section -->
        
        <section id="service" class="service2 sections lightbg">
            <div class="container">
                <div class="row">
                    <div class="main_service2">
                        <div class="head_title text-center">
                            <h2>SERVICES WE PROVIDE</h2>
                            <h5>We provide the following services</h5>
                        </div>

                        <div class="service_content">
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="images/searching.jpg" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Advance Searching</h2>
                                        <p>Advance job search for job seeker, Advance candidate search for recruiter.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                       <img src="images/flaticon2.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Recommendation System</h2>
                                        <p>Candidate recommendation for current jobs of company,
                                            Job recommendation for job seeker based on CV.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                      <img src="images/flaticon3.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Branding</h2>
                                        <p>Let everyone know your company name , Let the recruiter find you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="images/flaticon4.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Live Chat</h2>
                                        <p>Get in touch with real time communication through live chatting feature.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Service2 Section -->		



        <!-- Sections -->
        <section id="price" class="price sections">


            <div class="head_title text-center">
                <h1>Affordable Services Package</h1>
            </div>
            <!-- Example row of columns -->
            <div class="cd-pricing-container cd-has-margins">
                <div class="cd-pricing-switcher">
                    <p class="fieldset">
                        <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
                        <label for="monthly-2">Job Seeker</label>
                        <input type="radio" name="duration-2" value="yearly" id="yearly-2">
                        <label for="yearly-2">Company</label>
                        <span class="cd-switch"></span>
                    </p>
                </div> <!-- .cd-pricing-switcher -->

                <ul class="cd-pricing-list cd-bounce-invert">
                    <li>
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Basic</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">00</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>10 Recommendations</li>
                                        <li><em><i class="fa fa-remove"></i></em>Unlimited Recommendation</li>
                                        <li><em><i class="fa fa-remove"></i></em>Video Chat</li>
                                        <li><em><i class="fa fa-remove"></i></em>News Letter Available</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>No Advertisement</li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Free</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>Basic</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">00</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>10 Recommendations</li>
                                        <li><em><i class="fa fa-remove"></i></em>Unlimited Recommendation</li>
                                        <li><em><i class="fa fa-remove"></i></em>Video Chat</li>
                                        <li><em><i class="fa fa-remove"></i></em>News Letter Available</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>No Advertisement</li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li class="cd-popular">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Popular</h2>
                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">30</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>10 Recommendations</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Unlimited Recommendation</li>
                                        <li><em><i class="fa fa-remove"></i></em>Video Chat</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>No Advertisement</li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>Popular</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">50</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>10 Recommendations</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Unlimited Recommendation</li>
                                        <li><em><i class="fa fa-remove"></i></em>Video Chat</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>No Advertisement</li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li>
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Premier</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">50</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>10 Recommendations</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Unlimited Recommendation</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Video Chat</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>No Advertisement</li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>Premier</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">100</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>10 Recommendations</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Unlimited Recommendation</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Video Chat</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>No Advertisement</li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>
                </ul> <!-- .cd-pricing-list -->
            </div> <!-- .cd-pricing-container -->	

        </section>

        <section id="contact" class="contact sections">
            <div class="container">
                <div class="row">
                    <div class="main_contact whitebackground">
                        <div class="head_title text-center">
                            <h2>GET IN TOUCH</h2>
                        </div>
                        <div class="contact_content">
                            <div class="col-md-6">
                                <div class="single_left_contact">
                                    <form action="#" id="formid">

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>


                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                        </div>

                                        <div class="center-content">
                                            <input type="submit" value="Submit" class="btn btn-default">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_right_contact">
                                    <p>Analytics and data gives us all sorts of insights into what our customers want from our business.
                                        But sometimes… don’t you wish you could get an answer straight from your customers?</p>
                                    <div class="contact_address margin-top-40">
                                        <span>Md. Sakib Rezoan, Bangladesh,</span>
                                        <span>Fazlul Haque Muslim Hall, University of Dhaka.</span>
                                        <span class="margin-top-20">T: +88 01521-209914</span>
                                    </div>

                                    <div class="contact_socail_bookmark">
                                        <a href="https://www.facebook.com/sakibrezoan.reza"><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href="mailto:bsse0611@iit.du.ac.bd"><i class="fa fa-google"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Contact Section -->


        <section id="footer-menu" class="sections footer-menu">
            <div class="container">
                <div class="row">
                    <div class="footer-menu-wrapper">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li>POWER BI DESKTOP</li>
                                        <li>MOBILE</li>
                                        <li>SEE ALL DOWNLOADS</li>
                                        <li>POWER BI DESKTOP</li>
                                        <li>MOBILE</li>
                                        <li>SEE ALL DOWNLOADS</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Legal</h5>
                                    <ul>
                                        <li>PRIVACY & COOKIES</li>
                                        <li>TERMS OF USE</li>
                                        <li>TRADEMARKS</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Information</h5>
                                    <ul>
                                        <li>SUPPORT</li>
                                        <li>DEVELOPERS</li>
                                        <li>BLOG</li>
                                        <li>NEWSLETTER</li>
                                        <li>PYRAMID ANALYTICS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="menu-item">
                                <h5>Newsletter</h5>
                                <p>Insights await in your company's data. Bring them into focus with BlueLance.</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <input type="submit" class="form-control" value="Use It Free">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="images/logo.png" alt="logo" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="#"> Sakib Rezoan </a>2017. All rights reserved.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- Sign In Modal -->
        <div class="modal fade" id="signInModal" role="dialog">
            <div class="modal-dialog">
        
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title" align="center">Sign In As</h3>
                    </div>
                    <div class="modal-body">
                        <div align="center">
                            <a class="btn btn-sm btn-success" href="{{ route('login') }}">Job Seeker</a>
                            <br><hr>
                            <a class="btn btn-sm btn-warning" href="{{ route('admin.login') }}">Admin</a>
                            <br><hr>
                            <a class="btn btn-sm btn-info" href="{{ route('company.login') }}">Company</a>
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
    
            </div>
        </div>

        <!-- Sign Up Modal -->
        <div class="modal fade" id="signUpModal" role="dialog">
            <div class="modal-dialog">
        
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div align="center">
                            <h3 class="modal-title">Create Your Account</h3>
                            <h5>Please choose an option</h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div align="center">
                            <a class="btn btn-sm btn-success" href="{{ route('register') }}">Job Seeker</a>
                            <br><hr>
                            <a class="btn btn-sm btn-info" href="{{ route('company.registration') }}">Company</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
    
            </div>
        </div>
		
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function() {
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
    </body>
</html>
