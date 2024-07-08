<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>

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

    <div class="heading" style="background: url(images/header-bg-2.png)">
        <h1>Các gói du lịch</h1>
    </div>

    <!-- package start  -->
    <section class="packages">
        <h1 class="heading-title">Những điểm đến hấp dẫn</h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/tra-su.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chuyến phiêu lưu</h3>
                    <p>Chuyến phiêu lưu hết sức tuyệt vời</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt ngay</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/hu-tieu.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chuyến phiêu lưu</h3>
                    <p>Chuyến phiêu lưu hết sức tuyệt vời</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt ngay</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/vincom.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chuyến phiêu lưu</h3>
                    <p>Chuyến phiêu lưu hết sức tuyệt vời</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt ngay</a>
                </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="images/lang-hoa.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chuyến phiêu lưu</h3>
                    <p>Chuyến phiêu lưu hết sức tuyệt vời</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt ngay</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/bai-tam.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chuyến phiêu lưu</h3>
                    <p>Chuyến phiêu lưu hết sức tuyệt vời</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt ngay</a>
                </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="images/chua-ong.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chuyến phiêu lưu</h3>
                    <p>Chuyến phiêu lưu hết sức tuyệt vời</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt ngay</a>
                </div>
            </div>

        </div>
        
        <div class="load-more"><span class="btn">Đọc thêm</span></div>

    </section>
    <!-- package end -->
 
     
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
