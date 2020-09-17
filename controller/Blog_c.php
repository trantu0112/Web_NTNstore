<?php
include_once 'model/Blog_m.php';
class Blog_c extends Blog_m
{
    private $blog;
    function __construct()
    {
        $this->blog = new Blog_m();
    }

    public function blog(){
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }else{
            $page = 'blog';
        }

        switch ($page) {
            case 'blog-detail':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                $rs_detail_blog = $this->blog->getId_blog($id);
                }

                if (isset($_POST['sb_search'])) {
                    $keys = '%'.$_POST['keys'].'%';
                    $rs_blog = $this->blog->searchBlog($keys);
                    $count = count($rs_blog);
                    if ($count < 1){
                        echo "Không có bài viết nào được tìm thấy";
                    }
                }else{
                    $rs_blog = $this->blog->getBlog();
                }
                include_once 'views/blog-detail.php';
                break;
            default:
                $row = 6; // số tin một trang
                $number = count($this->blog->getNumberPost()); // Tổng số bản ghi
                $pagination = ceil($number/$row);

                if (isset($_GET['pages'])) {
                    $pages = $_GET['pages'];
                }else{
                    $pages = 1;
                }
                $from = ($pages - 1) * $row;
                $rs_blog = $this->blog->getPageBlog($from, $row);
                $count = count($rs_blog);

                include_once 'views/blog.php';
                break;
        }
    }
}
?>