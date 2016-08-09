
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="add" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">body:</label>
                <textarea rows="4" cols="50"  name="body" class="form-control">
      </textarea>
            </div>

            </br>
            <input type="submit" value="add new" class="btn btn-primary"/>
        </form>

    </div>

@endsection
