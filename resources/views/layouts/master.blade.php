<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pig Latin Translator</title>

        <!-- CSS And JavaScript -->
		 <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
		 <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    </head>

    <body>
<header class="masthead">
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1><a href="#">Pig Latin Translator</a><p class="lead">Tim Mattingly A3</p></h1>
    </div>
  </div>
  </div>
</header>	  	  	
  	
  	
<!-- Begin Navbar -->
<div id="nav">
  <div class="navbar navbar-default navbar-static">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-bar"></span>
        <span class="glyphicon glyphicon-bar"></span>
        <span class="glyphicon glyphicon-bar"></span>
      </a>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="divider"></li>
        </ul>
		<ul class="nav navbar-nav">
          <li><a href="https://en.wikipedia.org/wiki/Pig_Latin">About Pig Latin</a></li>
          <li class="divider"></li>
        </ul>
      </div>		
    </div>
  </div><!-- /.navbar -->
</div>

        @yield('content')
		
    </body>
</html>