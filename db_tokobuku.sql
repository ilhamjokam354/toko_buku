-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2020 pada 15.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokobuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `buku` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `stok` int(11) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `id_kategori`, `buku`, `deskripsi`, `stok`, `jumlah_halaman`, `tahun_terbit`, `bahasa`, `penerbit`, `berat`, `gambar`, `harga`) VALUES
(13, 20, 'Keluarga Super Irit ', 'Demi keluar dari kemiskinan kita harus berhemat  Gaji Ayah Bindae dipotong ! Ayah Bindae sekeluarga pun harus pindah ke rumah satu kamar. Mereka mulai menjalani hidup sehemat mungkin, hingga berhasil pindah ke rumah dua kamar.  Apa saja taktik berhemat al', 5, 312, '27 Januari 2008 ', 'Indonesia ', 'E-room', '0,67 Kg ', 'irit.jfif', 28000),
(14, 20, 'Spiderman  ', 'Saatnya aksi untuk Pahlawan Super MARVEL! Jadilah bagian dari petualangan mereka. Warnai halaman dengan pensil warna atau krayon. Anda kemudian akan memiliki buku yang bagus untuk dinikmati selamanya. Jangan lupa untuk mengumpulkan buku mewarnai MARVEL la', 9, 16, '1 Oktober 2017  ', 'Indonesia  ', 'Pt Adinata Melodi Kreasi', '0,90 Kg  ', 'spy.jfif', 30000),
(15, 18, 'Mualaf  ', 'New York Times\r\n\r\nSALAH seorang keturunan mantan kepala Wihara Nawbaha itu berhasil lolos dari pembantaian. Ia seorang pria muda, yang dilarikan ibunya ke Kashmir. Di sana ia diberi pelatihan dan pembelajaran seputar ilmu kedokteran, otonomi, dan ilmu-ilmu lain. Pemuda yang beruntung itu adalah Al-Barmark, yang nantinya berperan penting mengibarkan kejayaan Islam kali kedua, di Balkh (بلخ), kota kuno yang dulu berada di bawah naungan Kekaisaran Persia.\r\n\r\nKisah Al-Barmak merupakan salah satu saja dari kisah perpindahan agama para tokoh besar dalam sejarah Islam. Berturutan setelah Al-Barmak masih ada Berke Khan, Zaganos Pasha, Ibrahim Müteferrika, Alexander Russel Webb, Malcolm X, dan Muhammad Marmaduke Pickthall. Riwayat mereka bertalian erat dengan nukilan dari New York Times di atas, yang kami temukan dalam buku The Sun is Rising in The West: New Muslims Tell about Their Journey to Islam, karya Muzaffar Haleem dan Betty (Batul) Bowman. Itulah fakta tak terbantah dunia hari ini.\r\n\r\nA', 10, 167, '24 Februari 2015  ', 'Indonesia  ', 'No Publisher', '0,900 Kg  ', 'gambar5.jpg', 34000),
(17, 19, 'Roro Mendut   ', 'Rara Mendut, budak rampasan yang menolak diperistri oleh Tumenggung Wiraguna demi cintanya kepada Pranacitra. Dibesarkan di kampung nelayan pantai utara Jawa, ia tumbuh menjadi gadis yang trengginas dan tak pernah ragu menyuarakan isi pikirannya. Sosoknya dianggap nyebal tatanan di lingkungan istana di mana perempuan diharuskan bersikap serba halus dan serba patuh. Tetapi ia tak gentar. Baginya, lebih baik menyambut ajal di ujung keris Sang Tumenggung daripada dipaksa melayani nafsu panglima tua itu.\r\n\r\nGenduk Duku, sahabat Rara Mendut yang membantunya menerobos benteng Keraton Mataram dan melarikan diri dari kejaran Tumenggung Wiraguna. Setelah kematian Rara Mendut dan Pranacitra, Genduk Duku menjadi saksi perseteruan diam-diam antara Wiraguna dan Pangeran Aria Mataram, putra mahkota yang kelak bergelar Sunan Amangkurat I dan sesungguhnya juga jatuh hati kepada Rara Mendut - perempuan rampasan yang oleh ayahnya dihadiahkan kepada panglimanya yang berjasa.\r\n\r\nLusi Lindri, anak Genduk D', 10, 157, '19 Maret 2005   ', 'Indonesia   ', 'Y.B. Mangun Wijaya', '0,45 Kg   ', 'roromendut.jpg', 23000),
(18, 16, 'Laskar Pelangi', 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.', 8, 529, '2005`', 'Indonesia', 'Bentang Pusaka', '1 Kg', 'novel1.jpg', 50000),
(19, 18, 'Menulis Dijalan Tuhan ', 'Mengapa Harus Dakwah Bilqalam? Dakwah adalah pekerjaan mulia, pekerjaan berat yang membutuhkan strategi dan taktik. Dakwah adalah pekerjaan para nabi dan rasul kemudian diteruskan kepada kita semua agar membawa umat dari kubangan kehinaan menuju istana keselamatan dan kesejahteraan. Dakwah dengan pena adalah sebuah strategi yang jitu untuk menyebarkan siraman kebahagiaan kepada banyak orang. Mungkin, ada yang akan bertanya, “Mengapa kita harus berdakwah lewat tulisan?” Tulisan ini akan memberikan alasan kenapa kita harus berdakwah lewat tulisan-tulisan kita. Dalam sebuah acara mabit FLP Sulsel, KH. Mudzakkir M. Arif, penulis buku As-Shidqu Fil Qur’an Al-Karim memaparkan kepada peserta alasan-alasan mengapa kita harus dakwah lewat pena sebagaimana yang diterangkan di bawah ini yang dilengkapi dengan beberapa tambahan dari penulis.\r\n\r\nMembaca dan menulis adalah dua konsep penting yang diwahyukan Allah lewat perantaraan Malaikat Jibril kepada Rasul kita yang mulia Muhammad saw. Dalam Al-Q', 48, 120, '2017 ', 'Indonesia ', 'Universitas Khairun', '1,3 Kg ', 'gambar4.jpg', 100000),
(20, 16, 'Pelangi Persahabatan', 'Persahabatan tak ubahnya bagaikan pelangi yang kaya akan warna. Begitu juga dengan kehidupan terutama yang terjadi pada lika-liku hidup para remaja saat ini. Hidup tanpa sahabat ibarat makan tanpa garam, ya akan terasa hambar. Mereka bilang “loe n gue end”. Namun, persahabatan seperti apa yang akan berdampak baik bagi orang lain. Tentunya persahabatan yang membuat hidup lebih baik, lebih dekat dengan Tuhan, lebih patuh pada kedua orangtua. Nah, teman-teman, penasaran dengan kisah “Pelangi Persahabatan” yang begitu indah.\r\n \r\nTemukan hikmahnya di balik ceritanya. Selamat membaca teman-teman.', 75, 87, '2 Agustus 2012', 'Indonesia', 'Nisrina Nabila', '0,90 Kg', 'prsahabatan.jpg', 60000),
(21, 19, 'Sejarah Keraton Yogyakarta ', 'Sejak dulu \"negeri\" Ngayogyakarta Hadiningrat sudah dikenal kaya akan nilai-nilai tradisi luhurnya. Peninggalan berharga masyarakat Jawa yang terbilang adiluhung itu, hingga kini masih bisa kita temukan di sana, salah satunya melalui keberadaan Keraton Yogyakarta. Buku ini berusaha \"merekam\" secara orisinil, tentang bagaimana sejarah berdirinya Keraton Yogyakarta. Dalam penyajiannya, tinjauan terhadap perjalanan sejarah amat dikedepankan; mulai dari munculnya sejumlah kerusuhan di bumi Mataram, perjuangan Pangeran Mangkubumi dalam mempertahankan \"keutuhan\" Kerajaan Mataram, Pangeran Mangkubumi mendirikan Keraton, hingga dirinya dinobatkan sebagai Sultan Hamengkubuwono 1, alias raja pertama yang memimpin lingkungan kerajaan Keraton Yogyakarta. Lebih dari itu, buku ini juga menjelaskan secara detail terlebih sejarah dan nilai-nilai filosofi dari sejumlah bagian yang terdapat dalam lingkungan Keraton. Meski berdiri atas latar belakang sejarah dan nilai-nilai filosofi Jawa, namun keberadaa', 100, 150, '2014 ', 'Indonesia ', 'No Publisher', '1,3 Kg ', 'keratonyogya.jpg', 70000),
(22, 17, 'Cinta Diujung Batas ', 'Release Date: 30 September 2013.\r\n\"\"\"Haekal, pemuda yang mencintai majelis zikir. Aktivitas zikir di Bukit Sentul itulah yang mempertemukan Haekal secara tidak sengaja dengan dua gadis nan rupawan yang akhirnya selalu membayangi hidupnya bertahun tahun. Sayang, ia tak tahu siapa dua gadis itu.\r\n\r\nSkenario Allah memang tak pernah bisa ditebak. Haekal akhirnya menikah dengan Anissa, salah seorang gadis itu. Lalu bagaimana dengan gadis lainnya? Dia, Amelia namanya, adalah adik angkat istrinya Anissa.\r\n\r\nTiga hati, satu cinta. Bisakah mereka hidup bahagia bersama?\r\n\r\nNovel Cinta di Ujung Batas ini menyajikan kisah cinta tiga hati dalam ramuan yang manis dan sederhana.\r\n\r\nSubhanallah, novel ini buah hati yang tercelup dalam kecintaan kepada Allah. Sungguh, kecintaan kepada-Nya membuat kita mencintai SYARIAT dan TAKDIR-NYA.Sejuta hikmah diraih, Alhamdulillah.\r\n\r\n—Muhammad Arifin Ilham\r\n\r\nAlhamdulillah, novel religi yang sangat menarik untuk dipetik hikmah di dalamnya. Gambaran ceritanya mamp', 116, 242, '30 September 2013 ', 'Indonesia ', 'Elex Media Komputindo', '1 Kg ', 'cintadiujungbatas.jpg', 50000),
(23, 17, 'Perahu Kertas', 'Perahu Kertas adalah novel karya Dewi Lestari yang diterbitkan oleh Bentang Pustaka pada tahun 2009. Buku ini menceritakan seorang remaja pria yang baru lulus SMA yang selama enam tahun tinggal di Amsterdam bersama neneknya. Keenan memiliki bakat melukis yang sangat kuat, dan ia tidak punya cita-cita lain selain menjadi pelukis, tetapi perjanjiannya dengan ayahnya memaksa ia meninggalkan Amsterdam dan kembali ke Indonesia untuk kuliah. Keenan diterima berkuliah di Bandung, di Fakultas Ekonomi. Di sisi lain, ada Kugy, cewek unik cenderung eksentrik, yang juga akan berkuliah di universitas yang sama dengan Keenan. Sejak kecil, Kugy menggila-gilai dongeng. Tak hanya koleksi dan punya taman bacaan, ia juga senang menulis dongeng. Cita-citanya hanya satu: ingin menjadi juru dongeng. Namun Kugy sadar bahwa penulis dongeng bukanlah profesi yang meyakinkan dan mudah diterima lingkungan. Tak ingin lepas dari dunia menulis, Kugy lantas meneruskan studinya di Fakultas Sastra. dan novel ini sudah ', 35, 123, '2009', 'Indonesia', 'Bentang Pusaka', '0,90 Kg', 'image109.jpg', 34000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES
(16, 'Persahabatan'),
(17, 'Cinta'),
(18, 'Keagamaan'),
(19, 'Sejarah'),
(20, 'Comic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `total` float NOT NULL DEFAULT 0,
  `bayar` float NOT NULL DEFAULT 0,
  `kembali` float NOT NULL DEFAULT 0,
  `status` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_pelanggan`, `tgl_order`, `total`, `bayar`, `kembali`, `status`) VALUES
