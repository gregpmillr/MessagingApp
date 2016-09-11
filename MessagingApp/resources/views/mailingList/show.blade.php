@extends('partials/adminNav')

@section('content')

<br><br>

    <div class="panel panel-default">
            <div class="panel-heading text-center">
                {{$mailingList->name }}
            </div>

            <div class="container-fluid">
                    <br>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['mailingList.destroy', $mailingList->id]]) !!}
                    {!! Form::submit('Delete Mailing List', ['class'=> 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    <br>
            </div>

            <div class="container-fluid">
                <div class="row">
                    {!! Form::model($client = new App\Client, ['url' => 'client']) !!}
                    @include ('client.form', ['submitButtonText' => 'Add Client'], ['mailingID' => $mailingList->id])
                    {!! Form::close() !!}
                </div>
            </div>

        <div class="panel-body">
            <table class="table table-striped">

                    <!-- Table Headings -->
                    <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Edit</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $client->fName }}</div>
                            </td>

                            <td>
                                <div>{{ $client->lName }}</div>
                            </td>

                            <td class="table-text">
                                <div>{{ $client->phoneNumber }}</div>
                            </td>

                            <td class="table-text">
                                <a href="{{action('ClientController@show', [$client->id])}}">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop