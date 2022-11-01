<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout || project-store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container ">
        <div class="head-check text-white bg-dark w-100 py-3 ps-5 mt-5">
            Have a coupon?Click here to enter your code
        </div>
        <div class="row">
            <div class="col-lg-6 check-form">
                <h3 class="fw-bold mt-5">Billing Details</h3>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="exampleFormControlInput1" class="form-label">Country</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pakistan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">

                        <label for="exampleFormControlInput1" class="form-label">State</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Faisalabad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                    <div class="col-12">

                        <label for="exampleFormControlInput1" class="form-label">Town/City</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Faisalabad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Zip code</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="form-check mt-3 ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Subscribe to Our Newsletter
                        </label>
                    </div>
                    <div class="form-check mt-5 ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <h4>Ship to a different address ?</h4>
                        </label>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Order Notes</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold mt-5">Your Order</h3>
                <table class="table table-responsive table-striped table-bordered mt-5">
                    <thead>
                        <tr>

                            <th class="col-6">Product</th>
                            <th class="col-6">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Shoes &nbsp; <span class="fw-bold">x1</span></td>
                            <td>$30.00</td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td>$30.00</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Enter your full address to see shipping costs.</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>$30.00</th>
                        </tr>
                    </tbody>
                </table>

                <div class="col-12 check-card py-4">
                    <div class="d-flex flex-wrap py-4">
                        <h6 class="text-secondary ps-5 mt-4">Paypal</h6>
                        <div class="img ms-3">
                            <img src="images/paypal-card.png" alt="Not found">
                        </div>
                        <h6 class="ms-auto me-5 text-secondary mt-4">What is Paypal ?</h6>
                    </div>
                    <div class="mx-3 text-secondary check-para py-3">
                        <p class="px-3">pay via paypal:You can pay with your debit card if you don't have a paypal account</p>

                    </div>
                    <div class="my-5 d-flex justify-content-center">
                        <button class="btn3">Proceed to Paypal</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>