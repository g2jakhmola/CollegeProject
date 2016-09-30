<!DOCTYPE HTML>

<html>
    <head>
        <title>Intensify by TEMPLATED</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{asset('assets/assets/css/main.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/assets/css/bootstrap.min.css.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </head>
    <body>

        <!-- Header -->
            <header id="header">
                <nav class="left">
                    <a href="#menu"><span>Menu</span></a>
                </nav>
                <a href="{{url('/')}}" class="logo">intensify</a>
                <nav class="right">
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a class="button alt" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="button alt" href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                </nav>
            </header>
 
        <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                     <li><a href="{{ url('/') }}">Home</a></li>
                         @if(Auth::check())
                     <li><a href="{{ url('/new_ticket') }}">New Ticket</a></li>
                     <li><a href="{{ url('/ticket_list')}}">Show Ticket</a></li>
                        @endif
                    <li><a href="generic.html">Generic</a></li>
                    <li><a href="elements.html">Elements</a></li>
                </ul>
                <ul class="actions vertical">
                    <li><a href="#" class="button fit">Login</a></li>
                </ul>
            </nav>

        <!-- Banner -->
            <section>
                
                  @yield('content')

            </section>

        <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <h2>Get In Touch</h2>
                    <ul class="actions">
                        <li><span class="icon fa-phone"></span> <a href="#">(+91) 858-896-1585</a></li>
                        <li><span class="icon fa-envelope"></span> <a href="#">information@jasco.ltd</a></li>
                        <li><span class="icon fa-map-marker"></span> Najafgarh Road, Nangloi, ND 110041</li>
                    </ul>
                </div>
                <div class="copyright">
                   Copyright &copy; Jeetu Amit and Sunil Co. Design <a href="{{url('/')}}">JAS Co.</a>.
                </div>
            </footer>

        <!-- Scripts -->
            <script src="{{asset('assets/assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('assets/assets/js/bootstrap.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
            <script src="{{asset('assets/assets/js/jquery.scrolly.min.js')}}"></script>
            <script src="{{asset('assets/assets/js/skel.min.js')}}"></script>
            <script src="{{asset('assets/assets/js/util.js')}}"></script>
            <script src="{{asset('assets/assets/js/main.js')}}"></script>

    </body>
</html>