@extends('partials/adminNav')

@section('content')
    <br>    <br>
    <h1>{{$mailingList->name }}</h1>

    <a class="btn btn-danger" href="{{ URL::to('mailingList/' . $mailingList->id. '/edit') }}">Edit</a>

    {!! Form::open(['method' => 'DELETE', 'route' => ['mailingList.destroy', $mailingList->id]]) !!}
    <br>
    {!! Form::submit('Delete', ['class'=> 'btn btn-danger']) !!}
    {!! Form::close() !!}

    @foreach ($clients as $client)
        <article>
            <h2>
                <a href="{{action('ClientController@show',[$client->id])}}">{{$client->fName}},{{$client->lName}}, {{$client->phoneNumber}}</a>
            </h2>
        </article>
    @endforeach


@stop