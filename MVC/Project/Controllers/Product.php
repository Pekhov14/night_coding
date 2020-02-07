<?php
	namespace Project\Cotrollers;

	use \Core\Controller as Controller;
	use \Project\Models\Product as ProductModel;

	class Product extends Controller {
		// после разбора get запросса данные попадают в переменную $params
		// или создаеться для каждого знач своя переменная (пример $id)
		public function one(int $id) {
			// Метод выводит один продукт
			// (передаем id в модель)
			$productModel = new ProductModel;
			$product = $productModel->getOneProduct($id);

//			Отправляем данные во View
			$this->render('one.php', [
				'name'  => $product['name'],
				'price' => $product['price'],
				// Можно добавить свое значение (переменную)
				'test'  => '!',
			]);

			//$this->render('one.php', $product);

		}

		public function all() {
			// Метод выводит все продукты
			$productModel = new ProductModel;
			$products = $productModel->getAllProducts();

			// во view будет доступна $products (который масив)
			$this->render('all.php', [
				'products'  => $products,
				'test'      => '!',
			]);
		}
	}