<?php 
    include "database.php";

?>
<?php 
class category_add{
    private $db;
    public function __construct(){
        $this-> db = new Database();
    }
    public function insert_category($category_name){
        $query = "insert into category (tenspham) values('$category_name')";
        $result = $this->db->insert($query);
        return $result;
    }
}
?>