SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `penyelenggara` varchar(256) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` int(1) NOT NULL,
  `link_pendaftaran` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `kegiatan` (`id`, `judul`, `deskripsi`, `penyelenggara`, `tanggal_daftar`, `tanggal_berakhir`, `tanggal_kegiatan`, `foto`, `status`, `link_pendaftaran`) VALUES
(1, 'EP FEST 2023', '📣 HIMPUNAN MAHASISWA ILMU EKONOMI STUDI PEMBANGUNAN UPN “VETERAN” JAWA TIMUR MEMPERSEMBAHKAN 📣\r\n\r\n🎡 EP FEST 2023 🎡\r\n\r\n________________________\r\n\r\n🎮 TURNAMEN MOBILE LEGENDS 🎮\r\n\r\n🏆 *TOTAL HADIAH JUTAAN RUPIAH + E-SERTIFIKAT* 🏆\r\n\r\n💸 HTM : Rp 65.000/tim\r\n\r\n🗓️ Jadwal\r\n• Technical Meeting : 6 Desember 2023\r\n📍Media : Zoom Meeting\r\n• Babak Penyisihan : 11 Desember 2023\r\n• Babak Semifinal dan Final : 13 Desember 2023\r\n📍Lokasi : Online\r\n\r\n‼️Pendaftaran : 17 November - 4 Desember 2023‼️\r\n\r\n🔗 Link Pendaftaran : https://forms.gle/R14QaeDehZWSFPyv6\r\n\r\n________________________\r\n\r\n💸 Pembayaran :\r\n• Shopeepay 085264639465 (a/n Cheryl)\r\n• BNI 1413675956 (a/n Ainun Nadifa Suwondo)\r\n• Dana 085895868658 (a/n Ainun Nadifa Suwondo)\r\n\r\n👤Informasi lebih lanjut :\r\n• Cheryl (085264639465)\r\n• Nadifa (085895868658)\r\n\r\n#MLEsports\r\n#LegendsofML\r\n#BattleofLegends\r\n#MobileLegendsContest\r\n#MobileLegendsTournament\r\n#MLGamingLeague\r\n#MLCompetition\r\n#EPFESTUPNVJT2023\r\n#UPNVETERANJAWATIMUR\r\n#HIMIESPAJAYA\r\n\r\nDepartemen Hubungan Masyarakat\r\n————————————————\r\n-HIMANIS 2023-\r\n“Kabinet Abhikara”\r\n#AdbiskuSatu\r\n#JayalahAdministrasi\r\n', 'HIMPUNAN MAHASISWA ILMU EKONOMI STUDI PEMBANGUNAN UPN “VETERAN” JAWA TIMUR ', '2023-11-17', '2023-12-04', '2023-12-06', 'lomba-himanis.jpg', 0, 'https://forms.gle/R14QaeDehZWSFPyv6'),
(2, 'ECOEDVENT 2023', '[ECOEDVENT 2023]\r\n\r\nHi, Peeps!🙌🏻\r\n\r\nDid you know? Your wait will coming. The amazing and awaited event, ECOEDVENT 2023. There will be a lot of activities in this event.😱🎪\r\n\r\n‼️SAVE THE DATE‼️\r\n🗓️: 5th Desember 2023\r\n📍: Giri Loka UPN “Veteran” Jawa Timur\r\n\r\n🌱“Achieving SDGs Through Sustainable Tourism”\r\nSpeaker 1: Dr. Ir. Ar. R. A. Retno Hastijanti, M.T., IPU., IAI\r\nSpeaker 2: Devina Helmalia Latiefah\r\n\r\n🎊Festival “Permainan Kesatuan Bangsa”\r\n• Performance Drama\r\n• Performance Traditional Dance and Song\r\n• Booth UMKM\r\n• Booth Traditional Games (playable)\r\n\r\nBenefits:\r\nE - Sertifikat\r\nDoorprize\r\nVoucher 25.000 by Merapi Mountain\r\nLearning Experience\r\n\r\nNote the date and stay tune!🤩\r\n\r\n———\r\n\r\n#ECOEDVENT2023\r\n#PARIWISATAUPNVJT\r\n\r\nDepartemen Hubungan Masyarakat\r\n————————————————\r\n-HIMANIS 2023-\r\n“Kabinet Abhikara”\r\n#AdbiskuSatu\r\n#JayalahAdministrasiDepartemen Hubungan Masyarakat\r\n', 'HIMPUNAN MAHASISWA PARIWISATA UPN \"VETERAN\" JAWA TIMUR', '2023-12-05', '2023-12-05', '2023-12-05', 'ecoedvent2023.jpg', 0, NULL),
(3, 'DIES NATALIS HIMIESPA KE-28', '🎉 HIMPUNAN MAHASISWA ILMU EKONOMI STUDI PEMBANGUNAN UPN \"VETERAN\" JAWA TIMUR MEMPERSEMBAHKAN 🎉\r\n\r\n🎊 DIES NATALIS HIMIESPA KE-28 🎊\r\n\r\n_________________________\r\n\r\n🗓 Sabtu, 16 Desember 2023\r\n\r\n📍Lokasi\r\nParkiran Belakang FEB 1 UPN \"Veteran\" Jawa Timur\r\n\r\n👥 Keluarga Mahasiswa Ekonomi Pembangunan dan Mahasiswa UPN \"Veteran\" Jawa Timur\r\n\r\n🎤 Penampilan Angkatan Ekonomi Pembangunan (2020-2023) 🎤\r\n\r\n✨ Penampilan Spesial dari :\r\n🪩 DJ ANDREANZ\r\n🎤 Ukm Musik \"Satya Palapa\"🎤\r\n\r\n💸 HTM khusus KM EP: Rp30.000\r\n💸 HTM KM UPNVJT: Rp35.000\r\n\r\n‼️Pembelian Tiket : 30 November - 15 Desember 2023‼️\r\n\r\n🔗 Link Pembelian Tiket : https://bit.ly/PendaftaranDiesnatalisEPFest2023\r\n\r\n_________________________\r\n\r\n💸 Pembayaran :\r\n• Shopeepay 085264639465 (a/n Cheryl)\r\n• BNI 1413675956 (a/n Ainun Nadifa Suwondo)\r\n• Dana 085895868658 (a/n Ainun Nadifa Suwondo)\r\n\r\n👤Informasi lebih lanjut :\r\n• intagram @official_epfest\r\n• Cheryl (085264639465)\r\n• Nadifa (085895868658)\r\n\r\n*TIKET TERBATAS*\r\n\r\n📌 NB : *Penukaran tiket dilakukan pada tanggal 15 Desember 2023.*\r\n\r\n#EPFESTUPNVJT2023\r\n#UPNVETERANJAWATIMUR\r\n#HIMIESPAJAYA\r\n#KABINETRINASCITA\r\n', 'HIMPUNAN MAHASISWA ILMU EKONOMI STUDI PEMBANGUNAN UPN \"VETERAN\" JAWA TIMUR', '2023-11-30', '2023-12-15', '2023-12-16', 'disnat-ekonomi-pembangunan.jpg', 0, NULL),
(4, 'Achieve Career Excellent (ACE) 2023', '\"Siapkan dirimu untuk meraih keunggulan karier di Achieve Career Excellent (ACE) 2023! 🌟✨ Temukan rahasia sukses dalam \'Unlocking Career Excellence: Ace Insights in CV Crafting and LinkedIn Mastery\'.\r\n\r\nJangan lewatkan kesempatan untuk:\r\n\r\n🌐 Meningkatkan CV dengan format ATS Friendly\r\n🔗 Maksimalkan LinkedIn sebagai senjata utama mencari peluang karir\r\n👔 Kesempatan peluang magang\r\n🎓 Peroleh wawasan berharga tentang dunia kerja\r\n🎁 Dapatkan e-certificate eksklusif\r\n\r\n📅 Tanggal: 8 Desember 2023\r\n🕒 Waktu: 13.00 WIB (Open Gate) hingga selesai\r\n📍 Lokasi: Ruang Seminar Giri Santika II, Fakultas Ilmu Komputer, UPN Veteran Jawa Timur\r\n\r\n‼Partisipasi terbatas! Daftar sekarang sebelum kehabisan slot! 🏃♂\r\n\r\nUntuk pendaftaran, klik link\r\nhttps://himatifa.link/regace\r\n\r\nInfo lebih lanjut, hubungi kami:\r\n📞 Atha : http://wa.me/6285259451304\r\n📞 Anjas: http://wa.me/62881026805965\r\n\r\n🚀 Jangan lewatkan kesempatan menakjubkan ini untuk membuka pintu menuju karier yang gemilang! 🌐🎉\r\n\r\n#AchieveCareerExcellent\r\n#JayaJayaLuarbiasa\r\n#KabinetSatyaRacana\r\n#HIMATIFA\r\n', 'HIMPUNAN MAHASISWA INFORMATIKA UPN \"VETERAN\" JAWA TIMUR', '2023-12-01', '2023-12-08', '2023-12-08', 'achieve-career-excellent.jpg', 0, NULL),
(5, 'KASTRA FASILKOM : Reaktualisasi Gen-Z dalam Meminimalisir Penyimpangan pada Proses Pemilu', '[KASTRA FASILKOM : Reaktualisasi Gen-Z dalam Meminimalisir Penyimpangan pada Proses Pemilu]\r\n\r\n🇮🇩 BEM Fasilkom UPN “Veteran” Jawa Timur, Proudly Present : KASTRA FASILKOM 2023 🇮🇩\r\n\r\nMenjelang PEMILU yang akan dilaksanakan pada tahun 2024 saat ini, ada banyak sekali penyimpangan-penyimpangan yang terjadi. Tak sedikit penyimpangan tersebut melibatkan para Generasi-Z. Oleh karena itu dibutuhkan reaktualisasi para Generasi-Z tersebut dalam meminimalisir penyimpangan yang ada.\r\n\r\nBadan Eksekutif Mahasisa Fakultas Ilmu Komputer UPN “Veteran” Jawa Timur, menyelenggarakan acara KASTRA FASILKOM untuk mengkaji penyimpangan yang ada pada proses Pemilu terutama dikalangan Generasi-Z.\r\n\r\nThe event will be held on:\r\n📆: Rabu, 6 Desember 2023\r\n🕐: 08.00 WIB\r\n📍: Ruang Seminar Lantai 3 FIK 2, UPN “Veteran” Jawa Timur\r\n\r\n🗣️ Speaker 1: Syafiudin\r\n(Koordinator Divisi Pencegahan, Partisipasi Masyarakat, dan Hubungan Masyarakat Bawaslu)\r\n🗣️ Speaker 2: Singgih Manggalou S.IP., M.IP\r\n(Dosen Asisten Ahli FISIP UPN V Jawa Timur)\r\n🗣️ Moderator: Ahmad Alfian Ertiansyah\r\n(Mahasiswa Fasilkom UPN V Jawa Timur)\r\n\r\nBenefits :\r\n📧 E-Certificate\r\n✨ Knowledge and Experience\r\n🏅 SKPM Point (Only For UPN “Veteran” East Java Students)\r\n\r\n‼️ Pendaftaran TIDAK DIPUNGUT BIAYA serta Terbuka untuk UMUM ‼️\r\n\r\nAren’t you guys excited ⁉️ Go register yourself now!!!\r\n\r\n⬇️ Register Link ⬇️\r\nbit.ly/KASTRAFASILKOMv\r\n\r\n⬇️Guidebook Link⬇️\r\nhttps://drive.google.com/file/d/1kNp-ya4pE3gyYbrl3MvX4NM2x5WoAs_h/view?usp=sharing\r\n\r\n📲Contact Person :\r\n• Sharleen (+6281226248084)\r\n• Yasita (‪+6285655789522‬)\r\n\r\n#KASTRAFASILKOM2023\r\n#BEMFASILKOMUPNVJATIM\r\n#SATUFASILKOMKITAKUAT\r\n', 'BEM Fasilkom UPN “Veteran” Jawa Timur', '2023-11-29', '2023-12-06', '2023-12-06', 'kastra.jpg', 0, NULL),
(6, 'KOPI 3rd', 'Halo halo halo KM-TP❗❗\r\nSebagai pembawa informasi, kami dari departemen Kominfo hadir dengan \"KOPI\" yang akan terbit di bulan Desember ini lohhh!\r\n\r\nMaka dari itu kami membuka formulir pengumpulan karya berupa puisi yang nantinya akan kami publikasikan di instagram @himatepaupn dan penempelan karya terbaik pada mading✨\r\n\r\nTema: Hari Bela Negara\r\n\"Semangat Bela Negara, Junjung Tinggi Nilai Kemanusiaan\"\r\n\r\nTimeline:\r\n2-17 Desember 2023: Pengumpulan karya\r\n19 Desember 2023: Penerbitan KOPI di ig himatepa\r\n[ HARI BELA NEGARA ]\r\n\r\nBerikut link gformnya:\r\nhttps://bit.ly/SubmitKaryaKOPI2023\r\n\r\nMenarik bukan?? Ayo tunggu apa lagi? Jangan khawatir, ada hadiah buat karya terbaik kok🤩\r\n\r\nDitunggu yaa karya dari kalian!!! Have a nice day🙌🏼\r\n\r\n#himatepa\r\n#himatepa2023\r\n#himatepajaya\r\n#kabinetkarsacipta\r\n#rasakankarsaciptakankarya\r\n', 'HIMPUNAN MAHASISWA TEKNOLOGI PANGAN UPN \"VETERAN\" JAWA TIMUR', '2023-12-02', '2023-12-17', '2023-12-19', 'kopi3rd.jpg', 0, NULL),
(7, 'SPECTRUM ~Begin to Get Your Career into Data Science', '[HIMASADA UPN \'VETERAN\' JAWA TIMUR PROUDLY PRESENT]\r\n\r\n✨SPECTRUM ~Begin to Get Your Career into Data Science✨\r\n\r\nHai Pejuang Data!👋\r\n\"Spectrum\" atau Science Data Industry Insight Forum adalah kegiatan seminar yang diadakan oleh Himpunan Mahasiswa Sains Data UPN \"Veteran\" Jawa Timur dengan tujuan memberikan wawasan berharga tentang persiapan karir, terutama dalam pembuatan CV, dan portofolio yang efektif.\r\n\r\n🗣Speaker:\r\n1. Pemateri CV: Ika Noviani Pratiwi (Operation Manager Maxy Academy)\r\n2. Pemateri Portofolio dan LinkedIn: Andy Febrico Bintoro (CTO dan Co-Founder Maxy Academy)\r\n\r\n‼Save the date‼\r\n📅 : Saturday, 09 December 2023\r\n⏲ : 11.45 (Open Gate) - selesai\r\n📍: Gedung Barat, Balai Pemuda, Surabaya\r\n\r\n📌Terbuka untuk Mahasiswa dan umum📌\r\n💸 HTM :\r\n- Rp.12.000 {Mahasiswa Prodi Sains Data}\r\n- Rp.18.000 {Umum}\r\n\r\n✨Benefits✨\r\n📚 Knowledge\r\n📜 E-Certificate\r\n📝Seminar Kit\r\n🎁Doorprize\r\n👥Relation\r\n🧾Bedah CV *bagi 2 terpilih\r\n\r\nWhat are u waiting for?\r\nREGISTER NOW‼\r\n🔗https://linktr.ee/SPECTRUM.2023\r\n\r\n📄Timeline Pendaftaran\r\nPendaftaran: 28 November-7 Desember 2023\r\n\r\nFor more information check out our Instagram : @himasada.upnvjatim\r\n\r\n📞 Contact Person\r\nJasmine ( wa.me/6285231059721 )\r\nMila ( wa.me/6285602961012 )\r\n\r\n#SPECTRUM2023 #DataScience #BedahCV #HIMASADA #HimasadaUPNVeteranJawaTimur\r\n', 'Himpunan Mahasiswa Sains Data UPN \"Veteran\" Jawa Timur', '2023-11-28', '2023-12-07', '2023-12-09', 'spectrum.jpg', 0, NULL),
(8, 'Seminar KECE PASTI : Kiat-Kiat Cara Cepat dan Tepat menjadi Sarjana Teknik Industri', 'Pendaftaran Seminar\r\nKECE PASTI : Kiat-Kiat Cara Cepat dan Tepat menjadi Sarjana Teknik Industri👨‍🎓👩‍🎓\r\n\r\nHalo teman-teman!🙌🙌\r\nKece pasti merupakan salah satu program dari departemen riset dan teknologi yang bertujuan untuk membantu mahasiswa dalam hal kelulusannya.\r\nMaka dari itu, tingkatkan pengetahuanmu dan persiapkan masa depanmu dengan mengikuti seminar KECE PASTI yang bertemakan\r\n\"Mewujudkan Karir Gemerlang Dengan 2S (Skripsi Tepat Dan Sinta 3)\"\r\n\r\nTerdapat 2 sesi interaktif, yaitu:\r\n📌Sesi 1: Tips and Trick Penyusunan Skripsi\r\nNarasumber: Alisa Qothrunnada, ST.\r\n\r\n📌Sesi 2: Tips and Trick Jurnal Sinta 3\r\nNarasumber: Tasya Az\'zahra P.W, ST\r\n\r\nTanggal dan Waktu Pelaksanaan:\r\n🗓: 10 Desember 2023\r\n⏰: 08.15 - 11.00 WIB\r\n📍: Zoom Meeting\r\nHTM: GRATIS\r\n\r\nDaftar sekarang dan buka pintu menuju pemahaman yang lebih baik tentang skripsi dan Sinta 3!\r\n\r\n✨ Terdapat hadiah bagi yang beruntung ✨\r\n\r\nLink Pendaftaran : https://bit.ly/PendaftaranSeminarKecePasti2023\r\n\r\n☎Contact Person:\r\nSasa (+6285238538347)\r\nDwi (+62 888-0583-6128)\r\n\r\n', 'Himpunan Mahasiswa Teknik Industri UPN \"Veteran\" Jawa Timur', '2023-12-03', '2023-12-10', '2023-12-10', 'seminar-kece.jpg', 0, NULL);

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `lingkup` int(1) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `name`, `lingkup`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Subairi', NULL, 'broapin18@gmail.com', 'Subai.jpg', '$2y$10$xHuJUiFHttrEgjIbOVecCup1XDtVDyBAl/FOiYm4OwbGuraNcWMXe', 2, 1, 1695555391),
(2, 'Subairi', NULL, 'broa@gmail.com', 'default.jpg', '$2y$10$QmIDk2mi5mg3l7m06bn4L.UwQQMZcAXm3RxEHJRg.D5qplVmiS9KK', 2, 1, 1695556430),
(3, 'Subairi', NULL, '21081010019@student.upnjatim.ac.id', 'default.jpg', '$2y$10$Jf5u5TyooZh5DWSPIm7C2OQfjBbIB2v.zHebhDY3ROcjRRt09GTxa', 2, 1, 1695607098),
(4, 'Subai', NULL, 'subairibai689@yahoo.com', 'Subai1.jpg', '$2y$10$eQyI.PoW9L6Bwd5ieQR3m.5tUpKwcR8CpwEnq1ihZZ0Y.D/vb9laK', 1, 1, 1695644638),
(5, 'sabui', NULL, 'subairibai689@yahoo.co', 'default.jpg', '$2y$10$KDgE3H3jgzPdkVqIBIyXZeQLxboW9M7TWYhdx5pNVpubj9Ntgyw/u', 2, 1, 1696910674),
(6, 'Nanda', NULL, 'nanda@gmail.com', 'default.jpg', '$2y$10$UG0ihZXlUsRu./vnela8OOnpoLQkWstLBNLFj3l485VOUd6Osjb/i', 2, 1, 1696911810),
(9, 'BEM FASILKOM', 2, 'bemfasilkom@gmail.com', 'BEM_FASILKOM.png', '$2y$10$EKpJj2wDtdjTDu1tp8k/HOwugQjHdc4s6tefOihwnjtQJ.cRax8rS', 3, 1, 1700485949),
(11, 'bem ui', 1, 'bemui@gmail.com', 'default.jpg', '$2y$10$4hXv8G8wMPk4iSnGt3Cgpuv7aEhLY4MGSGlx3jRTtSHLu3GI/ISJC', 3, 1, 1700568760);

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(7, 1, 7),
(8, 3, 2),
(10, 3, 7),
(11, 4, 2),
(12, 4, 3),
(13, 4, 7),
(15, 1, 8),
(16, 8, 3);

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(7, 'Kegiatan');

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'admin_organisasi');

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(11, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(12, 7, 'Management Kegiatan', 'Kegiatan', 'fas fa-fw fa-user', 1),
(13, 8, 'baru', 'baru/baru', 'fas fa-fw fa-user', 1),
(14, 1, 'Request Aktivasi', 'admin/request', 'fas fa-fw fa-user', 1);


ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
