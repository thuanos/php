<?php 
include "header.php";
include "slider.php";
include "sanpham/category_sp.php";

$category = new category();

$message = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['category_name'])) {
        $tenspham = $_POST['category_name'];
        $insert_category = $category->insert_category($tenspham);
        if($insert_category) {
            $message = '<div class="message success" id="message">Đã thêm danh mục thành công! <span class="close" onclick="hideMessage()">&times;</span></div>';
        } else {
            $message = '<div class="message error" id="message">Đã xảy ra lỗi. Vui lòng thử lại sau! <span class="close" onclick="hideMessage()">&times;</span></div>';
        }
    }
}
?>

<style>
    .message {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        padding: 15px;
        width: 90%;
        max-width: 400px;
        background-color: #f0f0f0;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: top 0.5s ease-out;
        z-index: 1000;
    }

    .message.success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
    }

    .message.error {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
    }

    .close {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
        font-size: 16px;
    }
</style>

<div class="admin-content-right">
    <div class="admin-content-right-category_add">
        <h1>Thêm danh mục</h1>
        <?php echo $message; ?>
        <form action="" method="post">
            <input required name="category_name" type="text" placeholder="Nhập tên danh mục">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>

<script>
    function hideMessage() {
        var message = document.getElementById('message');
        message.style.transition = 'top 0.5s ease-in'; 
        message.style.top = '-100px'; 
        setTimeout(function() {
            message.style.display = 'none'; 
        }, 500);
    }
    setTimeout(hideMessage, 2000);
</script>

</section>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> b9adb12 (1)
