<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Business Messaging</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script   src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js"   integrity="sha256-55Jz3pBCF8z9jBO1qQ7cIf0L+neuPTD1u7Ytzrp2dqo="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link type="text/css" rel="stylesheet" href="{{asset('/css/custom.css')}}"/>
    <script src="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/home.js')}}"></script>
</head>

<body  data-spy="scroll" data-target=".scrollspy" style="position:relative;">

<div class="site-wrapper">
    <div class="site-wrapper-inner" id="home">
        <div class="cover-container">
            <div class="masthead clearfix navbar-translucent " id="navbar">
                <div class="inner">
                    <nav>
                        <div class="scrollspy">
                            <ul class="nav masthead-nav">
                                @if(Request::is('/'))
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                @endif
                                @if(!Request::is('/'))
                                        <li><a href="/">Home</a></li>
                                @endif
                                @if(auth()->guest())
                                    @if(!Request::is('auth/register'))
                                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                                    @endif
                                    @if(Request::is('auth/register'))
                                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                                    @endif
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            @if(Request::is('/'))
                <link type="text/css" rel="stylesheet" href="{{asset('/css/cover.css')}}"/>
                @yield('welcome')

            @else
                @yield('content')
                <link type="text/css" rel="stylesheet" href="{{asset('/css/registration.css')}}"/>
                <script type="text/javascript" src="{{URL::asset('/js/registration.js')}}"></script>
            @endif

        </div>
    </div>
</div>

@yield('welcomeContent')

@section('footer')
    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="mastfoot">
                    <div class="inner">
                        <p>Twilio Messaging Service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

</body>
</html>
