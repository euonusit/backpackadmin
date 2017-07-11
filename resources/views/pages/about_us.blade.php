@extends('layouts.app')
@section('content')
<!--- banner-1 ---->
<style>
.about ul { text-align: justify !important; }

</style>
<div class="banner-1">
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

				{!! Share::currentPage()->googlePlus() !!}
			
			<div id="social-links">
			<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.buzzycircles.com/buzzycircles/what-is-your-blogging-style-how-is-your-audience-connecting-to-it-take-this-quiz-to-find-out" class="btn btn-primary" id=""><span class="fa fa-facebook"></span></a>
			<a href="https://twitter.com/intent/tweet?text={{$page->title}}&amp;url=http://www.euonusit.com" class="btn btn-primary" id=""><span class="fa fa-twitter"></span></a>
			<a href="https://plus.google.com/share?url=http://www.euonusit.com" class="btn btn-primary" id=""><span class="fa fa-google-plus"></span></a>
			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.euonusit.com&amp;title={{$page->title}}&amp;summary={{$page->meta_description}}" class="btn btn-primary" id=""><span class="fa fa-linkedin"></span></a>
			

		</div>
		
		
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
