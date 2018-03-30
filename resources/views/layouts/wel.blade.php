<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Salary Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="/frontendku/themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="/frontendku/themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="/frontendku/themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="/frontendku/themes/less/bootshop.less">
	<script src="/frontendku/themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="/frontendku/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="/frontendku/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="/frontendku/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="/frontendku/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="/frontendku/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
  	<style type="text/css" id="enject"></style>
  </head>
<body>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <ul id="topMenu" class="nav pull-right">
	
	  @if (Auth::guest())
                      
                     
     <li class="">
   <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-medium btn-success">Login</span></a>



  <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3>Silahkan Login</h3>
      </div>
      <div class="modal-body">

         {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
     
        <div class="control-group">     
 <label class="{{ $errors->has('email') ? 'has-error' : '' }}">Email : </label>
       {!! Form::email('email',null,['class'=>'form-control']) !!}
                      {!! $errors->first('email','<p class="help-block">:message</p>') !!}

        </div>
        <div class="control-group">
           <label class="{{ $errors->has('password') ? 'has-error' : '' }}">Password :  </label>
                       {!! Form::password('password',['class'=>'form-control']) !!}
                       {!! $errors->first('password','<p class="help-block">:message</p>') !!}
        </div>
        
 
      <button type="submit" class="btn btn-success">Sign in</button>
     {!! Form::close() !!}
      </div>
  </div>
  </li>

  <!-- <li class="">
   <a href="/register" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-medium btn-success">Register</span></a> -->
  
  </li>
   @endif
	</li>
    </ul>
  </div>
</div>
<!-- Header End====================================================================== -->
<div>
<img src="/img/welcome.jpg" style="width: 100%; height: 100%">

</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="/frontendku/themes/js/jquery.js" type="text/javascript"></script>
	<script src="/frontendku/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/frontendku/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="/frontendku/themes/js/bootshop.js"></script>
    <script src="/frontendku/themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

</body>
</html>