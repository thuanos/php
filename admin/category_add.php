<?php 
include "header.php";
include "slider.php";
include "sanpham/category_sp.php"
?>
<?php 
$category = new  category_add;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $tenspham = $_POST['category_name'];
    $insert_category = $category -> insert_category($tenspham);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-category_add">
                <h1>Thêm danh mục</h1>
                <form action="" method="post">
                    <input required name="category_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>