<?php 
$id = $_GET['id'];
$username = $_GET['username'];

include('./operations/model/payment-model.php');
$paymentModel = new paymentModel($id, $username);
$products = $paymentModel->getProducts(); 
$total = 0;
?>
<html>
    <head>
        <link rel="stylesheet" href="./styles/cashout.css"/>
        <script src="./scripts/cashout.js"></script>
    </head>
    <body>
        <div id="main">
            <div>
                <h1 id="text_info">
                    Order Summary
                </h1>
                <div id="price_info">
                    <div></div>
                    <div class="price">
                        <?php
                        for($i = 0; $i < count($products); $i++) 
                        {
                            $total += $products[$i]->totalPrice;
                        ?>
                        <div>
                                

                             <div class="pname">
                             <h1>
                                <?php echo($products[$i]->productName)?>
                            </h1>
                             </div>
                            <h1>
                                <?php echo($products[$i]->quantity)?>
                            </h1>
                            <h1>
                                <?php echo($products[$i]->pricePerProduct)?>
                            </h1>
                            <h1>
                                <?php echo($products[$i]->totalPrice)?>
                            </h1>
                            
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                    <hr></hr>
                    <div class="price">
                        <div>
                            <h1>Total</h1>
                            <h1><?php echo($total); ?></h1>
                        </div>
                        <button onclick="pay()">PAY</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <style>
        body{
    background-color: rgb(220,220,220);
}

#main{
    width: 100%;
    height: 500px;
    display:flex;
    justify-content: center;
}

#price_info{
    width: 600px;
    min-height: 200px;
    background-color: rgb(255,255,255);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.price div{
    display: flex;
    flex-direction: row;
}

.price div h1{
    font-size: 20px;
}

.price div h1{
    margin-left: 50px;
}

#price_info button{
    width: 380px;
    min-height: 67px;
    background-color: rgb(10,10,10);
    color: rgb(255,255,255);
    font-size: 20px;
    cursor: pointer;
    border-radius: 50px;
}

#text_info{
    font-size: 20px;
    margin-left: 25%;
}
.price{
    justify-content: space-between;
}

.name{
    border: 1px solid red;
}

.pname{
    border-right: 1px solid blue;
    justify-content:center;
    align-items: center;
    border-top: 3px solid green;
    margin-left:30px
}
.thead{
    border-top:2px solid green; 
}
    </style>
</html>