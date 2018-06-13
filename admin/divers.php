<?
include "include/menu-new.php";

// VARIABLES
$titrepage= "Informations générales sur la société";
$tableencours = $table_prefix."_divers";
//$page = "actu"; 										// Variable pour definir la sous cat page
$modif=1;

// PHOTOS
$photosize = "990x250";									// Dimensions idéales d'information pour la photo
//$chemin = "../img/pages/";  							// "/" à la fin
$wmax = 100; $hmax = 80;  $tdvisuphoto = $wmax*2+20;  	// Dimension pour affichage des vigettes
$redim_w=990; $redim_h=250;
$masquervignette=1;
$nbr=0; // Nombre de photos

// CHAMPS
$chps=array('mail1', 'google_stats', 'nom_titre_meta', 'url_site', 'url_facebook', 'url_linkedin', 'url_twitter', 'url_instagram', 'adresse', 'cp', 'ville', 'pays', 'tel');
$chpsNb = count($chps);
?>
 		<section class="padding-top-30 padding-bottom-30 section-bloc bloc-titre">
		    <div class="row">
		        <div class="col-sm-6 col-md-6">
			        <h2><?=$titrepage?></h2>
		        </div>
			    <div class="col-sm-6 col-md-6">
		        </div>
				<div class="clearfix"></div>
		    </div>
	    </section>
<?php    
// EFFACEMENT
if ( $del ) {	
	mysqli_query($link, "DELETE FROM $tableencours WHERE ID=$del");
	@unlink($chemin.$del.".jpg");
	for ($a=1; $a<=$nbr; $a++){@unlink($chemin.$del."-".$a.".jpg");}
}
elseif ($delphoto) {@unlink($chemin.$delphoto);}
unset ($del,$delphoto);
	
// TRAITEMENT DES TEXTES
if (!$dbu) {$dbu=date(Y-m-d);} else {$dbu=date_tiret($dbu);}
for ($a=0; $a<$chpsNb; $a++){ 
	$$chps[$a]=preg_replace('/"/',"'",trim($$chps[$a]));							// " => '
	if ($a==5 || $a==6 || $a==10) {$$chps[$a]=preg_replace('/,/',".",$$chps[$a]);}		// PRIX , => . 
}

// ADDQUERY ET LISTE
for ($a=0; $a<$chpsNb; $a++){	$addquery1.=$chps[$a]."=\"".$$chps[$a]."\","; $liste1.=$chps[$a].",";}
$addquery1 = substr($addquery1,0,strlen($addquery1)-1);
$liste1 = substr($liste1,0,strlen($liste1)-1); //echo $liste1;
	
// MODIF / AJOUT
if ( $Submit ) 
{	if ( $modif ) 
	{	mysqli_query($link, "UPDATE $tableencours SET $addquery1 WHERE ID='$modif'");
		if ( $vignette ) { $updatevign="$modif.jpg"; }
		for ($a=1; $a<=$nbr; $a++){		if ( $_FILES['photo'.$a]['name'] ) { $updatefile[$a]=$modif."-".$a.".jpg";} else {$updatefile[$a]="";} }
		$msg.= "<i class='fa fa-check-circle fa-2x'></i> Mise &agrave; jour r&eacute;ussie";
    } 
	unset($ID, $mail1, $google_stats, $nom_titre_meta, $url_site, $url_facebook, $url_linkedin, $url_twitter, $url_instagram, $adresse, $cp, $ville, $pays, $tel);
	
} // FIN DU SUBMIT

// RECUPERATION DES VALEURS ENREGISTREES
if ( $modif ) 
{	$result = mysqli_fetch_array( mysqli_query($link, " SELECT ID,$liste1 FROM $tableencours WHERE ID=$modif ") );
	list($ID, $mail1, $google_stats, $nom_titre_meta, $url_site, $url_facebook, $url_linkedin, $url_twitter, $url_instagram, $adresse, $cp, $ville, $pays, $tel) = $result;
	
}  
?>
		<!-- Messages d'alertes ou de confirmation -->
		<div class="row">
	        <div class="col-sm-12 col-md-12">
				<?php if ($msg) {?>
					<div class="alert alert-success" role="alert"><?=$msg?></div>
				<?php } ?>
				<?php if ($msgerror) {?>
				<div class="alert alert-danger" role="alert"><?=$msgerror?></div>
				<?php } ?>
	        </div>
		</div>
		
		<section class="padding-top-30 padding-bottom-30 section-bloc">
		    <div class="row">

				<form method="post" action="" enctype="multipart/form-data">
				    <input type="hidden" name="modif" value="<?=$modif?>">
				    <input type="hidden" name="word" value="<?=$word?>">
    
						<div class="col-sm-12 col-md-6">
							 
					        
			        		<h4><i class='fa fa-envelope '></i> Email de contact principal</h4>
					        <div class="form-group">
						        <input name="<?=$chps[0]?>" value="<?=$$chps[0]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Méta principale du site</h4>
					        <div class="form-group">
						        <input name="<?=$chps[2]?>" value="<?=$$chps[2]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Url du site</h4>
					        <div class="form-group">
						        <input name="<?=$chps[3]?>" value="<?=$$chps[3]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Adresse de la société</h4>
					        <div class="form-group">
						        <input name="<?=$chps[8]?>" value="<?=$$chps[8]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Code postal de la société</h4>
					        <div class="form-group">
						        <input name="<?=$chps[9]?>" value="<?=$$chps[9]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Ville de la société</h4>
					        <div class="form-group">
						        <input name="<?=$chps[10]?>" value="<?=$$chps[10]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Pays de la société</h4>
					        <div class="form-group">
						        <input name="<?=$chps[11]?>" value="<?=$$chps[11]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Téléphone principal</h4>
					        <div class="form-group">
						        <input name="<?=$chps[12]?>" value="<?=$$chps[12]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Tracker Google Analytics</h4>
					        <div class="form-group">
						        <textarea name="<?=$chps[1]?>"  ><?=$$chps[1]?></textarea>
					        </div>
						</div>
						<div class="col-sm-12 col-md-6">
					        
					        
					        
					        <h4><i class='fa fa-envelope '></i> Url Facebook</h4>
					        <div class="form-group">
						        <input name="<?=$chps[4]?>" value="<?=$$chps[4]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Url Linkedin</h4>
					        <div class="form-group">
						        <input name="<?=$chps[5]?>" value="<?=$$chps[5]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Url twitter</h4>
					        <div class="form-group">
						        <input name="<?=$chps[6]?>" value="<?=$$chps[6]?>" class="form-control" type="text" required  />
					        </div>
					        
					        <h4><i class='fa fa-envelope '></i> Url Instagram</h4>
					        <div class="form-group">
						        <input name="<?=$chps[7]?>" value="<?=$$chps[7]?>" class="form-control" type="text" required  />
					        </div>
					        
					        
					               
    					</div>
    					
    					
						<div class="clearfix"></div>
						<button type="submit" name="Submit" value="Enregistrer" class="btn btn-default bouton-submit">Enregistrer</button>
						
						</div>

				</form>
		    </div>
		</section>

	</div>
</body>
</html>