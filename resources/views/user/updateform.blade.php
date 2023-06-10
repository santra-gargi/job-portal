<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="{{asset('css/userreg.css')}}">
    
</head>

<body>
    <div class="formDiv">
    <form action="/dataupdate" method="GET">
        @csrf
        <fieldset class="innerDiv">
            <h1>Update here</h1>
            <div class="innerFormDiv">
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                        <label for="name"> Full Name </label> 
                        <input type="text" name="name" class="input" placeholder="Enter Name" value="{{$newdata["name"]}}" required/>
                    </div>
                    <div class="inputFieldDiv">
                        <label for="email">Email</label>
                        
                        <input type="text" name="email" class="input" placeholder="Enter email"  value ="{{$newdata["email"]}}" required/>
                    </div>
                </div>
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                        <label for="mobile_number">Mobile No</label>
                        
                        <input type="number" name="mobileno" class="input" placeholder="Enter mobile no" value ="{{$newdata["mobileno"]}}" required/>
                    </div>
                    <div class="inputFieldDiv">
                        <label for="Highest_qualification"> Highest Qualification</label>
                        <input type="text" name="qualification" class="input" placeholder="Enter Your Qualification" value ="{{$newdata["qualification"]}}" required/>
                        
                    </div>
                </div>
                <div class="twoInputField">
                    <div class="inputFieldDiv">
                        <label for="passing_year"> Passing Year</label>
                        <input type="text" name="passingyear" class="input" placeholder="Enter passing year" value ="{{$newdata["passingyear"]}}">
                    </div>
                    <div class="inputFieldDiv">
                        <label for="university_name">University Name </label>
                        <input type="text" name="universityname" class="input" placeholder="Enter university name" value ="{{$newdata["universityname"]}}">
                    </div>
                </div>
                <div class="twoInputField">
                <div class="inputFieldDiv">
                                <label for="percentage"> percentage </label>
                                <input type="text" name="result" class="input"
                                    placeholder="Enter your Perrcentage" value="{{$newdata["result"]}}" />
                                
                            </div>


                    <div class="inputFieldDiv">
                    <label for="password">Password </label>
                        <input type="password" name="password" class="input" placeholder=" Enter your password" value ="{{$newdata["password"]}}"> 
                    </div>
                </div>
                
                <div class="btnDiv">
                    
                    <button type="reset" name="cBtn" class="" id="">Clear</button>
                    <button type="submit" name="Sbtn" class="btn" id="btn"><a href="{{url('profile')}}"></a>  Submit</button>
                </div>
                <a href="login">Already Registered!! Login Here</a>
            </div>
        </fieldset>
    </form>
    </div>
