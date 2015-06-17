<?php
class orders extends Controller {
    function index()
    {
        $this->orders = get_all("SELECT * FROM `order` NATURAL JOIN product");
    }
    function confirm() {
        $order_id=$this->params[0];
        update('order',['order_paid'=>1],"order_id=$order_id");
    }
    function view(){
    }
}