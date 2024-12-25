        <!-- Widget -->
        <div class="col-sm-3 hidden-xs" id="widget">
            <!-- Social Widget -->
            <section class="box wow fadeInDown" data-wow-duration="2s" id="social-widget">
                <h3 class="heading">Mạng Xã Hội</h3>
                <div class="content">
                    <a href="#" class="facebook">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="#" class="google">
                        <span class="fa fa-google-plus"></span>
                    </a>
                    <a href="#" class="twitter">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="#" class="youtube">
                        <span class="fa fa-youtube"></span>
                    </a>
                    <a href="#" class="instagram">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a href="#" class="pinterest">
                        <span class="fa fa-pinterest"></span>
                    </a>
                    <a href="#" class="rss">
                        <span class="fa fa-rss"></span>
                    </a>
                    <a href="#" class="google">
                        <span class="fa fa-google"></span>
                    </a>
                </div>
            </section>
            <!--/ Social Widget -->
            <!-- Search Widget -->
            <section class="box wow fadeInDown" data-wow-duration="2s" id="search-widget">
                <h3 class="heading">Tìm kiếm Blog</h3>
                <div class="content">
                    <form action="#" method="get">
                        <input type="text" name="search" class="input placeholder" placeholder="Tìm kiếm Blog" />
                        <!-- <button class="button" name="submit">Tìm</button> -->
                    </form>
                </div>

                <!-- <div class="container">
                    <?php
                    // if (isset($_POST['submit'])) {
                    //     $search = $_POST['search'];
                    //     // $sql = "Select * from 'posts' where id like '$search%' or title like '%$search%' or details like '%$search%'";
                    //     $sql = "Select * from 'posts' where id = '$search%'";
                    //     $result = mysqli_query($con, $sql);
                    //     $num = mysqli_num_rows($result);
                    //     echo $num;
                    // }
                    ?>
                </div> -->

            </section>
            <!--/ Search Widget -->
            <!-- Categories Widget -->
            <section class="box wow fadeInDown" data-wow-duration="2s" id="categories-widget">
                <h3 class="heading">Các Danh Mục</h3>
                <div class="content">
                    <?php foreach ($categories as $category) { ?>
                        <a href="<?php echo url('category/' . seo($category->name) . '/' . $category->id); ?>">
                            <span class="name"><?php echo $category->name; ?></span>
                            <span class="total-posts" title="Posts"><?php echo $category->total_posts; ?></span>
                        </a>
                    <?php } ?>
                </div>
            </section>
            <!--/ Categories Widget -->
            <!-- Popular Posts Widget -->
            <section class="box wow fadeInDown" data-wow-duration="2s" id="popular-posts-widget">
                <h3 class="heading">Bài Viết Phổ Biến</h3>
                <div class="content">
                    <a href="post/nh-ng-h-nh-nh-m-i-nh-t-trong-s-n-ph-m-m-nh-c-s-p-ra-m-t-c-a-s-n-t-ng-m-tp/11">
                        Những hình ảnh mới nhất trong sản phẩm âm nhạc sắp ra mắt của Sơn Tùng M-TP
                    </a>
                    <a href="post/tr-ng-cao-ng-k-thu-t-cao-th-ng-tuy-n-sinh-2024/13">
                        Trường Cao đẳng Kỹ thuật Cao Thắng tuyển sinh 2024
                    </a>
                    <a href="post/l-ch-thi-u-champions-league-real-madrid-leipzig-man-city-copenhagen/16">
                        Lịch thi đấu Champions League: Real Madrid - Leipzig, Man City - Copenhagen
                    </a>
                    <a href="post/en-hieuthuhai-t-ng-duy-t-n-tranh-gi-i-nam-ca-s-c-a-n-m-c-ng-hi-n/17">
                        Đen, HIEUTHUHAI, Tăng Duy Tân tranh giải Nam ca sĩ của năm ở Cống hiến
                    </a>
                </div>
            </section>

            <section class="box wow fadeInDown" data-wow-duration="2s" id="popular-posts-widget">
                <h3 class="heading">Bài Viết Mới Nhất</h3>
                <div class="content">
                    <?php foreach ($posts as $post) { ?>
                        <a href="<?php echo url('/blog/post' . seo($post->title) . '/' . $post->id); ?>">
                            <span class="name"><?php echo $post->title; ?></span>
                        </a>
                    <?php } ?>
                    <!-- <a href="post/nh-ng-h-nh-nh-m-i-nh-t-trong-s-n-ph-m-m-nh-c-s-p-ra-m-t-c-a-s-n-t-ng-m-tp/11">
                        Những hình ảnh mới nhất trong sản phẩm âm nhạc sắp ra mắt của Sơn Tùng M-TP
                    </a>
                    <a href="post/tr-ng-cao-ng-k-thu-t-cao-th-ng-tuy-n-sinh-2024/13">
                        Trường Cao đẳng Kỹ thuật Cao Thắng tuyển sinh 2024
                    </a>
                    <a href="post/l-ch-thi-u-champions-league-real-madrid-leipzig-man-city-copenhagen/16">
                        Lịch thi đấu Champions League: Real Madrid - Leipzig, Man City - Copenhagen
                    </a>
                    <a href="post/en-hieuthuhai-t-ng-duy-t-n-tranh-gi-i-nam-ca-s-c-a-n-m-c-ng-hi-n/17">
                        Đen, HIEUTHUHAI, Tăng Duy Tân tranh giải Nam ca sĩ của năm ở Cống hiến
                    </a> -->
                </div>
            </section>
            <!--/ Popular Posts Widget -->
            <!-- Ads Widget -->
            <section id="ads-widget" class="wow fadeInDown" data-wow-duration="2s">
                <?php foreach ($ads as $ad) { ?>
                    <a href="<?php echo $ad->link; ?>" class="ad" target="_blank">
                        <img src="<?php echo assets('images/' . $ad->image); ?>" alt="" />
                    </a>
                <?php } ?>
            </section>
            <!--/ Ads Widget -->
        </div>
        <!--/ Widget -->