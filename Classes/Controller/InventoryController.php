<?php
namespace AM307\Inventory\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use AM307\Inventory\Domain\Repository\ProductRepository;

class InventoryController extends ActionController {
    public function listAction() {
        $productRepository = GeneralUtility::makeInstance(ProductRepository::class, $this->objectManager);
        $persistenceManager = $this->objectManager->get(
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'
        );
        $productRepository->injectPersistenceManager($persistenceManager);
        $products = $productRepository->findAll();
        $this->view->assign('products', $products);
    }
}