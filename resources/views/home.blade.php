<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }   

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            display: flex;   
            justify-content: flex-end;
            align-items: center;
            padding: 10px 0;
            background-color: #fff;
            margin-bottom: 0;
        }

        .header nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #000;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            text-align: left;
            float: left;
        }

        .content {
            display: flex;
            align-items: center;
        }

        .content .text {
            flex: 1;
        }

        .content img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
            align-self: flex-start;
        }

        .content .text h1 {
            font-size: 48px;
            margin-top: 0;
        }

        .content .text p {
            font-size: 18px;
        }

        .about {
            color: #000;
            padding: 60px 60px;
            background-color: #f5f5f5;
        }

        .about h2 {
            font-size: 36px;
            color: #000;
        }

        .about p {
            font-size: 18px;
            color: #000;
            max-width: 600px;
            margin: 0 auto;
            margin-bottom: 40px;
        }

        .dishes {
            margin-top: 40px;
        }

        .dishes-background {
            background: url('bg-tntang.png') no-repeat center;
            background-size: cover;
            padding: 100px 60px;
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }

        .dish .card {
            background-color: #FFFFFF;
            border-radius: 5%;
            margin: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .dish .card img {
            width: 80%;
            height: auto;
            border-radius: 100%;
            margin-top: -100px;
        }

        .dish .card-body {
            padding: 2px;
            background-color: #FFFFFF;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .dish .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 5px;
            color: #000;
            border-radius: 50%;
            text-align: center;
            justify-content: center;
        }

        .dish .card-text {
            font-size: 15px;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .news h2 {
            font-size: 36px;
        }

        .news-item .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            color: #FFFFFF;
        }

        .news-item p {
            font-size: 14px;
            color: #666;
        }

        .line {
            border-top: 3px solid #000;
            width: 150px;
            margin: 40px auto 0;
        }

        .btn-dark {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-transform: uppercase;
        }

        .btn-dark:hover {
            background-color: #333;
            color: #fff;
        }

        .dishes .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .dish {
            flex: 0 0 24%;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .news {
            margin-top: 60px;
        }

        .news .row {
            display: flex;
            justify-content: space-between;
        }

        .news-item {
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .news-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px 5px 0 0;
        }

        .news-item .card-body {
            padding: 20px;
        }

        .news-item h3 {
            font-size: 18px;
            margin: 15px 0;
        }

        .news-item .btn-link {
            color: #FFA500;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }

        .news-item .btn-link:hover {
            text-decoration: none;
            color: #FF8C00;
        }

        .gallery {
            margin-top: 60px;
        }

        .gallery .row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .gallery .col-md-4 {
            flex: 0 0 calc(33.333% - 10px);
            box-sizing: border-box;
        }

        .gallery img {
            width: 87%;
            height:300px;
            border-radius: 5px;
            object-fit: cover;
        }

        .btn-more {
            display: block;
            width: 200px;
            margin: 30px auto;
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-more:hover {
            background-color: #333;
            color: #fff;
        }

        .footer {
    background-color: #000;
    color: #fff;
    padding: 40px 0;
}

.footer h5 {
    font-size: 18px;
    margin-bottom: 20px;
}

.footer p {
    font-size: 14px;
    line-height: 1.6;
}

.footer ul {
    list-style: none;
    padding: 0;
}

.footer ul li {
    margin-bottom: 10px;
}

.footer ul li a {
    color: #fff;
    text-decoration: none;
}

.footer ul li a:hover {
    text-decoration: underline;
}

.footer .text-center {
    margin-top: 20px;
}

.footer a img {
    width: 24px;
    margin-right: 10px;
}


    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="d-flex justify-content-between align-items-center">
            <h1><b> TASTY FOOD </b></h1>
                <nav>
                    <a href="#">HOME</a>
                    <a href="/tentang">TENTANG</a>
                    <a href="/berita">BERITA</a>
                    <a href="/gallery">GALERI</a>
                    <a href="/kontak">KONTAK</a>
                </nav>
            </div>
        </header>

        <div class="content row align-items-center my-5">
            <div class="col-md-6 text-left">
                <div class="line"></div>
                <h1>HEALTHY <br> <strong>TASTY FOOD</strong></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                <a href="#tentang-kami" class="btn btn-dark">TENTANG KAMI</a>
            </div>
            <div class="col-md-6">
                <img src="home.png" alt="Healthy Tasty Food" class="img-fluid">
            </div>
        </div>

        <div id="tentang-kami" class="about text-center my-5">
            <h2>TENTANG KAMI</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
            <div class="line"></div>
        </div>

          <div class="container">
            <div class="dishes row justify-content-center">
                <div class="col-md-4 dish">
                    <div class="card">
                        <img src="img-1.png" alt="Dish 1" class="img-fluid rounded-circle">
                        <div class="card-body">
                            <h3 class="card-title">LOREM IPSUM</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
    </div>
                    </div>
                </div>
                <div class="col-md-4 dish">
                    <div class="card">
                        <img src="img-2.png" alt="Dish 2" class="img-fluid rounded-circle">
                        <div class="card-body">
                            <h3 class="card-title">LOREM IPSUM</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 dish">
                    <div class="card">
                        <img src="img-3.png" alt="Dish 3" class="img-fluid rounded-circle">
                        <div class="card-body">
                            <h3 class="card-title">LOREM IPSUM</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 dish">
                    <div class="card">
                        <img src="img-4.png" alt="Dish 4" class="img-fluid rounded-circle">
                        <div class="card-body">
                            <h3 class="card-title">LOREM IPSUM</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="news my-5">
            <h2 class="text-center">BERITA KAMI</h2>
            <div class="news-grid row">
                <div class="news-item col-md-6">
                    <div clas="card">
                    <img src="brt-1.jpg" alt="Berita 1" class="card-img-top">
                    <div class="card-body">
                        <h3>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum...</p>
                        <a href="#" class="btn btn-link">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        <div class="col-md-6">
            <div class="row">
                <div class="news-item col-md-6">
                    <div class="card">
                        <img src="brt-2.jpg" alt="Berita 2" class="card-img-top">
                        <div class="card-body">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo...</p>
                            <a href="#" class="btn btn-link">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="news-item col-md-6">
                    <div class="card">
                        <img src="brt-3.jpg" alt="Berita 3" class="card-img-top">
                        <div class="card-body">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo...</p>
                            <a href="#" class="btn btn-link">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="news-item col-md-6">
                    <div class="card">
                        <img src="brt-4.jpg" alt="Berita 4" class="card-img-top">
                        <div class="card-body">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo...</p>
                            <a href="#" class="btn btn-link">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="news-item col-md-6">
                    <div class="card">
                        <img src="brt-5.jpg" alt="Berita 5" class="card-img-top">
                        <div class="card-body">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo...</p>
                            <a href="#" class="btn btn-link">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="container">
                <h2 class="text-center my-5">GALERI KAMI</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="glry1.jpg" alt="Gallery Image 1" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="glry2.jpg" alt="Gallery Image 2" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="glry3.jpg" alt="Gallery Image 3" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="glry4.jpg" alt="Gallery Image 4" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="glry5.jpg" alt="Gallery Image 5" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="glry6.jpg" alt="Gallery Image 6" class="img-fluid">
                    </div>
                </div>
                <a href="#" class="btn-more">Lihat Lebih Banyak</a>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Tasty Food</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div>
                    <a href="#"><img src="001-facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="002-twitter.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="col-md-3">
                <h5>Useful Links</h5>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Hewan</a></li>
                    <li><a href="#">Galeri</a></li>
                    <li><a href="#">Testimonial</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Privacy</h5>
                <ul>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                    <li><a href="#">Servis</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Contact Info</h5>
                <ul>
                    <li><a href="mailto:tastyfood@gmail.com">tastyfood@gmail.com</a></li>
                    <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
                    <li>Kota Bandung, Jawa Barat</li>
                </ul>
            </div>
        </div>
        <div class="text-center my-5">
            <p>&copy; 2024 Tasty Food. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>

