

@extends('layout.main')
@section('container')

<div class="col">
    <div class="row">
        <article>
            
                
            <h3>{{$post['title']}}</h3>
            <h4>{{$post['author']}}</h4>
            <p>{{$post['body']}}</p>



            <h5>
                <a href="/posts"> Back to Posts</a>
            </h5>
           
        </article>
    </div>
</div>
@endsection