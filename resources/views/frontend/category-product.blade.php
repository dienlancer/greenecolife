<form method="post" class="frm margin-top-15" name="frm">
	<input type="hidden" name="filter_page" value="1">         
	{{ csrf_field() }}	
	<?php 
	switch ($alias) {
		case 'go-nhap-khau':
			?>
			<h2 class="tieu-de">
				<?php echo $title; ?>		
			</h2>
			<?php		
			break;		
		default:
			?>
			<h2 class="tieu-de-san-pham">
            <span class="bai-viet-tieu-de"><a href="<?php echo route('frontend.index.index',[''.$alias.'']); ?>">Gỗ nhập khẩu</a></span><span class="bai-viet-tieu-de margin-left-10"><?php echo $title; ?></span>
        </h2>
			<?php
			break;
	}
	?>
	<div class="row">
		<?php 	
		if(count($items) > 0){
			$k=1;			
			foreach ($items as $key => $value) {
				$id=$value['id'];
				$alias=$value['alias'];
				$fullname=$value['fullname'];
				$permalink=route('frontend.index.index',[$alias]) ;
				$featuredImg =get_featured_image($value['image']) ;						
				?>
				<div class="col-sm-3 no-padding-left">
					<div class="margin-top-15">
						<div>
							<center><figure><a href="<?php echo $permalink; ?>"><img src="<?php echo $featuredImg; ?>" /></a></figure></center>
						</div>
						<div class="box-product-title margin-top-5"><a href="<?php echo $permalink; ?>"><b><?php echo $fullname; ?></b></a></div>						
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