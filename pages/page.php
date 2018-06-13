<!-- PAGE CONTENU
================================================== -->
<?php	// CONTENU
	list($titrep, $id_page_parente, $textep, $texte2p, $texte3p, $modele_de_page) = mysqli_fetch_array(mysqli_query($link, "SELECT titre,id_page_parente,texte,texte2,texte3,modele_de_page FROM ".$table_prefix."_pages WHERE page='page' AND ID='$id' "));
		
		if($id_page_parente) {
		// On va chercher la page parente
	        $req_parente = mysqli_query($link,"SELECT ID, titre FROM ".$table_prefix."_pages WHERE page='page' and ID='".$id_page_parente."'");
			$data_parente = mysqli_fetch_assoc($req_parente);
			
			$page_parente = $data_parente['titre'];
		} ?>
		
		
		<div class="container">

			<div class="head-author" <?php if($modele_de_page==3) {echo "style='padding-bottom: 5px'";} ?>>
				<h1 class="author-h1"><?php echo $titrep; ?></h1>
				<p class="lead about-lead"><?php echo $texte2p; ?></p>
			</div>

		</div>
		
		<?php if($modele_de_page==1) { ?>
		
			<div class="post-fluid">
				<div class="container-fluid">
	
					<article class="row laread-authors">
						<div class="author-item">
							
							<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'.jpg')) { ?>
								<div class="author-picture">
									<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'.jpg'; ?>" alt="<?php echo $titrep; ?>" title="<?php echo $titrep; ?>" />
								</div>
							<?php } else { ?>
								<div class="author-picture">
									<img src="assets/img/img-49.png" alt="" />
								</div>
							<?php } ?>
							<div class="author-subdetail">
								<h2><a href="#">Aéro Design</a></h2>
								<p class="info-small">Concept store & Galery   <span><i class="fa fa-map-marker"></i> <?php echo $ville; ?>, <?php echo $pays; ?></span></p>
								<div class="author-connection">
									<a href="<?php echo $url_facebook; ?>" target="_blank"><i class='fa fa-facebook'></i></a>
									<a href="<?php echo $url_linkedin; ?>" target="_blank"><i class='fa fa-linkedin'></i></a>
									<a href="<?php echo $url_instagram; ?>" target="_blank"><i class='fa fa-instagram'></i></a>
								</div>
								<p class="author-bio"><?php echo $textep; ?></p>
								
							</div>
						</div>
					</article>
					
					<?php if($texte3p) {?>
					<div class="row texte-complementaire-page">
						<h5>Pour en savoir plus...</h5>
						<p><?php echo $texte3p; ?></p>
						
					</div>
					<?php } ?>
				</div>
			</div>
	
			<section class="post-fluid">
				<div class="container-fluid">
					
					<div class="row author-article-list">
						<div class="article-list-box">
							<div class="article-type clearfix" role="tablist">
								<ul>
									<li role="presentation" class="active">
										<a href="#lastest" id="lastest-tab" role="tab" data-toggle="tab" aria-controls="lastest" aria-expanded="true">Galerie photos</a>
									</li>
								</ul>
							</div>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="lastest" aria-labelledBy="lastest-tab">
									<div class="row masonry masonry-gallery isotopeContainer">
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-1.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-1.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-1.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-2.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-2.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-2.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-3.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-3.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-3.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-4.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-4.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-4.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-5.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-5.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-5.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-6.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-6.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-6.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-7.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-7.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-7.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-8.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-8.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-8.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-9.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-9.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-9.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-10.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-10.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-10.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
							
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>

		<?php } else if($modele_de_page==2) { ?>
		
			<div class="post-fluid">
				<div class="container-fluid">
					<div class="container">
						<div class="row laread-about">
	
							<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'.jpg')) { ?>
								<div class="about-picture">
									<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'.jpg'; ?>" alt="<?php echo $titrep; ?>" title="<?php echo $titrep; ?>" />
								</div>
							<?php } else { ?>
								<div class="about-picture">
									<img src="assets/img/img-47.png" alt="" />
								</div>
							<?php } ?>
	
							<p class="basic-info">Concept store & Galery   <span><i class="fa fa-map-marker"></i> <?php echo $ville; ?>, <?php echo $pays; ?></span></p>
	
							<p><?php echo $textep; ?></p>
	
							<div class="about-info">
								<span class="info-title">Suivez-nous !</span>
								<div class="about-item">
									<span>
										<a href="<?php echo $url_facebook; ?>" target="_blank"><i class='fa fa-facebook'></i></a>
								<a href="<?php echo $url_linkedin; ?>" target="_blank"><i class='fa fa-linkedin'></i></a>
								<a href="<?php echo $url_instagram; ?>" target="_blank"><i class='fa fa-instagram'></i></a>
									</span>
								</div>
							</div>
							
							<?php if($texte3p) {?>
								<div class="row texte-complementaire-page-2">
									<h5>Pour en savoir plus...</h5>
									<p><?php echo $texte3p; ?></p>
									
								</div>
							<?php } ?>
	
						</div>
					</div>
				</div>
			</div>
			
			<section class="post-fluid">
				<div class="container-fluid">
					
					<div class="row author-article-list">
						<div class="article-list-box">
							<div class="article-type clearfix" role="tablist">
								<ul>
									<li role="presentation" class="active">
										<a href="#lastest" id="lastest-tab" role="tab" data-toggle="tab" aria-controls="lastest" aria-expanded="true">Galerie photos</a>
									</li>
								</ul>
							</div>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="lastest" aria-labelledBy="lastest-tab">
									<div class="row masonry masonry-gallery isotopeContainer">
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-1.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-1.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-1.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-2.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-2.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-2.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-3.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-3.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-3.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-4.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-4.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-4.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-5.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-5.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-5.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-6.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-6.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-6.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-7.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-7.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-7.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-8.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-8.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-8.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-9.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-9.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-9.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
										
										<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-10.jpg')) { ?>
											
											<div class="masonry-row col-md-4 col-sm-6 mg-item">
												<span class="gallery-hover">
													<a data-gallery-item="list-1" href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-10.jpg'; ?>" class="mg-title" data-fluidbox-qr><i class="fa fa-plus-square fa-2x"></i></a>
												</span>
												<a href="#">
													<div class="mg-banner">
														<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'-10.jpg'; ?>" alt="<?php echo $titrep; ?>">
													</div>
												</a>
											</div>
											
										<?php } ?>
							
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php } else { ?>  
		   
			<div class="post-fluid">
				<div class="container-fluid">
					<div class="container">
						<div class="row laread-about">
	
							<p><?php echo $textep; ?></p>
	
							<?php if($texte3p) {?>
								<p><?php echo $texte3p; ?></p>
							<?php } ?>
	
						</div>
					</div>
				</div>
			</div>
		   
		<?php } ?>
