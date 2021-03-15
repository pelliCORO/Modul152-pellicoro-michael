@extends('layouts.app')
@section('title')
Add New Post
@endsection
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
    });

</script>
<form action="/new-post" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name="title" class="form-control" />
  </div>
  <div class="form-group">
    <textarea name='body' class="form-control">{{ old('body') }}</textarea>
  </div>
    <div class="form-group">
        <select name='license' class="form-control">
            <option value="ARR">Choose license for the photo</option>
            <option value="ARR">All rights reserved(Default)</option>
            <option value="PD">Public domain</option>
            <option value="BY">BY</option>
            <option value="BY-SA">BY-SA</option>
            <option value="BY-ND">BY-ND</option>
            <option value="BY-NC">BY-NC</option>
            <option value="BY-NC-SA">BY-NC-SA</option>
            <option value="BY-NC-ND">BY-NC-ND</option>

        </select>
    </div>
  <input type="submit" name='publish' class="btn btn-success" value="Publish" />
  <input type="submit" name='save' class="btn btn-default" value="Save Draft" />
</form>
@endsection
