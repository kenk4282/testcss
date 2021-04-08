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
                    for($i=0;$i<1;$i++){
                        show_detail();
                    }
                        function show_detail(){
                    ?>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/home/product1.jpg" width="50%" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
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
                            <p class="cart_total_price">$59 Baht</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>