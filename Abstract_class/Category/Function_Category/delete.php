<?php
/**
 * Created by PhpStorm.
 * User: huanld
 * Date: 9/21/18
 * Time: 1:35 PM
 */

require __DIR__.'/../Class/category.php/';

$id_category = $_GET['id'];
$cate = new Category();
$cate->deleteCategory($id_category);
header('Location: ../index.php');
