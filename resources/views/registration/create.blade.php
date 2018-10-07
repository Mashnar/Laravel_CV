@extends('layouts.app') 
<link href="{{ asset('css/register_css.css') }}" rel="stylesheet" />

   <!--bierzemy loyots , taka jakby template -->
 @section('main')
 

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form"  action="register" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Imię</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="Imie">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nazwisko</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="Nazwisko">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="e_mail">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">PESEL</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="PESEL">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Haslo</label>
                                    <div class="col-md-6">
                                        <input type="text" id="haslo" class="form-control" name="haslo">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>


@stop








