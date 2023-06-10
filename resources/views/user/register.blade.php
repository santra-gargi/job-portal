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
    <div class="container">
    <div class="mt-5">
        @if($errors->any())
        <div class="col-12">
          @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{ $error }}</div>
          @endforeach
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
      </div>


        <div class="formDiv">
            <form action="{{url('/userreg')}}" method="POST">
                @csrf
                <fieldset class="innerDiv">
                    <h1>Register Here</h1>
                    <div class="innerFormDiv">
                        <div class="twoInputField">
                            <div class="inputFieldDiv">
                                <label for="name"> Full Name </label>
                                <input type="text" name="name" class="input" placeholder="Enter Name"
                                    value="{{ old('name') }}" />
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="inputFieldDiv">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="input" placeholder="Enter email"
                                    value="{{ old('email') }}" />
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="twoInputField">
                            <div class="inputFieldDiv">
                                <label for="mobile_number">Mobile No</label>
                                <input type="number" name="mobileno" class="input" placeholder="Enter mobile no"
                                    value="{{ old('mobileno') }}" />
                                @if($errors->has('mobileno'))
                                <span class="text-danger">{{$errors->first('mobileno')}}</span>
                                @endif
                            </div>
                            <div class="inputFieldDiv">
                                <label for="Highest_qualification"> Highest Qualification</label>
                                <input type="text" name="qualification" class="input"
                                    placeholder="Enter Your Qualification" value="{{ old('qualification') }}" />
                                @if($errors->has('qualification'))
                                <span class="text-danger">{{$errors->first('qualification')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="twoInputField">
                            <div class="inputFieldDiv">
                                <label for="passing_year"> Passing Year</label>
                                <input type="text" name="passingyear" class="input" placeholder="Enter passing year"
                                    value="{{ old('passingyear') }}">
                                @if($errors->has('passingyear'))
                                <span class="text-danger">{{$errors->first('passingyear')}}</span>
                                @endif
                            </div>
                            <div class="inputFieldDiv">
                                <label for="university_name">University Name </label>
                                <input type="text" name="universityname" class="input"
                                    placeholder="Enter university name" value="{{ old('universityname') }}">
                                @if($errors->has('universityname'))
                                <span class="text-danger">{{$errors->first('universityname')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="twoInputField">
                        <div class="inputFieldDiv">
                                <label for="percentage"> percentage </label>
                                <input type="text" name="result" class="input"
                                    placeholder="Enter your Perrcentage" value="{{ old('result') }}" />
                                @if($errors->has('result'))
                                <span class="text-danger">{{$errors->first('result')}}</span>
                                @endif
                            </div>
                            <div class="inputFieldDiv">
                                <label for="password">Password </label>
                                <input type="password" name="password" class="input" placeholder=" Enter your password"
                                    value="{{ old('password') }}">
                                @if($errors->has('password'))
                                <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="btnDiv">

                            <button type="reset" name="cBtn" class="" id="">Clear</button>
                            <button type="submit" name="Sbtn" class="btn" id="btn">Submit</button>
                        </div>
                        <a href="{{url('userlog')}}">Already Registered!! Login Here</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

</body>

</html>