<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin-css/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin-css/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin-css/vendors/nprogress/nprogress.css" rel="stylesheet') }}">
    <!-- Animate.css -->
    <link href="{{ asset('admin-css/vendors/animate.css/animate.min.css" rel="stylesheet') }}">

    <!-- Custom Theme Style -->
    <link href="{{ asset ('admin-css/build/css/custom.min.css ') }} " rel="stylesheet">
  </head>

  <body class="login">
    
      <div class="login_wrapper">
        <div class="animate form login_form">
            @if($errors->any())
              <div class=" alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>           
                @endforeach
                @endif
            </div>
              <h1>please  login </h1>
            <form action="{{ route('make_login') }}" method="post">
              @csrf
             
             
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" required  />
                @error('Email')
                <p class="text-danger">{{ $message }}</p>
              @enderror
  
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required />
                @error('Password')
                <p class="text-danger">{{ $message }}</p>
              @enderror
  
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Log in</button>
            </div>
    

           </form>
          
        </div>


  </body>
</html>
