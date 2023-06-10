<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="{{asset('css/Form.css')}}">

</head>

<body>
    <div class="formDiv">
    <form action="{{url('/job')}}" method="POST">
        @csrf
        <fieldset class="innerDiv">
            <h1>Fill the form</h1>
            <div class="innerFormDiv">
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                        <label for="name"> Company Name : </label> 
                        <input type="text" name="name" class="input" placeholder="Enter Name" required/>
                    </div>
                    <div class="inputFieldDiv">
                        <label for="Employment type">Employment Type</label>
                        <select name="Employment_type">
                            <option value=" " disabled>Select</option>
                            <option value="FullTime">FullTime</option>
                            <option value="Internship">Internship</option>
                            <option value="Permanent">Permanent</option>
                        </select>
                    </div>
                </div>
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                        <label for="profile">JOB ROLE</label>
                        <select name="profile">
                            <option value="Select">Select</option>
                            <option value="Software Developer">Software Developer</option>
                            <option value="Full Stack Developer">Full Stack Developer</option>
                            <option value="App Developer">App Developer</option>
                            <option value="Athical Hacking">Athical Hacking</option>
                            <option value="Data Analytist">Data Analytist</option>
                        </select>
                    </div>
                    <div class="inputFieldDiv">
                        <label for="closing date"> Form Closing Date</label>
                        <input type="date" name="closing_date" class="input" />
                    </div>
                </div>
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                        <label for="eligibility"> Eligibility</label>
                        <textarea rows="10" cols="35" name="eligibility" class="input" placeholder="Eligibility ..."></textarea>
                    </div>
                    <div class="inputFieldDiv">
                        <label for="Company location">Company location   </label>
                        <textarea rows="10" cols="35" name="loction" class="input" placeholder="Company location   ..."></textarea>
                    </div>
                </div>
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                    <label for="job_description">Job Description </label>
                        <textarea rows="10" cols="35" name="job_description" class="input" placeholder=" Job Description ..."></textarea> 
                    </div>
                    <div class="inputFieldDiv">
                        <label for="salary"> Expected Salary: </label> 
                        <input type="number" name="salary" class="input" placeholder="Expected Salary" />
                    </div>
                </div>
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                        <label for="description"> Skills Description : </label>
                        <textarea rows="10" cols="35" name="description" class="input" placeholder="Skills description..."></textarea>
                    </div>
                    <div class="inputFieldDiv">
                        <label for="Description  "> Benefits  </label>
                        <textarea rows="10" cols="35" name="benefits" class="input" placeholder="Company Benefits..."></textarea>
                    </div>
                </div>
                <div class="btnDiv">
                    <!-- <input type="button" name="Sbtn" id="btn" value="Submit" /> -->
                    <button type="reset" name="cBtn" class="" id="">Clear</button>
                    <button type="submit" name="Sbtn" class="btn" id="btn"> Submit</a></button>
                </div>
                
            </div>
        </fieldset>
    </form>
    </div>