<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if(empty($page)){
    
    $meta_description="Travel Site Travel Site Travel Site Travel Site";
    $meta_keywords="Travel Site";
    $title="Travel Site"; 
   }else{
  
    $meta_description=$page->meta_description;
    $meta_keywords=$page->meta_keywords;
    $title=$page->title; 
   } ?>
    <meta name="description" content="{{ $meta_description?$meta_description:''}}">
    <meta name="keywords" content="{{$meta_keywords?$meta_keywords:''}}">
    <meta name="author" content="John Doe">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title?$title:'Travel Site'}}</title>


<!-- Start Social Tags -->
  <!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $title?$title:'Travel Site'}}">
<meta itemprop="description" content="{{ $meta_description?$meta_description:''}}">
<meta itemprop="image" content="https://i0.wp.com/euonusit.com/wp-content/uploads/2017/02/euonusit-logo-new-200x60.png?fit=200%2C66">

<!-- Twitter Card data -->
<meta name="twitter:card" content="Company">
<meta name="twitter:site" content="http://www.euonusit.com/">
<meta name="twitter:title" content="{{ $title?$title:'Travel Site'}}">
<meta name="twitter:description" content="{{ $meta_description?$meta_description:''}}">
<meta name="twitter:image" content="https://i0.wp.com/euonusit.com/wp-content/uploads/2017/02/euonusit-logo-new-200x60.png?fit=200%2C66">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $title?$title:'Travel Site'}}" />
<meta property="og:type" content="Company" />
<meta property="og:url" content="http://www.euonusit.com/" />
<meta property="og:image" content="https://i0.wp.com/euonusit.com/wp-content/uploads/2017/02/euonusit-logo-new-200x60.png?fit=200%2C66" />
<meta property="og:description" content="{{ $meta_description?$meta_description:''}}" />
<meta property="og:site_name" content="http://www.euonusit.com" />

<!-- End Social Tag -->

    

    <!-- Styles -->
 <script src="{{ url('assets/js/jquery-1.12.0.min.js') }}"></script>
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">
          <link href="{{ url('assets/css/font-awesome.css') }}" rel="stylesheet">
            <link href="{{ url('assets/css/jquery-ui.css') }}" rel="stylesheet">
              <link href="{{ url('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script src="{{ asset('js/share.js') }}"></script>

</head>
<body>

    <div id="app">

@include('includes.header')
        @yield('content')
        @include('includes.footer')


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
   
  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-ui.js') }}"></script>
      <script src="{{ url('assets/js/wow.min.js') }}"></script>
     
    <!-- Scripts -->

</body>
</html>
<script type="text/javascript">
  function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           
            $('#abcd').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
  }

$("#photo").change(function(){
  
    readURL(this);
});
  </script>
