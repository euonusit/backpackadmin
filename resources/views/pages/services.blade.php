@extends('layouts.app')
@section('content')
<!--- banner-1 ---->
<style>
.about ul { text-align: justify !important; }

</style>
<div class="banner-1 asdasd as dasasd as">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">{{$page->title}}</h1>
	</div>
</div>
<!--- /banner-1 ---->
<div class="about">
	<div class="container">
		<div class="about-top wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
			<h2>Our Story</h2>
			<p>{{ print_r($page->content)}}</p>
		</div>
		
		
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
