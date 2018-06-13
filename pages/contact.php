<?php	// Requête pour récupérer le contenu de la page concernée
		list($titrep, $textep, $texte2p) = mysqli_fetch_array(mysqli_query($link, "SELECT titre, texte, texte2 FROM ".$table_prefix."_pages WHERE page='page' AND ID='$id' "));
?>

<?php //	DEFINIT LE MAIL ENREGISTRE
			
			
					
			// NETTOYAGE
			$nom= clean_form($_POST['nom']);				
			$prenom= clean_form($_POST['prenom']);
			$email= clean_form(trim($_POST['email']));			
			$tel= clean_form($_POST['tel']);
			$objet = clean_form($_POST['objet']);					
			if ($_POST['message']){$message= clean_form($_POST['message']);}
															
			if ($_GET['message']){$message= clean_form($_GET['message']);}
			
				$type = "Contact";
				
				$subject	= "Demande de contact de : " . (($nom)?($nom):("-")) ." - ". (($email)?($email):("-")) . "\n" ;
			
				
			if ($ID) {$ref=$ID;}
			$afch = '1';
			
	  
		if ($_POST['submit'] ) {
			
			
			
			  if ( $nom && $tel && check_mail($email) && $message )
			  {	/* Envoyer le formulaire */
				$to		= $mail1 ;
				$subject	= $subject ;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	            $headers .= 'From: ' . $email . "\r\n";
	            $headers .= 'Reply-to: '.$email . "\r\n";
            
				$body = "<html><body><div style=\"text-align: left;\">";
				$body .= "<h2>".$objet."</h2>" ;
				$body .= "<strong>Nom :</strong> " . (($nom)?($nom):("-")) . "<br />" ;
				$body .= "<strong>Adresse e-mail :</strong> " . (($email)?($email):("-")) . "<br />" ;
				$body .= "<strong>Tel :</strong> " . (($tel)?($tel):("-")) . "<br />" ;
				
				$body .= "<strong>Message</strong> : <div style=\"text-align: left;\">" . (($message)?($message):("-")) . "<br /><br /></div>" ;
				$body .= "</div></body></html>";
				$res = mail($to,$subject,$body,$headers) ; //print ("$to,$subject,$body,$headeradd");
			
				
				// Traitement de la réponse
				if ( $res )
				{
					  $confirm	= "<div class='alert alert-success padding-alert' role='alert'>Votre message a correctement été envoyé.</div>";
					  $afch = '0';
				  
					// ENREGISTREMENT DES FORMULAIRES DANS UNE TABLE
					$dbu=date('Y-m-d H:i:s');
					$IP_exp=$_SERVER["REMOTE_ADDR"];
					
					$resultat_ins = mysqli_query ($link, "INSERT INTO ".$table_prefix."_contact ( `ID` , `type` ,`nom` ,`email` , `tel` , `dbu` , `message` )
				VALUES ('' , '$type', '$nom', '$email', '$tel',  '$dbu', '$body') ");
					
				} else {
					$confirm	= "<div class='alert alert-danger padding-alert' role='alert'>Une erreur est survenue lors de l'envoi de votre message. Merci de renouveler l'opération.</div>";
					$afch = '1';			
				}
				
			  } else {
				  $afch = '1' ;
				  $confirm	= "<div class='alert alert-danger padding-alert' role='alert'>Merci de renseigner tous les champs obligatoires.</div>";		
				  
			  }
			  
		}
			
	?>
	
	

		<section class="post-fluid">
			<div class="container-fluid">
				<div class="row laread-contact">
					<div class="contact-box">
						<span class="icon-contact"><i class="fa fa-paper-plane"></i></span>
					</div>
					<div class="contact-info">
						<h2>Contact</h2>
						<p class="text-contact"><i class="fa fa-map-marker"></i>  <?php echo $adresse; ?>, <?php echo $cp."".$ville; ?>, <?php echo $pays; ?></p>
						<a href="mailto:<?php echo $mail1; ?>" class="text-contact"><i class="fa fa-envelope"></i>  <?php echo $mail1; ?></a>
						<div class="contact-form">
							
							<?php 	if ($confirm) {
								       echo $confirm;
								    }
							?>
						
							<form method="POST" action="">
								<input class="contact-input" placeholder="Nom" type="text" name="nom" value="<?php print (stripslashes($nom));?>" />
								<input class="contact-input" placeholder="Prénom" type="text" name="prenom" value="<?php print (stripslashes($prenom));?>" />
								<input class="contact-input" placeholder="Téléphone" type="text" name="tel" value="<?php print (stripslashes($tel));?>" />
								
								<input class="contact-input" placeholder="Email" type="text" name="email" value="<?php print (stripslashes($email));?>" />
								<input class="contact-input input-objet" placeholder="Objet" type="text" name="objet" value="<?php print (stripslashes($objet));?>" />
								
								<textarea class="contact-textarea" placeholder="Message" name="message"><?php print (stripslashes($message));?></textarea>
								<div class="clearfix">
									<div class="progress-button">
										<p>
											<button class="btn btn-grey btn-outline" name="submit" type="submit" value="submit"><span>Envoyer</span></button>
											<svg class="progress-circle" width="70" height="70">
												<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
											</svg>
											<svg class="checkmark" width="70" height="70">
												<path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/>
											</svg>
											<svg class="cross" width="70" height="70">
												<path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/>
											</svg>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="embed-responsive embed-responsive-16by9 contact-map">
						<div id="map"></div>
					</div>
					
				</div>
			</div>
		</section>
		
		
							                