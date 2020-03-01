<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Marquee Scrolling Link With MySQLi</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add Link Source</button>
		<br /><br />
		<div class="alert alert-warning">Link List</div>
		<div style="margin-top:30px;">
			<marquee direction="down"  scrolldelay="150" onmouseout="this.start()" onmouseover="this.stop()">
				<?php
					require 'conn.php';
					
					$query = $conn->query("SELECT * FROM `link`");
					while($fetch = $query->fetch_array()){
				?>
					<a href="<?php echo $fetch['link_url']?>" style="font-size:20px; padding:10px;" scrolldelay=""><?php echo $fetch['link_title']?></a><br /><br />
				<?php
					}
				?>
				
			</marquee>
		</div>
	</div>
	
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="save_query.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Link Title</label>
								<input class="form-control" type="text" name="link" required="required" />
							</div>
							<div class="form-group">
								<label>Link URL</label>
								<input class="form-control" type="url" name="url" required="required"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>