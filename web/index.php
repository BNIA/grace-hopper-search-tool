<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">BNIA</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              (logo?)
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Find Data</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well">
            <h4 class="no-top">Select Communities:</h4>
            (map)
          </div>
          <div class="well">
            <h4 class="no-top">I want to view:</h4>
            (choose indicators)
          </div>
          <div class="well">
            <h4 class="no-top">In the date range:</h4>
            (date picker)
          </div>
        </div><!--/span-->
        <div class="span9">
          <div class="query-results">
            <h1>This is where the results go<h1>
          </div>

        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Baltimore Neighborhood Indicators Alliance and the Jacob France Institude</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>