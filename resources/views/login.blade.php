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
        <h1 class="text-center mb-4">Login</h1>
        <form  action="{{route('user.login')}}" method="post" >
          @csrf
          <div class="form-group">
            <label for="inputString">Email</label>
            <input type="email" name="email" class="form-control" id="inputString" placeholder="Enter your Email">
            <span class="text-danger"> @error('email'){{$message}}@enderror</span>
          </div>

          <div class="form-group">
            <label for="inputInteger">Password</label>
            <input type="password" name="password" class="form-control" id="inputInteger" placeholder="Enter Password">
            <span class="text-danger"> @error('password'){{$message}}@enderror</span>
          </div>
          
          <button type="submit" class="btn btn-primary" style="margin-left:180px;width:100px;">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
