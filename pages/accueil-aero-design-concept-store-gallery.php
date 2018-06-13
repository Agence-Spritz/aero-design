	<div id="carousel-captions" class="carousel slide carousel-fade" data-ride="carousel" data-interval="99999999">
		<ol class="carousel-indicators hide">
			<li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-captions" data-slide-to="1"></li>
			<li data-target="#carousel-example-captions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			
			<?php $req = mysqli_query($link,"SELECT ID, titre, rub, texte, texte2, texte3 FROM ".$table_prefix."_pages WHERE page='diapo' AND masquer <> '1'  ORDER BY dbu DESC"); $n=0;
			  	while ($data = mysqli_fetch_array($req)) { 
				
			?>
			
			<div class="item <?php if($n==0) { echo "active"; } ?>">
				<div class="item-cover" style="background-image: url(images/slides/<?php echo $data['ID']; ?>.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;">
					<img class="image-cover" src="images/slides/<?php echo $data['ID']; ?>.jpg" alt="">
					<?php if($data['texte3']==1) { ?><div class="overlay"></div><?php } ?>
					
					<?php if(isset($data['texte'])) { ?>
						<div class="carousel-caption carousel-caption-1">
							
							<h3><a href="#"><?php echo $data['texte']; ?></a></h3>
							<p><?php echo $data['texte2']; ?></p>
						</div>
					<?php } ?>
					
				</div>

			</div>
			
			<?php $n++; } ?>

			
		</div>
		<a class="left carousel-control" href="#carousel-captions" role="button" data-slide="prev"><i class="fa fa-long-arrow-left"></i></a>
		<a class="right carousel-control" href="#carousel-captions" role="button" data-slide="next"><i class="fa fa-long-arrow-right"></i></a>
		<a href="#" class="caption-more">EN SAVOIR PLUS <i class="fa fa-angle-down fa-lg"></i></a>
	</div>

	<div class="post-fluid large-image-v1 article-intro">
		
		<?php $req = mysqli_query($link,"SELECT ID, titre, dbu, rub, texte, texte2 FROM ".$table_prefix."_pages WHERE page='actu' AND masquer <> '1'  ORDER BY dbu DESC"); 
		  	while ($data = mysqli_fetch_array($req)) { 
			  	
			  	//$date = date_fr($data['dbu']);
			  	$date = new DateTimeFrench($data['dbu'], $DTZ);  	
		?>
			
			
		<div class="container-fluid">
			<div class="container">
				<div class="row post-items">
					<div class="post-item-banner">
						<?php if (is_file('./images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$data['ID'].'.jpg')) { ?>
							<img src="<?php echo './images/pages-mobilier-aviation-objet-art-avion-objet-aviateur/'.$data['ID'].'.jpg'; ?>" alt="<?php echo $data['titre']; ?>" title="<?php echo $data['titre']; ?>" />
						<?php } else { ?>
							<img src="assets/img/img-01.png" alt="" />
						<?php } ?>
					</div>
					<div class="col-md-2">
						<div class="post-item-short">
							<span class="big-text"><?php echo $date->format('d'); ?></span>
							<span class="small-text"><?php echo $date->format('M')." ".$date->format('Y'); ?> </span>
						</div>
					</div>
					<div class="col-md-10">
						<div class="post-item">
							<div class="post-item-paragraph">
								<h2><a href="<?php echo slugify($data['titre']); ?>-mobilier-aviation-objet-art--<?php echo $data['ID'] ?>--detail-actu"><?php echo $data['titre']; ?></a></h2>
								<p class="ellipsis-fade-six"><?php echo $data['texte']; ?> <a href="<?php echo slugify($data['titre']); ?>-mobilier-aviation-objet-art--<?php echo $data['ID'] ?>--detail-actu" class="more"></a></p>
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

	</div>