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
            <a href="/customers/create"><button type="button" class="btn btn-primary btn-sm">Add New</button></a>
        </div>
    </div>
    <p></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Customer Name</th>
          <th>Customer Mobile</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customers as $customer)
          <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->mobile}}</td>
            <td>
                <a href="/customers/{{$customer->id}}"><button type="button" class="btn btn-primary btn-sm">Show</button></a>
                <a href="/customers/{{$customer->id}}/edit"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>

                <a href="#" data-id="{{$customer->id}}" class="deleteButton"> <button type="button"  class="btn btn-danger btn-sm">Delete</button></a>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@stop
@section('script')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        $(document).ready(function(){
            $(".deleteButton").click(function(){
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        var id = $(this).data('id');
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: '/customers/'+id,
                            type: 'DELETE',
                            data: {_token: CSRF_TOKEN},
                            success: function (data) {
                                swal("Good job!", "You Deleted Customer!", "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);

                            }
                        });
                    } else {

                    }
                });

            });
       });
    </script>
@stop

