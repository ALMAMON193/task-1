@extends('admin.admin_master')
@section('main')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Note List</h3>
                        <a href="{{ route('note.add') }}" class="btn btn-success mb-5" style="float: right">Add
                            note</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div style="overflow-x: auto;">
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-5">


                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 5%">SL</th>
                                            <th>Title</th>
                                            <th>content</th>
                                            <th style="width: 20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $note)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $note->title }}</td>
                                                <td>{{ $note->content }}</td>

                                                <td>
                                                    <a href="{{ route('note.edit', $note->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('note.delete', $note->id) }}" class="btn btn-danger"
                                                        id="delete">Delete</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

    <!-- /.content -->
@endsection
