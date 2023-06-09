<?php

namespace App;

use PDOException;

class Cart{
    protected $product_id;
    protected $user_id;
    protected $cart_id;
    protected $product_name;
    protected $price;
    protected $product_description;
    protected $size;
    protected $color;
    protected $image_path;


    public function getProdID(){
        return $this->product_id;
    }
    
    public function getUserID(){
        return $this->user_id;
    }

    public function getCartID(){
        return $this->cart_id;
    }

    public function getProdName(){
        return $this->product_name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getSize(){
        return $this->size;
    }

    public function getColor(){
        return $this->color;
    }

    public function getDescription(){
        return $this->product_description;
    }

    public function getImage(){
        return $this->image_path;
    }

    public static function list(){
        global $conn;
        $user_id = $_SESSION['user']['id'];
        try{
            $sql="
                SELECT p.product_name,
                p.product_description,
                p.price,
                p.size,
                p.color,
                p.image_path,
                c.cart_id
                FROM products AS p
                LEFT JOIN cart as c
                ON (c.product_id=p.product_id)
                LEFT JOIN users as u
                ON (u.user_id=c.user_id)
                WHERE c.product_id IS NOT NULL
                AND c.user_id =:user_id
            ";
            $statement = $conn->prepare($sql);
            $statement->execute([
                'user_id' => $user_id
            ]);
            $cart = [];
            while($row = $statement->fetchObject('App\Cart')){
                array_push($cart,$row);
            }

            return $cart;
        }catch (PDOException $e){
            error_log($e->getMessage());
        }
    }

    public static function add($product_id, $user_id)
    {
        global $conn;
        try {
            $sql = "
                INSERT INTO cart (user_id, product_id)
                VALUES (:user_id, :product_id)
            ";
            $statement = $conn->prepare($sql);
            $statement->execute([
                'user_id' => $user_id,
                'product_id' => $product_id
            ]);
            return $conn->lastInsertId();
        } catch (PDOException $e) {
            error_log($e->getMessage());
        }
    }

    public static function delByID($cart_id){
        global $conn;
        try{
            $sql = "
                DELETE FROM cart
                WHERE cart_id=:cart_id
            ";
            $statement = $conn->prepare($sql);
            return $statement->execute([
                'cart_id' => $cart_id
            ]);
        }catch (PDOException $e){
            error_log($e->getMessage());
        }
    }
    
}

?>