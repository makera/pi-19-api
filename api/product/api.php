<?php
include_once "./read.php";
include_once "./create.php";
include_once "./delete.php";
$uri = "/^\/product\/(?<id>\d+)\/$/";
//products_read();
if ($_SERVER['REQUEST_METHOD'] == 'GET' and $_SERVER['REQUEST_URI'] == '/product/') {
    product_read();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' and $_SERVER['REQUEST_URI'] == '/product/') {
    product_create();
}
if ($_SERVER['REQUEST_METHOD'] == 'DELETE' and preg_match($uri, $_SERVER['REQUEST_URI'], $matches) == 1) {
    product_delete($matches['id']);
}