@extends('layouts.master')
@section('content')

<div style="padding: 50px;" class="section-title">
    <h1>Podium <span class="highlighted">{{$turney[0]->name}} {{$year}}</span></h1>
</div>

<div style="padding: 50px; margin-top: -50px;">
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
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$member->name}}</td>
        <td>{{$member->gold_medal}}</td>
        <td>{{$member->silver_medal}}</td>
        <td>{{$member->bronze_medal}}</td>
        <td>{{$member->total_medal}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="text-center">
		<button class="justify-content-center btn btn--md btn--round" type="button" onClick="window.print()">Print This Page</button>
		<button class="justify-content-center btn btn--md btn--round" type="button" onclick="copyToClipboard()">Share</button>
		<button class="justify-content-center btn btn--md btn--round" type="button" onclick="location.href='/bracket/{{$turney[0]->id}}';">Bracket</button>
	</div>

</div>

<script>
		function copyToClipboard(text) {
		var inputc = document.body.appendChild(document.createElement("input"));
		inputc.value = window.location.href;
		inputc.focus();
		inputc.select();
		document.execCommand('copy');
		inputc.parentNode.removeChild(inputc);
		alert("URL Copied.");
		}
	</script>

@stop