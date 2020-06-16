<?php
include_once('LinkedList.php');
$linkList = new LinkList();

// text
$linkList->addFirst(10);
$linkList->addLast(9);
$linkList->addFirst(20);
$linkList->addLast(5);
$linkList->add(15,2);
echo '<br>Them First, Them Last, thêm theo index';
echo '<br>LinkList: '.$linkList->printList();
echo '<br>Size: '.$linkList->size();
echo '<br>Xóa theo index, xóa theo node';
$linkList->remove(1);
echo '<br>LinkList: '.$linkList->printList();
echo '<br>Size: '.$linkList->size();
$noderemove = new Node(5);
$linkList->removeObj($noderemove);
echo '<br> remove node(5):';
echo '<br>LinkList: '.$linkList->printList();
echo '<br>Size: '.$linkList->size();
echo '<br>Get theo index và indexOf';
$node = new Node(9);
echo '<br>Get index 1: '.$linkList->get(1)->readNode();
echo '<br>indexOf node(9): '.$linkList->indexOf($node);

?>