<div class="top-header">
  <div class="container">
    <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
      <li class="hm"><a href="{{ url('home')}}"><i class="fa fa-home"></i></a></li>
      <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>

    </ul>
    <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
      <li class="tol">Toll Number : 123-4568790</li>



      <!-- Authentication Links -->
      @if (Auth::guest())
          <li><a href="{{ url('login') }}">Login </a></li>
          <li><a href="{{ url('register') }}">/ Register</a></li>
      @else
          <li class="dropdown">
              <a href="#" >
  </a>

                Welcome- <span style="color:#3dff2d ;text-transform: uppercase">{{ Auth::user()->name }}</span> &nbsp
              </a>


                  <li>
                      <a href="{{ url('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                        /  Logout
                      </a>

                      <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>

          </li>
      @endif

        </ul>
    <div class="clearfix"></div>
  </div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
  <div class="container">
    <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
      <a href="{{ url('home')}}">Green <span>Travels</span></a>
    </div>
    <div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="index.html" class="buses active">BUSES</a>
            <a href="{{ url('hotel') }}">HOTELS</a>
        </div>
    <div class="lock fadeInDown animated" data-wow-delay=".5s">
      <li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
  <div class="container">
  <div class="navigation">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav class="cl-effect-1">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('about-us') }}">About</a></li>
                <li><a href="{{ url('feq')}}">Faq</a></li>
                <li><a href="{{ url('app1')}}">Apps</a></li>
                <li><a href="{{ url('blog1')}}">Blog</a></li>
                <li><a href="{{ url('travel1')}}">Travels</a></li>
                <li><a href="{{ url('privacy-policy')}}">Privacy Policy</a></li>
                <li><a href="{{ url('agent')}}">Agent Registration</a></li>
                <li><a href="{{ url('terms')}}">Terms of Use</a></li>
                <li><a href="{{ url('contact')}}">Contact Us</a></li>
                <li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>


                <div class="clearfix"></div>
            </ul>
          </nav>
        </div><!-- /.navbar-collapse -->
      </nav>
    </div>

</div>
</div>
