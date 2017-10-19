
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

    <title>Sparkup CMS | Admin Area</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/starter-template/starter-template.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    
  </head>

  <body>	

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" <?php echo anchor('/', 'View Website', 'target="_blank"'); ?>Sparkup CMS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li><?php echo anchor('admin', 'Dashboard', 'title="Dashboard Home"'); ?></li>  
			<li><?php echo anchor('admin/pages', 'Pages', 'title="View Pages"'); ?></li>
			<li><?php echo anchor('admin/subjects', 'Subjects', 'title="View Subjects"'); ?></li>
			<li><?php echo anchor('admin/users', 'Users', 'title="View Users"'); ?></li>          
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			  <li><?php echo anchor('/', 'View Website', 'target="_blank"'); ?></li>  
			<li><?php echo anchor('users/logout', 'Logout', 'title="Logout"'); ?></li>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php $this->load->view($main); ?>
			</div>
			<div class="col-md-4 sidebar">
				<div class="nav nav-sidebar">
					<ul class="list-group">
						<li class="list-group-item"><?php echo anchor('admin/pages/add', 'Add Page', 'title="Add New Page"'); ?></li>
						<li class="list-group-item"><?php echo anchor('admin/subjects/add', 'Add Subject', 'title="Add New Subject"'); ?></li>
						<li class="list-group-item"><?php echo anchor('admin/users/add', 'Add User', 'title="Add New User"'); ?></li>
					</ul>
				</div>
			</div>
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>



