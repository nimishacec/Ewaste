@extends ('layouts.master')
@section ('title','Admin')
@section ('content')
<x-app-layout>
<div>
<title>View Student Records</title>
</head>
<body>
<table border = "4" class="table table-bordered table-dark">
<tr class="table-active">
<td>UserName</td>
<td>Brand</td>
<td>Model</td>
<td>Amount</td>

</tr>
@foreach ($users as $user)
<tr class="bg-info">
<td>{{ $user->name}}</td>
<td>{{ $user->brand}}</td>
<td>{{ $user->model}}</td>
<td>{{ $user->amount}}</td>

</tr>
@endforeach
</table>

</div>

</x-app-layout>
@endsection