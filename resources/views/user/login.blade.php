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
            <form action="{{url('/userlog')}}" method="POST">
                @csrf
                <fieldset class="innerDiv">
                    <h1>Login Here</h1>
                    <div class="innerFormDiv">
                       
                            <div class="inputFieldDiv">
                                <label for="email">Email</label>

                                <input type="text" name="email" class="input" placeholder="Enter email" required />
                            </div>
                            <div class="inputFieldDiv">
                                <label for="password">Password </label>
                                <input type="password" name="password" class="input" placeholder=" Enter your password">
                            </div>
                        


                        <div class="btnDiv">

                            <button type="reset" name="cBtn" class="" id="">Clear</button>
                            <button type="submit" name="Sbtn" class="btn" id="btn">Submit</button>
                        </div>
                        <a href="login">Already Registered!! Login Here</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

</body>

</html>