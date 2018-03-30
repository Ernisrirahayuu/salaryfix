<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  
  
  
      <link rel="stylesheet" href="/loginn/css/style.css">
</head>

<body>
  <hgroup>
  <h1>Login</h1>
  <h3></h3>
</hgroup>
<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


    <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
    
    <input type="text" value="{{ old('email') }}" id="email" name="email">
    
    <span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
    @if ($errors->has('email'))

                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
  </div>
  

    <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
    <input id="password" type="password" class="form-control" name="password" required>
    <span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  
@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
  </div>

  <button type="submit" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
 

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="/loginn/js/index.js"></script>




</body>

</html>
