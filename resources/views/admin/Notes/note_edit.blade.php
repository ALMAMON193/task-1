@extends('admin.admin_master')
@section('main')
    <div class="content-wrapper">
        <div class="container">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <h2 class="box-title">Update Notes</h2>
                        <hr>
                        <form method="post" action="{{ route('note.update', $editData->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Note Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="title" id="title" class="form-control"
                                                value="{{ $editData->title }}" required="">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Note Content <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="content" id="content" class="form-control"
                                                value="{{ $editData->content }}" required="">
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                                    <a href="{{ route('note.view') }}" class="btn btn-rounded btn-primary mb-5">Cancel</a>
                                </div>

                            </div>

                        </form>
                        <!--from end-->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
@endsection
