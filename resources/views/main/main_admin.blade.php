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
                <th scope="col">Edytuj</th>
                <th scope="col">Usun</th>
    </tr>
  </thead>
  <tbody>

@foreach ($user as $users)
    

    <tr>
      
      <td>{{$users->Imie}}</td>
       <td>{{$users->Nazwisko}}</td>
        <td>{{$users->PESEL}}</td>
        @if($users->NIP==0)
<td></td>
@else
<td>{{$users->NIP}}</td>
        @endif
        @if($users->adres==NULL)
        <td></td>
        @else
        <td>{{$users->adres}}</td>

           @endif
           <td>{{$users->e_mail}}</td>

 @if($users->opis_osoby==NULL)
        <td></td>
        @else
        <td>{{$users->opis_osoby}}</td>
        @endif


         @if($users->zainteresowania==NULL)
        <td></td>
        @else
        <td>{{$users->zainteresowania}}</td>
        @endif

         @if($users->umiejetnosci==NULL)
        <td></td>
        @else
        <td>{{$users->umiejetnosci}}</td>
        @endif


  @if($users->Doswiadczenie==NULL)
        <td></td>
        @else
        <td>{{$users->Doswiadczenie}}</td>
        @endif


         @if($users->data_ur==0)
        <td></td>
        @else
        <td>{{$users->data_ur}}</td>
        @endif

 @if($users->ocena==NULL)
        <td></td>
        @else
        <td>{{$users->ocena}}</td>
        @endif


 @if($users->plik==NULL)
        <td></td>
        @else
        <td>{{$users->plik}}</td>
        @endif

<td><p><a href="{{route('edit', $users->id)}}" class="btn btn-info btn-xs" role="button">Edytuj</a> 
<td><p><a href="{{route('delete', $users->id)}}" class="btn btn-info btn-xs" role="button">Usun</a> 
   
    </tr>
@endforeach

</tbody>
</table>

@endif
  	@stop






@section('footer')


@stop