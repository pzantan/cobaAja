<?php

class Products {
    public $name;
    public $description;
    public $productId;
	public $price;

    public function __construct($id = 0, $infoArr = array()) {
        if ($id > 0 && count($infoArr)) {
            $this->name = $infoArr['name'];
            $this->description = $infoArr['description'];
            $this->productId = $id;
			$this->price = $infoArr['price'];
        }
    }

    /**
     * @static
     */
    public static function loadAllProducts() {
        $arr = getProducts();
        $prods = array();

        foreach ($arr as $id => $info) {
            $prods[$id] = new Products($id, $info);
        }

        return $prods;
    }

    /**
     * Load details of order
     *
     * This function should be giving us all the information about the order:
     * The customer's name and address, the products that were ordered (descriptions too) and the order totals.
     * See products.php to see what is expected to be shown
     *
     * @param int $order_id Unique identifier for the order
     * @return string[] $cur_order Details of the order
     *
     */
    public function loadOrderDetails($order_id) {
        $orders = getOrderInfo();
        $products = self::loadAllProducts();
        $customer = getCustomerInfo();
        $address = getAddresses();
		$cur_order = $orders[$order_id];

		$b = array();
		foreach ($cur_order['products'] as $key ){
			$id = $key['product_id'];
			$a=array(
			"name"=>$products[$id]->name,
			"description"=>$products[$id]->description,
			"price"=>$products[$id]->price,
			"qty"=>$key['qty']
			);
			
			array_push($b,$a);
		}
			
		$cur_order['products'] = $b;			
		$cur_order['customer_info'] = $customer[$cur_order['ordered_by']];
		$cur_order['address'] = $address[$cur_order['customer_info']['address_id']];
			
        return $cur_order;
    }
}