@extends('layouts.user')    <!--bierzemy loyots , taka jakby template -->
<link href="{{ asset('css/main.css') }}" rel="stylesheet" />


@section('main')


  @if( auth()->check() )
 	
             <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">PESEL</th>
       <th scope="col">NIP</th>
        <th scope="col">Adres</th>
         <th scope="col">e_mail</th>
          <th scope="col">Opis Osobisty</th>
           <th scope="col">Zainteresowania</th>
            <th scope="col">Umiejetnosci</th>
             <th scope="col">Doswiadczenie</th>
              <th scope="col">Data urodzenia</th>
               <th scope="col">Ocena</th>
                <th scope="col">Plik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>{{$user->Imie}}</td>
       <td>{{$user->Nazwisko}}</td>
        <td>{{$user->PESEL}}</td>
        @if($user->NIP==0)
<td>Uzupelnij</td>
@else
<td>{{$user->NIP}}</td>
        @endif
        <td>{{$user->adres}}</td>

           
   
    </tr>
   
  </tbody>
</table>

            @endif
@stop




@section('footer')




@stop



