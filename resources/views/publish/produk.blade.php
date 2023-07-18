<!DOCTYPE html>
<html>
<head>
    <title>tokoKopi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="Tokokopi">

    <!-- CSS links 
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />-->
    <link href="{{ URL::asset('publish/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('publish/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />-->

    
    <!-- Animate.css 
    <link type="text/css" rel="stylesheet" href="css/animate.css" />-->
    <link href="{{ URL::asset('publish/css/animate.css') }}" rel="stylesheet">

    <!-- Owl Carousel CSS
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />-->

    <link href="{{ URL::asset('publish/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('publish/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" >



    <!-- Mega navigation bar 
    <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />-->
    <link href="{{ URL::asset('publish/css/webslidemenu.css') }}" rel="stylesheet">

    <!-- Main css link
    <link type="text/css" rel="stylesheet" href="css/main.css" type="text/css"  /> -->
    <link href="{{ URL::asset('publish/css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('publish/images/logo.png')}}" />
    
</head>
<body>
    <div class="wrapper">
        <!-- Header part -->
        @include('publish.header') 
            <!-- End Top Header -->


            <!-- Start Header Main, logo, search bar,cart -->
            <div class="header-bottom">
                <div class="container">
                    <div class="header-logo pull-left">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('publish/images/logo.png')}}" alt="Your Shop Logo" class="img img-responsive">
                        </a>
                    </div>

                    <div class="header-search pull-left">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search for a Product..." required="">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <i class="fa fa-search" aria-hidden="true"> </i>
                            </button>
                        </form>
                    </div>

                    <div class="header-cart">
                        <a href="cart.html" class="cart-link" data-toggle="modal" data-target="#cart-item"><i class="fa fa-cart-arrow-down"></i></a>
                        <span class="number-of-cart">20</span>
                    </div>

                    <!-- Cart Modal -->
                    <div id="cart-item" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                            <h4 class="modal-title">Cart Products</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Name</th>
                                        <th>Item Image</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Digital Camera</td>
                                        <td><img src="{{ asset('publish/images/product-slide/product2.png')}}" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>3</td>
                                        <td>200$</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Samsung Galaxy 7</td>
                                        <td><img src="{{ asset('publish/images/product-slide/product3.png')}}" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>1</td>
                                        <td>500$</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="5">
                                            Total Price <span class="bold text-primary" style="margin-left: 73%">800$</span>
                                        </td>
                                    </tr>
                                    <div class="clearfix"></div>
                                </tbody>
                            </table>
                            <p class="text-right text-danger">There are <span style="font-weight: bold">2</span> more products in the cart. Click Checkout now to buy the items..</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
                            </button>
                            <a href="cart.html" class="btn btn-yellow">Check Out</a>
                        </div>
                    </div>

                </div>
            </div> <!-- End Model -->

        </div>
    </div>
    <!-- End Header Main, logo, search bar,cart 

-->
    @include('publish.headermenu')




</div>
<!-- Header part  -->


<div class="content-area">
    <div class="main-slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('publish/images/slider/slider1.jpg')}}" alt="Chania">
                <div class="carousel-caption">
                    <div class="slide-header-text wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update coffee from here...</div> <br />
                    <!--<a href="products.html" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"></a>-->
                </div>
            </div>

            <div class="item">
              <img src="{{ asset('publish/images/slider/slider2.jpg')}}" alt="Chania">
              <div class="carousel-caption">
                <div class="slide-header-text wow rotateIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Turn your looking into an easy price</div> <br />
                <!--<a href="products.html" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"></a>-->
            </div>
        </div>

        <div class="item">
          <img src="{{ asset('publish/images/slider/slider3.jpg')}}" alt="Flower">
          <div class="carousel-caption">
           <div class="slide-header-text wow rollIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">A place of all variant products</div> <br />
           <!--<a href="products.html" class="btn btn-red slider-link wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"></a>-->
       </div>
   </div>

   <div class="item">
      <img src="{{ asset('publish/images/slider/slider4.jpg')}}" alt="Flower">
      <div class="carousel-caption">
          <div class="slide-header-text wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update coffee from here...</div> <br />
          <a href="products.html" class="btn btn-red slider-link wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"></a>
      </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>

</a>

<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>

</div>
</div> <!-- End Main slider class -->


 <!--End Featured products Div-->

@include('publish.allproducts')
  <!-- End Latest products -->

<div class="services-area">
    <div class="services">
        <div class="container">
            <div class="ftr-toprow">
                <div class="col-md-4 ftr-top-grids wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="ftr-top-left pull-left">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>FREE DELIVERY</h4>
                        <p>Pengiriman gratis untuk area Yogyakarta</p>
                    </div> 
                    <div class="clearfix"> </div>
                </div> 
                <div class="col-md-4 ftr-top-grids wow slideInUp" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="ftr-top-left pull-left">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>CUSTOMER CARE</h4>
                        <p>Siap melayani order 24 jam / 7 hari </p>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 ftr-top-grids wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="ftr-top-left pull-left">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>GOOD QUALITY</h4>
                        <p>Produk yang kami tawarkan adalah produk unggulan </p>
                    </div>
                    <div class="clearfix"> </div>
                </div> 
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div> <!-- End Service -->

</div> <!-- End content Area class -->

@include('publish.footer')
 <!--End Footer bottom -->

<div class="scroll">
    <a href="#top" class="scroll-to-top hidden">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


</div> <!-- End wrapper -->



<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('publish/assets/js/jquery.min.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        // alert('test message');

        // var bd_phone_pattern = /^(?:\+88|01)?\d{11}$/;
        // var contact1 = "01951233084";
        // var contact2 = "+8801951233084";
        // alert(bd_phone_pattern.test(contact1));
        // if (bd_phone_pattern.test(contact1)) {
        //     alert('Regexp Has Matched');
        // }else{
        //     alert('Regexp Hasn\'t Matched');
        // }
    });
</script>



<script type="text/javascript" src="{{ URL::asset('publish/assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ URL::asset('publish/assets/js/js/wow.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('publish/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('publish/assets/js/webslidemenu.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('publish/assets/js/main.js') }}"></script>
</body>
</html>
