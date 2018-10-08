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
<td></td>
@else
<td>{{$user->NIP}}</td>
        @endif
        @if($user->adres==NULL)
        <td></td>
        @else
        <td>{{$user->adres}}</td>

           @endif
           <td>{{$user->e_mail}}</td>

 @if($user->opis_osoby==NULL)
        <td></td>
        @else
        <td>{{$user->opis_osoby}}</td>
        @endif


         @if($user->zainteresowania==NULL)
        <td></td>
        @else
        <td>{{$user->zainteresowania}}</td>
        @endif

         @if($user->umiejetnosci==NULL)
        <td></td>
        @else
        <td>{{$user->umiejetnosci}}</td>
        @endif


  @if($user->Doswiadczenie==NULL)
        <td></td>
        @else
        <td>{{$user->Doswiadczenie}}</td>
        @endif


         @if($user->data_ur==0)
        <td></td>
        @else
        <td>{{$user->data_ur}}</td>
        @endif

 @if($user->ocena==NULL)
        <td></td>
        @else
        <td>{{$user->ocena}}</td>
        @endif


 @if($user->plik==NULL)
        <td></td>
        @else
        <td>
        <form action="download" method="POST">
  {{ csrf_field() }}
    <input type="submit" value="pobierz" class="btn btn-info btn-xs" role="button" />
     <input type="hidden" id="plik" name="plik" value="{{$user->plik}}">
  
  
</form>
</td>
        @endif


   
    </tr>
   
  </tbody>
</table>

            @endif


@stop




@section('footer')

<p><a href="{{route('edit', $user->id)}}" class="btn btn-info btn-xs" role="button">Edit your data</a> 


@stop



