@extends('user.userdash')
@section('title', 'profile')

@section('mainSection')

<style>
    table thead tr th{
        border: 1px solid black;
    }
    table thead tr td{
        border: 1px solid black;
    }
</style>

<h1>Students Details</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Highest Qualification</th>
      <th scope="col">Passing Year</th>
      <th scope="col">University Name</th>
      <th scope="col">Percentage</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($update as $dt)
    <tr>
    <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{$dt['name']}}</td>
      <td>{{$dt['email']}}</td>
      <td>{{$dt['mobileno']}}</td>
            <td>{{$dt['qualification']}}</td>
            <td>{{$dt['passingyear']}}</td>
            <td>{{$dt['universityname']}}</td>
            <td>{{$dt['result']}}</td>
            
            <td><a href={{"delete/".$dt['id']}}>Delete</td>
            <td><a href={{"dataupdate/".$dt['id']}}>Update</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection