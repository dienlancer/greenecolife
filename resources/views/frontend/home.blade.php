@extends("frontend.master")
@section("content")
<div class="container box-wrapper">
	<?php 
	$data=getModuleItem("san-pham-moi");
	if(count($data) > 0){
		$items=$data["items"];
		if(count($items) > 0){
			?>
			<div class="col-lg-12">
				<script type="text/javascript" language="javascript">
					$(document).ready(function(){
						$(".san-pham-moi").owlCarousel({
							autoplay:false,                    
							loop:true,
							margin:25,                        
							nav:true,            
							mouseDrag: false,
							touchDrag: false,                                
							responsiveClass:true,
							responsive:{
								0:{
									items:1
								},
								600:{
									items:1
								},
								1000:{
									items:5
								}
							}
						});
						var chevron_left='<i class="fa fa-chevron-left"></i>';
						var chevron_right='<i class="fa fa-chevron-right"></i>';
						$("div.san-pham-moi div.owl-prev").html(chevron_left);
						$("div.san-pham-moi div.owl-next").html(chevron_right);
					});                
				</script>
				<div class="owl-carousel san-pham-moi owl-theme">
					<?php 
					foreach($items as $key => $value){
						$featuredImg=get_featured_image($value['image']) ;
						$permalink=route('frontend.index.index',[$value['alias']]);
						$title=$value['fullname'];
						?>
						<div>
							<div><center><figure><a href="<?php echo $permalink; ?>"><img src="<?php echo $featuredImg; ?>"></a></figure></center></div>
							<div class="margin-top-5"><a href="<?php echo $permalink; ?>"><b><?php echo $title; ?></b></a></div>
						</div>
						<?php
					}
					?>
				</div>
			</div>	
			<div class="clr"></div>				
			<?php
		}  
	}
	?>
	<div>
		<div class="col-lg-8">
			<?php 
			$data_slideshow=getBanner("slideshow");
			if(count($data_slideshow) > 0){
				$items=$data_slideshow["items"];
				if(count($items) > 0){
					?>
					<div class="slideshow margin-top-20">
						<script type="text/javascript" language="javascript">        
							$(document).ready(function(){
								$(".slick-slideshow").slick({
									dots: true,
									autoplay:true,
									arrows:false,
									adaptiveHeight:true,
									slidesToShow: 1,
									slidesToScroll: 1,        
								});  
							});     
						</script>
						<div class="slick-slideshow">    
							<?php 
							foreach ($items as $key => $value) {
								$alt=$value["alt"];
								$item=asset('upload/'.$value["image"]);
								?>
								<div><img src="<?php echo $item; ?>" alt="<?php echo $alt; ?>" /></div>
								<?php 
							}
							?>              
						</div>
					</div>
					<?php
				}  
			}
			?>
		</div>
		<div class="col-lg-4">
			<?php 
			$module=getModuleItem("tu-van-giai-phap-widget");
			if(count($module) > 0){
				$fullname=$module["fullname"];
				$items=$module["items"];	
				?>
				<div class="ducati margin-top-20">
					<div>
						<h2><?php echo $fullname ?></h2>
						<div class="box-article-list">
							<ul class="categorymenu">
								<?php 
								foreach ($items as $key => $value) {
									$title=$value['fullname'];
									$permalink=route('frontend.index.index',[$value['alias']]);
									?>
									<li><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></li>
									<?php	
								}
								?>								
							</ul>
						</div>
					</div>					
				</div>
				<?php	
			}
			?>			
		</div>
		<div class="clr"></div>				
	</div>
	<div>
		<div class="col-lg-4">
			<?php 
			$module=getPage("introduce");
			if(count($module) > 0){
				$fullname=substr($module["fullname"],0,50);
				$featuredImg=asset('upload/'.$module['image']);
				$permalink=route('frontend.index.index',[$module['alias']]);				
				?>
				<div class="margin-top-15">					
					<h2 class="f-title-info"><span>Giới thiệu</span></h2>
					<div class="margin-top-10">
						<div><figure><center><a href="<?php echo $permalink; ?>"><img src="<?php echo $featuredImg; ?>" /></a></center></figure></div>
						<div class="margin-top-5 box-intro-title"><a href="<?php echo $permalink; ?>"><?php echo $fullname; ?></a></div>
					</div>								
				</div>
				<?php	
			}
			?>			
		</div>
		<div class="col-lg-4">			
			<?php 
			$module=getModuleItem("news-between");
			if(count($module) > 0){
				$fullname=$module["fullname"];
				$items=$module["items"];	
				?>
				<div class="margin-top-15">					
					<h2 class="f-title-info"><span><?php echo $fullname ?></span></h2>
					<script type="text/javascript" language="javascript">
						$(document).ready(function(){
							$(".featured-news").owlCarousel({
								autoplay:true,                    
								loop:true,
								margin:25,                        
								nav:true,            
								mouseDrag: false,
								touchDrag: false,                                
								responsiveClass:true,
								responsive:{
									0:{
										items:1
									},
									600:{
										items:1
									},
									1000:{
										items:1
									}
								}
							});
							var chevron_left='<i class="fa fa-chevron-left"></i>';
							var chevron_right='<i class="fa fa-chevron-right"></i>';
							$("div.featured-news div.owl-prev").html(chevron_left);
							$("div.featured-news div.owl-next").html(chevron_right);
						});                
					</script>
					<div class="owl-carousel featured-news owl-theme margin-top-10">
						
						<?php 
						foreach ($items as $key => $value){
							$featuredImg=asset('upload/'.$value['image']);
							$permalink=route('frontend.index.index',[$value['alias']]);
							$title=substr( $value['fullname'],0,50);
							?>
							<div>
								<div><figure><center><a href="<?php echo $permalink; ?>"><img src="<?php echo $featuredImg; ?>" /></a></center></figure></div>
								<div class="margin-top-5 box-intro-title"><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></div>
							</div>		
							<?php
						}
						?>

					</div>								
				</div>
				<?php	
			}
			?>						
		</div>
		<div class="col-lg-4">
			<?php 
			$module=getModuleItem("other-news");
			if(count($module) > 0){
				$fullname=$module["fullname"];
				$items=$module["items"];	
				?>
				<div class="margin-top-15">					
					<h2 class="f-title-info"><span><?php echo $fullname ?></span></h2>					
					<div class="margin-top-10">	
						<ul class="other-news-list">
							<?php 
							foreach ($items as $key => $value){
								$featuredImg=asset('upload/'.$value['image']);
								$permalink=route('frontend.index.index',[$value['alias']]);
								$title=$value['fullname'];
								?>
								<li><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></li>
								<?php
							}
							?>		
						</ul>																			
					</div>								
				</div>
				<?php	
			}
			?>				
		</div>
		<div class="clr"></div>
	</div>	
	<?php 
	$data=getBanner("doi-tac");
	if(count($data) > 0){
		$items=$data["items"];
		$fullname=$data['fullname'];
		if(count($items) > 0){
			?>
			<div class="col-lg-12 margin-top-45">
				<h2 class="f-title-info"><span><?php echo $fullname; ?></span></h2>
				<script type="text/javascript" language="javascript">
					$(document).ready(function(){
						$(".partner").owlCarousel({
							autoplay:false,                    
							loop:true,
							margin:25,                        
							nav:true,            
							mouseDrag: false,
							touchDrag: false,                                
							responsiveClass:true,
							responsive:{
								0:{
									items:1
								},
								600:{
									items:1
								},
								1000:{
									items:5
								}
							}
						});
						var chevron_left='<i class="fa fa-chevron-left"></i>';
						var chevron_right='<i class="fa fa-chevron-right"></i>';
						$("div.partner div.owl-prev").html(chevron_left);
						$("div.partner div.owl-next").html(chevron_right);
					});                
				</script>
				<div class="owl-carousel partner owl-theme">
					<?php 
					foreach($items as $key => $value){
						$featuredImg=asset('upload/'.$value['image']) ;
						$page_url=$value['page_url'];
						?>
						<div>
							<a href="<?php echo $page_url; ?>" target="_blank"><img src="<?php echo $featuredImg; ?>" /></a>
						</div>
						<?php
					}
					?>
				</div>
			</div> 
			<div class="clr"></div> 
			<?php
		}  
	}
	?>	
</div>  
@endsection()               