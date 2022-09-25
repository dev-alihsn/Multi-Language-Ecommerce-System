<!DOCTYPE html>
<html>
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />    
        <meta name="keywords" content="HTML5 Ecommerce Template" />
        <meta name="description" content="Pesto - Responsive HTML5 Ecommerce Template" />
        <meta name="author" content="author name" />

        <title>Pesto - Responsive HTML5 Ecommerce Template</title>
        
		<!-- Web Fonts  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Istok+Web">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
		
		<!-- Vendor -->
        <link rel="stylesheet" href="{{asset('pesto/vendor/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('pesto/css/theme-font/css/pesto.css')}}" />
        <link rel="stylesheet" href="{{asset('pesto/vendor/fontawesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('pesto/vendor/owlcarousel/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{asset('pesto/vendor/owlcarousel/css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('pesto/vendor/revolution/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('pesto/vendor/revolution/css/layers.css')}}">
        <link rel="stylesheet" href="{{asset('pesto/vendor/revolution/css/navigation.css')}}">
		
        <!-- Theme Stylesheet -->
        <link rel="stylesheet" href="{{asset('pesto/css/theme-elements.css')}}" />
        <link rel="stylesheet" href="{{asset('pesto/css/theme-shop.css')}}" />
        <link rel="stylesheet" href="{{asset('pesto/css/theme.css')}}" />
		
    </head>
    <body>
		<!-- Start Header -->
        <header id="header" class="left-sidebar responsive-type1">
            <div class="header-body">  
                <!-- Start header-top-links -->
                <div class="header-top-links">
                    <nav class="navbar navbar-static-top nav-border-bottom">
                        <div class="wrapper">
                            <!-- Start navbar-left-->
                            <div class="navbar-left hidden-lg hidden-md">
                                <ul class="nav navbar-nav">
                                    <li> <a href="myaccount.html" class="hidden-xs"> My account </a> </li>    
                                    <li> <a href="#" class="hidden-xs"> Checkout </a> </li>     
                                    <li> <a href="#"> Login <span class="hidden-sm hidden-xs hidden-md">or Register</span> </a> </li>
                                </ul>
                            </div>
                            <!-- Start navbar-right -->
                            <div class=" navbar-right">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown-search hidden-lg hidden-md">
                                        <a class="dropdown-toggle hidden-xs hidden-sm" href="#">
                                            Search 
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form class="search-form">
                                                    <input placeholder="Search entry Site here..." class="form-control">
                                                    <a href="#" class="demo-icon pesto-icon-cross-mark menu-close"></a>
                                                </form>
                                            </li>
                                        </ul>
                                    </li> <!-- End dropdown-search -->
                                    <!-- Start mini-cart -->
                                    <li class="dropdown mini-cart hidden-lg hidden-md">
                                        <a href="#" class="dropdown-toggle">
                                            My cart<span class="hidden-xs">: $658.00</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="total-cart">
                                                    <span>2 item(s) in your cart- &nbsp;&nbsp;</span><span class="price"><ins>$658.00</ins></span>
                                                </div>
                                            </li>
                                            <li>    
                                                <div class="product pull-left">
                                                    <div class="image">
                                                        <a href="product.html">
                                                            <img alt="Camera" src="{{asset('pesto')}}/img/camera.png">    
                                                        </a>
                                                    </div>
                                                    <div class="image-comment">
                                                        <a href="product.html">
                                                            Mustard yellow ruffle dress 
                                                        </a>
                                                        <div class="price"><ins>$478.00</ins></div>
                                                    </div>
                                                </div>
                                                <div class="pull-product pull-right">
                                                    <a href="#" class="demo-icon pesto-icon-cross-mark"></a>    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product pull-left">
                                                    <div class="image">
                                                        <img alt="Handphone" src="{{asset('pesto')}}/img/handphone.png">    
                                                    </div>
                                                    <div class="image-comment">
                                                        <a href="product.html">
                                                            Navy Blue Silk Pleated Shift Dress
                                                        </a>
                                                        <div class="price"><ins>$24.00</ins><del>$55.00</del></div>
                                                    </div>
                                                </div>
                                                <div class="pull-product pull-right">
                                                    <a href="#" class="demo-icon pesto-icon-cross-mark"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-info pull-left">
                                                    <div class="shipping"><span class="info-name"> Shipping:</span> <span class="info-value">7.00</span></div>
                                                    <div class="tax"><span class="info-name"> Tax:</span> <span class="info-value">Free</span></div>
                                                    <div class="total-price"><span class="info-name"> Total:</span> <span class="info-value">$665.00</span></div>
                                                </div>
                                                <div class="buttons pull-right">
                                                    <a href="shopping-cart.html" class="btn btn-default btn-xs font-istok border-normal">VIEW CART</a>
                                                    <a href="checkout.html" class=" btn btn-default btn-xs font-istok border-normal">CHECKOUT</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Start dropdown-currency -->
                                    <li class="dropdown dropdown-currency hidden-sm hidden-xs">
                                        <a href="#" class="dropdown-toggle">
                                            En / &#8364;
                                        </a>
										<ul class="dropdown-menu right">
											<li><a href="#" role="button">$</a></li>        
											<li><a href="#" role="button">&#163;</a></li>
                                        </ul>
                                    </li> <!-- End dropdown-currency -->
                                    <li class="dropdown dropdown-currency hidden-lg hidden-md">
                                        <a href="#" class="dropdown-toggle">
                                            $ / &#8364; / &#163; 
                                        </a>
										<ul class="dropdown-menu right">
										    <li><a href="#">US dollar</a></li>        
                                            <li><a href="#">Euro</a></li>
                                            <li><a href="#">Pound ST</a></li>
                                        </ul>
                                    </li> <!-- End dropdown-currency -->
                                    <!-- Start dropdown-language -->
                                    <li class="dropdown dropdown-combo dropdown-language hidden-lg hidden-md">
                                        <a class="dropdown-toggle " href="#">
                                            En / Es
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#" role="button"><img src="{{asset('pesto')}}/img/english.png" alt="English">English</a>
                                            </li>

                                            <li>
                                                <a href="#" role="button"><img src="{{asset('pesto')}}/img/spanish.png" alt="Spanish">Spanish </a>
                                            </li>
                                        </ul>
                                    </li>  <!-- End dropdown-language -->
                                </ul>  
                            </div><!-- End navbar-right-->
                        </div>
                    </nav>    
                </div> <!-- header-top-links -->
                <!-- Start header table collapsed logo and main navigation-->
                <div class="header-main">
                    <div class="wrapper">
                        <!-- Start header-table -->
                        <div class="header-table">
                            <div class="header-row logo">
                                <div class="header-column">
                                    <div class="header-logo">
                                        <a href="index.html"><img src="{{asset('pesto')}}/img/logo.png" alt="PESTO"> </a>
                                    </div> <!-- header-logo -->
                                </div> <!-- header-column -->
                            </div> <!-- header-row -->
                            <!-- Start header-row -->
                            <div class="header-row menu">
                                <!-- Start header-column -->
                                <div class="header-column">
                                    <button class="header-btn-search" data-toggle="collapse" type="button" 
                                        data-target=""  data-object="">
                                        <i class="demo-icon pesto-icon-search"></i>
                                    </button>
                                    <button class="header-btn-collapse-nav" data-toggle="collapse" type="button" 
                                        data-target="#main-nav"  data-object="main-nav">
                                        <i class="pesto-icon-menu"></i>
                                    </button>
                                    <!--  Start header-main-nav -->
                                    <div class="collapse header-main-nav" id="main-nav">
                                        <nav class="navbar navbar-default navbar-right">
                                            <ul class="nav navbar-nav" >
                                                <li class="dropdown classic">
												    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">HOME</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="index.html">HOME1</a></li>
                                                        <li><a href="index2.html">HOME2</a></li>
                                                        <li><a href="index3.html">HOME3</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Start table dropdown -->
                                                <li class="dropdown classic">  
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">SHOP</a>
                                                    <ul class="dropdown-menu clearfix">   
                                                        <li>   
                                                            <!-- Start dropdown-table-content -->
                                                            <ul class="dropdown-table-content">
                                                                <li>
                                                                    <a href="#" role="button" class="dropdown-table-sub-title"> CLOTHING </a>
                                                                    <ul class="dropdown-table-sub-nav">
                                                                        <li> <a href="#"> DRESSES </a> </li> 
                                                                        <li> <a href="#"> JEANS &amp; TORUSERS </a> </li> 
                                                                        <li> <a href="#"> BLOUSES </a> </li>
                                                                        <li> <a href="#"> TOPS &amp; T-SHIRTS </a> </li>
                                                                        <li> <a href="#"> JACKETS &amp; COATS  </a> </li>
                                                                        <li> <a href="#"> SKIRTS</a> </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a role="button" class="dropdown-table-sub-title" href="#"> SHOES </a>
                                                                    <ul class="dropdown-table-sub-nav">
                                                                        <li> <a href="#"> FORMAL SHOES </a> </li> 
                                                                        <li> <a href="#"> CASUAL SHOES </a> </li> 
                                                                        <li> <a href="#"> SANDALS </a> </li>
                                                                        <li> <a href="#"> BOOTS </a> </li>
                                                                        <li> <a href="#"> WIDE FIT </a> </li>
                                                                        <li> <a href="#"> SLIPPERS </a> </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a role="button" class="dropdown-table-sub-title" href="#"> ACCESORIES </a>
                                                                    <ul class="dropdown-table-sub-nav">
                                                                        <li> <a href="#"> BAGS &amp; PURSES </a> </li> 
                                                                        <li> <a href="#"> BELTS </a> </li> 
                                                                        <li> <a href="#"> GLOVES </a> </li>
                                                                        <li> <a href="#"> JEWELLERY </a> </li>
                                                                        <li> <a href="#"> SUNGLASSES  </a> </li>
                                                                        <li> <a href="#"> HAIR ACCESORIES </a> </li>
                                                                    </ul>
                                                                </li>    
                                                                <li>
                                                                    <a role="button" class="dropdown-table-sub-title" href="#"> SPORTS </a>
                                                                    <ul class="dropdown-table-sub-nav">
                                                                        <li> <a href="#"> SPORTS TOPS &amp; VESTS</a> </li> 
                                                                        <li> <a href="#"> HOODIES </a> </li> 
                                                                        <li> <a href="#"> SWIMWEAR </a> </li>
                                                                        <li> <a href="#"> FOOTWEAR </a> </li>
                                                                        <li> <a href="#"> SPORTS UNDERWEAR  </a> </li>
                                                                        <li> <a href="#"> BAGS </a> </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a role="button" class="dropdown-table-sub-title" href="#"> MATERNITY </a>
                                                                    <ul class="dropdown-table-sub-nav">
                                                                        <li> <a href="#"> TOPS &amp; SKIRTS </a> </li> 
                                                                        <li> <a href="#"> JEANS </a> </li> 
                                                                        <li> <a href="#"> DRESSES </a> </li>
                                                                        <li> <a href="#"> TROUSERS &amp; SHORTS </a> </li>
                                                                        <li> <a href="#"> KNITWEAR </a> </li>
                                                                        <li> <a href="#"> JACKETS &amp; COATS </a> </li>
                                                                    </ul>
                                                                </li>
                                                            </ul> <!-- End dropdown-table-content-->
                                                        </li>   
                                                    </ul> <!-- End dropdown-menu -->
                                                </li>
                                                <li class="dropdown classic"> 
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">PAGES</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="product.html" role="button">PRODUCT</a></li>
                                                        <li class="dropdown classic">
                                                            <a href="shopping-cart.html" role="button">CART</a>
                                                        </li>
                                                        <li class="dropdown classic">
                                                            <a href="category_page-grid-3-columns.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">SHOP</a>
                                                            <ul class="dropdown-menu"> 
                                                                <li><a href="category_page_no_sidebar-grid-3-columns.html">3 columns with no sidebar</a></li>
                                                                <li><a href="category_page_no_sidebar-grid-4-columns.html">4 columns with no sidebar</a></li>
                                                                <li><a href="category_page_no_sidebar-grid-4-columns.html">5 columns with no sidebar </a></li>
                                                                <li><a href="category_page_no_sidebar-list.html">List mode with no sidebar</a></li>
                                                                <li><a href="category_page-grid-3-columns.html">3 columns with sidebar</a></li>
                                                                <li><a href="category_page-grid-4-colums.html">4 columns with sidebar </a></li>
                                                                <li><a href="category_page-grid-5-colums.html">5 columns with sidebar</a></li>
                                                                <li><a href="category_page-rightsidebar-list.html">List mode with sidebar</a></li>
                                                                <li><a href="category_page-leftsidebar-grid.html">Grid with leftsidebar</a></li>
                                                                <li><a href="category_page-leftsidebar-list.html">List with leftsidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown classic">
                                                            <a href="blog-rightsidebar-1.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">BLOG </a>
                                                            <ul class="dropdown-menu"> 
                                                                <li><a href="blog-leftsidebar-1.html">Blog type1 with leftsidebar</a></li>
                                                                <li><a href="blog-leftsidebar-2.html">Blog type2 with leftsidebar</a></li>
                                                                <li><a href="blog-single-leftsidebar.html">Blog single with leftsidebar</a></li>
                                                                <li><a href="blog-rightsidebar-1.html">Blog type1 with leftsidebar</a></li>
                                                                <li><a href="blog-rightsidebar-2.html">Blog type2 with leftsidebar</a></li>
                                                                <li><a href="blog-single-rightsidebar.html">Blog single with rightsidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="checkout.html" role="button">CHECKOUT</a></li>
                                                        <li><a href="aboutus.html" role="button">ABOUT US</a></li>
                                                        <li class="dropdown classic">
                                                            <a href="contact-us-01.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">CONTACT US </a>
                                                            <ul class="dropdown-menu"> 
                                                                <li><a href="contact-us-01.html">Type1</a></li>
                                                                <li><a href="contact-us-02.html">Type2</a></li>
                                                                <li><a href="contact-us-03.html">Type3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="register_account.html" role="button">REGISTER ACCOUNT</a></li>
                                                        <li><a href="product_comparison.html" role="button">PRODUCT COMPARISON</a></li>
                                                        <li><a href="login.html" role="button">LOGIN</a></li>
                                                        <li><a href="404.html" role="button">404 PAGES</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown classic"> 
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">PORTFOLIO</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="portfolio_item_01.html">Portfolio item 1</a></li>
                                                        <li><a href="portfolio_item_02.html">Portfolio item 2</a></li>
                                                        <li><a href="portfolio_grid_3_column.html">Portfolio grid 3</a></li>
                                                        <li><a href="portfolio_masonry.html">Portfolio masonry</a></li>
                                                        <li><a href="portfolio_masonry_rectangular_images.html">Portfolio masonry rectangle</a></li>
                                                        <li><a href="portfolio_masonry_square_images.html">Portfolio masonry square</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown classic"> 
                                                    <a href="shortcodes-alerts.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">ELEMENTS</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="shortcodes-alerts.html">Alerts</a></li>
                                                        <li><a href="shortcodes-animations.html">Animations</a></li>
                                                        <li><a href="shortcodes-buttons.html">Buttons</a></li>
                                                        <li><a href="shortcodes-form.html">Forms</a></li>
                                                        <li><a href="shortcodes-grids.html">Grids</a></li>
                                                        <li><a href="shortcodes-icons.html">Icons</a></li>
                                                        <li><a href="shortcodes-lists.html">Lists</a></li>
                                                        <li><a href="shortcodes-medias.html">Medias</a></li>
                                                        <li><a href="shortcodes-tabs.html">Tabs</a></li>
                                                        <li><a href="shortcodes-titles.html">Titles</a></li>
                                                        <li><a href="shortcodes-typography.html">Typography</a></li>
                                                        <li><a href="shortcodes-more.html">More</a></li>
                                                    </ul>
                                                </li>
                                                <li class="hidden-sm hidden-xs"> <input placeholder="SEARCH HERE"></li>
                                                <li class="hidden-sm hidden-xs"> <a href="#" role="button">MY CART: $0.00</a> </li>
                                                @auth
                                                <li class="dropdown classic"> 
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  role="button">MY ACCOUNT</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="portfolio_item_01.html">My Wishlist</a></li>
                                                        <li><a href="portfolio_item_02.html">My Products</a></li>
                                                        <li><a href="portfolio_grid_3_column.html">Checkout</a></li>
                                                        <li><a href="portfolio_masonry.html">Edit Profile</a></li>
                                                        <li><a href="portfolio_masonry_rectangular_images.html">Logout</a></li>
                                                    </ul>
                                                </li>
                                                @else
                                                <li class="hidden-sm hidden-xs"> <a href="{{route('login')}}" role="button">LOGIN</a> </li>
                                                <li class="hidden-sm hidden-xs"> <a href="{{route('register')}}" role="button">REGISTER</a> </li>
                                                @endauth
                                            </ul><!--End navbar-nav-->    
                                        </nav><!--End navbar-default--> 
                                    </div><!-- End header-main-nav-->   
                                    <!-- Start header-mobile-->
                                    <div class="header-mobile hidden-lg hidden-md hidden-sm">
                                        <ul>
                                            <li><a href="#" role="button"><i class="demo-icon pesto-icon-cross-mark menu-close"></i></a></li>
                                            <li><a href="#" role="button">HOME</a></li>
                                            <li><a href="#" role="button">FASION</a></li>
                                            <li><a href="#" role="button">ABOUT US</a></li>
                                            <li><a href="#" role="button">BLOG</a></li>
                                            <li><a href="#" role="button">PORTOFOLIO</a></li>
                                            <li><input placeholder="SEARCH HERE..."></li>
                                            <li><a href="#">MY CART: $0.00</a></li>
                                            <li><a href="#">REGISTER</a></li>
                                            <li><a href="#">En/<i class="fa fa-Euro"></i></a></li>
                                        </ul>
                                    </div><!-- End Header-mobile-->         
                                </div> <!-- End header-column -->
                            </div> <!-- End header-row -->
                        </div><!-- End header-table-->
                    </div>   
                </div>
                <div class="header-bottom-links">
                    <div class="wrapper">
                        <ul class="list-float-left clearfix">
                            <li><a href="#" class="facebook icon-button xsmall border-none"><i class="demo-icon pesto-icon-facebook"></i></a> </li>
                            <li><a href="#" class="twitter icon-button xsmall border-none"><i class="demo-icon pesto-icon-twitter"></i></a> </li>
                            <li><a href="#" class="pinterest icon-button xsmall border-none"><i class="demo-icon pesto-icon-pinterest"></i></a> </li>
                            <li><a href="#" class="instagram icon-button xsmall border-none"><i class="demo-icon pesto-icon-instagram"></i></a> </li>
                            <li><a href="#" class="envelope icon-button xsmall border-none"><i class="demo-icon pesto-icon-email"></i></a> </li>
                            <li><a href="#" class="skype icon-button xsmall border-none"><i class="demo-icon pesto-icon-skype"></i></a> </li>
                        </ul>
                        <p class="font-istok">
                            2016 Pesto. All Rights reserved.
                        </p>
                    </div>
                </div>
            </div> <!-- End header-body --> 
        </header>

        @yield('content')
        
		<!-- Start Footer-->
        <footer class="footer3">
			<div class="wrapper-fluid">
				<div class="pull-left">
					<ul class="list-inline">
						<li> <a href="#"> My Account </a> </li>    
						<li> <a href="#"> My Wishlist </a> </li>    
						<li> <a href="#"> My Favorites </a> </li>    
						<li> <a href="#"> Checkout </a> </li>    
						<li> <a href="#"> Contact us </a> </li>    
						<li> <a href="#"> Information </a> </li>     
					</ul>
				</div>
				<div class="pull-right phone-number">
					<p>Call us: 0203-980-14-79</p>
				</div>
			</div>
        </footer>
        
        <script src="{{asset('pesto/vendor/js/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/wow/wow.js')}}"></script>
        <script src="{{asset('pesto/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/bootstrap-select/bootstrap_select.js')}}"></script> 
		<script src="{{asset('pesto/vendor/imagesloaded/imagesloaded.pkgd.js')}}"></script> 
        <script src="{{asset('pesto/vendor/isotope/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('pesto/vendor/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('pesto/vendor/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
		
        <script src="{{asset('pesto/js/theme.js')}}"></script>
    </body>
</html>
