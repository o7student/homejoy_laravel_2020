@extends('vendor.layout')
@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            @if(session()->get('success'))
                            <div class="alert alert-success">{{session()->get('success')}}</div>
                            @endif
                            @if(session()->get('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Pending Booking</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('vendor/editpending',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                        <div class="row">
                                        
                                            <div class="col-md-12">
                                                <select name="status" class="form-control">
                                                        <option selected disabled>PENDING</option>
                                                        <option>ACCEPTED</option>
                                                        <option>CANCELLED</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
        jQuery('#category_id').change(function(e){
            	var category_id = $("#category_id").val();
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('vendor/getservice') }}",
                    method: 'post',
                    data: {
                        category_id: category_id,
                        _token : $('meta[name="_token"]').attr('content')
                    },
                    success: function(result){
                        console.log(result);
                        $("#service_id").html(result);
                    }});
                });
    </script>
@endsection