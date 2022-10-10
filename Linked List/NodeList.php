<?php
require_once('./Node.php');
class NodeList
{
    protected $head;
    public function __construct()
    {
        $this->head = null;
    }
    public function linkList()
    {
        return $this->head;
    }
    public function insertAfter($data)
    {
        $newNode = new Node();
        $newNode->setData($data);
        if ($this->head) {
            $currentNode = $this->head;
            while ($currentNode->getNext() != null) {
                $currentNode = $currentNode->getNext();
            }
            $currentNode->setNext($newNode);
        } else {
            $this->head = $newNode;
        }
    }
    public function insertbefore($data)
    {
        if ($this->head) {
            $newNode = new Node();
            $newNode->setData($data);
            $newNode->setNext($this->head);
            $this->head = $newNode;
        } else {
            $newNode = new Node();
            $newNode->setData($data);
            $this->head = $newNode;
        }
    }
    public function insertAfterSpecificNode($data, $target)
    {
        if ($this->head) {
            $currentNode = $this->head;
            while ($currentNode->getData() != $target && $currentNode->getNext() != null) {
                $currentNode = $currentNode->getNext();
            }
            if ($currentNode->getData() == $target) {
                $newNode = new Node();
                $newNode->setData($data);
                $currentNextNode = $currentNode->getNext();
                $currentNode->setNext($newNode);
                $newNode->setNext($currentNextNode);
            }
        }
    }
    public function insertBeforeSpecificNode($data, $target)
    {
        if ($this->head) {
            $currentNode = $this->head;
            $previousNode = null;
            while ($currentNode->getData() != $target && $currentNode->getNext() != null) {
                $previousNode = $currentNode;
                $currentNode = $currentNode->getNext();
            }
            if ($currentNode->getData() == $target) {
                $newNode = new Node();
                $newNode->setData($data);
                if ($previousNode) {
                    $previousNode->setNext($newNode);
                    $newNode->setNext($currentNode);
                } else {
                    $previousNode = $newNode;
                    $previousNode->setNext($currentNode);
                    $this->head = $previousNode;
                }
            }
        }
    }

    public function deleteNode($target)
    {
        if ($this->head) {
            $currentNode = $this->head;
            $previousNode = null;
            while ($currentNode->getData() != $target && $currentNode->getNext() != null) {
                $previousNode = $currentNode;
                $currentNode = $currentNode->getNext();
            }
            if ($currentNode->getData() == $target) {
                if ($previousNode) {
                    $previousNode->setNext($currentNode->getNext());
                    unset($currentNode);
                } else {
                    $this->head = $currentNode->setNext();
                    unset($currentNode);
                }
                return true;
            }
        }
        return false;
    }
}

$nodeList = new NodeList();
$nodeList->insertAfter('Shahin');
$nodeList->insertbefore('Ahnab');
$nodeList->insertAfterSpecificNode('Unnecessary Text', 'Ahnab');
$nodeList->insertBeforeSpecificNode('Again Unnecessary Text', 'Shahin');
$nodeList->deleteNode('Again Unnecessary Text');
$nodeList->deleteNode('Unnecessary Text');


$linkList = $nodeList->linkList();
print_r($linkList);
