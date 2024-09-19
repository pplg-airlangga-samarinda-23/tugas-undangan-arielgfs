<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Adam & Ytta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="profil"> 
            <img src="small-flower-close-up-1373255.jpg" alt="Flower Image">
            <h1>ADAM</h1>
            <h1>&</h1>
            <h1>MADA</h1>
        </div>
    </header>

    <div id="Kata-pengantar" class="section">
        <h2>Kata Pengantar</h2>
        <p>adam nikah ygy</p>
        <audio src="Seeing the Unseen (1).mp3" loop autoplay></audio>
    </div>

    <div class="carousel">
        <div class="carousel-inner">
            <img src="small-flower-close-up-1373255.jpg" alt="Image 1" class="active">
            <img src="flower-1-1361711.jpg" alt="Image 2">
            <img src="flower-up-close-1177972.jpg" alt="Image 3">
        </div>
        <button class="prev">Prev</button>
        <button class="next">Next</button>
    </div>

    <div id="Biodata" class="section">
        <h2>Lokasi Dan Tanggal</h2>
        <p>Monas - JAKARTA</p>
        <div style="width: 100%;">
            <iframe 
                width="40%" 
                height="300" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0" 
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Merdeka%20Square,%20Jalan%20Lapangan%20Monas,%20Gambir,%20Kecamatan%20Gambir,%20Kota%20Jakarta%20Pusat,%20Daerah%20Khusus%20Ibukota%20Jakarta%2010110+(My%20Business%20Name)&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
        </div>
        <p>Tanggal: 25-12-2024</p>
    </div>

    <div id="Ucapan" class="section">
        <h3>Ucapan & Doa</h3>
        <p>Berikan ucapan harapan & do'a kepada dua mempelai</p>
        <form action="insert.php" method="post">
            <input type="text" name="nama" placeholder="Nama" required> <br>
            <textarea name="ucapan" cols="30" rows="4" placeholder="Ucapan"></textarea required> <br>
            <select name="keterangan" required>
                <option value="" selected disabled hidden>Konfirmasi Kehadiran</option>
                <option value="1">Ya</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Tidak Tahu</option>
            </select> <br>
            <button>confirm</button>
        </form>
    


    
        <?php
        include 'koneksi.php';
            
            $sql2 = "SELECT * FROM bukutamu ORDER BY id DESC";
            $hasil = $koneksi->query($sql2);

        ?>
        <div class="data">
            <div style="height:100px; width:200px; overflow: auto; text-align: center; margin-left: 490px; ">
            <?php
                while ($baris = $hasil->fetch_row()) {
            ?>
            <h4 class="ucapan" style="font-weight:bold"><?= $baris[1] ?></h4>       
            <p><?=$baris[2] ?></p>
            <p><?=$baris[3] ?></p><br>
            <?php
                }
                $hasil->free_result();
            ?>
            </div>
        </div>
    </div>

    <footer id="Kontak" class="section">
        <h2>Kontak</h2>
        <p>No telp: 0853.4841.2313</p>
        <p>Email: johanngiven@gmail.com</p>
        <p>Instagram: <a href="https://www.instagram.com/arielgfs/">@arielgfs</a></p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('.carousel');
            const images = carousel.querySelectorAll('.carousel-inner img');
            const prevBtn = carousel.querySelector('.prev');
            const nextBtn = carousel.querySelector('.next');
            let currentIndex = 0;

            function showImage(index) {
                images[currentIndex].classList.remove('active');
                images[index].classList.add('active');
                currentIndex = index;
            }

            function prevImage() {
                let index = currentIndex - 1;
                if (index < 0) index = images.length - 1;
                showImage(index);
            }

            function nextImage() {
                let index = currentIndex + 1;
                if (index >= images.length) index = 0;
                showImage(index);
            }

            prevBtn.addEventListener('click', prevImage);
            nextBtn.addEventListener('click', nextImage);

            function startAutoSlide() {
                setInterval(nextImage, 3000);
            }

            startAutoSlide();
        });
    </script>
</body>
</html>
