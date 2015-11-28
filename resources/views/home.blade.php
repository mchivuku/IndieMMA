@extends('layouts.main')

@section('content')

    <div class="jumbotron">
      <div class="container">
        <h1>Welcome To IndieMMA!</h1>
        <p>We are dedicated to supporting the dreams and goals of Martial Artists across the world. Our goal is to facilitate the growth and development of the Martial Arts by promoting and helping to fulfill the wants and needs of the new, promising athletes of the future.</p>
        <p><a role="button" href="{{ URL::to('about') }}" class="btn btn-primary btn-lg">Learn more »</a></p>
      </div>
    </div>





 <div class="container marketing">

   <!-- Three columns of text below the carousel -->
   <div class="row">
     <div class="col-md-4 text-center">
       <img class="img-circle" src="http://placehold.it/140x140">
       <h2>Mobile-first</h2>
       <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
       <p><a class="btn btn-default" href="#">View details »</a></p>
     </div>
     <div class="col-md-4 text-center">
       <img class="img-circle" src="http://placehold.it/140x140">
       <h2>One Fluid Grid</h2>
       <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
       <p><a class="btn btn-default" href="#">View details »</a></p>
     </div>
     <div class="col-md-4 text-center">
       <img class="img-circle" src="http://placehold.it/140x140">
       <h2>LESS is More</h2>
       <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
       <p><a class="btn btn-default" href="#">View details »</a></p>
     </div>
   </div><!-- /.row -->


@stop


