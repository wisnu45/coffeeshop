<div class="header-navigation">
        <div class="wsmenucontainer clearfix">
          <div class="overlapblackbg"></div>
          <div class="wsmobileheader clearfix"> <a href="#" id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"><img src="{{ asset('publish/images/logo.png')}}" alt=""></a></div>


          <div class="headerfull"> 
            <!--Main Menu HTML Code-->
            <div class="wsmain">
              <!-- <div class="smllogo"><a href="#"><img src="images/logo.jpg" alt=""></a></div> -->
              <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list">
                  <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="{{ url('/') }}" class="navtext"><span>Home</span></a>
                    <div class="wsshoptabing wtsdepartmentmenu clearfix">
                      <div class="wsshopwp clearfix" style="height: 421px;">
                          <ul class="wstabitem clearfix">
                            <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="{{ url('/profil') }}"><i class="fa fa-male"></i> Profil</a>
                              <div class="wstitemright clearfix wstitemrightactive" style="height: auto;">
                                <div class="wstmegamenucoll clearfix">
                                  
                                </div>
                                <div class="wstmegamenucolr clearfix">
                                  <div class="wstbootslider clearfix">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                                      <!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item"> <a href="#"><img src="./Megamenu_files/woman-ad-img.jpg" alt=""></a>
                                          <div class="carousel-caption">
                                            <h3>First slide label</h3>
                                        </div>
                                    </div>
                                    <div class="item active"> <a href="#"><img src="./Megamenu_files/woman-ad-img02.jpg" alt=""></a>
                                      <div class="carousel-caption">
                                        <h3>Second slide label</h3>
                                    </div>
                                </div>
                              </div>

                        <!-- Controls --> 
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
                    </div>
                </div>
            </div>
        </li>
        <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="{{ url('/aboutus') }}"><i class="fa fa-female"></i> About us</a>
          <div class="wstitemright clearfix" style="height: auto;">
            <div class="wstmegamenucoll clearfix">
              
            
        </div>
        <div class="wstmegamenucolr clearfix"><a href="#"><img src="./Megamenu_files/man-ad-img.jpg" alt=""></a></div>
    </div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="{{ url('/contactus') }}"><i class="fa fa-play-circle"></i> Contact us</a>
  <div class="wstitemright clearfix" style="height: auto;">
    
  <div class="wstadsize01 clearfix"><a href="#"><img src="./Megamenu_files/ad-size01.jpg" alt=""></a></div>
  <div class="wstadsize02 clearfix"><a href="#"><img src="./Megamenu_files/ad-size02.jpg" alt=""></a></div>
</div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="{{ url('/artikels') }}"><i class="fa fa-cutlery"></i> Artikel</a>
  <div class="wstitemright clearfix kitchenmenuimg" style="height: auto;">
    
</div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="{{ url('/products') }}"><i class="fa fa-television"></i> Products</a>
  <div class="wstitemright clearfix" style="height: auto;">
    
</div>
</li>



</ul>
</div>
</div>
</li>








<li class="wssearchbar clearfix">
    <form class="topmenusearch">
      <input placeholder="Search Product By Name, Category...">
      <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
  </form>
</li>

<!--  <li class="wscarticon clearfix"> <a href="#"><i class="fa fa-shopping-basket"></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li> -->

<li class="wsshopmyaccount clearfix"><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="wtxaccountlink"><i class="fa fa-align-justify"></i>My Account <i class="fa  fa-angle-down"></i></a>
    <ul class="wsmenu-submenu">
      <li><a href="account.html"><i class="fa fa-user"></i>View Profile</a></li>
      <li><a href="{{ url('/signup') }}"><i class="fa fa-black-tie"></i>Sign Up</a></li>
      <li><a href="{{ url('/signin') }}"><i class="fa fa-sign-in"></i>Login</a></li>
      @if(Session::get('login'))
      <li><a href="{{ url('/mywish') }}"><i class="fa fa-heart"></i>My Wishlist</a></li>
      @endif
      @if(!Session::get('login'))
      <li><a href=""><i class="fa fa-heart"></i>My Wishlist</a></li>
      @endif
      <li><a href="{{ url('/contactus') }}"><i class="fa fa-question-circle"></i>Help Center</a></li>
      <li><a href="{{ url('/signout') }}"><i class="fa fa-sign-out"></i>Logout </a></li>
  </ul>
</li>
</ul>
</nav>
</div>
<!--Menu HTML Code--> 

</div>
</div>

</div>  <!-- End Navigation header -->