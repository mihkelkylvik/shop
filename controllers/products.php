<?php

class products extends Controller
{

    function index()
    {
        $this->products = get_all("SELECT * FROM product");
    }

    function index_ajax()
    {
        echo "\$_POST:<br>";
        var_dump($_POST);
    }

    function index_post()
    {
        echo "\$_POST:<br>";
        var_dump($_POST);
    }
    function view()
    {
        $product_id =  $this->params[0];
        $this->product = get_first("SELECT * FROM product WHERE product_id='$product_id'");
    }
    function buy()
    {
        $data = $_POST['data'];
        echo "<pre>";
        print_r($data);
        insert('order', $data);
       // send_mail(EMAIL_EMAIL, EMAIL_NAME, $data['email_email'], $data['email_name'], "Uus sõnum veebilehelt", $message);
        mail($data['customer_email'], "Ostsite toote", "Täname, et ostsite toote meilt.");
        echo "</pre>";
       /* phpinfo();*/
    }
}