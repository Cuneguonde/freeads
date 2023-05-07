@extends('layouts.app')
 
@section('content')
    <form action="/annonce" method="post">
    {{ csrf_field() }}


    <fieldset>
    <legend>Annonce</legend>
    <div>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
    </div>  
</fieldset>

    <input type="submit" value="Submit">
</form>

@endsection