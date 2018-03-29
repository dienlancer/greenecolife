<form method="post" class="frm margin-top-15" name="frm">
	<input type="hidden" name="filter_page" value="1">         
	{{ csrf_field() }}	
	<?php 	
	$breadcrumb='';	
	$seo=getSeo();
	$seo_title=$seo["title"];
	$seo_meta_keyword=$seo["meta_keyword"];
	$seo_meta_description=$seo["meta_description"];	
	if(count($category) > 0){
		$breadcrumb= getBreadCrumbCategoryProduct(@$category);		
		?>
		<h1 style="display: none;"><?php echo @$category['fullname']; ?></h1>
		<h2 style="display: none;"><?php echo @$category['meta_description']; ?></h2>
		<input type="hidden" name="category_id" value="<?php echo @$category['id']; ?>">
		<?php			
	}	
	else{
		$breadcrumb='<a href="'.url('/').'">Trang chủ</a><a href="javascript:void(0);">Tìm kiếm</a>';
		?>
		<h1 style="display: none;"><?php echo $seo_title; ?></h1>
		<h2 style="display: none;"><?php echo $seo_meta_description; ?></h2>
		<?php		
	}	
	?>	
	<div class="breadcrumb-title">
		<?php echo $breadcrumb; ?>
	</div>
	<div class="row">
		<?php 			
		if(count($items) > 0){
			$k=1;			
			foreach ($items as $key => $value) {
				$id=$value['id'];
				$alias=$value['alias'];
				$fullname=$value['fullname'];
				$permalink=route('frontend.index.index',[$alias]) ;
				$featuredImg =get_product_thumbnail($value['image']) ;						
				?>
				<div class="col-sm-3 no-padding-left">
					<div class="margin-top-15">
						<div>
							<center><figure><a href="<?php echo $permalink; ?>"><img src="<?php echo $featuredImg; ?>" /></a></figure></center>
						</div>
						<h3 class="box-product-title margin-top-5"><a href="<?php echo $permalink; ?>"><b><?php echo $fullname; ?></b></a></h3>						
					</div>
				</div>
				<?php			
				if($k%4==0 || $k==count($items)){
					echo '<div class="clr"></div>';
				}
			}
		}	
		?>
	</div>
	<div class="margin-top-15">
		<?php 
		if(count($items) > 0){
			echo $pagination->showPagination();
		}  
		?>
	</div>
</form>