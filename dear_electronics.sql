-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dear_electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `slug`, `harga`, `keterangan`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Resistor 1K', 'resistor-1k', 'Rp100', 'Resistor adalah komponen elektronika yang bersifat menghambat arus listrik. Resistor termasuk dalam komponen pasif karena komponen ini tidak membutuhkan arus listrik untuk bekerja.', 'Komponen Elektronika', 'Resistor 1k.jpg', NULL, NULL),
(2, 'LED', 'led', 'Rp1.000', 'LED adalah komponen elektronika yang dapat memancarkan cahaya monokromatik ketika diberikan tegangan maju. LED merupakan keluarga Dioda yang terbuat dari bahan semikonduktor. Warna-warna Cahaya yang dipancarkan oleh LED tergantung pada jenis bahan semikonduktor yang dipergunakannya. Cara kerja LED hanya akan memancarkan cahaya apabila dialiri tegangan maju (bias forward) dari Anoda menuju ke Katoda. ', 'Komponen Elektronika', 'LED.jpg', NULL, NULL),
(3, 'LDR', 'ldr', 'Rp3.000', 'Light Dependent Resistor (LDR) ialah jenis resistor yang berubah hambatannya karena pengaruh cahaya. Besarnya nilai hambatan pada sensor cahaya LDR tergantung pada besar kecilnya cahaya yang diterima oleh LDR itu sendiri. Bila cahaya gelap nilai tahanannya semakin besar, sedangkan cahayanya terang nilainya menjadi semakin kecil. LDR adalah jenis resistor yang biasa digunakan sebagai detektor cahaya atau pengukur besaran konversi cahaya', 'Komponen Elektronika', 'LDR.jpg', NULL, NULL),
(4, 'KIT Counter UP', 'kit-counter-up', 'Rp85.000', 'Kit counter up adalah rangkaian kit yang berisi komponen untuk rangkaian counter up. Sudah termasuk PCB beserta panduannya. Fungsi kit ini untuk mempermudah pemula dalam mempelajari tentang counter up', 'KIT Elektronika', 'Kit_Counter_Up.jpg', NULL, NULL),
(5, 'Kapasitor Polyster', 'kapasitor-polyster', 'Rp1.000', 'Kapasitor polyester adalah jenis kapasitor yang isolatornya terbuat dari sebuah polyester dengan bentuknya persegi empat. Kapasitor polyester ini bisa dipasang terbalik dalam suatu rangkaian elektronika (tidak mempunyai polaritas arah). Kapasitor poliester dianggap sebagai standar untuk banyak aplikasi DC dimana biaya adalah pertimbangan utama untuk nilai toleransi yang rendah.', 'Komponen Elektronika', 'Kapasitor Polyster.jpg', NULL, NULL),
(6, 'KIT Flip Flop', 'kit-flip-flop', 'Rp2.000', 'Kit Flip-Flop adalah rangkain kit yang berisi komponen untuk rangkaian Flip-Flop. Sudah termasuk PCB beserta panduannya. Fungsi kit ini untuk mempermudah pemula dalam mempelajari tentang Flip-Flop. Flip-flop dan latch digunakan sebagai elemen penyimpan data, seperti penyimpan data yang dapat digunakan untuk menyimpan memori, seperti sirkuit yang dijelaskan pada logika sekuensial.', 'KIT Elekronika', 'Flip_flop.jpg', NULL, NULL),
(7, 'Potensiometer', 'potensiometer', 'Rp3.000', 'Potensiometer adalah salah satu jenis resistor tiga terminal yang berfungsi untuk mengatur tegangan, arus dan resistensi listrik dalam sebuah rangkaian. Potensiometer berfungsi untuk mengatur besar tegangan Power Supply (Catu Daya). Untuk mengatur tingkat volume pada peralatan audio maupun video. Potensiometer juga berfungsi untuk membagi tegangan arus listrik yang masuk. ', 'Komponen Elektronika', 'Potensio.jpg', NULL, NULL),
(9, 'KIT Sensor Cahaya', 'kit-sensor-cahaya', 'Rp38.000', 'KIT Sensor Cahaya adalah rangkaian kit yang berisi komponen untuk rangkaian Sensor cahaya. Sudah termasuk PCB beserta panduannya. Fungsi kit ini untuk mempermudah pemula dalam mempelajari tentang Sensor cahaya.', 'KIT Elektronika', 'Sensor_Cahaya.jpg', NULL, NULL),
(10, 'Iron Core Inductor', 'iron-core-induktor', 'Rp5.000', 'Iron Core Inductor adalah induktor inti besi jika diartikan ke dalam bahasa Indonesia. Seperti namanya, inti dari Iron Core Inductor menggunakan material besi. Ukuran diameter inti besi tersebut disesuaikan dengan kebutuhan pada masing-masing peralatan elektronik. Fungsi induktor (coil) diantaranya dapat menyimpan arus listrik dalam medan magnet, menapis (Filter) frekuensi tertentu, menahan arus bolak-balik (AC), meneruskan arus searah (DC) serta pembangkit getaran dan melipatgandakan tegangan.', 'Komponen Elektronika', 'Iron Core Inductor.jpg', NULL, NULL),
(11, 'KIT Sirine Mini', 'kit-sirine-mini', 'Rp50.000', 'KIT Sirine Mini adalah rangkaian KIT yang berisi komponen untuk rangkaian Sirine Mini. Sudah termasuk PCB beserta panduannya. Fungsi KIT ini untuk mempermudah pemula dalam mempelajari tentang cara kerja Sirine', 'KIT Elektronika', 'Sirine_Mini.jpg', NULL, NULL),
(12, 'KIT Sensor Suhu', 'kit-sensor-suhu', 'Rp65.000', 'KIT Sensor Suhu adalah rangkaian KIT yang berisi komponen untuk rangkaian Sensor Suhu. Sudah termasuk PCB beserta panduannya. Fungsi KIT ini untuk mempermudah pemula dalam mempelajari tentang cara kerja Sensor Suhu. Sensor Suhu berfungsi untuk mengubah temperatur/suhu menjadi beda potensial listrik.', 'KIT Elektronika', 'Sensor_Suhu.jpg', NULL, NULL),
(13, 'Photodioda', 'photodioda', 'Rp3.000', 'Photo Dioda adalah jenis dioda yang berfungsi mendeteksi cahaya. Berbeda dengan dioda biasa, komponen elektronika ini akan mengubah cahaya menjadi arus listrik. Cahaya yang dapat dideteksi oleh dioda foto ini mulai dari cahaya infra merah, cahaya tampak, ultra ungu sampai dengan sinar-X. ', 'Komponen Elektronika', 'Photodioda.jpg', NULL, NULL),
(14, 'Kapasitor Mika', 'kapasitor-mika', 'Rp2.000', 'Kapasitor Mika adalah salah satu jenis kapasitor yang paling umum digunakan pada perangkat elektronik seperti telepon seluler, komputer, mobil listrik, pemutar DVD, dan bagian alat listrik lainnya. Kapasitor bertindak sebagai jembatan kimia yang terbuka untuk ion positif dan negatif. Biasanya dipasang pada radio yang berfungsi sebagai filter frekuensi dengan menggunakan sirkuit oscilator.', 'Komponen Elekronika', 'kapasitor_Mika.jpg', NULL, NULL),
(15, 'Dioda Zener', 'dioda-zener', 'Rp1.000', 'Dioda Zener adalah dioda yang memiliki karakteristik menyalurkan arus listrik mengalir ke arah yang berlawanan jika tegangan yang diberikan melampaui batas \"tegangan tembus\" atau \"tegangan Zener\". Ini berlainan dari dioda biasa yang hanya menyalurkan arus listrik ke satu arah. Dioda Zener digunakan secara luas dalam sirkuit elektronik. Fungsi utamanya adalah untuk menstabilkan tegangan dari arus AC menjadi arus DC.', 'Komponen Elekronika', 'Dioda_Zener.jpg', NULL, NULL),
(16, 'Kapasitor Keramik', 'kapasitor-keramik', 'Rp500', 'Kapasitor Keramik adalah kapasitor bernilai tetap di mana bahan keramik bertindak sebagai dielektrik. Kapasitor ini dibentuk dari dua atau lebih lapisan bolak-balik dari keramik dan lapisan logam yang bertindak sebagai elektroda. Kapasitor keramik berfungsi untuk menyimpan energi listrik pada periode tertentu. Digunakan sebagai isolator yang mana kapasitor keramik berfungsi untuk menghambat arus DC. Berfungsi sebagai media penghubung atau pemutus dalam rangkaian amplifier', 'Komponen Elekronika', 'Kapasitor_Keramik 22nf.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `email_customer` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email_customer`, `password`, `no_telp`, `alamat`) VALUES
(1, 'senengari', 'senengari@apps.ipb.ac.id', '$2y$10$XzjgXEK2LQKlG70w2hOTaeaDtcHu3Ql/kGP7uwj2PYRqKqkQEkqkG', 2147483647, ''),
(2, 'rayhan', 'rayhan@apps.ipb.ac.id', '$2y$10$RQDNa5o4p8UOyTaHA7T2pOZ2D0dvDD32x.Yiow947HH5jsiZw9Nvi', 2147483647, ''),
(3, 'EsterA', 'ester@apps.ipb.ac.id', '$2y$10$CcgEAaXShX48l23OLiCIxOCR3NdcuY1W4urkdEDb.TbYEkjikEN5G', 2147483647, ''),
(4, 'rayhann', 'rayhan123@gmail.com', '$2y$10$uV4uiIgwYsH5oBPnkMTliemldhFh07EMU84KrUgvoXuf68H8aSZwK', 2147483647, ''),
(5, 'dhafakamil', 'dhafa123@gmail.com', '$2y$10$oAR0v0NMTRHribzTtQbCYOSZDlTndF6733A378TR3gfA6nniK2f8C', 2147483647, ''),
(6, 'rayhan123', 'rayhan23@gmail.com', '$2y$10$Xwscg2Y6m6gkJKZ6ZhxRqOUIF1wyXhfz0uvSafcMJgGgzvn/qAuee', 2147483647, ''),
(7, 'Aulia', 'Aulia08@gmail.com', '$2y$10$BYHf93Zge2w01giSLhy9VeMjGVp8/8ZQii0JjDNgrMkpZqpXqRlJe', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-11-19-163701', 'App\\Database\\Migrations\\Products', 'default', 'App', 1668931773, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
