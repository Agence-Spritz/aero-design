<?php	// Requête pour récupérer le contenu de la page concernée
		list($titrep, $date, $rub, $textep, $texte2p, $texte3p, $bouton_paypal) = mysqli_fetch_array(mysqli_query($link, "SELECT titre, dbu, rub, texte, texte2, texte3, bouton_paypal FROM ".$table_prefix."_pages WHERE page='actu' AND ID='$id' "));		
?>
	
	<section class="post-fluid detail-blog">
		<div class="container">
			
			<div class="row page-contenu">
				<div class="col-md-12 ">
					<div class="qr-content post-item-paragraph">
		
						<article>
							<h2><?php echo $titrep; ?></h2>
		
							<div class="col-md-4">
							<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'.jpg')) { ?>
								<a href="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'.jpg'; ?>" data-fluidbox-qr><img style="margin-top: 25px;" class="img-responsive" src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$id.'.jpg'; ?>" alt="<?php echo $titrep; ?>" title="<?php echo $titrep; ?>" /></a>
							<?php } else { ?>
								<a href="assets/img/banner-85-1.jpg" data-fluidbox-qr><img style="margin-top: 25px;" class="img-responsive" src="assets/img/banner-85.jpg" alt="" /></a>
							<?php } ?>
							</div>
							
							<div class="col-md-8 ">
								<p><?php echo $textep; ?></p>
								<div class="bouton-paypal">
									<?php echo $bouton_paypal; ?>
								</div>
							</div>
							<div class="clearfix"></div>
						
							<?php if($texte3p) { ?>
								<div  class="col-md-12 texte-complementaire-page-3">
									<p><?php echo $texte3p; ?></p>
								</div>
							<?php }  ?>
															
							<div style="margin-top: 45px; margin-bottom: 45px;" class="col-md-12 zone-tags-page-details">
								<div class="pull-left">
									<?php if($texte2p) {
											echo "<span style='color: #000'>Tags :</span> "; 
											$tab_tags = str_replace(", ","|",$texte2p);
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
								<div class="pull-right">
									<span style='color: #000;'>Rubrique :</span> <a href="rubrique-aero-design--206--page-blog?rub=<?php echo $rub; ?>"><?php echo $rub; ?></a>
								</div>


							</div>
							
							
		
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="post-fluid">
			<div class="container">

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
			