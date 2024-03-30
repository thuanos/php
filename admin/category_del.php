<?php 
include "sanpham/category_sp.php";
$category = new category();
if(!isset($_GET['id']) || $_GET['id']==null){
    echo "<script>window.location = 'category_list.php'</script>";
}else {
    $id = $_GET['id'];
}    
$del_category = $category -> del_category($id);

?>