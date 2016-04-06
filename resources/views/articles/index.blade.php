@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">List of all articles</div>

                <div class="panel-body">
                    @foreach ($articles as $article)
                    <div>
                        <h3><a href="{{ url('articles')}}/{{ $article->id }}">{{ $article->title }}</a></h3>
                        <div>{{ $article->body }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
