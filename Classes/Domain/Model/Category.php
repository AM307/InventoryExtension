<?php
namespace AM307\Inventory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Category extends AbstractEntity {
    /**
     * @var string
     **/
    protected $name = '';

    /**
     * products
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<AM307\Inventory\Domain\Model\Product>
     */
    protected $products;

    public function __construct($name = '') {
        $this->setName($name);
        $this->initStorageObjects();
    }

    protected function initStorageObjects() {
        $this->products = new ObjectStorage();
    }

    public function setName($name) {
        $this->name = (string)$name;
    }

    public function getName() {
        return $this->name;
    }

    public function addProduct($products) {
        $this->products->attach($products);
    }

    public function removeProduct($products) {
        $this->products->detach($products);
    }

    public function setProducts($products) {
        $this->products = $products;
    }

    public function getProducts() {
//        if ($this->products === null) {
//            $productRepository = $this->objectManager->get('AM307\\Inventory\\Domain\\Repository\\ProductRepository');
//            $products = $productRepository->findByCategory($this->getUid());
//            $this->products = new ObjectStorage();
//            foreach ($products as $product) {
//                $this->products->attach($product);
//            }
//        }

        return $this->products;
    }

}