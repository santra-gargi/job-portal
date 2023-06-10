@extends('company.dashboard')
@section('title', 'job')

@section('mainSection')


<link rel="stylesheet" href="{{asset('css/Form.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
 
  <div class="container">
    
 @foreach($jobs as $job)
  <div class="card" style="width: 42.5rem;" >
    <div  class="viewdata">
     <div class="card-body">
      <h3 class="card-title">{{$job->id}}. {{$job->name}}</h3>
      <p class="card-text"><b>Job Role:</b> {{$job->profile}}.</br><b>Eligibility:</b>  {{$job->eligibility}}.</br><b>Job Description:</b>  {{$job->job_description}}.</br><b>Skill Description:</b>  {{$job->description}}.</br><b>Employment Type:</b>  {{$job->Employment_type}}.</br><b>Last Date:</b>  {{$job->closing_date}}.</br><b>Company Location:</b>  {{$job->loction}}.</br><b>Expected Salary:</b>  {{$job->salary}}.</br><b>Benefits:</b>  {{$job->benefits }}</p>
      <a href="{{url('/apply')}}" class="button">Apply Now</a>
     </div>
    </div>
  </div>

  @endforeach
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection

