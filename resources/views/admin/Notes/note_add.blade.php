@extends('admin.admin_master')
@section('main')
    <div class="content-wrapper">
        <div class="container">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <h2 class="box-title"> Add Notes </h2>
                        <hr>
                        <form method="post" action="{{ route('note.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <h5>Title<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="controls">
                                                <input type="text" name="title" class="form-control" id="title"
                                                    required="">

                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <h5>Content<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="controls">
                                                <input type="text" name="content" class="form-control" id="content"
                                                    required="">

                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn btn-info mb-5" value="Submit">
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
@endsection
