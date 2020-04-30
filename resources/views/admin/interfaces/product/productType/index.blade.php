@extends('layouts.admin')

<!-- main header section -->
@section('main-content-header')

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Dashboard</h3>
        </div>
    @include('admin.widgets.header-widgets')
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
<!-- /main header section -->

<!-- main section -->
@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{route('productType.create')}}" class="btn btn-sm btn-danger">New <i class="fa fa-plus-square"></i></a>
                </div>
                <!-- /.box-header -->
                <div style="overflow: auto" class="box-body">
                    <table id="table" class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>View <i class="fa fa-paper-plane"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($productTypes)

                            @foreach($productTypes as $productType)
                                <tr>
                                    <td>{!! $productType->id !!}</td>
                                    <td>{!! $productType->name !!}</td>
                                    <td>{!! $productType->created_at ? $productType-> created_at->diffForhumans() : "null" !!}</td>
                                    <td>{!! $productType->updated_at ? $productType-> updated_at->diffForhumans() : "null" !!}</td>
                                    <td>
                                        <a href="{{route('productType.edit',$productType->id)}}"><i class="fa fa-paper-plane"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
<!-- /main section -->

@section('js')
    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

    <script type="text/javascript">

        $(function () {
            $('#table').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
            })
        })
    </script>

@endsection
