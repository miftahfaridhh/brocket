@extends('layouts.master')
@section('content')

<div class="section-title">
    <h1>Podium <span class="highlighted">{{$turney[0]->name}} {{$year}}</span></h1>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Position</th>
      <th scope="col">Member Name</th>
      <th scope="col">Gold Medal</th>
      <th scope="col">Silver Medal</th>
      <th scope="col">Gold Medal</th>
      <th scope="col">Point</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($members as $member)
    <tr>
      <th scope="row">$loop->iteration</th>
      <td>{{$member->name}}</td>
      <td>{{$member->gold_medal}}</td>
      <td>{{$member->silver_medal}}</td>
      <td>{{$member->bronze_medal}}</td>
      <td>{{$member->total_medal}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop