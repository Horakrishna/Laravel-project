


<!--
<a href="<?php //echo URL::to('/about');?>">About us</a>
<a href="<?php //echo route('/about');?>">About us</a> 
<a href="<?php //echo route('/about');?>">About us</a>

-->
<a href="">Home</a>
<a href="{{route('/about')}}">About</a>
<a href="">Home</a>
<a href="{!! route('/about') !!}">About</a>
<h2>This is Home page</h2>
<h3>{{ $name }}</h3>
<h3>{{ $age }}</h3>
<h3>{{ $profession }}</h3>