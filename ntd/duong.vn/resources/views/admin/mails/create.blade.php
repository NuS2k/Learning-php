@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">Send Email to User </h2>
    <a href="/admin/user" class="btn btn-primary float-end">Back</a>
</div>
<form class="g-3 needs-validation" method="post" action="{{ route('mails.store') }}">
  <div class="row">
  <div class="col-md-12 mb-3">
    <input type="email" class="form-select" name="email" id="exampleInputEmail1" placeholder="Select a user">
    @error('email')
    <span class="text-danger text-left">{{$message}}</span>
    @enderror
  </div>
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>

@endsection