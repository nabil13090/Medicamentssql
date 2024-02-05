<?php include 'utilities/header.php'; ?>
<h2 class="d-flex justify-content-center my-5">SHOP</h2>
<section class="py-5 ">
    <div class="container g-0">
        <form class="row text-uppercase">
     <div class="cart-section mt-150 mb-150">
            <div class="container">
                <div class="row my-3 ">
                    <div class="col-8  ">
                        <div class="cart-table-wrap">
                            <table class="cart-table my-4 ">
                                <thead class="cart-table-head">
                                    <tr class="table-head-row">
                                        <th class="product-remove"></th>
                                        <th class="product-image"></th>
                                        <th class="product-name">nom</th>
                                        <th class="product-price">Prix</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbod>
                                    <tr class="table-body-row ">
                                        <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                        <td class="product-image"><img src="assets/img/products/product-img-1.jpg" alt=""></td>
                                        <td class="product-name"></td>
                                        <td class="product-price"></td>
                                        <td class="product-quantity"><input type="number" placeholder="0"></td>
                                        <td class="product-total"></td>
                                    </tr>
                                    <tr class="table-body-row">
                                        <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                        <td class="product-image"><img src="assets/img/products/product-img-2.jpg" alt=""></td>
                                        <td class="product-name"></td>
                                        <td class="product-price"></td>
                                        <td class="product-quantity"><input type="number" placeholder="0"></td>
                                        <td class="product-total"></td>
                                    </tr>
                                    <tr class="table-body-row">
                                        <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                        <td class="product-image"><img src="assets/img/products/product-img-3.jpg" alt=""></td>
                                        <td class="product-name"></td>
                                        <td class="product-price"></td>
                                        <td class="product-quantity"><input type="number" placeholder="0"></td>
                                        <td class="product-total"></td>
                                    </tr>
                                </tbod>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="total-section">
                            <table class="total-table">
                                <thead class="total-table-head">
                                    <tr class="table-total-row">
                                        <th>Total</th>
                                        <th>Prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total-data">
                                        <td><strong>sous-total: </strong></td>
                                        <td>500€</td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>TVA: </strong></td>
                                        <td>45€</td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>Total: </strong></td>
                                        <td>545€</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                         <div class="coupon-form-wrap">
                                <form action="index.html">
                                    <p><input type="submit" value="Valider"></p>
                                </form>
                            </div>
                     </div>
<?php include './utilities/footer.php';?>