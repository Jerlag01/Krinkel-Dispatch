<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="./img/favicon.jpg" type="image/x-icon">
    <?php
        include ('./required/connection.php');
        session_start();
    ?>

    <title>Krinkel Logistiek Check-in</title>

    <link rel="stylesheet" href="./dist/css/reset.css">
	<link rel="stylesheet" href="./dist/css/custom.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <div class="content-header yellow-bar">
    	<div class="container-fluid">
    		<div class="col-mb-2">
				<img src="./img/logo.jpg" alt="site logo"><br>
    			<h2 class="m-0 text-dark yellow-bar">Krinkel Logistiek Registratie</h2>
          	</div>
			<h1>Welkom op Krinkel <?php echo date('Y'); ?>. Vul onderstaand formulier in om je als logistieker te registreren.</h1><br>
      	</div>
    </div>

    <div class="content">
		<div class="container-fluid">
			<?php echo $_SESSION['message']; ?><br>
			<form role="form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
				<div class="row">
					<div class="col-md-6">
            			<div class="card card-primary">
            				<div class="card-header">
								<h3 class="card-title">Algemene info</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="Name">Naam</label>
									<input type="text" class="form-control" id="Name" placeholder="Naam">
								</div>
								<div class="form-group">
									<label for="Name2">Voornaam</label>
									<input type="text" class="form-control" id="Name2" placeholder="Voornaam">
								</div>
								<div class="form-group">
									<label for="phone">GSM</label>
									<input type="text" class="form-control" id="phone" placeholder="GSM nummer">
								</div>
								<div class="form-group">
									<label for="Email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Profiel foto</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="exampleInputFile">
												<label class="custom-file-label" for="exampleInputFile">Choose file</label>
											</div>
											<div class="input-group-append">
												<span class="input-group-text" id="">Upload</span>
											</div>
										</div>
								</div>
							</div>
            	 		</div>
						<div class="card card-primary">
            				<div class="card-header">
								<h3 class="card-title">Adres</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="Street">Straat</label>
									<input type="text" class="form-control" id="Street" placeholder="Naam">
								</div>
								<div class="form-group">
									<label for="housenumber">Huisnummer en Busnummer</label>
									<input type="text" class="form-control" id="housenumber" placeholder="Huisnummer en busnummer">
								</div>
								<div class="form-group">
									<label for="zipcode">Postcode</label>
									<input type="text" class="form-control" id="zipcode" placeholder="Postcode">
								</div>
								<div class="form-group">
									<label for="city">Gemeente</label>
									<input type="text" class="form-control" id="city" placeholder="Gemeente">
								</div>
								<div class="form-group">
									<label for="country">Land</label>
									<input type="text" class="form-control" id="country" placeholder="Land">
								</div>
							</div>
            	 		</div>
					</div>
					<div class="col-md-6">
            			<div class="card card-success">
            				<div class="card-header">
								<h3 class="card-title">Rijbewijzen</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="B" value="1">
												<label for="B" class="custom-control-label">B</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="BE" value="1">
												<label for="BE" class="custom-control-label">BE</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="C1" value="1">
												<label for="C1" class="custom-control-label">C1</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="C1E" value="1">
												<label for="C1E" class="custom-control-label">C1E</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="C" value="1">
												<label for="C" class="custom-control-label">C</label>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="CE" value="1">
												<label for="CE" class="custom-control-label">CE</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="D1" value="1">
												<label for="D1" class="custom-control-label">D1</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="D" value="1">
												<label for="D" class="custom-control-label">D</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="DE" value="1">
												<label for="DE" class="custom-control-label">DE</label>
											</div>
										</div>										
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="G" value="1">
												<label for="G" class="custom-control-label">G</label>
											</div>
										</div>
									</div>
								</div>
							</div>
            	 		</div>
						<div class="card card-success">
            				<div class="card-header">
								<h3 class="card-title">Skills</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="elektriciteit" value="1">
												<label for="elektriciteit" class="custom-control-label">Elektriciteit</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="Water" value="1">
												<label for="Water" class="custom-control-label">Water</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="Geluid" value="1">
												<label for="Geluid" class="custom-control-label">Geluid</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="Video" value="1">
												<label for="Video" class="custom-control-label">Video</label>
											</div>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="Licht" value="1">
												<label for="Licht" class="custom-control-label">Licht</label>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="andere" value="">
												<label for="andere" class="custom-control-label">Andere Skills?</label>
												<textarea class="card-body pad" id="andere">
												</textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
            	 		</div>
					</div>
				</div>
            	<div>
					<div class="form-group">
                		<label for="gdpr" class="control-label">GDPR: Gaat u akkoord met het verwerken en opslagen van uw gegevens voor de meegedeelde periode dat Krinkel doorgaat? (Deze gegevens worden alleen gebruikt en beheerd door Krinkel Dispatch en worden niet voor commerciële doeleinden gebruikt.)  <br>
							<input type="checkbox" name="gdpr" value="true"> Ik ga akkoord</input>
						</label>
                	</div>
             	</div>										
             	<div class="card-footer">
					<button type="submit" class="btn btn-success btn-sm">Check-In</button>
            	</div>
			</form>
		</div>
	</div>
	
</div>
<footer class="center main-footer">
Copyright &copy; <a href="https://www.krinkel.be">Krinkel</a> 2020 - <?php echo date('Y'); ?>. All Rights Reserved
<div class="pull-right small text-gray" style="margin-right:10px;margin-top:-7px;">
	<strong>Contact: JL-Tech, Lagaet Jeroen, Tel: 0471698630</strong>
</div>
</footer>
</body>

</html>