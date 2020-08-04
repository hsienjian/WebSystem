<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Product img</th>
                            <th scope="col">Product</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td><img style="width: 100px;height: 100px;" src="img/custom/52ECBE2E-7524-40F9-8032-589F5E16B653-400x400.jpeg" /> </td>
                            <td>Round Neck T-Shirt with customized A3 size printing</td>
                            <td>M</td>
                            <td><div class="circle color1" style="background-color:black;"></div></td>
                            <td>
                                <input class="form-control" type="number" id="quantity" name="quantity" min="1" max="50" value="1"/>
                                <input class="btn btn-dark" type="button" name="update" value="Update">
                            </td>
                            <td class="text-right">RM 15.00</td>
                            <td class="text-right"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">RM 15.00</td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">RM 5.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>RM 20.00</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="btn btn-block btn-light" href="all_product.php">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" name="checkout"  value="Checkout">
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>


                <tr><th>Order ID</th><th>Customer ID</th><th>Item Name</th><th>Date</th><th>Address</th><th>Status</th><th>Total( RM )</th><th>Action</th></tr>
