@extends('layout')
@section('content')
    <h3>What's on the menu:</h3>
    <ul>
    @foreach($recipes as $recipe)
        <li><a href="recipes/{{ strtolower($recipe->name) }}">{{ $recipe->name }}</a></li>
    @endforeach
    </ul>
    <!-- <form method="post" action="/recipes">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="text" id="recipe_name" name="recipe_name">
        <button class="btn btn-primary" type="submit">Add Recipe</button>
    </form> -->
@endsection