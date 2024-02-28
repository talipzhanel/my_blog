@extends('layouts.standard')

@section('title')Написать блог@endsection

@section('content')
    <h1>Написать блог</h1>

    @if ($errors->any())
        <div class="alert alert-danger" style="margin-left: 10%; width: 500px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('blog-create') }}" method="post">

        @csrf
    <div class="from-group container" style="margin-left: 10%">
{{--    <label for="message">Блог</label>--}}
        <textarea name="message" style="width: 500px; height: 200px; margin-left: -1%" id="message" class="form-control" placeholder="Блогыңызды жазыңыз"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success" style="margin-left: 10%">Сохранить</button>
    </form>
@endsection

