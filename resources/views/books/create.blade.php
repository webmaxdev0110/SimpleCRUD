@extends('layouts.app')
@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('books.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group @if($errors->first('title')) has-error @endif">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group @if($errors->first('author')) has-error @endif">
                            <label for="author" class="col-sm-2 control-label">Author</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
                            </div>
                        </div>
                         <div class="form-group @if($errors->first('isbn')) has-error @endif">
                            <label for="isbn" class="col-sm-2 control-label">ISBN</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}">
                            </div>
                        </div>
                         <div class="form-group @if($errors->first('publisher')) has-error @endif">
                            <label for="publisher" class="col-sm-2 control-label">Publisher</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') }}">
                            </div>
                        </div>
                        <div class="form-group @if($errors->first('publish_date')) has-error @endif">
                            <label for="publish_date" class="col-sm-2 control-label">Publish Date</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="publish_date" name="publish_date"value="{{ old('publish_date') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#publish_date').datepicker({});
    });
</script>
@endsection
