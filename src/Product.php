<?php

namespace app;
use PDOException;

class Product
{
    protected $prod_id;
    protected $prod_name;
    protected $price;
    protected $image;

    public function getProdID(){
        return $this->prod_id;
    }

    public function getProdName(){
        return $this->prod_name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public static function list(){
        global $conn;

        try{
            $sql="
                SELECT * FROM products;
            ";

            $statement = $conn->query($sql);
            $products =[];
            while($row = $statement->fetchObject('App\Product')){
                array_push($products,$row);
            }
            return $products;
        }catch(PDOException $e){
            error_log($e->getMessage());
        }
    }

    public static function delete(){
        global $conn;

        try{
            $sql="";
        }catch(PDOException $e){
            error_log($e->getMessage());
        }
    }

    public static function add($prod_name,$price,$image){
        global $conn;

        try{
            $sql="
                INSERT INTO products (prod_name,price,image)
                VALUES('$prod_name','$price','$image')
            ";
            $conn->exec($sql);

            return $conn->lastInsertId();

        }catch(PDOException $e){
            error_log($e->getMessage());
        }
    }

    public static function edit($prod_id,$prod_name,$price){
        global $conn;

        try {
			$sql = "
                UPDATE products
                SET
                    prod_name = :prod_name,
                    price = :price
                WHERE prod_id = :prod_id
            ";
			$statement = $conn->prepare($sql);
			return $statement->execute([
				'prod_name' => $prod_name,
				'price' => $price,
				'prod_id' => $prod_id
			]);
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return false;
    }

    public static function getById($prod_id){
        global $conn;
        try{
            $sql = "
                SELECT * FROM products
                WHERE prod_id=:prod_id
                LIMIT 1
            ";
            $statement = $conn->prepare($sql);
            $statement->execute([
                'prod_id' => $prod_id
            ]);
            $result = $statement->fetchObject('App\Product');

            return $result;
        }catch (PDOException $e){
            error_log($e->getMessage());
        }

        return null;
    }

    public static function delProd($prod_id){
        global $conn;
        try{
            $sql = "
                DELETE FROM products
                WHERE prod_id=:prod_id
            ";
            $statement = $conn->prepare($sql);
            return $statement->execute([
                'prod_id' => $prod_id
            ]);
        }catch (PDOException $e){
            error_log($e->getMessage());
        }
    }
}

?>