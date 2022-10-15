<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="icon" href="logo.png" type="image/x-icon"/>
	<title>OJT MONITORING</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="./logo.png" width="150px">
					</div>
					<div class="heading mb-3">
						<h4>OJT MONITORING SYSTEM</h4>
					</div>
          <label for="" style="font-size: 20px; color: white; font-weight:bold;">Login as:</label>
            <select name="" id="" class="form-control" onchange="window.location.href=this.value;">
              <option value="#">Select</option>
              <option value="supervisor-login.php">Supervisor</option>
              <option value="login.php">OJT Students</option>
            </select>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
</body>
</html>