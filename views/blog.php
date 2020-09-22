<main class="ps-main">
      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="BLOG" style="font-size: 40px; color: #2AC37D;">- BLOG</h3>
            </div>
          <div class="row">
              <?php
              foreach ($rs_blog as $key => $value) {
              ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                    <div class="ps-post__thumbnail"><img style="width: 450px; height: 300px;" src="admin/images/blog/<?php echo $value['post_avatar'] ?>" alt=""><a class="ps-post__overlay" href="blog-detail/<?php echo $value['id_post'].'/'.makeUrl($value['post_name']); ?>"></a></div>
                    <div class="ps-post__content"><a class="ps-post__title" href="blog-detail/<?php echo $value['id_post'].'/'.makeUrl($value['post_name']); ?>"><?php echo $value['post_name'] ?></a>
                      <p class="ps-post__meta"><i class="fa fa-clock-o"></i> -<span class="ml-5"><?php echo $value['dateTime'] ?></span></p>
                      <p><?php echo $value['description'] ?>…</p><a class="ps-morelink" href="blog-detail/<?php echo $value['id_post'].'/'.makeUrl($value['post_name']); ?>">Chi tiết bài viết<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                  <?php
              }
              ?>
          </div>
            <div class="ps-product-action">
                <div class="ps-pagination">
                    <ul class="pagination">
                        <li><a class="page-link" href="blog/<?php
                            if(isset($_GET['pages'])){
                                $page = $_GET['pages'];
                                if($page <= 1){
                                    echo $page;
                                }else{
                                    echo $page -= 1;
                                }
                            }
                            ?>"><i class="fa fa-angle-left"></i></a></li>
                        <?php
                        for ($i = 1; $i <= $pagination; $i++) {
                            ?>

                            <li <?php if (isset($_GET["pages"]) && $_GET["pages"] == $i) {echo 'class="active"';} ?>><a class="page-link" href="blog/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php
                        }
                        ?>
                        <li><a href="blog/<?php
                            if(isset($_GET['pages'])){
                                $page = $_GET['pages'];
                                if($page == $pagination){
                                    echo $page;
                                }else{
                                    echo $page += 1;
                                }
                            }
                            ?>"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </main>