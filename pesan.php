<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="style-pesan.css">
    <script src="https://kit.fontawesome.com/cbf0dfe807.js" crossorigin="anonymous"></script>
</head>

<body>
        <!-- Container -->
        <div class="container" id="atas">

            <!-- Header -->
            <div class="header">
                <h1 class="title" href="#">Toko <span>Jam</span></h1>
                <div class="top-navbar">
                    <a href="index.php">Galeri Produk</a>
                    <a href="#pesan">Pesanan</a>
                    <a href="buku-tamu.html">Buku Tamu</a>
                </div>
                <div class="button">
                    <a href="#about"><button>About</button></a>
                </div>
            </div>
            <!-- End Header -->

            <!-- Form -->
            <div class="form" id="pesan">
                <h2>Form Pesanan</h2>

                <!-- php -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "projek";
                $id_barang = "";

                
                if (isset($_GET['id_barang'])) {
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $id_barang = $_GET['id_barang'];
                    $sql = "SELECT * FROM t_barang WHERE id_barang=".$_GET['id_barang'];
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo '
                        <div class="row">
                            <div class="col-25">
                                <img src="'.$row['ft_barang'].'" alt="Foto Produk" width="200" height="200">
                            </div>
                            <div class="col-75">
                                <div class="name">'.$row['nm_barang'].'</div>
                                <div class="desc">'.$row['deskripsi'].'</div>
                                <p>Harga :</p>
                                <div class="price">Rp <del>'.$row['harga'].'</del></div>
                                <p>Harga Promo :</p>
                                <div class="harga-diskon">Rp '.$row['harga_promo'].'</div>
                            </div>
                        </div>
                        ';
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                }

                if (isset($_GET['submit'])) {
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO t_pesanan (id_barang, jumlah, nama, alamat, kodepos, hp)
                    VALUES ('".$_GET['id_barang']."', '".$_GET['jumlah']."', '".$_GET['nama']."', '".$_GET['alamat']."', '".$_GET['kodepos']."', '".$_GET['hp']."')";

                    if ($conn->query($sql) === TRUE) {
                        echo '
                        <div class="row">
                            <div class="report">
                                Pemesanan telah diterima. Terimakasih telah berbelanja di tempat kami.
                            </div>
                        </div> 
                        ';
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                }

                ?>
                <!-- end php -->
                
                <form action="pesan.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="id_barang">ID Barang</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="id_barang" name="id_barang" value="<?php echo $id_barang ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="jumlah">Jumlah</label>
                        </div>
                        <div class="col-75">
                            <select id="jumlah" name="jumlah">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="nama" name="nama" placeholder="Nama anda..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-75">
                        <textarea id="alamat" name="alamat" placeholder="Alamat rumah anda.." style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="kodepos">Kode Pos</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="kodepos" name="kodepos" placeholder="Kode Pos anda..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="hp">Nomor HP</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="hp" name="hp" placeholder="Nomor HP anda..">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
            <!-- End Form -->

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
                            <li><a href="index.php">Galeri Produk</a></li>
                            <li><a href="#pesan">Pesan</a></li>
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