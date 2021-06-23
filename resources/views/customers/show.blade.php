@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1>Laravel Test</h1>
    <p>Habeeb Rahman PT</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h2>Customer</h2>
        </div>
        <div class="col-md-2">
            <a href="/customers"><button type="button" class="btn btn-primary btn-sm">List</button></a>
        </div>
    </div>
    <p><b>Customer Name :</b> {{$customer->name}} </p> <br>
    <p><b>Customer Mobile :</b> {{$customer->mobile}} </p> <br>

</div>
@stop

