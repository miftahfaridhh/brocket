<<<<<<< HEAD
@extends('layouts.master')

@section('title', __('Not Found'))
@section('content')
<div class="bg_image_404">
    <center>
        <img src="images/not found-02.png" alt="background-image" style="height:600px;">
    </center>
</div>

@stop
=======
@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
>>>>>>> db6bd64f1d236139f4095a258471e8d21ada05af
