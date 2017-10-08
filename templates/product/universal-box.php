<?php
/**
 * @var array $product The product that belongs to the universal box.
 */
?>

<?php do_action('affilicious_template_before_product_universal_box', $product); ?>

<div class="aff-product-universal-box">
    <?php aff_render_template('product/universal-box/header', ['product' => $product]); ?>

    <?php aff_render_template('product/universal-box/body', ['product' => $product]); ?>

    <?php aff_render_template('product/universal-box/footer', ['product' => $product]); ?>
</div>

<?php do_action('affilicious_template_after_product_universal_box', $product); ?>