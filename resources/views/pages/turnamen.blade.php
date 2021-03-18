@extends('layouts.master')
@section('content')

@switch($turney->totalTeam)

    @case(4)

        <span> `E-mail` input is empty! </span>

        @break

    @case(4)

        <span>`Password` input is empty! </span>

        @break

    @default

        <span>Something went wrong, please try again </span>

@endswitch


@stop