<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Facebook style update status box with CSS3, HTML, Bootstrap and Jquery  - wsnippets.com</title>
	<link href="../public/css/bootstrap.css" rel="stylesheet">
	<link href="../public/fonts/font-awesome.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
	<script src="../public/js/jquery.js"></script>
	<script src="../public/js/bootstrap.js"></script>
</head>

  <body>
	  <style>
	  body {
    padding-top: 40px;
    padding-bottom: 40px;
}
.facebook-share-box {
    width: 100%;
}
.facebook-share-box .share {
    -webkit-transition: 0.1s ease-out height;
    -moz-transition: 0.1s ease-out height;
    -ms-transition: 0.1s ease-out height;
    -o-transition: 0.1s ease-out height;
    transition: 0.1s ease-out height;
    clear: both;
    background: white;
    border: 2px solid #dddddd;
    margin-bottom: 10px;
    position: relative;
}

.facebook-share-box .share .arrow {
    background: url(arrow.png) no-repeat #dddddd;
    position: absolute;
    width: 14px;
    height: 10px;
    left: 4px;
    display: inline;
    top: -10px;
    -webkit-transition: 0.3s ease-out all;
    -moz-transition: 0.3s ease-out all;
    -ms-transition: 0.3s ease-out all;
    -o-transition: 0.3s ease-out all;
    transition: 0.3s ease-out all;
}

.facebook-share-box .post-types li a {
    color: #085083;
    text-decoration: none;
}

.facebook-share-box .post-types li a.active {
    color: #404040;
}

.facebook-share-box .post-types {
    padding-left: 5px;
}

.facebook-share-box ul {
    list-style: none;
    margin-bottom: 9px;
}

.facebook-share-box .post-types li {
    display: inline;
    margin-right: 10px;
}

.message {
    border-radius: 0;
    border: none;
}
.panel {
    border-radius: 0;
    border: none;
    margin-bottom: 0;
}

.privacy-dropdown {
    width: 100px;
}
	  
	  </style>
	
	  <script type="text/javascript">
		$(document).ready(function(){
			$('.status').click(function() { $('.arrow').css("left", 0);});
			$('.photos').click(function() { $('.arrow').css("left", 146);});
		});
	</script>
	  


    <div class="container">
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h3 class="text-center">Facebook style update status box with CSS3, HTML, Bootstrap and Jquery  - wsnippets.com</h3>
		<hr>
		<form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
			<ul class="post-types">
				<li class="post-type">
					<a class="status" title="" href="#"><i class="icon icon-file"></i> Share an Update</a>
				</li>
				<li class="post-type">
					<a class="photos" href="#"><i class="icon icon-camera"></i> Add photos</a>
				</li>
			</ul>
			<div class="share">
				<div class="arrow"></div>
				<div class="panel panel-default">
                      <div class="panel-heading"><i class="fa fa-file"></i> Update Status</div>
                      <div class="panel-body">
                        <div class="">
                            <textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> 
						</div>
                      </div>
						<div class="panel-footer">
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<div class="btn-group">
											  <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i> Location</button>
											  <button type="button" class="btn btn-default"><i class="icon icon-picture"></i> Photo</button>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<select name="privacy" class="form-control privacy-dropdown pull-left input-sm">
												<option value="1" selected="selected">Public</option>
												<option value="2">Only my friends</option>
												<option value="3">Only me</option>
											</select>                                    
											<input type="submit" name="submit" value="Post" class="btn btn-primary">                               
										</div>
									</div>
								</div>
						</div>
                    </div>
			</div>
			</div>
		</form>
	</div>
	</div>
	</div> 
  </body>
</html>