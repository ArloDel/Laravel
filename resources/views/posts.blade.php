@extends('layout.main')



@section('container')
<div class="row">
    <div class="col">
        <article class="mb-5">

            @foreach ($posts as $post)
            <h3>
                <a href="/posts/{{$post['slug']}}">
                    {{$post['title'] }}
                </a>
            </h3>
            <h4>{{$post['author']}}</h4>
            <p>{{$post['body']}}</p>
                
        </article>
        @endforeach
    </div>
</div>
@endsection