<?php 
use App\ProductCategoryModel;
use App\CategoryProductModel;
use App\ProductModel;
use Illuminate\Support\Facades\DB;
$setting=getSettingSystem();
if(count($item) > 0){

    $id=$item["id"];
    $fullname = $item["fullname"];
    $intro=$item["intro"];
    $detail=$item['detail'];  
    $small_img=get_product_thumbnail($item['image']);
    $large_img=asset('upload/'.$item['image']) ;
    /* begin cập nhật count view */
    $count_view=(int)@$item['count_view'];
    $count_view++;
    $row                =   ProductModel::find((int)@$id); 
    $row->count_view=$count_view;
    $row->save();
    $count_view_text=number_format($count_view,0,",",".");
    /* end cập nhật count view */
    /* begin setting */
    $address=$setting['address']['field_value'];
    $email_to=$setting['email_to']['field_value'];
    $contacted_person=$setting['contacted_person']['field_value'];
    $telephone=$setting['telephone']['field_value'];
    $office=$setting['office']['field_value'];
    /* end setting */    
    /* begin category */
    $dataCategory=CategoryProductModel::find((int)@$item['category_id'])->toArray();   
    $breadcrumb= getBreadCrumbCategoryProduct($dataCategory);   
    /* end category */
    ?>    
    <div class="margin-top-15">
        <div class="breadcrumb-title">
            <?php echo $breadcrumb; ?>
        </div>
        <div>
            <div class="col-lg-4 no-padding-left">
                <div class="margin-top-15">
                    <img class="zoom_img" src="<?php echo $small_img; ?>" data-zoom-image="<?php echo $large_img; ?>" />
                </div>
            </div>
            <div class="col-lg-8 no-padding-left">
                <h1 class="margin-top-15 product-detail-title">
                    <?php echo $title; ?>
                </h1>
                <div class="margin-top-5">
                    <b>Lượt xem:</b>&nbsp;<?php echo $count_view; ?>
                </div>
                <div class="margin-top-5 product-price">
                    <b>Giá:</b>&nbsp;Liên hệ
                </div>      
                <div class="margin-top-5">
                    <span class="phone-tel"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;Hotline:&nbsp;<?php echo $telephone; ?>
                </div>          
                <div class="margin-top-5">
                    <img src="<?php echo asset('upload/tru-so.png'); ?>">&nbsp;Vp giao dịch:&nbsp;<?php echo $office; ?>
                </div>
                <div class="margin-top-5">
                    <img src="<?php echo asset('upload/sendmail.png'); ?>">&nbsp;Email: <?php echo $email_to; ?>
                </div>
                <div class="margin-top-5">
                    <img src="<?php echo asset('upload/earth-web.png'); ?>">&nbsp;Website: <?php echo url('/'); ?>
                </div>
                <hr class="product-ngang">
            </div>
            <div class="clr"></div>
        </div>
        <div class="margin-top-15 product-detail-content">
            Chi tiết sản phẩm
        </div>
        <div class="margin-top-15">
            <?php echo $detail; ?>
        </div>
        <div class="margin-top-15 thuong-hieu">
            <a href="<?php echo url('/'); ?>"><?php echo $contacted_person; ?></a> – nhà nhập khẩu và phân phối gỗ nguyên liệu nhập khẩu Mỹ.
        </div>
        <div class="margin-top-15">
            <b>Thông tin liên hệ:</b>&nbsp;<?php echo $contacted_person; ?>
        </div>        
        <div class="margin-top-5">
            <b>VPGD:</b> <?php echo $office; ?>
        </div>        
        <div class="margin-top-5">
            <b>Email:</b> <?php echo $email_to; ?>
        </div>
        <div class="margin-top-5">
            <b>Website:</b> <?php echo url('/'); ?>
        </div>
        <div class="margin-top-5">
            <b>Hotline:</b> <?php echo $telephone; ?>
        </div>              
        <?php                     
        $category_id=$item['category_id'];               
        $dataProduct=DB::table('product')                        
        ->select('product.id','product.alias','product.fullname','product.image','product.intro','product.price','product.sale_price')
        ->where('product.category_id', $category_id)
        ->where('product.id','<>',(int)@$id)
        ->where('product.status',1)       
        ->groupBy('product.id','product.alias','product.fullname','product.image','product.intro','product.price','product.sale_price')
        ->orderBy('product.created_at', 'desc')                
        ->get()
        ->toArray();         
        $dataProduct=convertToArray($dataProduct); 
        if(count($dataProduct) > 0){            
            ?>
                <div class="margin-top-15 product-detail-content">
                    Sản phẩm liên quan
                </div> 
                <div class="margin-top-15">
                    <script type="text/javascript" language="javascript">
                        $(document).ready(function(){
                            $(".related-products").owlCarousel({
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
                                        items:3
                                    }
                                }
                            });
                            var chevron_left='<i class="fa fa-chevron-left"></i>';
                            var chevron_right='<i class="fa fa-chevron-right"></i>';
                            $("div.related-products div.owl-prev").html(chevron_left);
                            $("div.related-products div.owl-next").html(chevron_right);
                        });                
                    </script>
                    <div class="owl-carousel related-products owl-theme">
                        <?php 
                        foreach($dataProduct as $key => $value){
                            $featuredImg=get_product_thumbnail($value['image']) ;
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
                <?php               
        }    
        ?>
    </div>
    <?php
}
?>
<script language="javascript" type="text/javascript">
    jQuery('.zoom_img').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });
</script> 