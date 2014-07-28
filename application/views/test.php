<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบวางแผนทางการเงินส่วนบุคคลออนไลน์</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/styles.css" />

    <style type="text/css">
      @font-face {
          font-family: TS_Country;
          src: url("<?=base_url(); ?>font/28 Days Later.ttf");
      }
    </style>

    <script src="<?=base_url(); ?>js/jquery-1.11.1.js"></script>
    <script src="<?=base_url(); ?>js/jquery-ui.js"></script>
    <script src="<?=base_url(); ?>bootstrap/js/bootstrap.js"></script>
  </head>

  <body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
</nav>

    <div class="container-fluid">
          
          <div class="row row-offcanvas row-offcanvas-left">
            
             <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
               
                <ul class="nav nav-sidebar">
                  <li class="active"><a href="#">Overview</a></li>
                  <li><a href="#">Reports</a></li>
                  <li><a href="#">Analytics</a></li>
                  <li><a href="#">Export</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                  <li><a href="">Nav item</a></li>
                  <li><a href="">Nav item again</a></li>
                  <li><a href="">One more nav</a></li>
                  <li><a href="">Another nav item</a></li>
                  <li><a href="">More navigation</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                  <li><a href="">Nav item again</a></li>
                  <li><a href="">One more nav</a></li>
                  <li><a href="">Another nav item</a></li>
                </ul>
              
            </div><!--/span-->
            
            <div class="col-sm-9 col-md-10 main">
              
              <!--toggle sidebar button-->
              <p class="visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
              </p>
              
          <h1 class="page-header">
                Dashboard
                <p class="lead">(with off-canvas sidebar)</p>
              </h1>

              <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
              </div>
              
              <hr>

              <h2 class="sub-header">Section title</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                    </tr>
                  </tbody>
                </table>
              </div>

          </div><!--/row-->
      </div>
    </div><!--/.container-->

  </body>
</html>
