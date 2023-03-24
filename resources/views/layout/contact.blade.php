<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellie</title>
  <link rel="shortcut icon" href="/assets/image/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/grid.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/reponsive.css">
  <link rel="stylesheet" href="/assets/css/header.css">

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
           
              
      <div>
         
              <input type="checkbox" class="menu-toggle" id="menu-toggle">
              <div class="mobile-bar">
                  <label for="menu-toggle" class="menu-icon">
                      <span></span>
                  </label>
              </div>
              
              <header class="header">
                  <nav>
                      <ul>
                          <li><a href="../index.html">Trang chủ</a></li>

                        

                          <li><a href="#about">Giới thiệu</a></li>
                          <li><a href="#contact">Liên hệ</a></li>

                          <li><a href="pages/blog.html">Tin tức</a></li>
                          <li>
                              <a href="#service">
                                  <p>Dịch vụ</p>
                              </a>
                          </li>
                      </ul>
                  </nav>

              </header>
              
              <a class="navbar-brand logo" href="#" style="padding:0px;">
                <img src="/assets/image/logo.png" alt="" class="header-main__logo">
                <!-- <p class="logo"> Make up & Beauty</p>
                <p class="logo"> Trang điểm chuyên nghiệp Đà Nẵng</p> -->
              </a>
             
      </div>
  
</div>

    <div class="grid">
      
      <!-- end header  -->
      <div class="container-fluid">
        <div class="grid wide">
            <div class="row contact">
                <div class="col l-6 m-12 c-12">
                    <h2 class="contact__heading ">Contact Us
                    </h2>
                    <p class="contact__description">Claritas est etiam processus dynamicus, qui sequitur
                        mutationem consuetudium lectorum.
                    </p>
                    <p class="contact__address"><i class="bi bi-geo-alt"></i> Address : No 40 Baria Sreet 133/2 NewYork City</p>
                    <p class="contact__address"><i class="bi bi-telephone"></i>  0123456789</p>
                    <p class="contact__address"><i class="bi bi-envelope"></i> info@example.com</p>
               
                </div>
                <!-- shop  -->
                <div class="col l-6 m-12 c-12">
                    <h2 class="contact__heading mt-4">Tell Us Your Project</h2>
                   <form class="contact__form" action="#" method="post">
                    <input class="contact__form-input" type="text" placeholder="Name *">
                    <input class="contact__form-input" type="email" placeholder="Email *">
                    <input class="contact__form-input" type="text" placeholder="Subject *">
                    <textarea class="contact__form-input" type="text" placeholder="Message *" cols="5" rows="4"></textarea>
                    <button class="contact__form-button">Send Message</button>
    
                   </form>
                </div>
               
            </div>
            <div class="row contact__map">
                <div class="col l-12 m-12 c-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d43547.37934045359!2d108.8429068258228!3d15.26338318905685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1673256266804!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div >
       
      </div>
      @include('livewire/footer')
    </div>
  </div>
  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/js/app.js"></script>
</body>

</html>