<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-container {
      border: 2px solid #ced4da; 
      padding: 20px;
      border-radius: 10px; 
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="form-container"> 
        <h1 class="text-center mb-4">Sign up</h1>
        <form  action="{{route('user.register')}}" method="post" >
          @csrf
          <div class="form-group">
            <label for="inputString">Name</label>
            <input type="text" name="name" class="form-control" id="inputString" placeholder="Enter your name">
            <span class="text-danger"> @error('name'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
            <label for="inputString">UserName</label>
            <input type="UserName" name="user_name" class="form-control" id="inputString" placeholder="Enter your UserName">
            <span class="text-danger"> @error('user_name'){{$message}}@enderror</span>
          </div>

          <div class="form-group">
            <label for="inputString">Email</label>
            <input type="email" name="email" class="form-control" id="inputString" placeholder="Enter your Email">
            <span class="text-danger"> @error('email'){{$message}}@enderror</span>
          </div>

          <div class="form-group">
            <label for="inputInteger">password</label>
            <input type="password" name="password" class="form-control" id="inputInteger" placeholder="Enter Password">
            <span class="text-danger"> @error('password'){{$message}}@enderror</span>
          </div>
          
          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="inputInteger" placeholder="Confirm Password">
            
          </div>
          
          <button type="submit" class="btn btn-primary" style="margin-left:180px;width:100px;">Signup</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
