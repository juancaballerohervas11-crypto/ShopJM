<?php
class OrderRepository{
    public static function getOrderById($id){
        $db = DB::connect();
        $id = (int) $id;
        $query = "SELECT * FROM orders WHERE order_id=$id";
        $result = $db->query($query);
        $order = $result->fetch_assoc();
        if (!$order) {
            return null;
        }
        return new Order($order['order_id'], $order['user_id'], $order['total'], $order['order_date'], $order['status']);
    }
}