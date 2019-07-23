@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if( $message = Session::get('message') )
            <h1 class="page-header">{{ $message }}</h1>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Category ID</th>
                            <th>Category Name</th>


                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>

                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td></td>
                            <td></td>

                            <td>

                                <a href="" class="btn btn-primary btn-xs" title="View Form">
                                    <span class="glyphicon glyphicon-zoom-in"></span>
                                </a>
                                <a href="" class="btn btn-primary btn-xs" title="Edit Form">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" title="Delete Form" onclick="return confirm('Are you sure to delete this'); ">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" title="Print Category">
                                    <span class="glyphicon glyphicon-download"></span>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection