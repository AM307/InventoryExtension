<?php
namespace AM307\Inventory\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use AM307\Inventory\Domain\Repository\CategoryRepository;
use AM307\Inventory\Domain\Repository\ProductRepository;

class InventoryController extends ActionController {
    public function listAction() {
        $categoryRepository = $this->objectManager->get(CategoryRepository::class);
        $persistenceManager = $this->objectManager->get(
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'
        );
        $categoryRepository->injectPersistenceManager($persistenceManager);
        $categories = $categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }
}