<section id="cart_items">
    <div class="container">
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $mysql = new mysqli("localhost", "root", "", "shopshock");
                    $mysql->set_charset("UTF8");
                    $sql = "SELECT product.Product_code, product.Product_Name,
                        product.Cost, product.Stock_Quantity
                        FROM  product";
                    $result = $mysql->query($sql);
                    $rows = $result->fetch_all(MYSQLI_NUM);

                    $total = 0;

                    for ($i = 0; $i < sizeof($rows); $i++) {
                        show_detail($rows[$i][0], $rows[$i][1], number_format($rows[$i][2], 2, '.', ','), $rows[$i][3]);
                    }
                    function show_detail($product_code, $product_name, $price, $stock_quantity, $demand='1')
                    {
                    ?>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="images/home/product1.jpg" width="50%" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?= $product_name ?></a></h4>
                                <p>Product ID: <?= $product_code ?></p>
                            </td>
                            <td class="cart_price">
                                <p>$<?= $price ?> บาท</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <input class="cart_quantity_input" type="number" min="1" max="<?= $stock_quantity ?>" name="quantity" value="<?= $demand ?>" autocomplete="off" size="2">
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$<?= $price ?> บาท</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr class="cart_menu">
                        <td class="image" colspan="6" align="center"> <b>Total</b> </td>
                    </tr>
                    <tr>
                        <td class="cart_total" colspan="6" align="center">
                            <p class="cart_total_price">$ <?= $total ?> บาท</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>