@extends('layouts')
@section('content')
<div class="formstyle">
<!-- @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach -->

<form action="{{Route('add')}}" method="Post" >
  @csrf
  <h2 class="text-center">Registration</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">studentname</label>
    <input type="text" class="form-control" id="" name="studentname">
    <div id="" class="form-text"></div>
    @error('studentname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">studentemail</label>
    <input type="text" class="form-control" id="" name="studentemail">
    <div id="" class="form-text"></div>
    @error('studentemail')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">studentphone</label>
    <input type="text" class="form-control" id="" name="studentphone">
    <div id="" class="form-text"></div>
    @error('studentphone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection