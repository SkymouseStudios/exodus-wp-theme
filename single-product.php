<?php
/**
 * Default single page
 *
 * @package %Theme_Name%
 * @author %Author%
 */
get_header();

$id = get_the_ID();
$title = get_the_title();
$price = exodus_get_custom_field('price', $id);
$remote_available = exodus_get_custom_field('remote_available', $id);
$shopify_product_slug = exodus_get_custom_field('shopify_product_slug', $id);
$product_detail_introduction = exodus_get_custom_field('product_detail_introduction', $id);
$product_properties = exodus_get_custom_field('product_properties', $id);
?>

<div class="container-fluid content-wrap product-detail">
    <div class="medium-6 columns product-detail-bg" style="background-image: url(/wp-content/themes/exodus-wp-theme/assets/img/digital-background.jpg);">
        <div class="row price-container">
            <div class="medium-9 columns medium-offset-2 child-container overview">
                <div>
                    <?php
                        $plans = exodus_sort_products_by_price(exodus_get_products());
                        foreach($plans as $plan) {
                            $plan = (object) $plan;
                            $price = exodus_get_custom_field('price', $id);
                            if($plan->id != $id) {
                                if ($plan->price < $price) {
                                    $text = "&laquo; {$plan->title}";
                                } else {
                                    $text ="{$plan->title} &raquo;";
                                }
                                echo "<a href='/product/{$plan->name}' class='alt-product-link'>{$text}</a>";
                            }
                        }
                    ?>
                </div>
                <div>
                    <h1 class="price-title"><?=$title;?></h1>
                    <h1 class="price-figure">$<?=round($price);?></h1>
				  
				  <div class="yotpo bottomLine" 
                            data-appkey="hsgHGpf7bFWFWEBjGWmIJPyHIpfVCBT2xtPt7xax" 
                            data-domain="https://exodus90.com" 
                            data-product-id="Id of the product" 
                            data-product-models="Products model information" 
                            data-name="Product Title" 
                            data-url="<?php echo $shopify_product_slug; ?>"
                            >
                    </div>

                    <script type="text/javascript"> (functione(){var e=document.createElement("script");e.type="text/javascript",e.async=tr ue,e.src="//staticw2.yotpo.com/hsgHGpf7bFWFWEBjGWmIJPyHIpfVCBT2xtPt7xax/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore (e,t)})();
                    </script>
                </div>
                <?php if(boolval($remote_available)) { ?>
                <div style="display: block;">
                    <a class="checkbox-link" href="/remote-fraternities">Learn More about Remote Fraternities</a>
                </div>
                <?php } ?>
                <div>
                    <?php echo do_shortcode('[shopify embed_type="product" shop="exodus-90.myshopify.com" product_handle="'.$shopify_product_slug.'" show="button-only"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="medium-6 columns pricing-description">
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/magnific-popup/magnific-popup.css">
        <?php global $embed_magnific_js; $embed_magnific_js = true; // flag for later ?>
        <!-- Magnific Popup core JS file -->
        <?php $images = exodus_get_custom_field('images', $id); ?>
        <div class="row product-images">
            <?php foreach ($images as $image_field) { ?>
            <?php $image = $image_field['image']; ?>
            <a href="<?php echo $image['sizes']['large']; ?>" class="transition-ignore"><img src="<?php echo $image['sizes']['medium']; ?>"></a>
            <?php } ?>
        </div>
        <div class="row price-container">
            <div class="medium-12 columns child-container plan-description-intro">
                <p><?=$product_detail_introduction;?></p>
                <div id="myAccordion" class="nl-accordion">
                    <ul>
                        <?php $i=1; foreach($product_properties as $property) { $property = (object) $property; ?>
                        <li>
                            <input type="radio" id="nl-radio-<?=$i;?>" name="nl-radio" class="nl-radio">
                            <label class="nl-label" for="nl-radio-<?=$i;?>"><?=$property->title;?></label>
                            <div class="nl-content">
                                <p><?=$property->body;?></p>
                            </div>
                        </li>
                        <?php $i++; } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="email-signup form-show-processing">
        <div class="row text-center">
            <div class="small-12 columns white-email-signup">
                <h3>Not ready to get started?</h3>
                <p class="no-margin">Enter your email below to get some free articles delivered to your inbox.</p>

                <div class="exodus-preview-wrapper">
                    <form>
                        <fieldset>
                            <label for="exp_email">Email Address</label>
                            <input type="email" name="email" id="exp_email" placeholder="Email address" style="border-bottom:2px solid #E0E0E0;">
                            <a class="button" href="get-started/index.html">Sign Up</a>
                            <div class="success-block">
                                Success!
                            </div>
                            <div class="error-block">
                                Error!
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>-->

</div>

<div style="clear:both;"></div>
<?php get_footer(); ?>
