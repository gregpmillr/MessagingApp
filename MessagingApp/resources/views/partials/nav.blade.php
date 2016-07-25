<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Business Messaging</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/cover.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/custom.css')}}"/>
    <script src="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/home.js')}}"></script>
</head>

<body  data-spy="scroll" data-target=".scrollspy" style="position:relative;">

    @yield('content')

    @yield('footer')
</body>
</html>
