@extends('layouts.app')    <!--bierzemy loyots , taka jakby template -->



@section('main')

 <a class="navbar-brand" href="#">We Like Games</a>

  @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ auth()->user()->Imie }}</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout">Log Out</a>
                    {{ $test }}
                </li>

            @endif
@stop




@section('footer')




@stop



