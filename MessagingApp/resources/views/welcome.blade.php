@extends('../partials/nav')

@section('content')

    <!-- Columns of text -->
    <div class="container marketing" id="features">

        <!-- Three columns of text below -->
        <div class="row voffset6">

            <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>What?</h2>
                <p>Easy to use, low cost SMS/MMS messaging platform so you can spend less time marketing, and more time selling.</p><br><br><br>
            </div>

            <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Hint... Hint</h2>
                <p>Oh - We're glad you asked! Simply click the button below to start the registration process. If you're not sold yet -
                    You must see what we have to offer.<br>
                    <b>You won't be disappointed.</b></p><br>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Sign me up!</a></p>
            </div>

            <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Simplicity</h2>
                <p>With our highly efficient and easy-to-use application built upon the Twilio framework, we help you expand your business by creating
                and managing personalized mailing lists for mass text marketing.</p><br><br>
            </div>

        </div>

        <div class="voffset6"></div>

    </div>

    <div class="voffset9"></div>

    <div class="container">

        <div class="row">

            <div class="container">

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="inner cover animation-element-picture slide-right animation-picture-1" id="picture1">
                        <img src="/imgs/phone_icon.png">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
                        <div class="animation-element slide-left-quick animation-text-block-2_1 pull-left">
                            <h2>It's Easy!</h2><br>
                        </div>
                    </div>
                    <div class="animation-element slide-left animation-text-block-2">
                        <p class="text-left">
                            Sign up, add to your mailing list, think of an awesome one-liner, maybe add a delicious picture in your message
                            to catch their attention, click. Continue with your regular schedule - <b>We handle the rest.</b>
                        </p>
                    </div>
                </div>

             </div>

        </div>



    <div class="voffset9"></div>

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-5 col-sm-push-0 col-md-push-8">
                <div class="inner cover animation-element-picture slide-left animation-picture-2" id="picture2">
                    <img src="/imgs/chat_bubble_icon.png">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-sm-pull-0 col-md-pull-4" >
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block ">
                    <div class="animation-element slide-right-quick animation-text-block-3_1 pull-left">
                        <h2>Creative Marketing</h2><br>
                    </div>
                </div>

                <div class="animation-element slide-right animation-text-block-3">
                    <p class="text-left">How useful would it be to have an <b>easily manageable</b> mailing list of customers for distributing promotions?
                    With our application platform - We make it extremely simple for you. We're here to assist you with expanding your business by
                    attracting new customers and reaching higher customer return rates using our simple SMS and MMS messaging software! </p>
                </div>
            </div>

        </div>

        <div class="voffset9"></div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 ">
                <hr style="border-color:darkgray">
            </div>
        </div>

    </div>

    <div class="voffset9"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <img src="/imgs/Twilio_logo_red.png">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <br> <h3>Using the <b>BEST</b> SMS platform available.</h3>
            </div>
        </div>

        <div class="row">
            <div class="voffset6"></div>
            <a href="#" class="btn-lg btn-success main">Get Started!</a>
        </div>
    </div>

    <div class="voffset9"></div>

    <!-- Modal -->
    <div id="howItWorks" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <img src="/imgs/howItWorks.png" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@stop

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

