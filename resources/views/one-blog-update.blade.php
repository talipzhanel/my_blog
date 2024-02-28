@extends('layouts.standard')

@section('title-blog')
    Обновить блог
@endsection

@section('content')
    <h1>Обновить блог</h1>
    @if ($errors->any())
        <div class="alert alert-danger" style="margin-left: 10%; width: 500px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('one-blog-update-post', $blog->id) }}" method="post">
        @csrf
        <div class="form-group" style="margin-left: 10%; width: 500px;">
            <p><small>{{$blog->created_at}}</small></p>
            <textarea name="message" id="message" class="form-control" placeholder="Enter your message">{{$blog->message }}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-success" style="margin-left: 10%">Обновить</button>
    </form>
@endsection



