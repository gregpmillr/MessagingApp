@extends('partials/adminNav')

@section('content')

    <div id="page-content-wrapper">
    <button href="#menu-toggle" type="button" class="btn btn-default visible-xs" aria-label="Left Align" id="menu-toggle">
        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
    </button>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create New Mailing List</h1><br>

                {!! Form::model($mailingList = new App\Mailing_List, ['url' => 'mailingList']) !!}
                @include ('mailingList.form', ['submitButtonText' => 'Add Mailing List'])
                {!! Form::close() !!}



            </div>
        </div>
    </div>
</div>

@stop