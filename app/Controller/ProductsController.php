<?php
/**
 * @author Rakesh.
 * This file is contains the Products CRUD.
 * Confidential Code.
 * Date  06/06/2016.
**/

App::uses('AppController', 'Controller');

class ProductsController extends AppController {

	public $uses = array('Item', 'ItemCategory');
	public $components = array('Session', 'Auth', 'RequestHandler');
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('addnew', 'update', 'index', 'view', 'delete', 'validateSku');
	}

    /**
     * @author Rakesh.
     * This Function is used for loading the Dashboard
     * @param NULL.
    **/
	public function dashboard() {

	}
	
	/**
     * @author Rakesh.
     * This Function is used for loading the Product listing.
     * @param NULL.
    **/
	public function index() {
		//Join the ItemCategory and Item Tables.
		$this->Item->bindModel(array( 'hasOne' => array('ItemCategory' => array('foreignKey' => false,'conditions'=> 'Item.category_id = ItemCategory.id'))));
		$this->set('items', $this->Item->find('all', array('order' => array('Item.name'), 'ASC')));
	}

	/**
     * @author Rakesh.
     * This Function is used for Adding the new Product.
     * @param NULL.
    **/
	public function addnew() {
		if ($this->request->is('post')) {
			//Save the Product in the Item Table.
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash('Product details saved successfully.');
				$this->redirect('/products/index');
			}
			$this->Session->setFlash('The Product could not be saved. Please try again.');
		} else {
			//Set the categories to use in the addnew file.
			$this->set('categories', $this->getCategories());
		}
	}

	/**
     * @author Rakesh.
     * This Function is used for updatig the Product.
     * @param $id Integer.
    **/
	public function update($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Product. Please try again.');
			$this->redirect('/products/index');
		}
		
		//Get the Product details.
		$item = $this->Item->findById($id);
		if (!$item) {
			$this->Session->setFlash('Invalid Product id.');
			$this->redirect('/products/index');
		}
	
		if ($this->request->is('item') || $this->request->is('put')) {
			$this->Item->id = $id;
			$item_data = $this->request->data;
			if ($this->Item->save($item_data)) {
				$this->Session->setFlash('Product details has been updated successfully.');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Unable to update the Product details.');
			$this->redirect('/products/index');
		} else {
			//Set the categories to use in the addnew file.
			$this->set('categories', $this->getCategories());
		}
		if (!$this->request->data) {
			$this->request->data = $item;
		}
	}

	/**
     * @author Rakesh.
     * This Function is used to view Product.
     * @param $id Integer.
    **/
	public function view($id) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			$this->Session->setFlash('Invalid Product id');
			$this->redirect('/products/index');
		}
		$this->Item->bindModel(array( 'hasOne' => array('ItemCategory' => array('foreignKey' => false,'conditions'=> 'Item.category_id = ItemCategory.id'))));
		$item = $this->Item->findById($id);
		$this->set('item', $item);
	}

	/**
     * @author Rakesh.
     * This Function is used for delete the Product.
     * @param $id.
    **/
	public function delete($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			$this->Session->setFlash('Invalid Product');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Item->delete()) {
			$this->Session->setFlash('Product details successfully deleted.');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Unable to delete the Product details.');
		return $this->redirect(array('action' => 'index'));
	}

	/**
     * @author Rakesh.
     * This Function is used for getting Product Category.
     * @param NULL.
    **/
	public function getCategories() {
		$categories = $this->ItemCategory->find('list', array('fields' => array('id', 'name')));
		return $categories;
	}
	/**
     * @author Rakesh.
     * This Function is used for checking the SKU.
     * @param $sku.
    **/
    public function validateSku() {
    	if($this->RequestHandler->isAjax()) {
	    	$this->autoRender = false;
	    	$sku = $this->request->data['sku'];
	    	$skuData = $this->Item->findBySku($sku);
	    	if (empty($skuData)) {
	    		return 1;
	    	} else {
	    		return 0;
	    	}
	    }
    }
}
