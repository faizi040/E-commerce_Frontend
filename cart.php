<?php include('inc/header.php')  ?>

    <h1 class="fw-bold ps-5">Cart</h1>
    <div class="container mt-5">
        <table class="table table-responsive ">
            <thead>
                <tr class="text-center">
                    <th colspan="2" class="pro-col">Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center ">
                   
                    <td class="icon-col"><a href="#"><i class="bi bi-x-lg"></i></a></td>
                    <td class="icon-col">Product Name</td>
                    <td>$50</td>
                    <td>1</td>
                    <td>$50</td>
                </tr>
                <tr class="text-center">
                    <td cclass="btn-col" ><button class="btn3">Coupon code</button></td>
                    <td class="btn-col" ><button class="btn3">Apply Coupon </button></td>
                    <td colspan="3"><button class="btn3 ms-auto">Update Cart</button> </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container total-section  my-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 ms-auto ">

          
        <h3 class="fw-bold">Cart Totals</h3>
        <table class="table table-responsive   mt-3">
            <tr>
                <td>Subtotal</td>
                <td>$50</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$50</td>
            </tr>
        </table>
        <button class="btn3 cart-check"><a href="checkout.php">Proceed to Checkout</a></button>
    </div>
</div>
    </div>


    <?php include('inc/footer.php')  ?>