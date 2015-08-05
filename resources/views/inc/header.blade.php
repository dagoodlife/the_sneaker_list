<header class="header">

	<div class="container_fhstyle">

    <!-- Logo -->
    <div class="logo"><a href="/" id="logo"></a></div>

	<!-- Navigation Menu -->
    <div class="menu_main rslinks">

      <div class="yamm navbar-default">

          <div class="navbar-header">
            <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
              <button type="button" > <i class="fa fa-bars"></i></button>
            </div>
          </div>

          <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">

            <nav>

              <ul class="nav navbar-nav">

                <li class=" yamm-fw"> <a href="/">Home</a>


                </li>

                <li class=""><a href="/about-us" >About</a>

                </li>

                <li class=" yamm-fw"> <a href="/shoe-request" >Shoe Request</a>


                </li>

                <li class=""><a href="/how-it-works" >How It Works</a>

                </li>

                <li class=" yamm-fw"> <a href="/gallery" >Gallery</a>

                </li>


                <li class=""><a href="contact" >Contact</a>

                </li>

                @if(Auth::check())
                    <li><a href="/{{Auth::user()->id}}/orders">{{Auth::user()->last_name}}</a></li>
                @endif

              </ul>

            </nav>

          </div>

      </div>

    </div>
	<!-- end Navigation Menu -->
    @if(! Auth::check())
        <div class="menu_rlinks2"><a href="/auth/sign-up">Sign Up</a></div>
   @endif

	</div>

</header>