<?php
include_once 'config/myConfig.php';
/**
 *
 */
class Blog_m extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    //Danh sách bài viết
    public function getBlog(){
        $sql = "SELECT * FROM tbl_blog";
        $pre = $this->pdo->prepare($sql);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPageBlog($from, $row){
        $sql = "SELECT * FROM tbl_blog ORDER BY tbl_blog.id_post ASC LIMIT $from, $row";
        $pre = $this->pdo->prepare($sql);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    //Lấy bài viết theo id
    public function getId_blog($id){
        $sql = "SELECT * FROM tbl_blog WHERE id_post = :id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':id',$id);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    //Hàm tìm kiếm bài viết
    public function searchBlog($keys){
        $sql = "SELECT * FROM tbl_blog WHERE post_name like :keys";
        $pre = $this->pdo->prepare($sql);

        $pre->bindParam(':keys',$keys);
        $pre->execute();

        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    //Lấy số post
    public function getNumberPost(){
        $sql = "SELECT tbl_blog.id_post FROM tbl_blog";
        $pre = $this->pdo->prepare($sql);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>