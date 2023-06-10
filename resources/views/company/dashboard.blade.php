
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
	<link rel="stylesheet" href="{{asset('css/companydash.css')}}">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h1>Digiemploye</h1>
        <ul>
            <li><a href="{{url('/dashboard')}}"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="{{url('/job')}}"><i class="fas fa-address-card"></i>Post a Job</a></li>
            <li><a href="{{url('/applicant')}}"><i class="fas fa-regular fa-street-view"></i>View Applicant</a></li>
            <li><a href="{{url('/logout')}}"><i class="fas fa-arrow-right-from-bracket"></i>Log Out</a></li>
            <!-- 
            <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li> -->
            
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">

        <div class="header">Welcome </div>  
       
        @yield('mainSection')
        
    </div>
</div>


</body>
</html>

