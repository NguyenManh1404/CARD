
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="css/ttt.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>


    <div class="container_fullwidth">
        <div class="container shopping-cart">
            <div class="row">
                <div class="col-md-12">
                <div class="hhhh">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
                    </div>
                    <h3 class="title">
                        SHOPPING CARD
                        
                    </h3>
                    

                    <?php 
                    for($i=0;$i<5;$i++){
    
                    ?>
                    
                    <table class="shop-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Dtails</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <!-- thay ảnh đồ an vao/ -->
                                    <img src="images/products/small/products-09.png" alt="" style="width:200px;height:200px;">
                                </td>
                                <td>
                                  
                                <?php echo $_SESSION['mang'][$i][0]; ?>

                                </td>
                                <td>
                                <?php echo $_SESSION['mang'][$i][1]; ?>
                                </td>
                                <td>
                                    <select name="">
                        <option selected value="1">
                          1
                        </option>
                        <option value="1">
                          2
                        </option>
                        <option value="1">
                          3
                        </option>
                      </select>
                                </td>
                                <td>
                                    <?php echo $_SESSION['mang'][$i][1]; ?>
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="images/remove.png" alt="">
                                    </a>
                                </td>
                            </tr>

<?php
                    }
                    ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <button class="pull-left">
                        Continue Shopping
                      </button>
                                    <button class=" pull-right">
                        Update Shopping Cart
                      </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript==================================================-->

    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
</body>

</html>