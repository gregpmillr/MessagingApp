@extends('partials/adminNav')

@section('content')
        <!-- Page Content -->
<div id="page-content-wrapper">
    <button href="#menu-toggle" type="button" class="btn btn-default visible-xs" aria-label="Left Align" id="menu-toggle">
        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
    </button>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Mailing Lists</h1>

                @if (count($mailingLists) > 0)
                    @foreach ($mailingLists as $list)
                        <article>
                            <h2>
                                <a href="{{action('MailingListController@show',[$list->id])}}">{{$list->id}}</a>
                            </h2>

                            <div class="body">{{$article->body}}</div>
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