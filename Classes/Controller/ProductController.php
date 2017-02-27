<?php
namespace \AM307\Inventory\Controller;

use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \AM307\Inventory\Domain\Model\Repository\ProductRepository;

class InventoryController extends ActionController {

    public function listAction() {
        $productRepository = GeneralUtility::makeInstance(ProductRepository::class);
        $products = $productRepository->findAll();
        $this->view->assign('products', $products);
    }
}