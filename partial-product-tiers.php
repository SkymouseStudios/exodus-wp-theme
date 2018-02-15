<?php $plans = exodus_sort_products_by_price(exodus_get_products()); ?>
<div class="product-detail align-center medium-8 medium-offset-2 product-tiers">
    <div class="row aligner">
        <?php foreach($plans as $plan) { $plan = (object) $plan; ?>

        <div class="large-4 columns product-tier">
            <div class="responsive-container header-image" style="background-image: url(<?=$plan->background_image;?>);">
                <div class="img-container">
                    <img src="<?=$plan->overview_image;?>">
                </div>
            </div>
            <div class="img-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?=$plan->name;?>.jpg">
                </div>
            <div class="tier-body">
                <p class="tier-price">$<?=round($plan->price);?></p>
                <?=$plan->short_description;?>
            </div>
            <div class="learn-more"><a href="/product/<?=$plan->name;?>">Learn More &raquo;</a></div>
        </div>
        <?php } ?>
    </div>
</div>
