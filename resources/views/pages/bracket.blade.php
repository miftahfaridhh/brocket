@extends('layouts.master')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<header class="hero">
    <div class="hero-wrap">
     <p class="intro" style ="margin-bottom:15px;" id="intro">Bracket</p>
		 <h1 id="headline">{{$turney[0]->name}} {{$year}} </h1>
		 <!-- <p class="year"><i class="fa fa-star"></i>  <i class="fa fa-star"></i></p> -->
     <p>{{$turney[0]->description}}</p>
   </div>
	</header>


	<section id="bracket">
	<div class="container">
		<div class="split split-one">
			<div class="round round-one current">
				<div class="round-details">Round 1<br/><span class="date">March 16</span></div>
				@for ($i = 0; $i < (($turney[0]->total_member)/2); $i++)
					@if ($i%2==0)
						<ul class="matchup">
						<li class="team team-top">{{$members[$i]->name}}<span class="score">&nbsp;</span></li>
					@else
						<li class="team team-bottom">{{$members[$i]->name}}<span class="score">&nbsp;</span></li>
						</ul>
					@endif
				@endfor			
			</div>	<!-- END ROUND ONE -->

			@if ((($turney[0]->total_member)/8)>=1)
			<div class="round round-two">
				<div class="round-details">Round 2<br/><span class="date">March 18</span></div>	
						
					@for ($i = 0; $i < ($turney[0]->total_member)/8; $i++)
						<ul class="matchup">
							<li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
							<li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
						</ul>
					@endfor
													
			</div>	
			@endif<!-- END ROUND TWO -->
			
			@if ((($turney[0]->total_member)/16)>=1)
			<div class="round round-three">
				<div class="round-details">Round 3<br/><span class="date">March 22</span></div>			
						
					@for ($i = 0; $i < ($turney[0]->total_member)/16; $i++)
						<ul class="matchup">
							<li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
							<li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
						</ul>
					@endfor
															
			</div>	
			@endif<!-- END ROUND THREE -->		
		</div> 

		<div class="champion">
		@if ((($turney[0]->total_member)/32)>=1)	
			<div class="semis-l">
				<div class="round-details">west semifinals <br/><span class="date">March 26-28</span></div>
				
					@for ($i = 0; $i < ($turney[0]->total_member)/32; $i++)
						<ul class="matchup championship">
							<li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
							<li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
						</ul>
					@endfor
				
			</div>
		@endif
			<div class="final">
				<i class="fa fa-trophy"></i>
				<div class="round-details">championship <br/><span class="date">March 30 - Apr. 1</span></div>		
				<ul class ="matchup championship">
					<li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
					<li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
				</ul>
			</div>
		@if ((($turney[0]->total_member)/32)>=1)
			<div class="semis-r">		
				<div class="round-details">east semifinals <br/><span class="date">March 26-28</span></div>		
					
					@for ($i = 0; $i < ($turney[0]->total_member)/32; $i++)
						<ul class="matchup championship">
							<li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
							<li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
						</ul>
					@endfor
				
			</div>
		@endif	
		</div>


		<div class="split split-two">

			@if ((($turney[0]->total_member)/16)>=1)
			<div class="round round-three">
				<div class="round-details">Round 3<br/><span class="date">March 22</span></div>						
						
					@for ($i = 0; $i < ($turney[0]->total_member)/16; $i++)
						<ul class="matchup">
							<li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
							<li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
						</ul>
					@endfor
													
			</div>	
			@endif	<!-- END ROUND THREE -->	

			@if ((($turney[0]->total_member)/8)>=1)
			<div class="round round-two">
				<div class="round-details">Round 2<br/><span class="date">March 18</span></div>						
						
					@for ($i = 0; $i < ($turney[0]->total_member)/8; $i++)
						<ul class="matchup">
							<li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
							<li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
						</ul>
					@endfor
														
			</div>	
			@endif<!-- END ROUND TWO -->

			<div class="round round-one current">
				<div class="round-details">Round 1<br/><span class="date">March 16</span></div>
				@for ($i = (($turney[0]->total_member)/2); $i < ($turney[0]->total_member) ; $i++)
					@if ($i%2==0)
						<ul class="matchup">
						<li class="team team-top">{{$members[$i]->name}}<span class="score">&nbsp;</span></li>
					@else
						<li class="team team-bottom">{{$members[$i]->name}}<span class="score">&nbsp;</span></li>
						</ul>
					@endif
				@endfor				
			</div>	<!-- END ROUND ONE -->          				
		</div>
	


	</div>

	<div class="text-center">
		<button class="justify-content-center btn btn--md btn--round" type="button" onClick="window.print()">Print This Page</button>
		<button class="justify-content-center btn btn--md btn--round" type="button" onclick="copyToClipboard()">Share</button>
		<button class="justify-content-center btn btn--md btn--round" type="button" onclick="location.href='/podium/{{$turney[0]->id}}';">Podium</button>
	</div>
	</section>

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