<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 
  
    <link rel="stylesheet" href="/xx2/css/style.css"> 

  
</head>

<body background="{{asset('xx/img/frame-1.jpg')}}">
  <div class="user">
    <header class="user__header">


        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title"><b><h3> Login</h3></b></h1>
    </header>
    
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
    <br><br>    
        <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" placeholder="Email" class="form__input" value="{{ old('email') }}" id="email" name="email"/>
             @if ($errors->has('email'))

                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
        
        <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" placeholder="Password" class="form__input"  name="password" id="password" required/>
            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

        </div>
        
        <button class="btn" type="submit">Login</button>
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="/xx2/js/index.js"></script>




</body>

</html>
