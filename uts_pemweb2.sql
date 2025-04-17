-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2025 pada 10.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pemweb2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `sinopsis` text DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `sinopsis`, `cover`, `kategori_id`, `created_at`) VALUES
(1, 'Akasha : Record Of Ragnarok - The Legend of Lu Bu 01', 'Ono Takeo', 'Kisah legenda Lu Bu, salah seorang jenderal ternama yang terkenal tidak pernah kalah dari Zaman Tiga Kerajaan itu kini terungkap!\r\n\r\nJenderal terbang terkuat di muka bumi vs para Genius di Zaman Tiga Kerjaan!\r\n\r\n*****\r\nDi antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.\r\n\r\nKomik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.\r\n\r\nM&C! Publishing adalah penerbit di bawah Divisi Ritel dan Penerbitan Grup Kompas Gramedia, perusahaan penerbitan terbesar di Indonesia. Grup Kompas Gramedia memulai usaha dengan fokus di media cetak. Dalam perkembangannya, perusahaan telah berkembang menjadi kelompok usaha dengan berbagai divisi. Di bidang informasi, grup ini juga merambah ke media elektronik dan multimedia. M&C! Penerbitan telah menerbitkan berbagai judul dan jenis buku: komik, komik pendidikan, buku anak-anak, novel, buku nonfiksi. Salah Satunya seperti komik ”Akasha : Record Of Ragnarok - The Legend of Lu Bu 01”.', '3ba3db21ccd61cc3aed63950f99ceaa5.jpeg', 1, '2025-04-17 05:11:22'),
(2, 'Akasha : Ito Junji Compilation 08 - The Groaning Drain', 'Ito Junji', 'Dari dalam kegelapan pipa saluran, bergema rintihan yang menakutkan. Obsesi sang manusia buruk rupa menyerang sebuah keluarga yang gila kebersihan!! Selain karya utama “The Groaning Drain”, buku ini juga berisi tujuh cerita pendek mahakarya lainnya.\r\n\r\nDeskripsi Buku:\r\n1. The Groaning Drain\r\nDua saudara perempuan dan ibu mereka yang terobsesi dengan kebersihan pada awalnya hanya sedikit terganggu dengan saluran air mereka yang tersumbat. Hingga saluran air mulai mengeluarkan bau busuk dan erangan.\r\n\r\n2. Occult Transfer Student\r\nLima siswa SMA membentuk sebuah klub untuk mempelajari hal-hal supernatural. Anggotanya termasuk ketua Hikaru Shibayama, yang memiliki kekuatan telekinesis kecil; dan Kiyoshi Kitagawa, yang bisa melihat roh manusia. Kemudian suatu hari ada murid pindahan baru bernama Ryo Tsukano. Tsukano mengaku bahwa hobi favoritnya adalah berjalan-jalan karena dia selalu menemukan sesuatu yang menarik dan istimewa.\r\n\r\n3. Blood-Bubble Bushes\r\nMobil Ansai dan Kana tabrakan. Mereka melihat ada darah di kaca depan, dan menjadi khawatir mereka menabrak seseorang. Namun, mereka tidak dapat menemukan bangkai apa pun di jalan. Mereka terdampar di antah berantah dan berjalan berkeliling mencari bantuan. Mereka sampai di sebuah gubuk yang penuh dengan anak-anak kecil yang aneh, yang tidak mau berbicara tapi hanya tertawa.\r\n\r\n4. The Hanging Balloons\r\nKazuko terperangkap di dalam rumahnya, tidak bisa keluar atau dia akan dibunuh. Dia mati kelaparan, dan makhluk yang menunggunya menggunakan suara Kazuko untuk mencoba memancingnya keluar.\r\n\r\n5. House of the Marionettes\r\nKeluarga Haruhiko berkeliling Jepang untuk mengadakan pertunjukan boneka. Mereka tidak pernah tinggal di suatu tempat lebih dari satu bulan, sehingga Haruhiko tidak punya waktu untuk berteman. Saat tinggal di satu kota, dia berteman dengan seorang gadis bernama Kinuko, dan mengajaknya untuk melihat boneka keluarganya. Dia takut dengan “Jean-Pierre”, boneka yang tampak menyeramkan milik kakaknya, Yukihiko. Tak lama kemudian, keluarga tersebut harus meninggalkan kota, tetapi Kinuko berjanji bahwa ia akan menemui Haruhiko lagi.\r\n\r\n6. Flesh-Colored Horror\r\nKetika berjalan pulang ke rumah pada suatu malam, Momoko Takikawa disiram seember cairan berbau busuk oleh seorang wanita misterius. Ketika sampai di rumah, ia berhasil mengelupas zat yang mengering dari kulitnya, tetapi terpaksa memotong pendek rambutnya. Keesokan harinya, di tempat kerjanya sebagai guru taman kanak-kanak, Momoko harus berurusan dengan Chikara Kawabe, seorang anak laki-laki antisosial yang cenderung mencakar anak-anak lain ketika diprovokasi. Dia juga memiliki penampilan yang menakutkan, yang membuat teman-teman sekelasnya takut.\r\n\r\n7. Near Miss!\r\nKonishi, Kawaguchi dan Takashio adalah tiga orang sahabat lama dari masa kuliah. Ketika pesawat penumpang yang membawa Takashio kehilangan sinyal dalam perjalanan, Konishi bersikeras untuk pergi mencari, bertentangan dengan saran dari saudara perempuannya dan Kawaguchi. Mereka nyaris menabrak pesawat yang membawa Takashio. Pesawat terbakar dan rusak parah, tetapi semua penumpang terlihat tenang; termasuk Takashio, yang menoleh ke arah teman-temannya sebelum pesawatnya menghilang.\r\n\r\n8. Inside the Earth\r\nTeranishi dan Ejji menghadiri reuni di sekolah menengah pertama mereka yang lama, dengan acara utamanya adalah menemukan kapsul waktu yang terkubur dua puluh tahun yang lalu. Kapsul ini berisi berbagai macam foto dan kenangan, termasuk surat-surat yang pernah ditulis oleh anak-anak tersebut kepada satu sama lain. Teranishi ingat pernah menulis surat kepada Kumi Shinoda, seorang gadis yang dibenci di kelasnya karena ia adalah pengganggu yang selalu mengeluh tentang segala hal.\r\n\r\n\r\nKeunggulan:\r\nThe Groaning Drain adalah salah satu dari deretan mahakarya Junji ITO yang terus bertambah. Kisahnya memadukan fiksi ilmiah dan horor secara sempurna dengan hasil yang memukau dan mengerikan seperti yang diharapkan dari master manga horor', 'e3460681144b822d6ca627fabb1de991.jpg', 3, '2025-04-17 05:25:39'),
(3, 'Detektif Conan Movie: The Scarlet Bullet (Last)', 'Aoyama Gosho', 'Jepang menunda pembukaan “WSG Tokyo”, festival olahraga yang diselenggarakan empat tahun sekali karena menghilangnya Alan Mackenzie, presiden IWSG. Conan berdeduksi bahwa Alan berada di dalam linear superkonduktor vakum yang diluncurkan pada hari upacara pembukaan WSG Tokyo! Setelah menghubungi Akai, Conan menumpangi linear bersama Sera. Momen final melawan pelaku yang dianggap sebagai penculik Alan, makin dekat. Ditambah saat ini keluarga berbahaya tengah berkumpul. Apa kebenaran dan akhir dari kasus yang menggemparkan ini!?\r\n\r\nSelling Point:\r\n- Komiknya best seller di banyak negara.\r\n- Komiknya sudah diangkat menjadi film, serial animasi, drama tv, game, dsb.\r\n- Movie-nya sudah ditayangkan di berbagai negara.\r\n- Di Jepang movie-nya memecahkan rekor box office\r\n\r\nManga Detective Conan pertama kali diserialkan dalam edisi kelima Weekly Shōnen Sunday pada tahun 1994, ditulis dan digambar oleh Gosho Aoyama, dan telah muncul di sana sejak itu. Tankoubon pertama juga diterbitkan oleh Shogakukan pada Juni 1994; itu telah mencapai 100 volume yang diterbitkan pada 18 Oktober 2021, dan berlanjut hingga hari ini. Manga ini sangat populer di Jepang; tankoubon telah menerima banyak tempat pertama dalam daftar buku terlaris.\r\n\r\n*****\r\nDi antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.\r\n\r\nKomik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.', '5393316c387f2df5cef1e0abf9bc2e50.jpg', 2, '2025-04-17 05:26:48'),
(5, 'Level Comic: The Tale of Dororo and Hyakkimaru 02', 'Shiki Satoshi', 'Hyakkimaru melawan Bandai yang dirasuki oleh roh mati karena ketamakannya yang ingin menguasai desa. Namun, terjadi perubahan pada tubuh hyakkimaru setelah melawan Bandai! Dia pun akhirnya menceritakan kisahnya kepada Dororo. Apa rahasia tubuh Hyakkimaru?\r\n\r\nProfil Penulis:\r\nShiki Satoshi adalah seorang mangaka (penulis manga) dan ilustrator asal Jepang yang dikenal dengan gaya visualnya yang khas dan cerita-cerita yang menarik. Karya-karyanya, seperti Riot, Kamikaze, dan Daphne in the Brilliant Blue, telah memikat hati banyak penggemar manga di seluruh dunia.\r\nGaya Seni yang Mencolok\r\n\r\nSalah satu ciri khas karya Shiki Satoshi adalah gaya seni yang sangat detail dan penuh ekspresi. Karakter-karakternya seringkali memiliki desain yang unik dan mencolok, dengan mata yang besar dan ekspresi wajah yang dramatis. Latar belakang yang ia gambar juga sangat kaya detail, menciptakan atmosfer yang kuat dalam setiap panel.\r\n\r\n*****\r\nDi antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.\r\n\r\nKomik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.', '22fbdf96614df49a1631f234c7141cc4.jpg', 1, '2025-04-17 07:00:26'),
(7, 'Hanako Si Arwah Penasaran 14', 'Aida Iro', 'Hanako si Arwah Penasaran, adalah sebuah seri manga Jepang karya Iro Aida. Manga ini telah dimuat dalam majalah manga shōnen Monthly G Fantasy terbitan Square Enix sejak tahun 2014. Seri ini telah dibundel menjadi delapan belas volume tankōbon. Manga ini juga telah dilisensi di Amerika Utara oleh Yen Press. Adaptasi anime-nya mulai tayang sejak tanggal 9 Januari 2020.\r\n\r\nSinopsis Buku\r\nAwal cerita dari komik ini adalah Akademi Kamome dikenal dengan Tujuh Misteri dan peristiwa supranatural lainnya, dipopulerkan oleh gosip para pelajar. Nene Yashiro, siswa baru yang menyukai okultisme, memutuskan untuk memanggil misteri ketujuh \"Hanako-san\", seorang gadis yang meninggal di kamar mandi dan dapat mengabulkan permintaan dengan bayaran yang pantas. Namun, setelah memanggilnya, terungkap bahwa Hanako-san adalah seorang anak laki-laki. Kemudian, Nene menjadi asistennya untuk mempertahankan keseimbangan antara dunia roh dan dunia manusia.\r\n***\r\n\"Di saat seperti ini mestinya kamu berbohong dengan memalingkan wajah dan berpura-pura sedih.\" Hanako dan Nene akhirnya pergi untuk menyelamatkan Aoi yang diculik Nana Fushigi Nomor Enam. Akan tetapi, mereka dijatuhkan dari dunia perbatasan. Di tempat asing yang baru, mereka bertemu gadis bernama Sumire yang sepertinya mengenal Si Nomor Enam dengan baik....\r\nInilah jilid 14 yang penuh dengan perasaan cinta lama yang terpendam bertahun-tahun! Selamat membaca!\r\n\r\nInformasi Lain:\r\nJudul Buku: Hanako Si Arwah Penasaran 14\r\nFormat: Soft Cover\r\nTebal: 184 halaman\r\nTanggal Terbit: 15 September 2021\r\nPenerbit: Elex Media Komputindo\r\nBerat: 0.09 kg\r\nLebar: 11.4 cm\r\nPanjang: 17.2 cm\r\nISBN: 9786230027949', '6fa8f96ab7850cf1d3bc69e9f1becc1f.jpg', 3, '2025-04-17 08:44:47'),
(8, 'Sherlock Holmes : Misteri Penyelidikan Benang Merah', 'Sir Arthur Conan Doyle', 'Setelah bertugas sebagai seorang dokter di Angkatan Darat Inggris, Dr. Watson kembali ke kota London untuk menyambung hidupnya. Ia pun dikenalkan pada seorang pria misterius berintelegensi tinggi. Tak disangka, mereka pun menjadi teman satu apartemen. Dr. Watson semakin tertarik untuk mengenal lebih jauh tentang dirinya. Dia adalah Sherlock Holmes, seorang konsultan detektif yang memiliki keahlian ilmu deduksi. Bermacam-macam jenis orang yang kehabisan ide kerap menyambangi kediamannya, demi sebuah pemecahan suatu masalah.\r\n\r\nSepucuk surat pun tiba di apartemen Sherlock Holmes. Dikatakan bahwa pihak kepolisian Scotland Yard minta bantuan untuk mengungkap peristiwa misterius. Sesosok mayat laki-laki ditemukan di sebuah rumah tua, di Brixton Road. Anehnya, pada tubuh mayat itu tak ditemukan luka apapun. Berbagai kejadian janggal menyertai penyelidikan yang dilakukan oleh Sherlock Holmes dan Dr. Watson. Apakah penyebab kematian pria asing tersebut? Misteri apakah yang sebenarnya terjadi di balik kasus yang tidak biasa ini? Bagaimanakah aksi Sherlock Holmes dan Dr. Watson dalam menelusuri setiap jejak kasus ini?\r\n\r\n\r\nTahun Terbit : Cetakan Pertama, September 2024\r\n\r\nPernahkah Anda terpikir betapa menariknya dunia yang terbuka lebar lewat lembaran buku? Membaca bukan hanya kegiatan rutin, tetapi juga petualangan tak terbatas ke dalam imajinasi dan pengetahuan.\r\n\r\nMembaca mengasah pikiran, membuka wawasan, dan memperkaya kosakata. Ini adalah pintu menuju dunia di luar kita yang tak terbatas.\r\n\r\nTetapkan waktu khusus untuk membaca setiap hari. Dari membaca sebelum tidur hingga menyempatkan waktu di pagi hari, kebiasaan membaca dapat dibentuk dengan konsistensi.\r\n\r\nPilih buku sesuai minat dan level literasi. Mulailah dengan buku yang sesuai dengan keinginan dan kemampuan membaca.\r\n\r\nTemukan tempat yang tenang dan nyaman untuk membaca. Lampu yang cukup, kursi yang nyaman, dan sedikit musik pelataran bisa menciptakan pengalaman membaca yang lebih baik.\r\n\r\nBuat catatan atau jurnal tentang buku yang telah Anda baca. Tuliskan pemikiran, kesan, dan pelajaran yang Anda dapatkan.', '', 2, '2025-04-17 08:54:20'),
(10, 'Blue Lock 13', 'MUNEYUKI KANESHIRO,YUSUKE NOMURA', 'Melalui tryout, akhirnya terbentuk kesebelasan Blue Lock yang akan mengikuti laga melawan timnas U-20. Apakah egoisme Blue Lock efektif menghadapi kesebelasan timnas Jepang yang terkenal dengan kekuatan bertahan dan jenius Sae Itoshi? Kunci kemenangan yang diajarkan oleh Ego adalah “flow”. Pada saat Blue Lock merancang perkembangan baru lagi, seorang striker yang penuh kejutan malah bergabung dengan timnas U-20.\r\n\r\n\r\nBlue Lock adalah serial manga Jepang yang ditulis oleh Muneyuki Kaneshiro dan diilustrasikan oleh Yusuke Nomura. Blue Lock sendiri adalah sebuah fasilitas yang dibangun oleh pemerintahan Jepang guna menemukan dan mengembangkan 1 striker yang akan menjadi bintang timnas jepang sekaligus super star di dunia sepakbola kelak. Blue Lock tidak menceritakan kisah pemain di suatu turnamen sepakbola seperti pada umumnya.\r\n\r\nBlue Lock memiliki sedikit kesamaan dengan Squid Game. Yaitu menyeleksi 300 peserta, melakukan serangkaian permainan dengan sistem gugur, sehingga akan tersisa 1 orang sebagai pemenang. Cerita dimulai ketika seorang bernama Isagi Yoichi kelas 2 SMA yang tergabung dalam klub sepakbola yang kalah dalam kualifikasi turnamen nasional jepang tingkat SMA. Kendati kalah di kualifikasi, Isagi tetap diundang sebagai salah 1 dari 300 orang yang akan diseleksi di fasilitas Blue Lock.\r\n\r\n\r\nDi antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.\r\n\r\nKomik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.', '6c419c7a5819b9ceab8a310f1b8998e2.jpeg', 1, '2025-04-17 09:03:04'),
(12, 'lorem i', 'lorem ipsum', 'lorem ipsum', '', 1, '2025-04-17 10:03:13'),
(14, 'Lorem Ipsum', 'Lorem', 'Lorem ipsum', 'd9e5cc0ebb93ceb0704b8fa21acbf6ff.jpeg', 4, '2025-04-17 10:20:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`id`, `nama`) VALUES
(1, 'Action'),
(2, 'Mystery'),
(3, 'Horror'),
(4, 'Romance');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_buku` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
