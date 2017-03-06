<?php
namespace AM307\Inventory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Product extends AbstractEntity {
    /**
     * @var string
     **/
    protected $name = '';

    /**
     * @var string
     **/
    protected $description = '';

    /**
     * @var int
     **/
    protected $quantity = 0;

    /**
     * category
     *
     * @var AM307\Inventory\Domain\Model\Category
     */
    protected $category = null;

    public function __construct($name = '', $description = '', $quantity = 0) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setQuantity($quantity);
    }

    public function setName($name) {
        $this->name = (string)$name;
    }

    public function getName() {
        return $this->name;
    }

    public function setDescription($description) {
        $this->description = (string)$description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setQuantity($quantity) {
        $this->quantity = (int)$quantity;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getCategory() {
        return $this->category;
    }

}