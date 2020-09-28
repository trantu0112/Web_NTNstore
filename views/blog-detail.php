 <main class="ps-main">
      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
              <?php
              foreach ($rs_detail_blog as $key => $value) {
              ?>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  <div class="ps-post--detail">
                    <div class="ps-post__header">
                      <h3 class="ps-post__title"><?php echo $value['post_name'] ?></h3>
                        <i class="fa fa-clock-o"></i> -<span class="ml-5"><?php echo $value['dateTime'] ?></span>
                    </div>
                    <div class="ps-post__content">
                        <?php echo $value['content'] ?>
                    </div>
                    <div class="ps-post__footer">
                      <p class="ps-post__tags"><i class="fa fa-tags"></i><a href="adidas/1"> Adidas</a>,<a href="nike/1"> Nike</a>,<a href="vans/1"> Vans</a></p>
                      <div class="ps-post__actions">
                          <div class="fb-like" data-href="https://www.facebook.com/NTN-STORE-103288208184723" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                      </div>
                    </div>
                  </div>
                  <div class="ps-comments">
                      <div class="fb-comments" data-href="https://www.facebook.com/NTN-STORE-103288208184723" data-numposts="" data-width="1000"></div>
                      <div id="fb-root"></div>
                  </div>
                </div>
                  <?php
              }
              ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--sidebar ps-widget--search">
                    <form class="ps-search--widget" action="" method="POST" role="form">
                      <input class="form-control" name="keys" required="" type="text" placeholder="Tìm bài viết...">
                        <button type="submit" name="sb_search"><i class="ps-icon-search"></i></button>
                    </form>
                  </aside>
                  <aside class="ps-widget--sidebar">
                      <div class="ps-widget__header">
                          <h3>BÀI VIẾT KHÁC</h3>
                      </div>
                      <div class="scroll">
                      <?php
                      foreach ($rs_blog as $key => $value) {
                      ?>
                      <div class="ps-post mb-10">
                          <div class="ps-post__thumbnail"><img style="width: 400px; height: 200px;" src="admin/images/blog/<?php echo $value['post_avatar'] ?>" alt=""><a class="ps-post__overlay" href="blog-detail/<?php echo $value['id_post'].'/'.makeUrl($value['post_name']); ?>"></a></div>
                          <div class="ps-post__content"><a class="ps-post__title" href="blog-detail/<?php echo $value['id_post'].'/'.makeUrl($value['post_name']); ?>"><?php echo $value['post_name'] ?></a>
                              <p class="ps-post__meta"><i class="fa fa-clock-o"></i> -<span class="ml-5"><?php echo $value['dateTime'] ?></span></p>
                          </div>
                      </div>
                          <?php
                      }
                      ?>
                      </div>
                  </aside>
                    <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                        <h3 class="widget-title">Social Networks</h3>
                        <div class="textwidget custom-html-widget">
                            <a href="https://www.facebook.com/tu.taola.3/" target="_blank" rel="noopener noreferrer">
                                <img src="https://raw.githubusercontent.com/ngxson/storeData/master/email_icons/icons8-facebook-48.png" alt="Facebook">
                            </a>
                            &nbsp;&nbsp;
                            <a href="https://github.com/trantu0112" target="_blank" rel="noopener noreferrer">
                                <img src="https://raw.githubusercontent.com/ngxson/storeData/master/email_icons/icons8-github-48.png" alt="Github">
                            </a>
                            &nbsp;&nbsp;
                            <a href="https://www.instagram.com/tran.tu_zzz/" target="_blank" rel="noopener noreferrer">
                                <img style="width: 40px; height: 40px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/768px-Instagram_icon.png" alt="LinkedIn">
                            </a>
                        </div>
                    </div>
                    </aside>
                </div>
          </div>
        </div>
      </div>
    </main>