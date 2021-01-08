<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style-index.css">
    <script src="https://kit.fontawesome.com/cbf0dfe807.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Container -->
    <div class="container">

        <!-- Header -->
        <div class="header" id="atas">
            <h1 class="title">Toko <span>Jam</span></h1>
            <div class="top-navbar">
                <a href="#product">Galeri Produk</a>
                <a href="pesan.php">Pesanan</a>
                <a href="buku-tamu.html">Buku Tamu</a>
            </div>
            <div class="button">
                <a href="#about"><button>About</button></a>
            </div>
        </div>
        <!-- End Header -->

        <!-- Content -->
        <div class="content">
            <!-- Judul -->
            <h2 id="product">All Product</h2>

            <!-- php -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "projek";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT * FROM t_barang";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                  echo '
                    <!-- Product -->
                    <div class="gallery">
                        <div class="name">
                            <a target="_blank" href="pesan.php?id_barang='.$row['id_barang'].'">'.$row['nm_barang'].'</a>
                        </div>
                        <img src="'.$row['ft_barang'].'" alt="Seiko" width="600" height="400">
                        <div class="desc"><p>'.$row['deskripsi'].'</p></div>
                        <div class="price">
                            <p>Rp '.$row['harga'].'</p>
                            <a target="_blank" href="pesan.php?id_barang='.$row['id_barang'].'">BELI</a>
                        </div>
                    </div>
                    <!-- End Product -->
                  ';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            <!-- end php -->
        </div>
        <!-- End Content -->

        <!-- Start Footer -->
        <footer>
            <div class="footer-content" id="about">
                <div class="footer-section descrip">
                    <h1 class="judul-footer">About</h1>
                    <p>TokoJam merupakan pusat penjualan 100% produk jam tangan original dari berbagai brand ternama dunia. TokoJam lengkap dengan garansi resmi yang memberikan keamanan dan kenyamanan konsumen. Segala macam brand jam tangan baik untuk pria maupun wanita tersedia di TokoJam. Temukan produk jam tangan hanya di TokoJam anda bisa mendapatkan berbagai macam produk jam tangan dengan beragam merk, jenis, dan style untuk semua kalangan.</p>
                </div>
                <div class="footer-section link">
                    <h1 class="judul-footer">Quick Links</h1>
                    <ul>
                        <li><a href="#product">Galeri Produk</a></li>
                        <li><a href="pesan.php">Pesan</a></li>
                        <li><a href="buku-tamu.html">Buku Tamu</a></li>
                        <li><a href="#atas">Ke Atas</a></li>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h1 class="judul-footer">Contact</h1>
                    <p><i class="fas fa-envelope"></i> support@tokojam.com</p>
                    <p><i class="fas fa-phone-alt"></i> 123-4567</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>Copyrigth &copy; 2020 Rizki Nuzul Muzaki. All Rights Reserved.</p>
            </div>
        </footer>
        <!-- End Footer -->
        
    </div>
    <!-- End Container -->

</body>

</html>