@extends('../partials/nav')

@section('content')



    <div class="voffset7"></div>

    <div class="inner cover">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}" id="msform">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Account Setup</li>
                <li>Social Profiles</li>
                <li>Personal Details</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">You won't regret it.</h3>
                <input type="text" name="businessName" placeholder="Business Name" />
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="facebook" placeholder="Facebook" />
                <input type="text" name="gplus" placeholder="Google Plus" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">We will never sell it</h3>
                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="phone" placeholder="Phone" />
                <textarea name="address" placeholder="Address"></textarea>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="next action-button" value="Submit" />


            </fieldset>
        </form>
    </div>

@endsection
