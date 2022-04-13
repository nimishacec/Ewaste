@extends ('layouts.master')
@section ('title','Admin')
@section ('content')
<x-app-layout>
<div>

<h1>WELCOME!!!ADMIN</h1>

<break>
<br>
<br>

<a href="{{action('AdminController@index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View Seller Details</a>
<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">View Donate details</a>
<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View recycle Details</a>
<a href="" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">View user Details</a>







</div>

</x-app-layout>
@endsection


