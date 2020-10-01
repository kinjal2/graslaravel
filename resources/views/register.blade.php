<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
<div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

       <form action="{{url('create')}}" method="POST" id="logForm">
										{{ csrf_field() }}
           <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Enter Surname">
                   <!-- <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
                    <input type="text" class="form-control" id="lastname" placeholder="Enter last Name">-->
                  </div>
                  <div class="form-group">
                    <label for="name">Birth Date</label>
                    <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Enter Birthdate">
                   
                  </div>
                  <div class="form-group">
                    <label for="name">Designation</label>
                    <input type="text" class="form-control"   name="designation" id="designation" placeholder="Enter Designation">
                   </div>  
                   <div class="form-group">
                    <label for="name"> Full Office Name</label>
                    <input type="text" class="form-control" name="officename"  id="officename" placeholder="Enter Office Name">
                   </div>
                   <div class="form-group">
                    <label for="name"> Mobile No</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
                   </div>
                   <div class="form-group">
                    <label for="name"> Email</label>
                    <input type="email" class="form-control" name="email"  id="email" placeholder="Enter email">
					</div>
					<div class="form-group">
                    <label for="name"> Password</label>
                   <input type="password" class="form-control" name="password"  id="password"  placeholder="Password">
					</div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
