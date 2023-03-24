<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellie</title>
  <base href="{{asset('')}}">
  <link rel="shortcut icon" href="/assets/image/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/grid.css">

  <link rel="stylesheet" href="/assets/css/blog-details.css">

  <link rel="stylesheet" href="/assets/css/reponsive.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/customer.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.theme.green.css" />

</head>

<body>
  <div class="app">


    <!-- header  -->
    
         
            
    @include('livewire/header')
    <!-- end header  -->


    <!-- Main -->
    <div class="grid wide customer">
        <div class="row">
            <!-- Blog details left -->
            <div class="col l-9 m-12 c-12 grid"> 
                <!-- Cây danh mục -->
                <div class="tree">
                    <p> <a href="#!">Trang chủ</a>
                        <span>/</span>
                        <a href="blog.html">Tin tức </a>
                        <span>/</span>
                        <a href="#!">Bài viết 1</a>
                    </p>
                </div>
                <!-- Cây danh mục -->


                <!-- Bài viết -->
                <div class="row">
                    <!-- Ảnh slide -->
                    <div class="col l-12 m-12 c-12  ">
                        <div class="owl-carousel owl-theme owl-loaded">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div class="banner">
                                            <img class="banner__img" src="/assets/image/banner.png" alt="">
        
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="banner">
                                            <img class="banner__img" src="/assets/image/banner.png" alt="">
        
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="banner">
                                            <img class="banner__img" src="/assets/image/banner.png" alt="">
        
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
                    </div>
                    <!-- Bài viết -->
                    <div class="col l-12 m-12 c-12 ">
                        <!-- <div class="col l-8 m-12 c-12 "> -->
                            <div class="single-post">
        
                                <div class="single-post__wrap">
                                    <div class="single-post__inner">
                                        <div class="single-post__date">
                                            <span class="day">01</span>
                                            <span class="month">Jan</span>
                                        </div>
                                        <div class="single-post__info">
                                            <div class="single-post_header">
                                                <h1>Contrary to popular belief, lorem ipsum is not text</h1>
                                            </div>
                                            <div class="single-post_meta">
                                                <span>MooBoo Demo Admin </span>
                                            </div>
                                            <div class="single-post_content">
                                                <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius
                                                    enim nec quam tempor, sed efficitur ex ultrices. Phasellus
                                                    pretium est vel dui vestibulum condimentum. Aenean nec suscipit
                                                    nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur
                                                    lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                    iaculis lacus sem non lorem. Duis suscipit metus ante, sed
                                                    convallis quam posuere quis. Ut tincidunt eleifend odio, ac
                                                    fringilla mi vehicula nec. Nunc vitae lacus eget lectus
                                                    imperdiet tempus sed in dui. Nam molestie magna at risus
                                                    consectetur, placerat suscipit justo dignissim. Sed vitae
                                                    fringilla enim, nec ullamcorper arcu.</p>
                                                <blockquote>
                                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                        consectetur. In venenatis elit ac ultrices convallis. Duis
                                                        est nisi, tincidunt ac urna sed, cursus blandit lectus. In
                                                        ullamcorper sit amet ligula ut eleifend. Proin dictum tempor
                                                        ligula, ac feugiat metus. Sed finibus tortor eu scelerisque
                                                        scelerisque.</p>
                                                </blockquote>
                                                <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius
                                                    enim nec quam tempor, sed efficitur ex ultrices. Phasellus
                                                    pretium est vel dui vestibulum condimentum. Aenean nec suscipit
                                                    nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur
                                                    lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                    iaculis lacus sem non lorem. Duis suscipit metus ante, sed
                                                    convallis quam posuere quis. Ut tincidunt eleifend odio, ac
                                                    fringilla mi vehicula nec. Nunc vitae lacus eget lectus
                                                    imperdiet tempus sed in dui. Nam molestie magna at risus
                                                    consectetur, placerat suscipit justo dignissim. Sed vitae
                                                    fringilla enim, nec ullamcorper arcu.</p>
                                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra
                                                    nibh. In dignissim vitae lorem non mollis. Praesent pretium
                                                    tellus in tortor viverra condimentum. Nullam dignissim facilisis
                                                    nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi
                                                    a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit.
                                                    Curabitur sagittis quam quis consectetur mattis. Aenean sit amet
                                                    quam vel turpis interdum sagittis et eget neque. Nunc ante quam,
                                                    luctus et neque a, interdum iaculis metus. Aliquam vel ante
                                                    mattis, placerat orci id, vehicula quam. Suspendisse quis eros
                                                    cursus, viverra urna sed, commodo mauris. Cras diam arcu,
                                                    fringilla a sem condimentum, viverra facilisis nunc. Curabitur
                                                    vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin
                                                    molestie.</p>
                                            </div>
                                            <div class="single-post_meta">
        
                                                <span><a
                                                        href="/blogs/news/contrary-to-popular-belief-lorem-ipsum-is-not-text#comments">
                                                        0 comments</a> /</span>
        
        
        
        
                                                <span>Tags :</span>
        
                                                <span><a href="/blogs/news/tagged/bag">Bag</a> ,</span>
        
                                                <span><a href="/blogs/news/tagged/clean">Clean</a> ,</span>
        
                                                <span><a href="/blogs/news/tagged/fashion">Fashion</a> ,</span>
        
                                                <span><a href="/blogs/news/tagged/jacket">Jacket</a> ,</span>
        
                                                <span><a href="/blogs/news/tagged/minimal">Minimal</a> ,</span>
        
                                                <span><a href="/blogs/news/tagged/shoes">Shoes</a> </span>
        
        
                                            </div>
                                            <div class="single-post__social-sharing">
        
        
                                                <h3 class="single-post__social-sharing__heading">Share this post</h3>
        
                                                <ul class="single-post__social-sharing__links">
                                                    <li><a href="//www.facebook.com/sharer.php?u=https://mooboo-demo.myshopify.com/blogs/news/contrary-to-popular-belief-lorem-ipsum-is-not-text"
                                                            title="Follow us on Facebook" target="_blank"><i
                                                                class="bi bi-facebook"></i></a></li>
                                                    <li><a href="//twitter.com/share?text=Contrary%20to%20popular%20belief,%20lorem%20ipsum%20is%20not%20text&amp;url=https://mooboo-demo.myshopify.com/blogs/news/contrary-to-popular-belief-lorem-ipsum-is-not-text;source=webclient"
                                                            title="Follow us on Twitter" target="_blank"><i
                                                                class="bi bi-twitter"></i></a></li>
                                                    <li><a href="//plus.google.com/share?url=https://mooboo-demo.myshopify.com/blogs/news/contrary-to-popular-belief-lorem-ipsum-is-not-text"
                                                            title="Share on Google+" target="_blank"><i
                                                                class="bi bi-google"></i></a></li>
        
                                                    <li><a href="//pinterest.com/pin/create/button/?url=https://mooboo-demo.myshopify.com/blogs/news/contrary-to-popular-belief-lorem-ipsum-is-not-text&amp;media=http://cdn.shopify.com/s/files/1/0162/4018/1312/articles/2_1024x1024.jpg?v=1546416875&amp;description=Contrary%20to%20popular%20belief,%20lorem%20ipsum%20is%20not%20text"
                                                            title="Follow us on Pinterest" target="_blank"><i
                                                                class="bi bi-pinterest"></i></a></li>
        
                                                </ul>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div id="comments" class="comment-success">
                                        <div class="comments_form">
                                            <form method="post"
                                                action="/blogs/news/contrary-to-popular-belief-lorem-ipsum-is-not-text/comments#comment_form"
                                                id="comment_form" accept-charset="UTF-8" class="comment-form"><input type="hidden"
                                                    name="form_type" value="new_comment"><input type="hidden" name="utf8" value="✓">
        
                                                <h3 class="comments__heading">Leave a Reply</h3>
                                                <p class="comments__text">Your email address will not be published.</p>
                                                <div class="row">
                                                    <div class="col l-12 m-12 c-12">
                                                        <label class="comment__label" for="review_comment">Comment </label>
                                                        <textarea class="custom-textarea" name="comment[body]" id="commentBody"
                                                            placeholder="Message" rows="7"></textarea>
                                                    </div>
                                                    <div class="col l-6 m-6 c-12">
                                                        <!-- <label class="comment__label" for="author">Name</label> -->
                                                        <input type="text" class="custom-input" name="comment[author]"
                                                            id="commentAuthor" value="" placeholder="Name">
                                                    </div>
                                                    <div class="col l-6 m-6 c-12">
                                                        <!-- <label class="comment__label" for="email">Email </label> -->
                                                        <input type="text" class="custom-input" name="comment[email]"
                                                            id="commentEmail" value="" placeholder="Email">
                                                    </div>
                                                </div>
        
        
        
                                                <button class="button blog_comment_btn" type="submit">Post
                                                    comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        <!-- </div> -->
                    </div>
                </div>
                <!-- Bài viết -->


                <!-- Tin liên quan -->
                <div class="grid col l-12">
                    <div class="col l-12 m-6 c-6">
                        <p class="blog-details__heading">Bài viết liên quan</p>
                    </div>
                
                    <div class="row">
                        <div class="col l-12 m-12 c-12">
                            <!-- Post -->
                            <div class="row">
                                <div class="col l-6 m-12 c-12">
                                    <div class="blog-post">
                                        <div class="blog-post__item">
                
                                            <div class="blog-post__item-thumb">
                                                <a href="blog-details.html"><img src="/assets/image/anh-19.png" alt=""
                                                        class="blog-post__item-img"></a>
                                            </div>
                
                                            <div class="blog-post__item-content">
                                                <a href="blog-details.html">
                                                    <h3 class="blog-post__item-content__title">London fashion week 360° candy
                                                        rock & royal fashion day</h3>
                                                </a>
                
                                                <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                    sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                    ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                    nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                    Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                    iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                    quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                    nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                    molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                    Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col l-6 m-12 c-12">
                                    <div class="blog-post">
                                        <div class="blog-post__item">
                
                                            <div class="blog-post__item-thumb">
                                                <a href="blog-details.html"><img src="/assets/image/anh-19.png" alt=""
                                                        class="blog-post__item-img"></a>
                                            </div>
                
                                            <div class="blog-post__item-content">
                                                <a href="blog-details.html">
                                                    <h3 class="blog-post__item-content__title">London fashion week 360° candy
                                                        rock & royal fashion day</h3>
                                                </a>
                
                                                <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                    sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                    ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                    nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                    Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                    iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                    quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                    nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                    molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                    Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post -->
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col l-12 m-12 c-12">
                            <!-- Post -->
                            <div class="row">
                                <div class="col l-6 m-12 c-12">
                                    <div class="blog-post">
                                        <div class="blog-post__item">
                
                                            <div class="blog-post__item-thumb">
                                                <a href="blog-details.html"><img src="/assets/image/anh-19.png" alt=""
                                                        class="blog-post__item-img"></a>
                                            </div>
                
                                            <div class="blog-post__item-content">
                                                <a href="blog-details.html">
                                                    <h3 class="blog-post__item-content__title">London fashion week 360° candy
                                                        rock & royal fashion day</h3>
                                                </a>
                
                                                <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                    sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                    ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                    nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                    Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                    iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                    quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                    nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                    molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                    Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col l-6 m-12 c-12">
                                    <div class="blog-post">
                                        <div class="blog-post__item">
                
                                            <div class="blog-post__item-thumb">
                                                <a href="blog-details.html"><img src="/assets/image/anh-19.png" alt=""
                                                        class="blog-post__item-img"></a>
                                            </div>
                
                                            <div class="blog-post__item-content">
                                                <a href="blog-details.html">
                                                    <h3 class="blog-post__item-content__title">London fashion week 360° candy
                                                        rock & royal fashion day</h3>
                                                </a>
                
                                                <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                    sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                    ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                    nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                    Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                    iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                    quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                    nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                    molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                    Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post -->
                        </div>
                    </div>
                </div>
                <!-- Tin liên quan -->


                <!-- Form contact -->
                <div class="grid wide form-contact">
            <div class="row ">
                <div class="col l-12 m-12 c-12">
                    <h2 class="form-heading">Để lại thông tin để được tư vấn</h2>
                    <p class="form-descriptions">Vui lòng điền thông tin dưới đây, chúng tôi sẽ liên hệ lại để tư vấn cho
                        bạn
                    </p>
                    <form action="" class="row">
                        <div class="col l-6 m-6 c-12">
                            <input type="text" placeholder="Họ và tên">
                        </div>
                        <div class="col l-6 m-6 c-12">
                            <input type="text" placeholder="Số điện thoại">
                        </div>
                        <div class="col l-12 m-12 c-12">
                            <input type="text" placeholder="Email/Facebook nếu có ">
                        </div>
                        <div class="col l-12 m-12 c-12">
                            <input type="text" placeholder="Nội dung">
                        </div>
                        <div class="col l-12 m-12 c-12">
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                <!-- Form contact -->
            </div>
            <!-- Blog details left-->

            <!-- Category right -->
            <div class="col l-3 grid hide-on-mobile-tablet">
                <div class="row">
                    <div class="category-link category-fuild__tables col l-12">
                        <a href="#!" class="list-group-item">Trang chủ</a>
                        <a href="#!" class="list-group-item">Tin tức</a>
                        <a href="#!" class="list-group-item">Dịch vụ</a>
                        <a href="#!" class="list-group-item">Liên hệ</a>
                    </div>
                
                    <div class="category-fuild__tables col l-12">
                        <div class="row">
                            <div class="col l-12 m-12 c-12">
                                <p class="category-details__heading">Dịch vụ trang điểm</p>
                            </div>

                            <div class="col l-12 m-12 c-12">
                                <a href="#!" class="list-group-makeup">Trang điểm sinh nhật</a>
                                <a href="#!" class="list-group-makeup">Trang điểm kỉ yếu</a>
                                <a href="#!" class="list-group-makeup">Trang điểm tiệc cưới</a>
                                <a href="#!" class="list-group-makeup">Trang điểm theo nhu cầu</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="category-fuild__tables col l-12">
                        <div class="row">
                            <div class="col l-12 m-12 c-12">
                                <p class="category-details__heading">Khóa học trang điểm</p>
                            </div>
                            <div class="col l-12 m-12 c-12">
                                <a href="#!" class="list-group-course">Khóa học makeup 1</a>
                                <a href="#!" class="list-group-course">Khóa học makeup 2</a>
                                <a href="#!" class="list-group-course">Khóa học makeup 3</a>
                                <a href="#!" class="list-group-course">Khóa học makeup 4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category right -->
        </div>
    </div>
    <!-- Main -->


    <!-- footer  -->
    @include('livewire/footer')
    <!-- end footer  -->


    </div>

  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/js/app.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
</body>
</html>