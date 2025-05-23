@extends('layout')

@section('content')
<h1>
  Customers
  </h1>
  
  
  <ul>
   @foreach ($customer as $customer)
       <li>{{ $customer -> name }}</li>
   @endforeach
  
  </ul> 
@endsection


