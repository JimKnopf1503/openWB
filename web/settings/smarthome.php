<!DOCTYPE html>
<html lang="de">

	<head>
		<base href="/openWB/web/">

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>openWB Einstellungen</title>
		<meta name="description" content="Control your charge" />
		<meta name="author" content="Michael Ortenstein" />
		<!-- Favicons (created with http://realfavicongenerator.net/)-->
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
		<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="manifest.json">
		<link rel="shortcut icon" href="img/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#00a8ff">
		<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap-4.4.1/bootstrap.min.css">
		<!-- Normalize -->
		<link rel="stylesheet" type="text/css" href="css/normalize-8.0.1.css">

		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5.8.2/css/all.css">
		<!-- include settings-style -->
		<link rel="stylesheet" type="text/css" href="settings/settings_style.css">

		<!-- important scripts to be loaded -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap-4.4.1/bootstrap.bundle.min.js"></script>
		<!-- load helper functions -->
		<script src = "settings/helperFunctions.js?ver=20200505-a" ></script>
		<script>
			function getCookie(cname) {
				var name = cname + '=';
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for(var i = 0; i <ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
						return c.substring(name.length, c.length);
					}
				}
				return '';
			}
			var themeCookie = getCookie('openWBTheme');
			// include special Theme style
			if( '' != themeCookie ){
				$('head').append('<link rel="stylesheet" href="themes/' + themeCookie + '/settings.css?v=20200801">');
			}
		</script>
	</head>

	<body>
		<?php

			$lines = file('/var/www/html/openWB/openwb.conf');
			foreach($lines as $line) {
				if(strpos($line, "hook1einschaltverz=") !== false) {
					list(, $hook1einschaltverzold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2einschaltverz=") !== false) {
					list(, $hook2einschaltverzold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2_ausverz=") !== false) {
					list(, $hook2_ausverzold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook3_ausverz=") !== false) {
					list(, $hook3_ausverzold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook1_ausverz=") !== false) {
					list(, $hook1_ausverzold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook1ein_url=") !== false) {
					list(, $hook1ein_urlold) = explode("=", $line, 2);
				}
				if(strpos($line, "angesteckthooklp1_url=") !== false) {
					list(, $angesteckthooklp1_urlold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook1aus_url=") !== false) {
					list(, $hook1aus_urlold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook1ein_watt=") !== false) {
					list(, $hook1ein_wattold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook1aus_watt=") !== false) {
					list(, $hook1aus_wattold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook1_aktiv=") !== false) {
					list(, $hook1_aktivold) = explode("=", $line, 2);
				}
				if(strpos($line, "angesteckthooklp1=") !== false) {
					list(, $angesteckthooklp1old) = explode("=", $line, 2);
				}

				if(strpos($line, "hook1_dauer=") !== false) {
					list(, $hook1_dauerold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2ein_url=") !== false) {
					list(, $hook2ein_urlold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2aus_url=") !== false) {
					list(, $hook2aus_urlold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2ein_watt=") !== false) {
					list(, $hook2ein_wattold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2aus_watt=") !== false) {
					list(, $hook2aus_wattold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2_aktiv=") !== false) {
					list(, $hook2_aktivold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook2_dauer=") !== false) {
					list(, $hook2_dauerold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook3ein_url=") !== false) {
					list(, $hook3ein_urlold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook3aus_url=") !== false) {
					list(, $hook3aus_urlold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook3ein_watt=") !== false) {
					list(, $hook3ein_wattold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook3aus_watt=") !== false) {
					list(, $hook3aus_wattold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook3_aktiv=") !== false) {
					list(, $hook3_aktivold) = explode("=", $line, 2);
				}
				if(strpos($line, "hook3_dauer=") !== false) {
					list(, $hook3_dauerold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_aktiv=") !== false) {
					list(, $verbraucher1_aktivold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_typ=") !== false) {
					list(, $verbraucher1_typold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_urlw=") !== false) {
					list(, $verbraucher1_urlwold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_urlh=") !== false) {
					list(, $verbraucher1_urlhold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_name=") !== false) {
					list(, $verbraucher1_nameold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_id=") !== false) {
					list(, $verbraucher1_idold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_ip=") !== false) {
					list(, $verbraucher1_ipold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher1_source=") !== false) {
					list(, $verbraucher1_sourceold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_aktiv=") !== false) {
					list(, $verbraucher2_aktivold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_typ=") !== false) {
					list(, $verbraucher2_typold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_urlw=") !== false) {
					list(, $verbraucher2_urlwold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_urlh=") !== false) {
					list(, $verbraucher2_urlhold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_name=") !== false) {
					list(, $verbraucher2_nameold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_id=") !== false) {
					list(, $verbraucher2_idold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_ip=") !== false) {
					list(, $verbraucher2_ipold) = explode("=", $line, 2);
				}
				if(strpos($line, "verbraucher2_source=") !== false) {
					list(, $verbraucher2_sourceold) = explode("=", $line, 2);
				}
			}

			$angesteckthooklp1_urlold = str_replace( "'", "", $angesteckthooklp1_urlold);

			$hook1ein_urlold = str_replace( "'", "", $hook1ein_urlold);
			$hook1aus_urlold = str_replace( "'", "", $hook1aus_urlold);
			$hook2ein_urlold = str_replace( "'", "", $hook2ein_urlold);
			$hook2aus_urlold = str_replace( "'", "", $hook2aus_urlold);
			$hook3ein_urlold = str_replace( "'", "", $hook3ein_urlold);
			$hook3aus_urlold = str_replace( "'", "", $hook3aus_urlold);
			$verbraucher1_urlwold = str_replace( "'", "", $verbraucher1_urlwold);
			$verbraucher1_urlhold = str_replace( "'", "", $verbraucher1_urlhold);
			$verbraucher2_urlwold = str_replace( "'", "", $verbraucher2_urlwold);
			$verbraucher2_urlhold = str_replace( "'", "", $verbraucher2_urlhold);
		?>

		<div id="nav"></div> <!-- placeholder for navbar -->

		<div role="main" class="container" style="margin-top:20px">
			<h1>SmartHome</h1>
			<form action="./tools/savesmarthome.php" method="POST">

				<div class="card border-secondary">
					<div class="card-header bg-secondary">
						WebHooks
					</div>
					<div class="card-body">
						<div class="form-group">
							<div class="form-row mb-1">
								<label for="angesteckthooklp1" class="col-md-4 col-form-label">Nach Anstecken an Ladepunkt 1</label>
								<div class="col">
									<div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
										<label class="btn btn-outline-info<?php if($angesteckthooklp1old == 0) echo " active" ?>">
											<input type="radio" name="angesteckthooklp1" id="angesteckthooklp1Off" value="0"<?php if($angesteckthooklp1old == 0) echo " checked=\"checked\"" ?>>Aus
										</label>
										<label class="btn btn-outline-info<?php if($angesteckthooklp1old == 1) echo " active" ?>">
											<input type="radio" name="angesteckthooklp1" id="angesteckthooklp1On" value="1"<?php if($angesteckthooklp1old == 1) echo " checked=\"checked\"" ?>>An
										</label>
									</div>
								</div>
							</div>
							<div id="angesteckthooklp1andiv">
								<div class="form-row mb-1">
									<label for="angesteckthooklp1_url" class="col-md-4 col-form-label">URL</label>
									<div class="col">
										<input class="form-control" type="text" name="angesteckthooklp1_url" id="angesteckthooklp1_url" value="<?php echo trim(htmlspecialchars($angesteckthooklp1_urlold)) ?>">
										<span class="form-text small">URL die (einmalig) aufgerufen wird wenn ein Fahrzeug an LP1 angesteckt wird. Erneutes Ausführen erfolgt erst nachdem abgesteckt wurde.</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script>
						$(function() {
							if($('#angesteckthooklp1Off').prop("checked")) {
								$('#angesteckthooklp1andiv').hide();
							} else {
								$('#angesteckthooklp1andiv').show();
							}

							$('input[type=radio][name=angesteckthooklp1]').change(function(){
								if(this.value == '0') {
									$('#angesteckthooklp1andiv').hide();
								} else {
									$('#angesteckthooklp1andiv').show();
								}
							});
						});
					</script>
				</div>

				<div class="card border-secondary">
					<div class="card-header bg-secondary">
						Externe Geräte
					</div>
					<div class="card-body">
						<div class="card-text alert alert-info">
							Externe Geräte lassen sich per definierter URL (Webhook) in Abhängigkeit vom Überschuss an- und ausschalten.
						</div>
						<?php for( $deviceNum = 1; $deviceNum < 4; $deviceNum++ ){ ?>
							<?php if( $deviceNum > 1){ ?>
							<hr class="border-secondary">
							<?php } ?>
							<div class="form-group">
								<div class="form-row mb-1">
									<label for="hook<?php echo $deviceNum; ?>_aktiv" class="col-md-4 col-form-label">Gerät <?php echo $deviceNum; ?></label>
									<div class="col">
										<div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
											<label class="btn btn-outline-info<?php if(${"hook" . $deviceNum . "_aktivold"} == 0) echo " active" ?>">
												<input type="radio" name="hook<?php echo $deviceNum; ?>_aktiv" id="hook<?php echo $deviceNum; ?>_aktivOff" value="0"<?php if(${"hook" . $deviceNum . "_aktivold"} == 0) echo " checked=\"checked\"" ?>>Aus
											</label>
											<label class="btn btn-outline-info<?php if(${"hook" . $deviceNum . "_aktivold"} == 1) echo " active" ?>">
												<input type="radio" name="hook<?php echo $deviceNum; ?>_aktiv" id="hook<?php echo $deviceNum; ?>_aktivOn" value="1"<?php if(${"hook" . $deviceNum . "_aktivold"} == 1) echo " checked=\"checked\"" ?>>An
											</label>
										</div>
									</div>
								</div>
								<div id="hook<?php echo $deviceNum; ?>andiv">
									<div class="form-row mb-1">
										<label for="hook<?php echo $deviceNum; ?>ein_watt" class="col-md-4 col-form-label">Einschaltschwelle</label>
										<div class="col">
											<input class="form-control" type="number" min="0" step="10" name="hook<?php echo $deviceNum; ?>ein_watt" id="hook<?php echo $deviceNum; ?>ein_watt" value="<?php echo trim(${"hook" . $deviceNum . "ein_wattold"}) ?>">
											<span class="form-text small">Einschaltschwelle in Watt, bei deren Erreichen das Gerät eingeschaltet werden soll.</span>
										</div>
									</div>
									<div class="form-row mb-1">
										<label for="hook<?php echo $deviceNum; ?>einschaltverz" class="col-md-4 col-form-label">Einschaltverzögerung</label>
										<div class="col">
											<input class="form-control" type="number" min="0" step="1" name="hook<?php echo $deviceNum; ?>einschaltverz" id="hook<?php echo $deviceNum; ?>einschaltverz" value="<?php echo trim(${"hook" . $deviceNum . "einschaltverzold"}) ?>">
											<span class="form-text small">Bestimmt die Dauer, für die die Einschaltschwelle überschritten werden muss bevor eingeschaltet wird.</span>
										</div>
									</div>
									<div class="form-row mb-1">
										<label for="hook<?php echo $deviceNum; ?>ein_url" class="col-md-4 col-form-label">Einschalt-URL</label>
										<div class="col">
											<input class="form-control" type="text" name="hook<?php echo $deviceNum; ?>ein_url" id="hook<?php echo $deviceNum; ?>ein_url" value="<?php echo trim(htmlspecialchars(${"hook" . $deviceNum . "ein_urlold"})) ?>">
											<span class="form-text small">Einschalturl die aufgerufen wird bei entsprechendem Überschuss.</span>
										</div>
									</div>
									<div class="form-row mb-1">
										<label for="hook<?php echo $deviceNum; ?>_dauer" class="col-md-4 col-form-label">Einschaltdauer</label>
										<div class="col">
											<input class="form-control" type="number" min="0" step="1" name="hook<?php echo $deviceNum; ?>_dauer" id="hook<?php echo $deviceNum; ?>_dauer" value="<?php echo trim(${"hook" . $deviceNum . "_dauerold"}) ?>">
											<span class="form-text small">Einschaltdauer in Minuten. Gibt an, wie lange das Gerät nach Start mindestens aktiv bleiben muss, ehe die Ausschalturl aufgerufen wird.</span>
										</div>
									</div>
									<div class="form-row mb-1">
										<label for="hook<?php echo $deviceNum; ?>aus_watt" class="col-md-4 col-form-label">Ausschaltschwelle</label>
										<div class="col">
											<input class="form-control" type="number" step="10" name="hook<?php echo $deviceNum; ?>aus_watt" id="hook<?php echo $deviceNum; ?>aus_watt" value="<?php echo trim(${"hook" . $deviceNum . "aus_wattold"}) ?>">
											<span class="form-text small">Ausschaltschwelle in Watt bei die unten stehende URL aufgerufen wird. Soll die Abschaltung bei Bezug stattfinden eine negative Zahl eingeben.</span>
										</div>
									</div>
									<div class="form-row mb-1">
										<label for="hook<?php echo $deviceNum; ?>aus_url" class="col-md-4 col-form-label">Ausschalt-URL</label>
										<div class="col">
											<input class="form-control" type="text" name="hook<?php echo $deviceNum; ?>aus_url" id="hook<?php echo $deviceNum; ?>aus_url" value="<?php echo trim(htmlspecialchars(${"hook" . $deviceNum . "aus_urlold"})) ?>">
											<span class="form-text small">Ausschalturl, die aufgerufen wird bei entsprechendem Überschuss.</span>
										</div>
									</div>
									<div class="form-row mb-1">
										<label for="hook<?php echo $deviceNum; ?>_ausverz" class="col-md-4 col-form-label">Ausschaltverzögerung</label>
										<div class="col">
											<input class="form-control" type="number" min="0" step="1" name="hook<?php echo $deviceNum; ?>_ausverz" id="hook<?php echo $deviceNum; ?>_ausverz" value="<?php echo trim(${"hook" . $deviceNum . "_ausverzold"}) ?>">
											<span class="form-text small">Bestimmt die Dauer, für die die Ausschaltschwelle unterschritten werden muss, bevor ausgeschaltet wird.</span>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<script>
						$(function() {
							<?php for ( $deviceNum = 1; $deviceNum < 4; $deviceNum++ ){ ?>
								if($('#hook<?php echo $deviceNum; ?>_aktivOff').prop("checked")) {
									$('#hook<?php echo $deviceNum; ?>andiv').hide();
								} else {
									$('#hook<?php echo $deviceNum; ?>andiv').show();
								}

								$('input[type=radio][name=hook<?php echo $deviceNum; ?>_aktiv]').change(function(){
									if(this.value == '0') {
										$('#hook<?php echo $deviceNum; ?>andiv').hide();
									} else {
										$('#hook<?php echo $deviceNum; ?>andiv').show();
									}
								});
							<?php } ?>
						});
					</script>
				</div>

				<div class="card border-secondary">
					<div class="card-header bg-secondary">
						Verbraucher
					</div>
					<div class="card-body">
						<div class="card-text alert alert-info">
							Externe Verbraucher lassen sich in das Logging von OpenWB einbinden.
						</div>
						<?php for( $deviceNum = 1; $deviceNum < 3; $deviceNum++ ){ ?>
							<?php if( $deviceNum > 1){ ?>
							<hr class="border-secondary">
							<?php } ?>
							<div class="form-group">
								<div class="form-row mb-1">
									<label for="verbraucher<?php echo $deviceNum; ?>_aktiv" class="col-md-4 col-form-label">Verbraucher <?php echo $deviceNum; ?></label>
									<div class="col">
										<div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
											<label class="btn btn-outline-info<?php if(${"hook" . $deviceNum . "_aktivold"} == 0) echo " active" ?>">
												<input type="radio" name="verbraucher<?php echo $deviceNum; ?>_aktiv" id="verbraucher<?php echo $deviceNum; ?>_aktivOff" value="0"<?php if(${"verbraucher" . $deviceNum . "_aktivold"} == 0) echo " checked=\"checked\"" ?>>Aus
											</label>
											<label class="btn btn-outline-info<?php if(${"hook" . $deviceNum . "_aktivold"} == 1) echo " active" ?>">
												<input type="radio" name="verbraucher<?php echo $deviceNum; ?>_aktiv" id="verbraucher<?php echo $deviceNum; ?>_aktivOn" value="1"<?php if(${"verbraucher" . $deviceNum . "_aktivold"} == 1) echo " checked=\"checked\"" ?>>An
											</label>
										</div>
									</div>
								</div>
								<div id="verbraucher<?php echo $deviceNum; ?>andiv">
									<div class="form-row mb-1">
										<label for="verbraucher<?php echo $deviceNum; ?>_typ" class="col-md-4 col-form-label">Anbindung</label>
										<div class="col">
											<select name="verbraucher<?php echo $deviceNum; ?>_typ" id="verbraucher<?php echo $deviceNum; ?>_typ" class="form-control">
												<option <?php if(${"verbraucher" . $deviceNum . "_typold"} == "http\n") echo "selected" ?> value="http">Http Abfrage</option>
												<option <?php if(${"verbraucher" . $deviceNum . "_typold"} == "mpm3pm\n") echo "selected" ?> value="mpm3pm">MPM3PM</option>
												<option <?php if(${"verbraucher" . $deviceNum . "_typold"} == "sdm120\n") echo "selected" ?> value="sdm120">SDM120</option>
												<option <?php if(${"verbraucher" . $deviceNum . "_typold"} == "sdm630\n") echo "selected" ?> value="sdm630">SDM630</option>
												<option <?php if(${"verbraucher" . $deviceNum . "_typold"} == "abb-b23\n") echo "selected" ?> value="abb-b23">ABB-B23</option>
												<option <?php if(${"verbraucher" . $deviceNum . "_typold"} == "tasmota\n") echo "selected" ?> value="tasmota">Sonoff mit Tasmota FW</option>
												<option <?php if(${"verbraucher" . $deviceNum . "_typold"} == "shelly\n") echo "selected" ?> value="shelly">Shelly 1PM</option>
											</select>
										</div>
									</div>
									<div class="form-row mb-1">
										<label for="verbraucher<?php echo $deviceNum; ?>_name" class="col-md-4 col-form-label">Name</label>
										<div class="col">
											<input class="form-control" type="text" name="verbraucher<?php echo $deviceNum; ?>_name" id="verbraucher<?php echo $deviceNum; ?>_name" value="<?php echo trim(${"verbraucher" . $deviceNum . "_nameold"}) ?>">
											<span class="form-text small">Name des Verbrauchers.</span>
										</div>
									</div>
									<div id="v<?php echo $deviceNum; ?>http">
										<div class="form-row mb-1">
											<label for="verbraucher<?php echo $deviceNum; ?>_urlw" class="col-md-4 col-form-label">URL Leistung</label>
											<div class="col">
												<input class="form-control" type="text" name="verbraucher<?php echo $deviceNum; ?>_urlw" id="verbraucher<?php echo $deviceNum; ?>_urlw" value="<?php echo trim(htmlspecialchars(${"verbraucher" . $deviceNum . "_urlwold"})) ?>">
												<span class="form-text small">URL des Verbrauchers, welche die Momentanleistung in Watt zurück gibt.</span>
											</div>
										</div>
										<div class="form-row mb-1">
											<label for="verbraucher<?php echo $deviceNum; ?>_urlh" class="col-md-4 col-form-label">URL Zählerstand</label>
											<div class="col">
												<input class="form-control" type="text" name="verbraucher<?php echo $deviceNum; ?>_urlh" id="verbraucher<?php echo $deviceNum; ?>_urlh" value="<?php echo trim(htmlspecialchars(${"verbraucher" . $deviceNum . "_urlhold"})) ?>">
												<span class="form-text small">URL des Verbrauchers, welche den Zählerststand in Watt Stunden zurück gibt.</span>
											</div>
										</div>
									</div>
									<div id="v<?php echo $deviceNum; ?>modbus">
										<div class="form-row mb-1">
											<label for="verbraucher<?php echo $deviceNum; ?>_source" class="col-md-4 col-form-label">Source</label>
											<div class="col">
												<input class="form-control" type="text" name="verbraucher<?php echo $deviceNum; ?>_source" id="verbraucher<?php echo $deviceNum; ?>_source" value="<?php echo trim(htmlspecialchars(${"verbraucher" . $deviceNum . "_sourceold"})) ?>">
												<span class="form-text small">Bei lokal angeschlossenem Zähler ist dies z. B. /dev/ttyUSB3. Wird ein Modbus Ethernet Konverter genutzt, z.B. der aus dem Shop, hier die IP Adresse eintragen.</span>
											</div>
										</div>
										<div class="form-row mb-1">
											<label for="verbraucher<?php echo $deviceNum; ?>_id" class="col-md-4 col-form-label">Source</label>
											<div class="col">
												<input class="form-control" type="number" min="1" step="1" name="verbraucher<?php echo $deviceNum; ?>_id" id="verbraucher<?php echo $deviceNum; ?>_id" value="<?php echo trim(${"verbraucher" . $deviceNum . "_idold"}) ?>">
												<span class="form-text small">Modbus ID.</span>
											</div>
										</div>
									</div>
									<div id="v<?php echo $deviceNum; ?>tasmota">
										<div class="form-row mb-1">
											<label for="verbraucher<?php echo $deviceNum; ?>_ip" class="col-md-4 col-form-label">Source</label>
											<div class="col">
												<input class="form-control" type="text" name="verbraucher<?php echo $deviceNum; ?>_ip" id="verbraucher<?php echo $deviceNum; ?>_ip" value="<?php echo trim(${"verbraucher" . $deviceNum . "_ip"}) ?>">
												<span class="form-text small">IP Adresse des Geräts.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<script>
						$(function() {
							<?php for ( $deviceNum = 1; $deviceNum < 4; $deviceNum++ ){ ?>
								if($('#verbraucher<?php echo $deviceNum; ?>_aktivOff').prop("checked")) {
									$('#verbraucher<?php echo $deviceNum; ?>andiv').hide();
								} else {
									$('#verbraucher<?php echo $deviceNum; ?>andiv').show();
								}

								$('input[type=radio][name=verbraucher<?php echo $deviceNum; ?>_aktiv]').change(function(){
									if(this.value == '0') {
										$('#verbraucher<?php echo $deviceNum; ?>andiv').hide();
									} else {
										$('#verbraucher<?php echo $deviceNum; ?>andiv').show();
									}
								});

								function display_verbraucher<?php echo $deviceNum; ?> () {
									$('#v<?php echo $deviceNum; ?>http').hide();
									$('#v<?php echo $deviceNum; ?>modbus').hide();
									$('#v<?php echo $deviceNum; ?>tasmota').hide();
									if($('#verbraucher<?php echo $deviceNum; ?>_typ').val() == 'http') {
										$('#v<?php echo $deviceNum; ?>http').show();
									}
									if($('#verbraucher<?php echo $deviceNum; ?>_typ').val() == 'mpm3pm') {
										$('#v<?php echo $deviceNum; ?>modbus').show();
									}
									if($('#verbraucher<?php echo $deviceNum; ?>_typ').val() == 'sdm630') {
										$('#v<?php echo $deviceNum; ?>modbus').show();
									}
									if($('#verbraucher<?php echo $deviceNum; ?>_typ').val() == 'sdm120') {
										$('#v<?php echo $deviceNum; ?>modbus').show();
									}
									if($('#verbraucher<?php echo $deviceNum; ?>_typ').val() == 'abb-b23') {
										$('#v<?php echo $deviceNum; ?>modbus').show();
									}
									if($('#verbraucher<?php echo $deviceNum; ?>_typ').val() == 'tasmota') {
										$('#v<?php echo $deviceNum; ?>tasmota').show();
									}
									if($('#verbraucher<?php echo $deviceNum; ?>_typ').val() == 'shelly') {
										$('#v<?php echo $deviceNum; ?>tasmota').show();
									}

								}

								display_verbraucher<?php echo $deviceNum; ?>();
								$('#verbraucher<?php echo $deviceNum; ?>_typ').change(function(){
									display_verbraucher<?php echo $deviceNum; ?>();
								});
							<?php } ?>
						});
					</script>
				</div>

				<div class="form-row text-center">
					<div class="col">
						<button type="submit" class="btn btn-success">Speichern</button>
					</div>
				</div>
			</form>

			<div class="row justify-content-center">
				<div class="col text-center">
					Open Source made with love!<br>
					Jede Spende hilft die Weiterentwicklung von openWB voranzutreiben<br>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="2K8C4Y2JTGH7U">
						<input type="image" src="./img/btn_donate_SM.gif" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
						<img alt="" src="./img/pixel.gif" width="1" height="1">
					</form>
				</div>
			</div>
		</div>  <!-- container -->

		<footer class="footer bg-dark text-light font-small">
			<div class="container text-center">
				<small>Sie befinden sich hier: Einstellungen/Smart Home</small>
			</div>
		</footer>

		<script>

			$.get(
				{ url: "settings/navbar.html", cache: false },
				function(data){
					$("#nav").replaceWith(data);
					// disable navbar entry for current page
					$('#navSmartHome').addClass('disabled');
				}
			);

		</script>

	</body>
</html>
