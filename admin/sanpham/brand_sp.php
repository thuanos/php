<?php 
    include "database.php";

?>
<?php 
class brand{
    private $db;
    public function __construct(){
        $this-> db = new Database();
    }
    public function insert_brand($id, $brand_name){
        $query = "insert into brand (id, brand_name) values('$id', '$brand_name')";
        $result = $this->db->insert($query);
        //header('Location:category_list.php');
        return $result;
    }
    public function show_category(){
        $query = "select * from category order by id";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_category($id){
        $query = "select * from category where id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_category($tenspham, $id){
        $query = "update category set tenspham = '$tenspham' where id = '$id' ";
        $result = $this->db->update($query);
        header('Location:category_list.php');
        return $result;
    }
    public function del_category($id){
        $query ="delete from category where id='$id'";
        $result = $this->db->delete($query);
        header('Location:category_list.php');
        return $result;
    }
}
?>