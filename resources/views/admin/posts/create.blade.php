@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.posts.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="title">tile</label>
              <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelper" value="{{old ('title')}}">
            </div>

            <div class="form-group">
              <label for="cover_img">cover_img</label>
              <input type="text" name="cover_img" id="cover_img" class="form-control">
            </div>

            <div class="form-group">
                <label for="creator">creator</label>
                <input type="text" name="creator" class="form-control" id="creator" aria-describedby="createHelper" value="{{old ('create')}}">
            </div>

            <div class="form-group">
                <label for="date_create"> data creazione </label>
                <input type="date" id="date_create" name="date_create" value="2022-06-22">

            </div>

            <div class="form-group">
                <label for="text_body">text_body</label>
                <textarea name="text_body" id="text_body" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    

@endsection