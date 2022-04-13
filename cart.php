<?php 
    session_start();
    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    if(isset($_GET['action'],$_GET['item']) && $_GET['action'] == 'remove')
    {
        unset($_SESSION['cart_items'][$_GET['item']]);
        header('location:cart.php');
        exit();
    }
	
	$pageTitle = 'Demo PHP Shopping cart - Add to cart using Session';
	$metaDesc = 'Demo PHP Shopping cart - Add to cart using Session';
	
    //pre($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MAT Bookstore</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="book.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      </head>

      <?php include('layouts/header.php'); ?>

    <body>
            <div class="row">
                <div class="col-md-12">
                    <?php if(empty($_SESSION['cart_items'])){?>
                    <table class="table">
                        <tr>
                            <td>
                                <p>Your cart is empty</p>
                            </td>
                        </tr>
                    </table>
                    <?php }?>
                    <?php if(isset($_SESSION['cart_items']) && count($_SESSION['cart_items']) > 0){?>
                    <table class="table">
                    <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $totalCounter = 0;
                                $itemCounter = 0;
                                foreach($_SESSION['cart_items'] as $key => $item){

                                $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($item['product_name']))."/".$item['product_img'];   
                                
                                $total = $item['product_price'] * $item['qty'];
                                $totalCounter+= $total;
                                $itemCounter+=$item['qty'];
                                ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo $imgUrl; ?>" class="rounded img-thumbnail mr-2" style="width:60px;"><?php echo $item['product_name'];?>
                                        
                                        <a href="cart.php?action=remove&item=<?php echo $key?>" class="text-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>

                                    </td>
                                    <td>
                                        $<?php echo $item['product_price'];?>
                                    </td>
                                    <td>
                                        <input type="number" name="" class="cart-qty-single" data-item-id="<?php echo $key?>" value="<?php echo $item['qty'];?>" min="1" max="1000" >
                                    </td>
                                    <td>
                                        <?php echo $total;?>
                                    </td>
                                </tr>
                            <?php }?>
                            <tr class="border-top border-bottom">
                                <td><button class="btn btn-danger btn-sm" id="emptyCart">Clear Cart</button></td>
                                <td></td>
                                <td>
                                    <strong>
                                        <?php 
                                            echo ($itemCounter==1)?$itemCounter.' item':$itemCounter.' items'; ?>
                                    </strong>
                                </td>
                                <td><strong>$<?php echo $totalCounter;?></strong></td>
                            </tr> 
                            </tr>
                        </tbody> 
                    </table>
                    <div class="row">
                        <div class="col-md-11">
                            <a href="checkout.php">
                                <button class="btn btn-primary btn-lg float-right">Checkout</button>
                            </a>
                        </div>
                    </div>
                    
                    <?php }?>
                </div>
            </div>
           <!--footer start-->
           <?php include('layouts/footer.php'); ?>