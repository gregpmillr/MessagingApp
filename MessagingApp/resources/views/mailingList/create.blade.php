@extends('partials/adminNav')

@section('content')

    <div id="page-content-wrapper">
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