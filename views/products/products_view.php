<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<div class="row">
    <div class="well">
        <div class="product-title"><?=$product['product_name']?></div>
        <div class="product-desc"><?=$product['product_description']?></div>
        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
        <div class="product-price">$ <?=$product['product_price']?></div>

        <div class="btn-group pull-right">
            <button type="button" id="btnBuy" class="btn btn-success">
                Osta
            </button>
        </div>
    </div>
</div>
<script>
    $('#btnBuy').click(function(){
        $('#divOrder').modal({show:true});
        return false;
    });
</script>
<div id="divOrder" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">Toote tellimine</h3>
            </div>
            <div class="modal-body">


                <form class="cmxform" id="buy-order" role="form" method="post" action="products/buy/<?= $product['product_id'] ?>">
                    <div class="form-group">
                        <label for="exampleInputName">Nimi *</label>
                        <input type="text" class="form-control" id="Name" placeholder="Sinu nimi..."
                               name="data[customer_name]"  minlength="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email *</label>
                        <input type="email" class="form-control" id="Email" placeholder="Sinu email..."
                               name="data[customer_email]" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">Telefoninumber *</label>
                        <input type="text" class="form-control" id="Phone"
                               placeholder="Sinu telefoninumber..."
                               name="data[customer_number]" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">Aadress *</label>
                        <input type="text" class="form-control" id="Address" placeholder="Aadress"
                               name="data[customer_address]" required="">
                    </div>


                    <input type="hidden" value="<?= $product['product_id'] ?>" name="data[product_id]"/>
                    <input type="hidden" value="<?= $product['product_price'] ?>" name="data[product_price]"/>

                    <button type="submit" class="btn btn-success">
                        Telli
                    </button>

                </form>
                <!-- EDIT BUTTON -->
                <? if ($auth->is_admin): ?>
                    <form>
                        <div class="pull-right">
                            <button class="btn btn-primary">
                                Salvesta
                            </button>
                        </div>
                    </form>
                <? endif; ?>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>