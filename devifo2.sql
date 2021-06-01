-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2021 pada 10.21
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devifo2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `icon`, `judul`, `deskripsi`) VALUES
(1, 'icofont-computer', 'Design Website', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident'),
(2, 'bx bx-cube-alt', 'Pelayanan Cepat', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt'),
(3, 'bx bx-images', 'Dapat Direvisi', 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere'),
(4, 'bx bx-shield', 'Terpercaya dan Aman', 'Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `deskripsi`) VALUES
(28, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'jbjibijb', 'asdsadasdsadasdsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Moch Azmi Iskandar', 'Bergerak di bidang jasa dalam pembuatan desain dan website katalog untuk produk Anda, dengan harga relatif murah dan pelayanan cepat.', 'azmi1.jpg'),
(2, 'dsadsasad', 'dsadsadad', 'asdsadada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `deskripsi_about` text DEFAULT NULL,
  `deskripsi_services` text DEFAULT NULL,
  `deskripsi_portfolio` text DEFAULT NULL,
  `deskripsi_testimonials` text DEFAULT NULL,
  `deskripsi_packet` text DEFAULT NULL,
  `deskripsi_team` text DEFAULT NULL,
  `deskripsi_contact` text DEFAULT NULL,
  `deskripsi_video` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `deskripsi_about`, `deskripsi_services`, `deskripsi_portfolio`, `deskripsi_testimonials`, `deskripsi_packet`, `deskripsi_team`, `deskripsi_contact`, `deskripsi_video`) VALUES
(1, 'Devifo Studio menawarkan jasa untuk Anda yang sedang membangun usaha, namun belum memiliki desain ataupun website. Kami juga menyediakan jasa desain lain seperti konten media sosial, stiker, ilustrasi, vektor, popup frame, plamfet, banner, dan undangan pernikahan', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipias ea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_blog`
--

CREATE TABLE `kategori_blog` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `name`) VALUES
(1, 'Logo'),
(2, 'Website'),
(4, 'T-Shirt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_video`
--

CREATE TABLE `kategori_video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_video`
--

INSERT INTO `kategori_video` (`id`, `name`) VALUES
(1, 'Islam'),
(2, 'Matematika'),
(3, 'IPA'),
(4, 'Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `caption1` varchar(150) NOT NULL,
  `caption2` varchar(100) NOT NULL,
  `caption3` varchar(100) NOT NULL,
  `caption4` varchar(100) NOT NULL,
  `caption5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `harga`, `caption1`, `caption2`, `caption3`, `caption4`, `caption5`) VALUES
(1, 'Logo', 299999, 'Sekali Bayar', '1 Buah file high-res', '1 Buah file master', 'Dapat direvisi', 'Gratis website'),
(2, 'Website', 599999, 'Sekali Bayar', 'Gratis domain 1 tahun', 'Gratis hosting 1 tahun', '6 Bulan premium support', 'Gratis logo'),
(3, 'Paket Hemat', 699999, 'Sekali Bayar', 'Gratis domain 1 tahun', 'Gratis hosting 1 tahun', '6 Bulan premium support', 'Gratis logo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `href` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `judul`, `deskripsi`, `href`) VALUES
(1, 'Non consectetur a erat nam at lectus urna duis?', 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.', 'faq1'),
(2, 'Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.', 'faq2'),
(3, 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?', 'Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis', 'faq3'),
(4, 'Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.', 'faq4'),
(5, 'Tempus quam pellentesque nec nam aliquam sem et tortor consequat?', 'Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in', 'faq5'),
(6, 'Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?', 'Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.', 'faq6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_kategori`, `kode_produk`, `name`, `deskripsi`, `harga`, `diskon`, `stok`, `status`, `date`, `gambar`) VALUES
(2, 'Website', 'ANONIM1', 'Website Desain Anonymous', 'adsdadsad as sda ada dsa a', 1500000, 10000, 20, 'Tersedia', '2020-12-03 12:01:59', 'AnonymousWebsite3.jpg'),
(3, 'Website', 'DOTA2', 'Website Desain Dota 2 Axe', 'Website dengan desain game DOTA 2', 1500000, 0, 20, 'Tersedia', '2020-12-04 09:18:41', 'AxeWebDesign1.jpg'),
(4, 'Website', 'ANONIM1', 'Website Desain Invoker Dota 2', 'dwsadasdas saasdsa asdsad', 10000000, 0, 20, 'Tersedia', '2020-12-04 09:27:54', 'Invoker1.jpg'),
(9, 'Website', 'ANONIMGROUP', 'Website Design Anonymous Group', 'Website Design Anonymous Group bisa request keinginan', 500000, 0, 1, 'Tersedia', '2020-12-26 18:12:28', 'AnonymousGroup.jpg'),
(10, 'Website', 'AVENTADOR', 'Website Design Lamborghini Aventador', 'Website design lamborghini aventador menarik dan berkualiatas', 600000, 0, 99, 'Tersedia', '2020-12-26 18:13:44', 'Aventador1.jpg'),
(11, 'Website', 'DOTA2VOID', 'Website Design Dota 2 Faceless Void', 'Mengambil dari design game dota 2 yang sangat populer yaitu Faceless Void', 8999999, 5000000, 20, 'Tersedia', '2020-12-26 18:15:31', 'VoidWeb.jpg'),
(12, 'T-Shirt', 'CAMBER#101', 'T-Shirt CamberGang #101', 'Design T-shirt CamberGang #101', 150000, 0, 1, 'Tersedia', '2020-12-26 18:18:10', 'CamberGang2.jpg'),
(13, 'T-Shirt', 'CAMBER#202', 'T-Shirt CamberGang Velg#202', 'Design T-Shirt CamberGang Velg#202', 130000, 0, 20, 'Tersedia', '2020-12-26 18:19:16', 'CambergangBaju.jpg'),
(14, 'T-Shirt', 'LOW#001', 'T-Shirt TooDamnLow #001', 'T-Shirt TooDamnLow #001', 200000, 0, 99, 'Tersedia', '2020-12-26 18:20:21', 'Toodamnlow.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `icon`, `judul`, `deskripsi`) VALUES
(1, 'icofont-computer', 'Design Website', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident'),
(2, 'icofont-chart-bar-graph', 'Digital Marketing', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'),
(3, 'icofont-image', 'Design Photoshop', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'),
(4, 'icofont-settings', 'Web Developers', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(5, 'icofont-earth', 'Design Baju', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque'),
(6, 'icofont-tasks-alt', 'Eiusmod Tempor', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nama_sponsor` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sponsor`
--

INSERT INTO `sponsor` (`id`, `nama_sponsor`, `gambar`) VALUES
(1, 'Client-1', 'client-1.png'),
(3, 'Client-2', 'client-21.png'),
(4, 'Client-3', 'client-3.png'),
(5, 'Client-5', 'client-5.png'),
(6, 'Client-4', 'client-4.png'),
(7, 'Client-6', 'client-6.png'),
(8, 'Client-7', 'client-7.png'),
(9, 'Client-8', 'client-8.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `facebook`, `whatsapp`, `instagram`, `gambar`) VALUES
(1, 'Moch Azmi Iskandar', 'Web Developers', 'https://www.facebook.com/Miee.xtc/', 'https://api.whatsapp.com/send?phone=6282295153183', 'https://www.instagram.com/m.azmiiskndr/', 'Azmi2.jpg'),
(2, 'Ratu', 'Product Manager', NULL, NULL, NULL, 'team-2.jpg'),
(3, 'Arief', 'Video Grapher & Photo Grapher', NULL, NULL, NULL, 'team-3.jpg'),
(4, 'Amar Mutaqin', 'CEO', NULL, NULL, NULL, 'team-4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `gambar`, `nama`, `email`, `deskripsi`) VALUES
(1, 'default.png', 'Feri Sandi Prayuda', 'ferisandiprayuda@gmail.com', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'),
(5, 'AnonymousLogo1.png', 'Amar Mutaqin', 'amarmtqn@gmail.com', 'Keren Sekali, Detail, dan Rapih Design nyaaaaaaa'),
(8, 'default.png', 'agus', 'agus@gmail.com', 'hade\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `artikel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `judul`, `gambar`, `text`, `artikel`) VALUES
(1, 'Tugas Jaringan Komputer Pertemuan 1', 'jaringan.jpg', '<div>- PAN</div><div>- LAN</div><div>- WAN</div><div>- MAN</div><div><br></div><div>JENIS-JENIS JARINGAN KOMPUTER</div><div><br></div><div>Jenis-jenis jaringan komputer berdasarkan areanya dapat</div><div>dibedakan menjadi beberapa jenis yaitu PAN, LAN, WAN, dan MAN.</div><div><br></div><div>1. PAN (Personal Area Network)</div><div><br></div><div>PAN atau Personal Area Network adalah jaringan computer</div><div>digunakan untuk komunikasi antara perangkat computer. Jangkauan</div><div>dari jaringan PAN biasanya hanya beberapa meter. Jaringan PAN</div><div><br></div><div>dapat digunakan untuk komunikasi antara perangkat pribadi</div><div>sendiri ( komunikasi intra personal ).</div><div>Kegunaan jaringan ( Personal Area Network ) adalah</div><div>menghubungkan perangkat-perangkat computer dan sebagai media</div><div>komunikasi antara perangkat sendiri ( perangkat personal ).</div><div><br></div><div>Contoh penggunaan jaringan PAN :</div><div>- Menghubungkan HP dengan laptop menggunakan Bluetooth</div><div>- Menghubungkan mouse dengan laptop menggunakan Bluetooth</div><div>- Menghubungkan printer dengan laptop menggunakan Bluetooth</div><div><br></div><div>2. LAN (Local Area Network)</div><div><br></div><div>LAN atau Local Are Network adalah sebuah jaringan computer</div><div>yang jaringannya hanya mencakup wilayah kecil, seperti</div><div>jaringan computer kampus, gedung, kantor, dalam rumah, sekolah</div><div>atau yang lebih kecil. Jaringan LAN biasanya menggunakan</div><div>perangkat-perangkat yang cukup sederhana seperti kabel UTP,</div><div>Switch, Router dan beberapa perangkat jaringan lainnya. Pada</div><div>sebuah LAN, setiap node atau computer mempunyai daya komputasi</div><div>sendiri, berbeda dengan konsep dump terminal. Sebuah computer</div><div>juga dapat mengakses sumber daya yang ada di LAN sesuai dengan</div><div>hak akses yang telah diatur.</div><div>Fungsi lain pada dunia computer :</div><div>- Dapat mempercepat arus informasi dari server menuju</div><div>client atau dari client menuju client yang lainnya</div><div>- Dapat menghemat waktu dan biaya operasional</div><div>- Mempermudah komunikasi antar client yang terhubung dalam</div><div>jaringan</div><div>- Mempermudah komunikasi antar client yang terhubung dalam</div><div>jaringan</div><div>- Dapat mengamankan informasi-informasi penting</div><div>- Dapat digunakan untuk game multiplayer, sharing data,</div><div>sharing printer, dan juga internet.</div><div><br></div><div>3. WAN (Wide Area Network)</div><div><br></div><div>WAN atau Wide Area Network merupakan jaringan computer yang</div><div>mencakup are yang besar sebagai contoh yaitu jaringan computer</div><div>antar wilayah, kota atau bahkan negaram atau dapat</div><div>didefinisikan juga sebagai jaringan computer yang membutuhkan</div><div>router dan saluran komunikasi publik. Singkatnya WAN yaitu</div><div>jenis jaringan computer yang merupakan gabungan dari jaringan</div><div>LAN ( Local Area Network ) dan MAN ( Metropolitan Area Network</div><div>).</div><div>Fungsi dari jaringan WAN :</div><div>? Menghubungkan jaringan LAN dan MAN menjadi satu jaringan</div><div>bisa dibilang ini fungsi yang paling utama dari jaringan</div><div>WAN karena menintegrasikan dan menghubungkan jaringan LAN</div><div>dan jaringan MAN menjadi satu jaringan. Hal ini sangat</div><div><br></div><div>berguna bagi perusahaan yang mempunyai banyak cabang di</div><div>luar kota atau luar negeri.</div><div>- Membantu mempercepat proses berbagi data atau sharing</div><div>file</div><div>- Mempercepat sekaligus mempermudah arus komunikasi dan</div><div>informasi</div><div>- Update data antar perusahaan atau kantor dapat dilakukan</div><div>setiap saat</div><div>- Menghemat biaya operasional.</div><div><br></div><div>4. MAN ( Metropolitan Area Network )</div><div><br></div><div>MAN atau Metropolitan Area Network adalah suatu jaringan</div><div>dalam suatu kota dengan transfer data berkecepatan tinggi yang</div><div>menghubungkan berbagai lokasi kampus, perkantoran,</div><div>pemerintahan, dan sebagainya. Jaringan MAN adalah gabungan</div><div>dari beberapa LAN dan jangkauan MAN ini berkisar 10-50 km.</div><div>Fungsi dari jaringan MAN sendiri yaitu untuk membangun dan</div><div>implementasi system jaringan yang mengkolaborasikan antar</div><div>server guna untuk memenuhi kebutuhan internal perusahaan dan</div><div>pemerintah dalam mengkomunikasikan suatu jaringan yang</div><div>dipergunakan sehingga bisa melakukan kegiatan seperti chat,</div><div>messenger, video dan sebagainya dengan bandwidth local.</div><div>Keuntungan dari jaringan MAN :</div><div>? Server dari kantor pusat dapat berfungsi sebagai pusat</div><div>data dari kantor cabang</div><div><br></div><div>- Transaksi yang Real-Time ( data di server pusat diupdate</div><div>saat itu juga, contoh ATM Bank untuk wilayah nasional)</div><div>- Komunikasi antar kantor bisa menggunakan email, chatting</div><div>- Dan Video Conference ( Vicon )</div><div><br></div><div>Kerugian dari jaringan MAN :</div><div>- Biaya operasional mahal</div><div>- Instalasi infrastrukturnya tidak mudah</div><div>- Rumit jika terjadi trouble jaringan ( network trouble</div><div>shoot )</div><div><br></div><div><br></div>', 'Resume Jenis-jenis Jaringan Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_hp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `gambar`, `role_id`, `register_date`, `no_hp`) VALUES
(3, 'Moch Azmi', 'Iskandar', 'azmiiskandar0@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'default.png', 1, '2020-12-04 08:52:37', '+6282295153183');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul_video` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `judul_video`, `video`, `deskripsi`, `kategori_video`) VALUES
(1, 'Video Agama Islam', 'video.mp4', 'fas safasd sadasd sadas asdas sd a', 'Islam'),
(3, 'Matematika', 'Matematika_-_Dummy_3.mp4', 'dsad asd adsa dsad sads adas sad ', 'Matematika'),
(4, 'Bahasa Inggris', 'Inggris_-_Dummy_3.mp4', 'fas sads a tab ini ndasndiasn osahbdab uiasbdu asibuanb uibasudb', 'Inggris'),
(5, 'IPA &quot;Ilmu Pengetahun Alam&quot;', 'IPA_-_Dummy_1.mp4', 'dsa ds asa ilmu tentang pengetahun alam didunia ini', 'IPA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_blog`
--
ALTER TABLE `kategori_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_video`
--
ALTER TABLE `kategori_video`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori_blog`
--
ALTER TABLE `kategori_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_video`
--
ALTER TABLE `kategori_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
