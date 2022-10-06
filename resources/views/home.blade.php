@extends('layouts.main')
@section('content')
<!-- Start Content -->
<section id="content" class="home3">
    @if(!$queryed_page)
    <!-- Start Content-Header -->
    <div class="content-header">   
        <div id="rev_slider3_wrapper" class="rev_slider_wrapper" data-alias="main-feature-slider" style="width: 100% !important; height: 100% !important;">
            <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
            <div id="rev_slider3" class="rev_slider3" style="display:none;" data-version="5.0.7">
                <ul>    
                    <!-- SLIDE - 1 -->
                    <li class="slider-1"
                        data-delay="7000"
                        data-transition="fade">
                        
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('pesto')}}/img/slides/slider-1.jpg"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        data-bgparallax="off"
                        class="rev-slidebg">
                        
                        <!-- LAYERS -->
                        <div class="tp-caption maincaption   tp-resizeme rs-parallaxlevel-0" 
                            id="slide_1_layer_1" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['198','140','80','20']"
                            data-y="['center','center','center','center']"
                            data-voffset="['-166','-115','-90','-50']" 
                            data-fontsize="['90','60','45','36']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 6; line-height: 1; white-space: nowrap; font-family: 'Roboto condensed'; font-weight: bold; letter-spacing: 1px; color: #ccc;"><i>YOUR</i> 
                        </div>

                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                            id="slide_1_layer_2" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']"
                            data-y="['center','center','center','center']" 
                            data-voffset="['-95','-66','-46','-22']" 
                            data-fontsize="['90','60','45','36']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 7; line-height: 1; font-family: 'Roboto condensed'; font-weight: bold; letter-spacing: 2px; color: #555;">
                            FIRST LOOK
                        </div>

                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                            id="slide_1_layer_3" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['285','214','155','80']"
                            data-y="['center','center','center','center']"
                            data-voffset="['-26','-18','-6','6']" 
                            data-fontsize="['90','60','45','36']"  
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 8; font-family: 'Roboto condensed'; font-weight: bold; color: #555;">
                            SPRING
                        </div>
                        
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                            id="slide_1_layer_4" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['215','166','120','52']"  
                            data-y="['center','center','center','center']"
                            data-voffset="['-40','-25','-12','1']" 
                            data-fontsize="['50','40','30','21']"     
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 10; font-family: 'Roboto condensed'; font-weight: bold; color: #ccc;"><i>AT</i>
                        </div>
                        
                        <p class="tp-caption tp-resizeme rs-parallaxlevel-0 hidden-xs" 
                            id="slide_1_layer_5" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']"  
                            data-y="['center','center','center','center']"
                            data-voffset="['54','53','53','53']" 
                            data-fontsize="['16','16','16','16']"   
                            data-lineheight="['25','22','19','16']" 									
                            data-width="['500','500','500','250']"
                            data-height="none"
                            data-whitespace="wrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-splitin="chars" 
                            data-splitout="none" 
                            data-elementdelay="0.02"
                            data-start="1000"
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 11; color: #777777;font-family:'Arial';">Etiam elementum purus tempus, porttitor mi a, ultricies mauris. Fusce at porta massa. Duis tortor mauris, rhoncus a suscipit.
                        </p>
                        
                        <div class="tp-caption rev-btn  rs-parallaxlevel-0  hidden-xs" 
                                id="slide_1_layer_6" 

                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']" 
                            data-y="['center','center','center','center']"
                            data-voffset="['133','120','80','53']" 
                            data-width="none"
                            data-fontsize="['16','16','16','16']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 154, 238, 1.00);bc:rgba(0, 154, 238, 1.00);cursor:pointer;"
                            data-transform_in="y:[100%];s:500;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="4000"  
                            data-splitin="none" 
                            data-splitout="none" 
                            data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 9; padding: 0;">
                            <a class="btn btn-default" href="#">SHOP NOW</a> 
                        </div>
                    
                        <div class="tp-caption rev-btn  rs-parallaxlevel-0 visible-xs" 
                                id="slide_1_layer_7" 

                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']" 
                            data-y="['center','center','center','center']"
                            data-voffset="['133','120','80','53']" 
                            data-width="none"
                            data-fontsize="['16','16','16','16']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 154, 238, 1.00);bc:rgba(0, 154, 238, 1.00);cursor:pointer;"
                            data-transform_in="y:[100%];s:500;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="1000"  
                            data-splitin="none" 
                            data-splitout="none" 
                            data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 9; padding: 0;">
                            <a class="btn btn-default" href="#">SHOP NOW</a> 
                        </div>
                    </li>
                    
                    <!-- SLIDE - 2 -->
                    <li class="slider-2"
                        data-delay="7000"
                        data-transition="fade">
                        
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('pesto')}}/img/slides/slider-3.jpg"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        data-bgparallax="off"
                        class="rev-slidebg">
                        
                        <!-- LAYERS -->
                        <div class="tp-caption maincaption   tp-resizeme rs-parallaxlevel-0" 
                            id="slide_2_layer_1" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['195','140','80','20']"
                            data-y="['center','center','center','center']"
                            data-voffset="['-170','-115','-90','-50']" 
                            data-fontsize="['90','60','45','36']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 6; line-height: 1; white-space: nowrap; font-family: 'Roboto condensed'; font-weight: bold; letter-spacing: 1px; color: #ccc;"><i>STYLISH</i> 
                        </div>

                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
                            id="slide_2_layer_2" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']"
                            data-y="['center','center','center','center']" 
                            data-voffset="['-100','-66','-46','-22']" 
                            data-fontsize="['90','60','45','36']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 7; line-height: 1; font-family: 'Roboto condensed'; font-weight: bold; letter-spacing: 2px; color: #555;">
                            JACKETS
                        </div>

                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                            id="slide_2_layer_3" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['314','214','155','62']"
                            data-y="['center','center','center','center']"
                            data-voffset="['-29','-18','-6','6']" 
                            data-fontsize="['90','60','45','36']"  
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 8; font-family: 'Roboto condensed'; font-weight: bold; color: #555;">
                            EVERY DAY
                        </div>
                        
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                            id="slide_2_layer_4" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']" 
                            data-y="['center','center','center','center']"
                            data-voffset="['-44','-25','-12','0']" 
                            data-fontsize="['50','40','30','21']"     
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;rZ:inherit;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="500" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 10; font-family: 'Roboto condensed'; font-weight: bold; color: #ccc;"><i>FOR</i>
                        </div>
                        
                        <p class="tp-caption tp-resizeme rs-parallaxlevel-0 hidden-xs" 
                            id="slide_2_layer_5" 
                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']"  
                            data-y="['center','center','center','center']"
                            data-voffset="['54','53','53','53']" 
                            data-fontsize="['16','16','16','16']"   
                            data-lineheight="['25','22','19','16']" 									
                            data-width="['500','500','500','250']"
                            data-height="none"
                            data-whitespace="wrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-splitin="chars" 
                            data-splitout="none" 
                            data-elementdelay="0.02"
                            data-start="1000"
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 11; color: #777777;font-family:'Arial';">Morbi arcu leo, vulputate nec faucibus non, dictum porttitor orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        
                        <div class="tp-caption rev-btn  rs-parallaxlevel-0  hidden-xs" 
                                id="slide_2_layer_6" 

                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']" 
                            data-y="['center','center','center','center']"
                            data-voffset="['133','120','80','53']" 
                            data-width="none"
                            data-fontsize="['16','16','16','16']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 154, 238, 1.00);bc:rgba(0, 154, 238, 1.00);cursor:pointer;"
                            data-transform_in="y:[100%];s:500;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="4000"  
                            data-splitin="none" 
                            data-splitout="none" 
                            data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 9; padding: 0;">
                            <a class="btn btn-default" href="#">VIEW ALL</a> 
                        </div>
                    
                        <div class="tp-caption rev-btn  rs-parallaxlevel-0 visible-xs" 
                                id="slide_2_layer_7" 

                            data-x="['left','left','left','left']"
                            data-hoffset="['200','140','80','20']" 
                            data-y="['center','center','center','center']"
                            data-voffset="['133','120','80','53']" 
                            data-width="none"
                            data-fontsize="['16','16','16','16']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 154, 238, 1.00);bc:rgba(0, 154, 238, 1.00);cursor:pointer;"
                            data-transform_in="y:[100%];s:500;"
                            data-transform_out="opacity:0;s:500;"
                            data-start="1000"  
                            data-splitin="none" 
                            data-splitout="none" 
                            data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                            data-responsive_offset="off" 
                            data-responsive="off"
                            
                            style="z-index: 9; padding: 0;">
                            <a class="btn btn-default" href="#">VIEW ALL</a> 
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> 
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div> <!-- End .content-header -->
    @endif
    
    <!-- Start Content-Main -->
    <div class="content-main">
        <div class="products-container">
            
            <div class="products">
                <div class="wrapper-fluid">
                    
                    <div class="row grid">
                        @forelse($products as $product)
                        <div class="col-xxlg-5-1 col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
                            <!--Start Product -->
                            <div class="product fadeInUp wow" data-wow-duration="500ms">
                                <div class="image">
                                    <a href="product.html">
                                        <img src="{{$product->image->path}}" alt="" />
                                    </a>
                                    <div class="over-comment middle">
                                        <div>
                                            <span> HP PAVILION </span>
                                            <h2 class="small name font-istok">{{$product->title}}</h2>
                                            <div>
                                                <div class="price"><span> ${{$product->price}} </span></div>
                                                <span class="rating"><i class="theme-icon pesto-icon-star-shape"></i> 5/5</span>
                                                <div class="hidden brand">Brand1</div>
                                                <div class="hidden sales-volume">3</div>
                                                <div class="hidden special">stock</div>
                                                <div class="hidden date">2016/1/1</div>
                                            </div>
                                            <div class="links">
                                                <a href="#" class="icon-button small"><i class="theme-icon pesto-icon-loving"></i></a>
                                                <a href="shopping-cart.html" class="btn btn-default btn-md"> ADD TO CART </a>
                                                <a href="#" class="icon-button small"><i class="pesto-icon-connector"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-comment">
                                    <h4 class="name font-istok smaller">Black lace open back dress</h4>
                                    <div class="price"><span>$124.00</span></div>
                                </div>
                                
                            </div>
                            <!-- End Prodcut -->
                        </div>
                        @empty
                        <h2 class="text-center">{{__('There are no products to show!')}}</h2>
                        @endforelse
                    </div><!-- End .row -->
                    @if(!$queryed_page)
                    <div class="row action-field">
                        <div class="col-sm-12 text-center">
                            <a href="?page={{(request()->query('page') + 1)}}" class="btn-default "> LOAD MORE</a>
                        </div>
                    </div><!-- End .row -->
                    @endif

                </div> <!-- End .wrapper-fluid -->
            </div><!-- End .products -->
        </div><!-- End .products-container -->
    </div><!-- End .content-main -->
</section><!-- End .content -->
@endsection