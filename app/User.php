<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        /*
     
        */


        'Imie', 'Nazwisko','PESEL','NIP','adres','e_mail','opis_osoby','zainteresowania','umiejetnosci','Doswiadczenie','data_ur','data_rej','data_aktualizacji','ocena','plik','is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



}
