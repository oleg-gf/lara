@extends('layouts.main')
@section('content')
    @foreach ($newsList as $news)
    <div class="col">
        <div class="card shadow-sm">
            <img src="{{$news["image"]}}" alt="">

            <div class="card-body">
             <h3><a href="{{route('news.show', ['id' => $news["id"]]) }}">{{$news["title"]}}</a></h3>
                <p class="card-text">{{$news["description"]}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{route('news.show', ['id' => $news["id"]]) }}" class="btn btn-sm btn-outline-secondary">View</a>
                        
                    </div>
                    <small class="text-muted">Автор: <em>{{$news["author"]}}</em></small>
                    <small class="text-muted">Статус: <em>{{$news["status"]}}</em></small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
