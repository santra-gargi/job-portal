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
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif


    <div class="formDiv">
        <form action="{{url('apply')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset class="innerDiv">
                <h1>Fill the form</h1>
                <div class="innerFormDiv">
                    <div class="twoInputField">
                        <div class="inputFieldDiv">
                            <label for="name"> Name : </label>
                            <input type="text" name="name" class="input" placeholder="Enter Name"
                            value="{{ old('name') }}"
                            />
                            @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="inputFieldDiv">
                            <label for="name"> Highest Qualification : </label>
                            <input type="text" name="qualification" class="input"
                                placeholder="Enter Highest Qualification" 
                                value="{{ old('qualification') }}"
                                />
                                @if($errors->has('qualification'))
                            <span class="text-danger">{{$errors->first('qualification')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="twoInputField">
                        <div class="inputFieldDiv">
                            <label for="perTen"> Email ID: </label>
                            <input type="email" name="email" class="input" placeholder="Enter Your Email"
                            value="{{ old('email') }}"
                            />
                            @if($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="inputFieldDiv">
                            <label for="state">State</label>
                            <select name="state">
                                <option value="Select">Select</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                            @if($errors->has('state'))
                            <span class="text-danger">{{$errors->first('state')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="twoInputField">
                        <div class="inputFieldDiv">
                            <label for="perTen"> Phone No:</label>
                            <input type="number" name="phoneno" class="input" placeholder="Enter Phone No"
                            value="{{ old('phoneno') }}"
                            />
                            @if($errors->has('phoneno'))
                            <span class="text-danger">{{$errors->first('phoneno')}}</span>
                            @endif
                        </div>
                        <div class="inputFieldDiv">
                            <label for="perT"> Resume: </label>
                            <input type="file" name="resume" class="input"
                            value="{{ old('resume') }}"
                            />
                            @if($errors->has('resume'))
                            <span class="text-danger">{{$errors->first('resume')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="btnDiv">
                        <!-- <input type="button" name="Sbtn" id="btn" value="Submit" /> -->
                        <button type="reset" name="cBtn" class="" id="">Clear</button>
                        <button type="submit"  class="btn" id="btn"><a href="{{url('profile')}}"></a> Submit</button>
                    </div>

                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>

