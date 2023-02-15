<div id="product-grid">
    <div class="txt-heading">
        <div class="txt-heading-label">Products</div>
    </div>
    <?php
    $query = "SELECT * FROM product";
    $product_array = $shoppingCart->getAllProduct($query);
    if (! empty($product_array)) {
        foreach ($product_array as $key => $value) {
            ?>
        <div class="product-item">
        <form method="post"
            action="index.php?action=add&code=<?php echo $product_array[$key]["Product_ID"]; ?>">
            <div class="product-image">
                <img src="<?php echo $product_array[$key]["product_image"]; ?>">
                <div class="product-title">
                    <?php echo $product_array[$key]["product_name"]; ?>
                </div>
            </div>
            <div class="product-footer">
                <div class="float-right">
                    <input type="text" name="quantity" value="1"
                        size="2" class="input-cart-quantity" /><input type="image"
                        src="add-to-cart.png" class="btnAddAction" />
                </div>
                <div class="product-price float-left"><?php echo "$".$product_array[$key]["Unit_price"]; ?></div>
                
            </div>
        </form>
    </div>
    <?php
        }
    }
    ?>
</div>