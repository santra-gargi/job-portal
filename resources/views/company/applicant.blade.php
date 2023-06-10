@extends('company.dashboard')
@section('title', 'Applicant')

@section('mainSection')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No</th>
      <th scope="col">Highest Qualification</th>
      <th scope="col">State</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    @foreach($userforms as $userform)
    <tr>
    <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{ $userform->name }}</td>
      <td>{{ $userform->email }}</td>
      <td>{{ $userform->phoneno }}</td>
      <td>{{ $userform->qualification }}</td>
      <td>{{ $userform->state }}</td>
      <td>{{ $userform->resume }}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

