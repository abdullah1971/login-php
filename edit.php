<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Application Name</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <!--<h3 class="masthead-brand">Application Name</h3>-->
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="dailyUpdate.php">Add</a></li>
                  <li class="active"><a href="edit.php">Edit</a></li>                  
                  <li><a href="delete.php">Delete</a></li>                  
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            
            <form class="form-horizontal" method="post" action="fetchEditData.php">

              <div class="form-group">
                <label for="date" class="col-sm-2 control-label">Date</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="date" placeholder="Date" name="date">
                </div>
              </div>

              <div class="form-group">
                <label for="courseCode" class="col-sm-2 control-label">Course Code</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="courseCode" placeholder="Course Code" name="courseCode">
                </div>
              </div>

              

              <!--<p class="lead">
                <a href="#" class="btn btn-lg btn-default">Learn more</a>
              </p>-->


              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-lg btn-default">Edit Info</button>
                </div>
              </div>
            </form>
            
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
