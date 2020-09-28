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

    //Hàm tìm kiếm bài viết
    public function searchBlog($keys){
        $sql = "SELECT * FROM tbl_blog WHERE post_name like :keys";
        $pre = $this->pdo->prepare($sql);

        $pre->bindParam(':keys',$keys);
        $pre->execute();

        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    //Danh sách bài viết
    public function getBlog(){
        $sql = "SELECT * FROM tbl_blog";
        $pre = $this->pdo->prepare($sql);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getpageBlog($from, $row){
        $sql = "SELECT * FROM tbl_blog ORDER BY tbl_blog.id_post DESC LIMIT $from, $row";
        $pre = $this->pdo->prepare($sql);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    //Đếm số acc
    public function getNumber(){
        $sql = "SELECT tbl_blog.id_post FROM tbl_blog";
        $pre = $this->pdo->prepare($sql);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    //Thêm bài viết
    public function addBlog($post_avatar, $post_name, $description, $content, $dateTime  ){
        $sql = "INSERT INTO tbl_blog (post_avatar, post_name, description, content, dateTime) VALUES (:post_avatar, :post_name, :description, :content, :dateTime);";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':post_avatar',$post_avatar);
        $pre->bindParam(':post_name',$post_name);
        $pre->bindParam(':description',$description);
        $pre->bindParam(':content',$content);
        $pre->bindParam(':dateTime',$dateTime);
        if ($pre->execute()) {
            $_SESSION['noti-blog'] = 1;
            header('Location: index.php?page=list-blog');
        }else{
            echo "Thêm mới thất bại!";
        }
    }
    //Sửa bài viết
    public function editBlog($post_avatar, $post_name, $description, $content, $id_post){
        $sql = "UPDATE tbl_blog SET post_avatar = :post_avatar, post_name = :post_name, description = :description, content = :content WHERE id_post = :id_post;";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':post_avatar', $post_avatar);
        $pre->bindParam(':post_name', $post_name);
        $pre->bindParam(':description', $description);
        $pre->bindParam(':content', $content);
        $pre->bindParam(':id_post', $id_post);

        if ($pre->execute()) {
            unset($_SESSION['avatar']);
            unset($_SESSION['name']);
            unset($_SESSION['description']);
            unset($_SESSION['content']);
            $_SESSION['noti-blog'] = 2;
            header('Location: index.php?page=list-blog');
        }else{
            echo "Cập nhật thất bại";
        }
    }

    //Xóa bài viết
    public function delBlog($id_post){
        $sql = "DELETE FROM tbl_blog WHERE tbl_blog.id_post = :id_post";
        $pre = $this->pdo->prepare($sql);

        $pre->bindParam(':id_post',$id_post);

        if ($pre->execute()) {
            $_SESSION['noti-blog'] = 3;
            header('Location: index.php?page=list-blog');
        }else{
            echo "Không thể xóa!";
        }
    }

    //Xem chi tiết bài viết
    public function getDetail($id_post){
        $sql = "SELECT * FROM tbl_blog WHERE id_post = :id_post";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':id_post',$id_post);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>