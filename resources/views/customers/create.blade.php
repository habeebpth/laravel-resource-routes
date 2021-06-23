@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1>Laravel Test</h1>
    <p>Habeeb Rahman PT</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h2>Customers</h2>
        </div>
        <div class="col-md-2">
            <a href="/customers"><button type="button" class="btn btn-primary btn-sm">List</button></a>
        </div>
    </div>
    <p></p>
    <form action="/customers" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
          <label for="customer_name">Customer Name</label>
          <input type="text" class="form-control" id="customer_name" name="customer_name">
        </div>
        <div class="form-group">
            <label for="customer_mobile">Customer Mobile</label>
            <input type="number" class="form-control" id="customer_mobile" name="customer_mobile">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@stop
@section('script')
<script>
    @if (session('message'))
        swal("Good job!", "{{ session('message') }}", "success");
    @endif
</script>
@stop

