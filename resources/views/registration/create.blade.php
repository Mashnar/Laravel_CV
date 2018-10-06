@extends('layouts.app')    <!--bierzemy loyots , taka jakby template -->

 @section('main')
    <h2>Register</h2>
  
    <form method="POST" action="register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Imie:</label>
            <input type="text" class="form-control" id="name" name="Imie">
        </div>

         <div class="form-group">
            <label for="name">Nazwisko:</label>
            <input type="text" class="form-control" id="name" name="Nazwisko">
        </div>
 

 <div class="form-group">
            <label for="name">Pesel:</label>
            <input type="text" class="form-control" id="name" name="PESEL">
        </div>


        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="e_mail">
        </div>
 
        <div class="form-group">
            <label for="password">Haslo:</label>
            <input type="password" class="form-control" id="password" name="haslo">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
      
    </form>

@stop

@section('footer')

@stop







