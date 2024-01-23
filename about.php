<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about1.jpg" alt="gambar">
      </div>

      <div class="content">
         <h3>LATAR BELAKANG SYARIKAT</h3>
         <p>One Mart Advance Sdn Bhd (OMASB) merupakan sebuah syarikat yang menjalankan perniagaan secara runcit dan borong terhadap
            produk viral dan pelbagai barangan plastik. Syarikat ini juga giat dalam menjalankan perniagaan dalam platform SHOPEE dan LAZADA serta WALK IN di bahagian runcit.
            One Mart juga komited untuk memperkenalkan beberapa produk jualan yang baru dari semasa ke semasa.OMASB membekalkan beberapa barangan viral seperti gajus, kordial minuman 
            dan lain-lain produk berasaskan kekacang.Syarikat ini juga membekalkan keperluan peniaga seperti straw minuman, gelas air plastik pelbagai saiz serta lain-lain produk 
            plastik pembungkusan makanan dan minuman.Kebanyakan pelanggan akan membuat pembelian secara borong secara atas talian melalui platform SHOPEE atau WHATSAPP.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">customer's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/customer.png" alt="">
         <p>Harga sgt berbaloi.. waktu operasi pon memang sangat membantu peniaga untuk beli barang.. tiap2 hari buka👍</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>SIAKAP CHANNEL</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/customer2.png" alt="">
         <p>Terbaiklah harga mantap!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>muhammad muzzammil</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/user.png" alt="">
         <p>Harga berpatutan,banyak promosi dan layanan penjual pon mesra jee....Nanti repeat order...Recommended !!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>ahmad yassin</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/user.png" alt="">
         <p></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ahcong</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/user.png" alt="">
         <p></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>abu</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/user.png" alt="">
         <p></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ali</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>