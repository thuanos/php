
<?php 
include "header.php";
include "slider.php";
include "sanpham/category_sp.php";
?>

<?php 
 $category = new category();
if(!isset($_GET['id']) || $_GET['id']==null){
    echo "<script>window.location = 'category_list.php'</script>";
}else {
    $id = $_GET['id'];
}    
$get_category = $category -> get_category($id);
if($get_category){
    $result = $get_category -> fetch_assoc();
}
?>

<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['category_name'])) {
        $tenspham = $_POST['category_name'];
        $update_category = $category->update_category($tenspham, $id);
    }
}
?>


<div class="admin-content-right">
    <div class="admin-content-right-category_add">
        <h1>Thêm danh mục</h1>
        
        <form action="" method="post">
            <input required name="category_name" type="text" placeholder="Nhập tên danh mục" value="<?php echo $result['tenspham'] ?>">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>


</section>
</body>
</html>