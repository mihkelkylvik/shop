<? foreach($products as $product):?>
    <div class="row">
        <div class="well">
            <div class="product-title"><?=$product['product_name']?></div>
            <div class="product-desc"><?=$product['product_description']?></div>
            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
            <div class="product-price">$ <?=$product['product_price']?></div>
            <div class="btn-group pull-right">
                <button type="button" onclick="window.location.href='products/<?= $product['product_id'] ?>'" class="btn btn-success">
                    Lisa ostukorvi
                </button>
            </div>
        </div>
    </div>
<?endforeach?>
<?php
$email_to="mihkel20@gmail.com";
$email_subject="It works";
$email_message="Hello. I can send mail!";
$headers = "From: Beacze\r\n".
    "Reply-To: address@gmail.com\r\n'" .
    "X-Mailer: PHP/" . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
echo "mail sent!!"
?>