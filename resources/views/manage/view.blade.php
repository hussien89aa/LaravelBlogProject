

@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> Title</td>
            </tr>

            @foreach($articles as $art)
                <tr>
                    <td> <a href="{{ "/read/".$art->id}}">{{$art->title}}</a>
                    </td>
                </tr>
            @endforeach

        </table>

        <a href="add">Add new article</a>
    </div>
@endsection


