@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新增留言</div>

                <div class="card-body">

                <form method="POST" action="/posts">
                    @csrf
                    <input type="text" size="50" name="post_text">
                    <input type="submit" value="送出留言">

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
