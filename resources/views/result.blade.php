@extends('layouts')
@section('content')
<div class="studentDetails"><h3><b>Student Details :</b></h3></div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Student Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($array as $item)
    <tr>
      <td>{{ $item['id'] }}</td>
      <td>{{ $item['studentname'] }}</td>
      <td>{{ $item['studentemail'] }}</td>
      <td>{{ $item['studentphone'] }}</td>
    </tr>

    @endforeach

  </tbody>
</table>

@endsection
