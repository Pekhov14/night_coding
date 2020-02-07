<?php
	namespace Project\Models;
	use \Core\Model as Model;

	class Product extends Model {
		public function getOneProduct(int $id) {
//			выборка из БД
			$query = "SELECT * FROM product WHERE id=$id";
			// наследуясь мы получим механизм раб с бд
			return $this->getOneByQuery($query);

//			return [
//				'name'  => 'product1',
//				'price' => 100
//			];
		}

		public function getAllProducts(int $id) {
			$query = "SELECT * FROM product";
			return $this->getOneByQuery($query);

//			return [
//				['id' => 1, 'name'  => 'product1', 'price' => 100],
//				['id' => 2, 'name'  => 'product2', 'price' => 400],
//			];
		}


	}