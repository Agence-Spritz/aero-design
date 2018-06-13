	<?php	// CONTENU
	list($titrep, $id_page_parente, $textep, $texte2p, $texte3p, $modele_de_page) = mysqli_fetch_array(mysqli_query($link, "SELECT titre,id_page_parente,texte,texte2,texte3,modele_de_page FROM ".$table_prefix."_pages WHERE page='page' AND ID='$id' "));
	?>
	
		<?php 
		// En-tête lorsque l'on a cliqué sur un tag
		if(isset($_GET['tag'])) { ?>
		<div class="container">
			<div class="head-text">
				<h1>#<?php echo $_GET['tag']; ?></h1>
				<p class="lead-text">Pour tout savoir sur Aéro Design et #<?php echo $_GET['tag']; ?></p>
			</div>
		</div>
		<?php } 
		// En-tête lorsque l'on est sur une rubrique
		else if(isset($_GET['rub'])) { ?>
		<div class="container">
			<div class="head-text">
				<h1><?php echo $_GET['rub']; ?></h1>
				<p class="lead-text">La rubrique <?php echo $_GET['rub']; ?> et Aéro Design</p>
			</div>
		</div>
		<?php } else if(isset($_GET['s'])) { ?>
		<div class="container">
			<div class="head-text">
				<h1><?php echo $_GET['s']; ?></h1>
				<p class="lead-text">Vous avez recherché le terme "<?php echo $_GET['s']; ?>"</p>
			</div>
		</div>
		<?php } else { 
		// En-tête par défaut
		?>
		<div class="container">
			<div class="head-text">
				<h1><?php echo $titrep; ?></h1>
				<?php if($texte2p) { ?><p class="lead-text"><?php echo $texte2p; ?></p><?php } ?>
			</div>
		</div>
		<?php } ?>
		
		<?php 
		
		//Ici on détermine les filtres d'affichag edu blog
				
					// Condition où l'on a un tag
					if(isset($_GET['tag'])) { $add_query = " AND texte2 LIKE '%".$_GET['tag']."%'  "; $modele_de_page = 2; }
					// Condition où l'on a une rubrique
					else if(isset($_GET['rub'])) { $add_query = " AND rub = '".$_GET['rub']."'  "; $modele_de_page = 2; }
					
					// Condition où l'on a une recherche
					else if(isset($_GET['s'])) { $recherche_terme = $_GET['s']; $add_query = "AND (titre LIKE '%$recherche_terme%' OR rub LIKE '%$recherche_terme%' OR texte LIKE '%$recherche_terme%' OR texte2 LIKE '%$recherche_terme%' OR texte3 LIKE '%$recherche_terme%' )"; $modele_de_page = 2; }
					
					// Les artistes
					else if($id=='208') { $add_query = " AND rub = 'Artiste'  "; $modele_de_page = 2;}
					
					// La boutique
					else if($id=='209') { $add_query = " AND rub = 'Store' OR rub = 'Article'  "; $modele_de_page = 2; }
					
					// Cas par défaut, ce sont les news
					else { $add_query = " AND rub = 'News'  "; }
					
		// ------------------------------------------- //
		// requête standard
		$req = mysqli_query($link,"SELECT ID, titre, dbu, rub, texte, texte2 FROM ".$table_prefix."_pages WHERE page='actu' AND masquer <> '1' ".$add_query." ORDER BY dbu DESC"); 
		
		?>

		<div class="post-fluid">
		
		<?php if($modele_de_page==1) {
				
			  	while ($data = mysqli_fetch_array($req)) { 
				  	
				  	$date = new DateTimeFrench($data['dbu'], $DTZ);  	
			?>
				<div class="container-fluid post-default">
					<div class="container">
						<div class="row post-items">
							<div class="post-item-banner">
								<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$data['ID'].'.jpg')) { ?>
									<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$data['ID'].'.jpg'; ?>" alt="<?php echo $data['titre']; ?>" title="<?php echo $data['titre']; ?>" />
								<?php } else { ?>
									<img src="assets/img/img-01.png" alt="" />
								<?php } ?>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="post-item post-item-centered">
									<div class="post-item-paragraph">
										<span class="date"><?php echo $date->format('d')." ".$date->format('M').", ".$date->format('Y'); ?></span>
										<h2><a href="<?php echo slugify($data['titre']); ?>-mobilier-aviation-objet-art--<?php echo $data['ID'] ?>--detail-actu"><?php echo $data['titre']; ?></a></h2>
										<p><?php echo CleanCut($data['texte'],500); ?> <a href="<?php echo slugify($data['titre']); ?>-mobilier-aviation-objet-art--<?php echo $data['ID'] ?>--detail-actu" class="more">en savoir plus [...]</a></p>
									</div>
									<div class="post-item-info clearfix">
										<div class="pull-left">
											<?php if($data['texte2']) {
												echo "<span style='color: #000'>Tags :</span> "; 
												$tab_tags = str_replace(", ","|",$data['texte2']);
												$tab_tags = str_replace(",","|",$tab_tags);
												$tab_tags = explode("|",$tab_tags);
												
												$numItems = count($tab_tags);
												$i = 0;
												foreach ($tab_tags as $tag) {
												    echo "<a href='tag-aero-design--206--page-blog?tag=".$tag."'>#".$tag."</a>";
												    if(++$i != $numItems) { echo " • "; }
												}
											}
										?>
										</div>
										<div class="post-item-social">
										<span style='color: #000;'>Rubrique :</span> <a href="rubrique-aero-design--206--page-blog?rub=<?php echo $data['rub']; ?>"><?php echo $data['rub']; ?></a>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<?php } ?>

		
		<?php } else { ?>
		
			<div class="container">
				<div class="row masonry masonry-gallery isotopeContainer">

					<?php while ($data = mysqli_fetch_array($req)) { 
				  	
				  			$date = new DateTimeFrench($data['dbu'], $DTZ); 
				  	?>
					
					<div class="masonry-row col-md-4 col-sm-6 mg-item">
						<div>
							<span class="mg-banner">
								<a href="<?php echo slugify($data['titre']); ?>-mobilier-aviation-objet-art--<?php echo $data['ID'] ?>--detail-actu" >
									<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$data['ID'].'.jpg')) { ?>
									<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$data['ID'].'.jpg'; ?>" alt="<?php echo $data['titre']; ?>" title="<?php echo $data['titre']; ?>" />
									<?php } else { ?>
										<img src="assets/img/img-52.png" alt="" />
									<?php } ?>
								</a>
							</span>
							<div class="mg-content">
								<h6><a href="<?php echo slugify($data['titre']); ?>-mobilier-aviation-objet-art--<?php echo $data['ID'] ?>--detail-actu"><?php echo $data['titre']; ?></a></h6>
							</div>
						</div>
					</div>
					
					<?php } ?>

					

				</div>
			</div>
		</div>

		
		<?php } ?>