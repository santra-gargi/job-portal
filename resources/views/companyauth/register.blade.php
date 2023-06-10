<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<script src="https://kit.fontawesome.com/37869c7c0d.js" crossorigin="anonymous"></script>
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




      <div class="form-box">
        <h1 id="title">Sign up</h1>
        <form action="{{url('/register')}}" method="POST">
          @csrf
            <div class="input-group">
                  <div class="input-feild" id="nameFeild">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Name" name="name">
                   </div>

                   <div class="input-feild" id="companynameFeild">
                    <i class="fa-solid fa-circle-user"></i>
                    <input type="text" placeholder="Company Name" name="companyname">
                   </div>
            
                  
                 <div class="input-feild">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email">
                </div>

                <div class="input-feild">
                    <i class="fa-solid fa-phone"></i>
                    <input type="number" placeholder="Phone No" name="phoneno">
                </div>
                
                
                <div class="input-feild">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="password" name="password">
                </div>
                <p>Forgot Password <a href="#">Click Here</a></p>    
            </div>
           <div class="btn-feild">
            <button type="submit" id="signupbtn">Sign Up</button>
            <button type="button" id="signinbtn" class="disable"><a href="{{url('login')}}">Sign In</a></button>

           </div>
        </form>
      </div>
    </div>


</body>
</html>