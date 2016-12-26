<?php 

namespace App\Controllers;

use SON\Controller\Action;
use SON\Injection\Container;


class IndexController extends Action{


	public function index(){

		$product = Container::getModel("Product");
		$this->view->products = $product->show();

		$this->render("index");

	}

	public function contact(){

		$this->view->contacts = array('Joma','Jayro','Janice','Jessica');
		$this->render("contact");


	}

}
