
{{-- the dot is the directory separator, layouts is the folder and master is the file --}}
@extends('layouts.master')

{{-- insert @yield('content') in the master.blade.php--}}
@section('content')
    <h1>The random number is {{{ $random }}} </h1>
    <h1>Your guessed number is {{{ $number }}} </h1>

    @if ($random == $number)
        <h1>Successful Guess!</h1>
    @else
        <h1>Bad Guess!</h1>
    @endif
@stop