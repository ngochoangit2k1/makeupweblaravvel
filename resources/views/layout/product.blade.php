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
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/reponsive.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/product.css">


  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.theme.green.css" />

</head>

<body>
  <div class="app">
    <!-- header  -->

    <div class="grid">
      @include('livewire/header')
    </div>
    
      <!-- end header  -->
      <div class="container-fluid">

        

        <div class="grid wide">
          <div class="row">
            <div class="col l-5 m-12 c-12">
                <div class="product__thumb">
                    <div class="product__thumb-img">
                        <img id="expandedImg" src="/assets/image/anh-21.png" alt="product 1">
                        <div class="product-item__thumb-sale">-15%</div>
                    </div>

                    <!-- <div id="product__thumb-gallery" class="owl-carousel owl-theme owl-loaded owl-drag">
                        //product item
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <img class="product-item__thumb-img"
                                    src="../assets/image/anh-1.png"
                                    alt="anh1" onclick="choiceImg(this)">
                            </div>

                        </div>
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <img class="product-item__thumb-img" src="/assets/image/anh-18.png"
                                    alt="anh1" onclick="choiceImg(this)">
                            </div>

                        </div>
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <img class="product-item__thumb-img" src="/assets/image/anh-19.png"
                                    alt="anh1" onclick="choiceImg(this)">
                            </div>

                        </div>
                       // end product item
                    </div> -->

                </div>
            </div>
            <!-- shop  -->
            <div class="col l-6 m-12 c-12">
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <div class="product">
                            <h1 class="product__name">6. Variable Product
                            </h1>
                            <ul class="product-item__ratting">
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>

                                <span class="spr-badge-caption">No reviews</span>
                            </ul>
                            
                            
                            <div class="product-item__price">
                                <span class="product-item__current-price">$50.00</span>
                                <span class="product-item__old-price">$ 60.00</span>
                            </div>
                            <div class="product-item__description">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                                et quas molestias excepturi sint occaecati cupiditate non provident,
                                similique sunt in culpa qui officia deserunt mollitia animi, id est
                                laborum et dolorum fuga.
                            </div>
                            <button class="btn-add-to-cart">Đặt dịch vụ</button>
                            
                            
                            
                            <div class="share-icon">
                                <span class="share-icon__title">Chia sẻ:</span>
                                <ul class="share-icon__list">
                                    <li class="share-icon__item"><a href="#"><i
                                                class="bi bi-facebook"></i></a></li>
                                    <li class="share-icon__item"><a href="#"><i
                                                class="bi bi-twitter"></i></a></li>
                                    <li class="share-icon__item"><a href="#"><i
                                                class="bi bi-google"></i></a></li>
                                    <li class="share-icon__item"><a href="#"><i
                                                class="bi bi-pinterest"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
         
         <!-- description -->

         <div class="row">
          <div class="tab-description">
              <div class="tabs">
                  <div class="tab-item active">
                      Mô tả
                  </div>
                  <div class="tab-item ">
                      Đánh giá
                  </div>
                  <div class="tab-item ">
                      Bình luận 
                  </div>

              </div>
              <div class="tab-content">
                  <div class="tab-pane active">
                      <!-- product description  -->
                      <div class="product-description" >
                          <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                              accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                              illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                              explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                              odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                              voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                              quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                              eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                              voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam
                              corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                              Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                              quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo
                              voluptas nulla pariatur?
                          </p>
                       
                      </div>
                      <!-- end product description -->
                  </div>
                    <div class="tab-pane">
                      <div class="product-reviews">
                          <h4 class="product-review__heading">Customer Reviews</h4>
                          <div class="product-reviews__summary">
                              <span>No reviews yet</span>
                              <span class="product-reviews__summary-comment">Write a review</span>
                          </div>
                          <div class="product-reviews__content">
                              <form action="" method="post" class="product-reviews__content-form">
                                  <h4 class="product-review__heading">Write a review</h4>
                                  <div class="form-group">
                                      <label class="form-label" for="name">Name</label>
                                      <input type="text" placeholder="Enter your name" id="name"
                                          class="form-input">
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label" for="Email">Email</label>
                                      <input type="email" placeholder="Enter your Email" id="Email"
                                          class="form-input" required>
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label" for="name">Rating</label>
                                      <span id="1" class="rating-star bi bi-star" onmouseover="startRating(this)"
                                          startRating="starmark(this)"></span>
                                      <span id="2" class="rating-star bi bi-star" onmouseover="startRating(this)"
                                          startRating="starmark(this)"></span>
                                      <span id="3" class="rating-star bi bi-star" onmouseover="startRating(this)"
                                          startRating="starmark(this)"></span>
                                      <span id="4" class="rating-star bi bi-star" onmouseover="startRating(this)"
                                          startRating="starmark(this)"></span>
                                      <span id="5" class="rating-star bi bi-star" onmouseover="startRating(this)"
                                          startRating="starmark(this)"></span>
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label" for="title">Review Title </label>
                                      <input type="text" placeholder="Give your review a title" id="title" class="form-input" required>
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label" for="body-comment">Body of Review <span class="characters">(1500)</span> </label>
                                      <textarea type="text" placeholder="Write your comments here" id="body-comment" class="form-input " maxlength="1500" required oninput="CountCharacters(this.value)" ></textarea>
                                  </div>
                                  <div class="form-group">
                                     <button class="btn contact__form-button">Submit Review</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                   </div>
                  <div class="tab-pane">
                     <!-- Load Facebook SDK for JavaScript -->
                     <div id="fb-root"></div>
                     <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0&appId=108588945444133&autoLogAppEvents=1" nonce="dEtOf5jv"></script>
<!-- Your embedded comments code -->
<div class="fb-comments" data-href="https://www.facebook.com/permalink.php?story_fbid=103656782473533&amp;id=103645515807993" data-width="90px" data-numposts="4"></div>
                  </div>
              </div>
          </div>
      </div>
         <!-- Dịch vụ khác  -->
          <div class="row">
            <div class="col l-12 m-12 c-12">
              <h2 class="heading-title">Dịch vụ khác</h2>
              
            </div>
            <div class="row">
              <div class="col l-3 m-6 c-6">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh-1.png" alt="" class="service-item__img">
                  </div>
                  <h2 class="service-item__heading">Trang điểm đẹp</h2>
                </div>
              </div>
              <div class="col l-3 m-6 c-6">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh-2.png" alt="" class="service-item__img">
                  </div>
                  <h2 class="service-item__heading">Trang điểm cô dâu</h2>
                </div>
              </div>
              <div class="col l-3 m-6 c-6">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh-3.png" alt="" class="service-item__img">
                  </div>
                  <h2 class="service-item__heading">Trang điểm đám cưới</h2>
                </div>
              </div>
              <div class="col l-3 m-6 c-6">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh-4.png" alt="" class="service-item__img">
                  </div>
                  <h2 class="service-item__heading">Trang điểm nhẹ nhàng</h2>
                </div>
              </div>
            </div>
          </div>
        </div>

        

        

       
      </div>

      @include('livewire/footer')
    </div>
  </div>
  <script></script>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/js/app.js"></script>
  <script src="/assets/js/product.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>

 
</body>

</html>