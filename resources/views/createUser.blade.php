@extends('index')
 
@section('content')
    <form action="/register" method="post">
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail">
    </div>

    <fieldset>
    <legend>interrest</legend>

    <div>
      <input type="checkbox" id="scales" name="scales" checked>
      <label for="scales">auto</label>
    </div>

    <div>
      <input type="checkbox" id="horns" name="horns">
      <label for="horns">moto</label>
    </div>
</fieldset>
<div>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
    </div>  
    <input type="submit" value="Submit">
</form>

@endsection