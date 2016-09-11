@extends('partials/adminNav')

@section('content')
        <!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Mailing Lists</h1>

                <a class="btn btn-primary" href="{{action('MailingListController@create')}}">Add</a>
                @if (count($mailingLists) > 0)
                    @foreach ($mailingLists as $list)
                        <article>
                            <h2>
                                <a href="{{action('MailingListController@show',[$list->id])}}">{{$list->name}}</a>
                            </h2>
                        </article>
                    @endforeach
                @else
                    <h2>You have no mailing lists!</h2>


                @endif

            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

@stop