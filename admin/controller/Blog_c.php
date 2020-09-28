<?php
include_once 'model/Blog_m.php';
class Blog_c extends Blog_m
{
    private $blog;
    function __construct()
    {
        $this->blog = new Blog_m();
    }

    public function product(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }else{
            $method = 'list';
        }

        switch ($method) {
            case 'detail':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $rs_blog = $this->blog->getDetail($id);
                }
                include_once 'views/blog/detail-blog.php';
                break;
            case 'del':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $this->blog->delBlog($id);
                }
                break;
            case 'edit':
                $rs_blog = $this->blog->getBlog();
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    foreach ($rs_blog as $key => $value) {
                        if ($id == $value['id_post']) {
                            $_SESSION['name'] = $value['post_name'];
                            $_SESSION['avatar'] = $value['post_avatar'];
                            $_SESSION['content'] = $value['content'];
                            $_SESSION['description'] = $value['description'];
                            $avatar_o = $value['post_avatar'];
                        }
                    }
                }
                if (isset($_POST['sm_edit'])) {
                    $name = $_POST["name"];
                    $description = $_POST["description"];
                    $content = $_POST["content"];

                    $file = $_FILES['avatar'];
                    $avatar_n = $file['name'];
                    if ($avatar_n == '') {
                        $avatar = $avatar_o;
                    }else{
                        $avatar_n = $avatar_o;
                        $avatar = $avatar_n;
                    }

                    // Check file img
                    $check = getimagesize($file['tmp_name']);
                    if ($check == true ) {
                        move_uploaded_file($file["tmp_name"], "images/blog/".$avatar);
                        $this->blog->editBlog($avatar, $name, $description, $content, $id);
                    }else{
                        echo "Không xác định được ảnh!";
                    }
                }
                include_once 'views/blog/edit-blog.php';
                break;
            case 'add':
                if (isset($_POST['sm_add'])) {
                    $name = $_POST["name"];
                    $description = $_POST["description"];
                    $content = $_POST["content"];
                    $dateTime = date("d/m/Y");

                    $file = $_FILES['avatar'];
                    $avatar = $file['name'];

                    // Check file img
                    $check = getimagesize($file['tmp_name']);
                    if ($check == true ) {
                        move_uploaded_file($file["tmp_name"], "images/blog/".$avatar);
                        $this->blog->addBlog($avatar, $name, $description, $content, $dateTime);
                    }else{
                        echo "Không xác định được ảnh!";
                    }
                }
                include_once 'views/blog/add-blog.php';
                break;
            default:
                if (isset($_POST['sb_search'])) {
                    $keys = '%'.$_POST['keys'].'%';
                    $row = 8; // số tin một trang
                    $number = count($this->blog->getNumber()); // Tổng số bản ghi
                    $pagination = ceil($number/$row);

                    if (isset($_GET['pages_sr'])) {
                        $pages = $_GET['pages_sr'];
                    }else{
                        $pages = 1;
                    }
                    $from = ($pages - 1) * $row;
                    $rs_blog = $this->blog->searchBlog($keys, $from, $row);
                    $count = count($rs_blog);
                    if ($count < 1){
                        echo "Không có bài viết nào được tìm thấy";
                    }
                }else{
                    $row = 10; // số tin một trang
                    $number = count($this->blog->getNumber()); // Tổng số bản ghi
                    $pagination = ceil($number/$row);

                    if (isset($_GET['pages'])) {
                        $pages = $_GET['pages'];
                    }else{
                        $pages = 1;
                    }

                    $from = ($pages - 1) * $row;
                    $rs_blog = $this->blog->getpageBlog($from, $row);
                }

                include_once 'views/blog/list-blog.php';
                break;
        }
    }
}
?>