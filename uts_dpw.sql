-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 08:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_dpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  `terbit` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `isi`, `terbit`, `created_at`, `update_at`) VALUES
(11, 'Jurnal Indonesia Kaya: Pekan Suci di Larantuka', 'Jurnal Indonesia Kaya', 'Kota Maria, julukan untuk kota Larantuka tersebut ternyata tergambar jelas di kala paskah. Pasalnya, masyarakat setempat maupun wisatawan berbondong-bondong untuk mengikuti maupun menyaksikan festival upacara Semana Santa. Semana Santa yang memiliki arti seminggu menjelang paskah merupakan tradisi yang telah ada sejak 500 tahun yang lalu. Mulai dari Rabu Trewa, Kamis Putih, hingga upacara arak-arakan Tuan Menino adalah berbagai rangkaian yang dilakukan.\r\n\r\nKekaguman Febrian pun tak hanya sampai pada tradisi serta budaya Larantuka. Adalah Desa Wulublolong, Solor, salah satu desa budaya yang menarik perhatian Febrian. Menganyam daun lontar menjadi kegiatan rutin para perempuan di sana. Dompet, Tas, bahkan sepatu adalah beberapa hasil dari kesenian menganyam Komunitas Du’Anyam.\r\n\r\nAyo, ikuti perjalanan lengkap Febrian dan Indonesia Kaya di Larantuka, Flores, Nusa Tenggara Timur dalam video berikut!\"', '2022-09-07', '2022-09-09 07:19:33', '2022-09-09 08:07:59'),
(12, 'Passiliran, Pohon Bagi Rahim Para Bayi', 'Indonesia Kaya', 'POHON itu menjulang tinggi di antara rumpun-rumpun bambu yang teduh. Batangnya yang gigantik dan kulit kayunya yang tua menandakan pohon ini sudah berumur. Namanya pohon tarra yang buahnya mirip sukun. Dalam tubuh pohon inilah bayi-bayi dari Desa Kambira, Tana Toraja, dimakamkan.\r\n\r\nMasyarakat Toraja memang punya tradisi unik dalam pemakaman. Sejak zaman megalitik, pemakaman menjadi satu hal penting dan dilakukan dengan banyak ritual. Bahkan upacara-upacara pemakaman orang Toraja bisa menelan biaya yang sangat mahal.\r\n\r\nPerayaan akan kematian telah menjadi tradisi yang dilestarikan orang Toraja. Kematian seseorang dianggap sebagai kesempatan terakhir untuk berbuat sesuatu. Hidup orang Toraja menjadi berarti jika kematian dan proses pemakamannya baik.\r\n\r\n“Upacara pemakaman merupakan pusat kehidupan kebanyakan orang Toraja dan merupakan jawaban atas kematian,” tulis Edwin de Jong dalam Making a Living between Crises and Ceremonies in Tana Toraja.\r\n\r\nUpacara pemakaman itu dikenal dengan istilah rambu solo dengan makam atau liang yang dibuat dengan memahat dinding tebing. Namun, masih ada bentuk pemakaman lain yang jarang disorot dan tak kalah unik, yakni passiliran atau tradisi penguburan bayi di dalam batang pohon di Desa Kambira.\r\n\r\nDesa Kambira terletak di Kecamatan Sangalla, sekitar 20 kilometer dari Rantepao, ibukota Kabupaten Tana Toraja, Sulawesi Selatan. Di tempat inilah pohon tarra tumbuh dan menjadi tempat memakamkan bayi. Hanya bayi yang meninggal dunia ketika belum tumbuh gigi yang dikuburkan di sini.\r\n\r\nDalam passiliran, bayi yang belum memiliki gigi dianggap masih suci. Bagi orang Kambira, menguburkan bayi di dalam pohon tarra ibarat mengembalikan bayi tersebut ke dalam rahim ibunya. Terselip harapan, mengembalikan bayi ke rahim ibunya akan menyelamatkan bayi-bayi yang lahir kemudian.\r\n\r\nJenazah bayi diletakkan dalam posisi berdiri dengan anggapan bayi juga akan tumbuh di dalam pohon. Sementara pohon tarra dipilih sebagai kuburan bayi karena jenis pohon ini memiliki banyak getah yang dianggap sebagai pengganti air susu ibu.\r\n\r\nPohon tarra yang menjadi kuburan bayi ini memiliki diameter 80-100 centimeter. Batangnya dilubangi sedemikian rupa agar jenazah bayi bisa dimasukkan dalam posisi berdiri. Jenazah bayi ditempatkan menghadap ke arah tempat tinggal keluarganya yang berduka. Lubang tersebut kemudian ditutup dengan ijuk pohon enau.\r\n\r\nPosisi lubang penempatan jenazah bayi di pohon disesuaikan dengan strata sosialnya. Semakin tinggi posisi lubang menandakan semakin tinggi juga kasta keluarganya. Cara pemakaman seperti ini hanya dilakukan orang Toraja pengikut Aluk Todolo (kepercayaan kepada leluhur).\r\n\r\nUpacara pemakamannya dilakukan dengan sangat sederhana. Bayi yang dikuburkan tidak dibungkus dengan apapun, sama seperti bayi yang masih berada di rahim ibunya.\r\n\r\nKetika proses pemakaman hingga sekira setahun, sang ibu tak diperbolehkan melihatnya karena dipercaya bisa mengurangi kemungkinan sang ibu mendapatkan bayi sehat lagi di masa mendatang.\r\n\r\nSetelah puluhan tahun, lubang pada pohon tarra akan tertutup sendiri dan jenazah-jenazah bayi itu akan tetap bersemayam di sana. Dari jauh, pohon ini terlihat seperti penuh dengan tambalan-tambalan berbentuk kotak berwarna hitam. Meski dilubangi untuk dijadikan makam, pohon tarra hidup dengan baik selayaknya pohon biasa. Pohon tarra juga tak boleh ditebang agar tak memutus kelanjutan hidup atau perjalanan si bayi menuju alam baka.\r\n\r\nMenurut Toke Hoppenbrouwers, Stanislaus Sandarupa, dan Aurora Donzelli dalam “From the womb to the tree: Child rearing practices and beliefs among the Toraja of Sulawesi” di jurnal Wacana Vol. 18 No. 3 (2017), di Toraja, selain takut kehilangan, ada juga rasa takut mati di waktu yang salah. Dengan mengubur bayi di pohon hidup, bayi akan menyatu dengan pohon dan rahim kedua ini akan memungkinkan tumbuh menjadi keras; simbol kesempurnaan.\r\n\r\n“Ketika pohon itu mati, kematian tepat waktu telah dicapai,” jelas mereka.\r\n\r\nPassiliran hanya berlaku untuk bayi yang belum memiliki gigi. Menurut Toke Hoppenbrouwers dkk, jika bayi yang meninggal sudah memiliki gigi, ia dimakamkan di kuburan batu, bukan di pohon. Anak itu dibungkus dengan pakaian putih; tanpa peti mati.\r\n\r\nJanin akibat keguguran juga dimakamkan di kuburan batu. Dua telur ditempatkan di tangan atau ketiaknya; melambangkan bayi yang hilang. Hal ini dilakukan untuk mencegahnya menjadi roh jahat yang mengembara mencari bayi ibu lain. Jika karena aborsi, sel janin ditempatkan di batok kelapa yang kosong atau wadah lain yang dikubur.\r\n\r\nMenurut Akin Duli dan Rosmawati dalam “Late Prehistoric Burial System in South Sulawesi” di jurnal ELS Journal on Interdisciplinary Studies on Humanities Vol. 1 No. 2, 2018, menyebut bahwa dulu pohon yang dipakai untuk mengubur bayi bukan hanya pohon tarra.\r\n\r\n“Kayu pohon yang digunakan adalah jenis kayu sifate, tarrak dan kau-kau, jenazah diletakkan di celah-celah akar atau di batang lubang kemudian jenazah dimasukkan ke dalamnya dan ditutup ijuk. Bentuk makan ini hanya diperuntukkan bagi orang yang berasal dari tanak kua-kua,” tulis Akin Duli dan Rosmawati.\r\n\r\nDulunya, istilah passiliran juga dipakai untuk pemakaman di gua, celah batu, dan celah akar pohon. Jenazah dimasukan ke dalam celah tanpa erong atau peti mati, lalu celah ditutup balok batu. Saat itu, tradisi ini diperuntukan bagi orang-orang yang berasal dari strata sosial tanak kua-kua (hamba sahaya) atau tanakung.\r\n\r\n“Namun dalam perkembangannya saat ini, passiliran hanya dikenal sebagai kuburan bayi di atas pohon kayu,” tulis Akin Duli dan Rosmawati.\r\n\r\nCara menguburkan bayi seperti ini sudah lama tidak dilaksanakan lagi. Namun, pohon tarra masih tetap tegak berdiri dan mempunyai daya tarik tersendiri bagi para wisatawan.\r\n\r\nDesa Kambira bisa dicapai dengan menggunakan kendaraan pribadi atau bemo dari Makale atau Rantepao. Lokasi pekuburan ini dikelola masyarakat setempat. Di sini juga ada beberapa kios yang menjual souvenir khas Toraja.', '2022-09-10', '2022-09-10 08:10:27', '2022-09-10 08:10:27'),
(13, 'Tenun Gringsing, Kain Tradisional Suku Bali Aga', 'Putry', 'Terletak di lokasi yang tak jauh dari kawasan wisata Candidasa, Kabupaten Karangasem, Bali, Tenganan hiduplah sebuah suku bernama Bali Aga. Konon, suku ini merupakan penduduk Bali asli.\r\n\r\nHingga saat ini masyarakat Bali Aga masih mempertahankan polah hidup tradisional ala nenek moyang. Maka tak mengherankan jika masyarakat yang hidup disini sangat kokoh tak terpengaruh budaya luar.\r\n\r\nJika di Flores ada kain tenun ikat, maka di Bali ada warisan budaya asli Bali Aga yang disebut dengan kain tenun Gringsing.\r\n\r\nKain tradisional ini selain dibuat dalam jangka waktu yang cukup lama, juga menggunakan pewarnaan yang berasal dari bahan-bahan tradisional alami.\r\n\r\nKain hasil tenunan ini di dunia hanya terdapat di 3 negara dan salah satunya di Bali. Teknik pembuatan kain Gringsing dinamakan dobel ikat. Kain ini biasanya dipakai di upacara adat dan kini mulai hadir di beberapa pentas peragaan busana.', '2022-09-10', '2022-09-10 10:22:03', '2022-09-10 10:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `nama`, `isi`, `created_at`, `update_at`) VALUES
(2, 'Putry', 'Nicee', '2022-09-10 10:20:06', '2022-09-10 10:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Aksara', 'aksara@gmail.com', '$2y$10$WWlHZgPTtAxKMLXCDGDy1OU2p1UgL89crLnARz2i5ASb6EJkREo6q', NULL, '2022-09-09 14:53:38'),
(5, 'Putry', 'pnurfadillah29@gmail.com', '$2y$10$oBtexxDeoWCBO6wT8P80zOIA54ycmAZMQX5i4vMMKCaRCBUF7HmdK', NULL, '2022-09-10 10:00:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
