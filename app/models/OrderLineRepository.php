<?php
class OrderLineRepository{
    public static function getOrderLinesByOrderId($order_id){
        $db = DB::connect();
        $order_id = (int) $order_id;
        $query = "SELECT * FROM order_lines WHERE order_id=$order_id";
        $result = $db->query($query);
        $orderLines = [];
        while ($orderLine = $result->fetch_assoc()) {
            $orderLines[] = new OrderLine($orderLine['order_id'], $orderLine['product_id'], $orderLine['quantity'], $orderLine['unit_price']);
        }
        return $orderLines;
    }

    public static function getOrderLineById($order_id, $product_id){
        $db = DB::connect();
        $order_id = (int) $order_id;
        $product_id = (int) $product_id;
        $query = "SELECT * FROM order_lines WHERE order_id=$order_id AND product_id=$product_id";
        $result = $db->query($query);
        $orderLine = $result->fetch_assoc();
        if (!$orderLine) {
            return null;
        }
        return new OrderLine($orderLine['order_id'], $orderLine['product_id'], $orderLine['quantity'], $orderLine['unit_price']);
    }
}
