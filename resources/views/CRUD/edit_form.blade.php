@extends('layouts.crud')




@section('main')


<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form"  action="{{url('update')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Imię</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="Imie" value="{{$user->Imie}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nazwisko</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="Nazwisko" value="{{$user->Nazwisko}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="e_mail" value="{{$user->e_mail}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="number" class="col-md-4 col-form-label text-md-right">PESEL</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="PESEL" value="{{$user->PESEL}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Haslo</label>
                                    <div class="col-md-6">
                                        <input type="text" id="password" class="form-control" name="password">
                                    </div>
                                </div>
                                

                                   <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right">Adres</label>
                                    <div class="col-md-6">
                                        <input type="text" id="adres" class="form-control" name="adres" value="{{$user->adres}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right">Opis Osobisty</label>
                                    <div class="col-md-6">
                                        <input type="text" id="opis_osoby" class="form-control" name="opis_osoby" value="{{$user->opis_osoby}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right">Zainteresowania</label>
                                    <div class="col-md-6">
                                        <input type="text" id="zainteresowania" class="form-control" name="zainteresowania" value="{{$user->zainteresowania}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right">Umiejetnosci</label>
                                    <div class="col-md-6">
                                        <input type="text" id="umiejetnosci" class="form-control" name="umiejetnosci"
                                        value="{{$user->umiejetnosci}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right">Doswiadczenie</label>
                                    <div class="col-md-6">
                                        <input type="text" id="doswiadczenie" class="form-control" name="doswiadczenie" value="{{$user->Doswiadczenie}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right">Data Urodzenia</label>
                                    <div class="col-md-6">
                                        <input type="date" id="data_ur" class="form-control" name="data_ur" value="{{$user->data_ur}}">
                                    </div>
                                </div>


                                 <input type="hidden" id="id" name="id" value="{{$user->id}}">





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

