@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">留言板</div>

                <div class="card-body">
                    @foreach ($posts as $post)
                        <p>留言: {{ $post->text }}</p>
                        <p>留言者: {{ $post->user->email }}</p>
                        </br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
