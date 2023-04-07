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
                                    <h4 class="card-title">Edit Vendor Service</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('vendor/editvservice',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                        <div class="row">
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Catgeory Name</label>
                                                    <select class="form-control" required name="category_id" id="category_id">
                                                        @foreach($category as $c)
                                                        @if($c->id == $data->category_id)
                                                        <option value="{{$c->id}}" selected>{{$c->name}}</option>
                                                        @else
                                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Service Name</label>
                                                    <select class="form-control" required name="service_id" id="service_id">
                                                        <option value="{{$data->service_id}}">{{$data->service->name}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" placeholder="Description" required name="description">{{$data->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Charges</label>
                                                    <input type="number" class="form-control" name="charges" value="{{$data->charges}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <select name="status" class="form-control">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>ACTIVE</option>
                                                        <option>DISABLE</option>
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