<?php 
include "header.php";
include "slider.php";
include "sanpham/category_sp.php"; 

$category = new category(); 
$show_category = $category->show_category(); 


?>

<div class="admin-content-right">
    <div class="admin-content-right-category_list">
        <h1>Danh sách danh mục</h1> 
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th> 
                <th>Danh mục</th>
                <th>Tùy biến</th>
            </tr>
            <?php 
            if ($show_category) {
                $i = 0; 
                while ($result = $show_category->fetch_assoc()) { 
                    $i++; 
            ?>
             <tr>
                    <td><?php echo $i ?></td> 
                    <td><?php echo $result['id'] ?></td> 
                    <td><?php echo $result['tenspham'] ?></td> 
                    <td><a href="category_edit.php?id=<?php echo $result['id'] ?>">Sửa</a>|<a href="category_del.php?id=<?php echo $result['id'] ?>">Xóa</a></td>
            </tr>
            <?php 
                }
            }
            ?>
        </table>
    </div>
</div>

</section>
</body>
</html>
