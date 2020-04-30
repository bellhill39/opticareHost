@extends('layouts.admin')

<!-- main header section -->
@section('main-content-header')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">User</h3>
        </div>
        <div class="box-body">
            {{--<a href="{{ url('/') }}" class="btn btn-success">Dashboard</a>--}}
            <a href="{{ url('/product',true) }}" class="btn btn-success">Product</a>
            {{--<a href="{{ url('/optician/create') }}" class="btn btn-success">New optician</a>--}}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
<!-- /main header section -->

<!-- main section -->
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Checkup</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['method' =>'POST','action'=>'CheckUpController@store','class'=>'form-horizontal','id'=>'Form']) !!}
                @include('error.error')
                @include('admin.interfaces.checkup._partials.create')
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

@endsection
<!-- /main section -->

@section('js')
    @include('error.swal')
@endsection