(7, 6, '2020-01-13', 48000, 0, 0, 0),
(8, 7, '2020-01-14', 156000, 170000, 14000, 1),
(9, 7, '2020-01-14', 84000, 0, 0, 0),
(10, 7, '2020-01-15', 300000, 0, 0, 0),
(11, 7, '2020-01-15', 200000, 0, 0, 0),
(12, 7, '2020-03-01', 50000, 0, 0, 0),
(13, 11, '2020-04-02', 150000, 0, 0, 0),
(14, 6, '2020-04-17', 200000, 0, 0, 0),
(15, 6, '2020-04-17', 150000, 0, 0, 0),
(16, 6, '2020-04-18', 150000, 0, 0, 0),
(17, 12, '2020-04-18', 86000, 90000, 4000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_jual` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`id_order_detail`, `id_order`, `id_buku`, `jumlah`, `harga_jual`) VALUES
(9, 7, 7, 3, 16000),
(10, 8, 11, 2, 50000),
(11, 8, 13, 2, 28000),
(13, 9, 13, 3, 28000),
(14, 10, 20, 5, 60000),
(15, 11, 12, 10, 20000),
(16, 12, 18, 1, 50000),
(17, 13, 22, 2, 50000),
(18, 13, 18, 1, 50000),
(19, 14, 22, 2, 50000),
(20, 14, 19, 1, 100000),
(21, 15, 22, 1, 50000),
(22, 15, 19, 1, 100000),
(23, 16, 22, 3, 50000),
(24, 17, 14, 1, 30000),
(25, 17, 13, 2, 28000);

--
-- Trigger `tbl_order_detail`
--
DELIMITER $$
CREATE TRIGGER `kurang_stok` BEFORE INSERT ON `tbl_order_detail` FOR EACH ROW UPDATE tbl_buku SET stok = stok - NEW.jumlah WHERE id_buku = NEW.id_buku
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `pelanggan`, `alamat`, `telp`, `email`, `password`, `aktif`) VALUES
(6, 'Sopek', 'Kerek', '08674256427', 'sopek@gmail.com', 'ac8623b8596b2bed3d8a2398a4b041a9e46ade9f8883255a8bd37feaa71cd6e4', 1),
(7, 'Eni Suga', 'Kerek', '08562542566', 'eni@suga.com', '4d4f0f7a97c8f403595253ab253eafe715b67b73c2906b068f2cb99365698e53', 1),
(8, 'Linda Jhope', 'Kerek', '085682726252', 'linda@gmail.com', '6bab3007f56e2a9175ff1222c2654ddcd08fa7981a1ddc42f1d95cfbd80ede47', 1),
(10, 'Sefi', 'Tuban', '084623523623', 'sefi@sefi.com', '567df833b0f20608e8a8f3eb6905997a871bb3749bba6b8a86aa599facb9363b', 1),
(12, 'Ilham', 'Tuban', '0986754345467', 'ilham@ilham.com', 'e467a85cdae98a0cb4edb5570aad4bd093dc2b652b6677a5949bd4ae36922bb4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user`, `email`, `password`, `level`, `aktif`) VALUES
(4, 'Admin', 'admin@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', 1),
(5, 'Kelompok 3', 'kelompok3@gmail.com', '66e039de736fecaa4130d1a8554aa902f615ec02e32a56a21b2bfd7f87bab489', 'kasir', 1);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vorder`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vorder` (
`id_order` int(11)
,`id_pelanggan` int(11)
,`tgl_order` date
,`total` float
,`bayar` float
,`kembali` float
,`status` float
,`pelanggan` varchar(100)
,`alamat` varchar(100)
,`telp` varchar(100)
,`email` varchar(100)
,`password` varchar(255)
,`aktif` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vorderdetail`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vorderdetail` (
`id_order_detail` int(11)
,`id_order` int(11)
,`id_buku` int(11)
,`jumlah` int(11)
,`harga_jual` float
,`id_kategori` int(11)
,`buku` varchar(100)
,`gambar` varchar(100)
,`harga` float
,`kategori` varchar(100)
,`id_pelanggan` int(11)
,`tgl_order` date
,`total` float
,`bayar` float
,`kembali` float
,`status` float
,`pelanggan` varchar(100)
,`alamat` varchar(100)
,`telp` varchar(100)
,`email` varchar(100)
,`password` varchar(255)
,`aktif` int(11)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vorder`
--
DROP TABLE IF EXISTS `vorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vorder`  AS  select `tbl_order`.`id_order` AS `id_order`,`tbl_order`.`id_pelanggan` AS `id_pelanggan`,`tbl_order`.`tgl_order` AS `tgl_order`,`tbl_order`.`total` AS `total`,`tbl_order`.`bayar` AS `bayar`,`tbl_order`.`kembali` AS `kembali`,`tbl_order`.`status` AS `status`,`tbl_pelanggan`.`pelanggan` AS `pelanggan`,`tbl_pelanggan`.`alamat` AS `alamat`,`tbl_pelanggan`.`telp` AS `telp`,`tbl_pelanggan`.`email` AS `email`,`tbl_pelanggan`.`password` AS `password`,`tbl_pelanggan`.`aktif` AS `aktif` from (`tbl_pelanggan` join `tbl_order` on(`tbl_pelanggan`.`id_pelanggan` = `tbl_order`.`id_pelanggan`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vorderdetail`
--
DROP TABLE IF EXISTS `vorderdetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vorderdetail`  AS  select `tbl_order_detail`.`id_order_detail` AS `id_order_detail`,`tbl_order_detail`.`id_order` AS `id_order`,`tbl_order_detail`.`id_buku` AS `id_buku`,`tbl_order_detail`.`jumlah` AS `jumlah`,`tbl_order_detail`.`harga_jual` AS `harga_jual`,`tbl_buku`.`id_kategori` AS `id_kategori`,`tbl_buku`.`buku` AS `buku`,`tbl_buku`.`gambar` AS `gambar`,`tbl_buku`.`harga` AS `harga`,`tbl_kategori`.`kategori` AS `kategori`,`tbl_order`.`id_pelanggan` AS `id_pelanggan`,`tbl_order`.`tgl_order` AS `tgl_order`,`tbl_order`.`total` AS `total`,`tbl_order`.`bayar` AS `bayar`,`tbl_order`.`kembali` AS `kembali`,`tbl_order`.`status` AS `status`,`tbl_pelanggan`.`pelanggan` AS `pelanggan`,`tbl_pelanggan`.`alamat` AS `alamat`,`tbl_pelanggan`.`telp` AS `telp`,`tbl_pelanggan`.`email` AS `email`,`tbl_pelanggan`.`password` AS `password`,`tbl_pelanggan`.`aktif` AS `aktif` from ((`tbl_pelanggan` join ((`tbl_buku` join `tbl_order_detail` on(`tbl_buku`.`id_buku` = `tbl_order_detail`.`id_buku`)) join `tbl_order` on(`tbl_order_detail`.`id_order` = `tbl_order`.`id_order`)) on(`tbl_pelanggan`.`id_pelanggan` = `tbl_order`.`id_pelanggan`)) join `tbl_kategori` on(`tbl_buku`.`id_kategori` = `tbl_kategori`.`id_kategori`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
