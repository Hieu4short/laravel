<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css') }}"/>

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}" />

    <!-- file css link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- bootstrap library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="{{ url('/') }}" class="logo">Hieu Travel</a>

        <nav class="navbar">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/package') }}">Package</a>
            <a href="{{ url('/book') }}">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    <div class="heading" style="background: url(images/cau-can-tho-1.jpg)">
        <h1>Về chúng tôi</h1>
    </div>

    <!-- about start  -->
     <section class="about">
        <div class="image">
            <img src="images/sheraton.jpg" alt="">
        </div>

        <div class="content">
            <h3>Tại sao bạn nên lựa chọn chúng tôi?</h3>
            <p>Kỳ nghỉ tuyệt vời bắt đầu từ đây.</p>
            <p>Khám phá thành phố Cần Thơ với Hieu Travel - nơi cung cấp các chuyến đi độc đáo và phong phú với mức giá phải chăng. Tận hưởng dịch vụ hướng dẫn chuyên nghiệp mọi lúc, mọi nơi để biến mỗi kỳ nghỉ của bạn thành một trải nghiệm đáng nhớ.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>Những điểm đến hấp dẫn nhất</span>
                </div>

                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Giá cả phải chăng</span>
                </div>            


                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>Dịch vụ hướng dẫn 24/7</span>
                </div>

            </div>
        </div>
     </section>
    <!-- about end -->

    <!-- review start -->
    <section class="reviews">

    <h1 class="heading-title">Khách hàng đánh giá</h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Một chuyến đi tuyệt vời</p>
                <h3>Mr. Hiếu</h3>
                <span>Traveler</span>
                <img src="images/pic-1.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Một chuyến đi tuyệt vời</p>
                <h3>Ms. Nhung</h3>
                <span>Traveler</span>
                <img src="images/pic-2.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Một chuyến đi tuyệt vời</p>
                <h3>Mr. Trung</h3>
                <span>Traveler</span>
                <img src="images/pic-3.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Một chuyến đi tuyệt vời</p>
                <h3>Ms. Anh</h3>
                <span>Traveler</span>
                <img src="images/pic-4.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Một chuyến đi tuyệt vời</p>
                <h3>Mr. Thanh</h3>
                <span>Traveler</span>
                <img src="images/pic-5.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Một chuyến đi tuyệt vời</p>
                <h3>Ms. Lam</h3>
                <span>Traveler</span>
                <img src="images/pic-6.png" alt="">
            </div>
        </div>
    </div>
    </section>
    <!-- review end -->     
 
     
    <!-- footer start -->
     <section class="footer">
         <div class="box-container">

            <div class="box">
                <h3>Đường dẫn</h3>
                <a href="{{ url('/') }}"><i class="fas fa-angle-right"></i>home</a>
                <a href="{{ url('/about') }}"><i class="fas fa-angle-right"></i>about</a>
                <a href="{{ url('/package') }}"><i class="fas fa-angle-right"></i>package</a>
                <a href="{{ url('/book') }}"><i class="fas fa-angle-right"></i>book</a>
            </div>


            <div class="box">
                <h3>Liên kết phụ</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Đặt câu hỏi</a>
                <a href="#"><i class="fas fa-angle-right"></i>Về chúng tôi</a>
                <a href="#"><i class="fas fa-angle-right"></i>Chính sách bảo mật</a>
                <a href="#"><i class="fas fa-angle-right"></i>Điều khoản sử dụng</a>
            </div>


            <div class="box">
                <h3>Thông tin liên lạc</h3>
                <a href="#"><i class="fas fa-phone"></i>0911-60-10-55</a>
                <a href="#"><i class="fas fa-phone"></i>02923-11-86-86</a>
                <a href="#"><i class="fas fa-envelope"></i>hieutravel@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Can Tho, Viet Nam</a>
            </div>
            
            <div class="box">
                <h3>Theo dõi chúng tôi</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>         
            
         </div>

         <div class="credit"> Created by <span>hieuTravel</span></div>

     </section>
    <!-- footer end -->    
     

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- file js -->
     <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
