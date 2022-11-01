<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart || Project-store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    
</body>
</html>