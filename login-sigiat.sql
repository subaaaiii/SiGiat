-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 06:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-sigiat`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `id_user`, `id_kegiatan`) VALUES
(32, 4, 1),
(33, 4, 12),
(34, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `id_user`, `id_kegiatan`) VALUES
(12, 1, 8),
(28, 4, 10),
(32, 4, 6),
(33, 4, 7),
(34, 4, 3),
(35, 4, 14),
(39, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id` int(11) NOT NULL,
  `jenis_kegiatan` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `jenis_kegiatan`, `icon`) VALUES
(1, 'Festival', 'festival.png'),
(2, 'Konser', 'konser.png'),
(3, 'Lkmm', 'lkmm.png'),
(4, 'Lomba', 'lomba.png'),
(6, 'Oprec', 'oprec.png'),
(7, 'Pameran', 'pameran.png'),
(8, 'Seminar', 'seminar.png'),
(9, 'Talkshow', 'talkshow.png');

-- --------------------------------------------------------

--
-- Table structure for table `hubungan`
--

CREATE TABLE `hubungan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pengikut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hubungan`
--

INSERT INTO `hubungan` (`id`, `id_user`, `pengikut`) VALUES
(1, 12, 1),
(2, 12, 4),
(4, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `penyelenggara` int(11) NOT NULL,
  `jenis` varchar(256) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` int(1) NOT NULL,
  `link_pendaftaran` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `deskripsi`, `penyelenggara`, `jenis`, `tanggal_daftar`, `tanggal_berakhir`, `tanggal_kegiatan`, `foto`, `status`, `link_pendaftaran`) VALUES
(1, 'EP FEST 2023', '📣 HIMPUNAN MAHASISWA ILMU EKONOMI STUDI PEMBANGUNAN UPN “VETERAN” JAWA TIMUR MEMPERSEMBAHKAN 📣\n\n🎡 EP FEST 2023 🎡\n\n________________________\n\n🎮 TURNAMEN MOBILE LEGENDS 🎮\n\n🏆 *TOTAL HADIAH JUTAAN RUPIAH + E-SERTIFIKAT* 🏆\n\n💸 HTM : Rp 65.000/tim\n\n🗓️ Jadwal\n• Technical Meeting : 6 Desember 2023\n📍Media : Zoom Meeting\n• Babak Penyisihan : 11 Desember 2023\n• Babak Semifinal dan Final : 13 Desember 2023\n📍Lokasi : Online\n\n‼️Pendaftaran : 17 November - 4 Desember 2023‼️\n\n🔗 Link Pendaftaran : https://bit.ly/PendaftaranMobileLegendsEPFest2023\n\n________________________\n\n💸 Pembayaran :\n• Shopeepay 085264639465 (a/n Cheryl)\n• BNI 1413675956 (a/n Ainun Nadifa Suwondo)\n• Dana 085895868658 (a/n Ainun Nadifa Suwondo)\n\n👤Informasi lebih lanjut :\n• Cheryl (085264639465)\n• Nadifa (085895868658)\n\n#MLEsports\n#LegendsofML\n#BattleofLegends\n#MobileLegendsContest\n#MobileLegendsTournament\n#MLGamingLeague\n#MLCompetition\n#EPFESTUPNVJT2023\n#UPNVETERANJAWATIMUR\n#HIMIESPAJAYA\n\nDepartemen Hubungan Masyarakat\n————————————————\n-HIMANIS 2023-\n“Kabinet Abhikara”\n#AdbiskuSatu\n#JayalahAdministrasi\n', 12, 'lomba', '2023-11-16', '2023-12-31', '2024-01-01', 'lomba-himanis.jpg', 0, 'https://bit.ly/PendaftaranMobileLegendsEPFest2023'),
(2, 'ECOEDVENT 2023', '[ECOEDVENT 2023]\r\n\r\nHi, Peeps!🙌🏻\r\n\r\nDid you know? Your wait will coming. The amazing and awaited event, ECOEDVENT 2023. There will be a lot of activities in this event.😱🎪\r\n\r\n‼️SAVE THE DATE‼️\r\n🗓️: 5th Desember 2023\r\n📍: Giri Loka UPN “Veteran” Jawa Timur\r\n\r\n🌱“Achieving SDGs Through Sustainable Tourism”\r\nSpeaker 1: Dr. Ir. Ar. R. A. Retno Hastijanti, M.T., IPU., IAI\r\nSpeaker 2: Devina Helmalia Latiefah\r\n\r\n🎊Festival “Permainan Kesatuan Bangsa”\r\n• Performance Drama\r\n• Performance Traditional Dance and Song\r\n• Booth UMKM\r\n• Booth Traditional Games (playable)\r\n\r\nBenefits:\r\nE - Sertifikat\r\nDoorprize\r\nVoucher 25.000 by Merapi Mountain\r\nLearning Experience\r\n\r\nNote the date and stay tune!🤩\r\n\r\n———\r\n\r\n#ECOEDVENT2023\r\n#PARIWISATAUPNVJT\r\n\r\nDepartemen Hubungan Masyarakat\r\n————————————————\r\n-HIMANIS 2023-\r\n“Kabinet Abhikara”\r\n#AdbiskuSatu\r\n#JayalahAdministrasiDepartemen Hubungan Masyarakat\r\n', 18, 'seminar', '2023-12-05', '2023-12-05', '2023-11-05', 'ecoedvent2023.jpg', 0, ''),
(3, 'DIES NATALIS HIMIESPA KE-28', '🎉 HIMPUNAN MAHASISWA ILMU EKONOMI STUDI PEMBANGUNAN UPN \"VETERAN\" JAWA TIMUR MEMPERSEMBAHKAN 🎉\r\n\r\n🎊 DIES NATALIS HIMIESPA KE-28 🎊\r\n\r\n_________________________\r\n\r\n🗓 Sabtu, 16 Desember 2023\r\n\r\n📍Lokasi\r\nParkiran Belakang FEB 1 UPN \"Veteran\" Jawa Timur\r\n\r\n👥 Keluarga Mahasiswa Ekonomi Pembangunan dan Mahasiswa UPN \"Veteran\" Jawa Timur\r\n\r\n🎤 Penampilan Angkatan Ekonomi Pembangunan (2020-2023) 🎤\r\n\r\n✨ Penampilan Spesial dari :\r\n🪩 DJ ANDREANZ\r\n🎤 Ukm Musik \"Satya Palapa\"🎤\r\n\r\n💸 HTM khusus KM EP: Rp30.000\r\n💸 HTM KM UPNVJT: Rp35.000\r\n\r\n‼️Pembelian Tiket : 30 November - 15 Desember 2023‼️\r\n\r\n🔗 Link Pembelian Tiket : https://bit.ly/PendaftaranDiesnatalisEPFest2023\r\n\r\n_________________________\r\n\r\n💸 Pembayaran :\r\n• Shopeepay 085264639465 (a/n Cheryl)\r\n• BNI 1413675956 (a/n Ainun Nadifa Suwondo)\r\n• Dana 085895868658 (a/n Ainun Nadifa Suwondo)\r\n\r\n👤Informasi lebih lanjut :\r\n• intagram @official_epfest\r\n• Cheryl (085264639465)\r\n• Nadifa (085895868658)\r\n\r\n*TIKET TERBATAS*\r\n\r\n📌 NB : *Penukaran tiket dilakukan pada tanggal 15 Desember 2023.*\r\n\r\n#EPFESTUPNVJT2023\r\n#UPNVETERANJAWATIMUR\r\n#HIMIESPAJAYA\r\n#KABINETRINASCITA\r\n', 12, 'konser', '2023-11-30', '2023-12-15', '2023-12-16', 'disnat-ekonomi-pembangunan.jpg', 0, ''),
(4, 'Achieve Career Excellent (ACE) 2023', '\"Siapkan dirimu untuk meraih keunggulan karier di Achieve Career Excellent (ACE) 2023! 🌟✨ Temukan rahasia sukses dalam \'Unlocking Career Excellence: Ace Insights in CV Crafting and LinkedIn Mastery\'.\r\n\r\nJangan lewatkan kesempatan untuk:\r\n\r\n🌐 Meningkatkan CV dengan format ATS Friendly\r\n🔗 Maksimalkan LinkedIn sebagai senjata utama mencari peluang karir\r\n👔 Kesempatan peluang magang\r\n🎓 Peroleh wawasan berharga tentang dunia kerja\r\n🎁 Dapatkan e-certificate eksklusif\r\n\r\n📅 Tanggal: 8 Desember 2023\r\n🕒 Waktu: 13.00 WIB (Open Gate) hingga selesai\r\n📍 Lokasi: Ruang Seminar Giri Santika II, Fakultas Ilmu Komputer, UPN Veteran Jawa Timur\r\n\r\n‼Partisipasi terbatas! Daftar sekarang sebelum kehabisan slot! 🏃♂\r\n\r\nUntuk pendaftaran, klik link\r\nhttps://himatifa.link/regace\r\n\r\nInfo lebih lanjut, hubungi kami:\r\n📞 Atha : http://wa.me/6285259451304\r\n📞 Anjas: http://wa.me/62881026805965\r\n\r\n🚀 Jangan lewatkan kesempatan menakjubkan ini untuk membuka pintu menuju karier yang gemilang! 🌐🎉\r\n\r\n#AchieveCareerExcellent\r\n#JayaJayaLuarbiasa\r\n#KabinetSatyaRacana\r\n#HIMATIFA\r\n', 14, 'seminar', '2023-12-01', '2023-12-08', '2023-12-08', 'achieve-career-excellent.jpg', 0, ''),
(5, 'KASTRA FASILKOM : Reaktualisasi Gen-Z dalam Meminimalisir Penyimpangan pada Proses Pemilu', '[KASTRA FASILKOM : Reaktualisasi Gen-Z dalam Meminimalisir Penyimpangan pada Proses Pemilu]\r\n\r\n🇮🇩 BEM Fasilkom UPN “Veteran” Jawa Timur, Proudly Present : KASTRA FASILKOM 2023 🇮🇩\r\n\r\nMenjelang PEMILU yang akan dilaksanakan pada tahun 2024 saat ini, ada banyak sekali penyimpangan-penyimpangan yang terjadi. Tak sedikit penyimpangan tersebut melibatkan para Generasi-Z. Oleh karena itu dibutuhkan reaktualisasi para Generasi-Z tersebut dalam meminimalisir penyimpangan yang ada.\r\n\r\nBadan Eksekutif Mahasisa Fakultas Ilmu Komputer UPN “Veteran” Jawa Timur, menyelenggarakan acara KASTRA FASILKOM untuk mengkaji penyimpangan yang ada pada proses Pemilu terutama dikalangan Generasi-Z.\r\n\r\nThe event will be held on:\r\n📆: Rabu, 6 Desember 2023\r\n🕐: 08.00 WIB\r\n📍: Ruang Seminar Lantai 3 FIK 2, UPN “Veteran” Jawa Timur\r\n\r\n🗣️ Speaker 1: Syafiudin\r\n(Koordinator Divisi Pencegahan, Partisipasi Masyarakat, dan Hubungan Masyarakat Bawaslu)\r\n🗣️ Speaker 2: Singgih Manggalou S.IP., M.IP\r\n(Dosen Asisten Ahli FISIP UPN V Jawa Timur)\r\n🗣️ Moderator: Ahmad Alfian Ertiansyah\r\n(Mahasiswa Fasilkom UPN V Jawa Timur)\r\n\r\nBenefits :\r\n📧 E-Certificate\r\n✨ Knowledge and Experience\r\n🏅 SKPM Point (Only For UPN “Veteran” East Java Students)\r\n\r\n‼️ Pendaftaran TIDAK DIPUNGUT BIAYA serta Terbuka untuk UMUM ‼️\r\n\r\nAren’t you guys excited ⁉️ Go register yourself now!!!\r\n\r\n⬇️ Register Link ⬇️\r\nbit.ly/KASTRAFASILKOMv\r\n\r\n⬇️Guidebook Link⬇️\r\nhttps://drive.google.com/file/d/1kNp-ya4pE3gyYbrl3MvX4NM2x5WoAs_h/view?usp=sharing\r\n\r\n📲Contact Person :\r\n• Sharleen (+6281226248084)\r\n• Yasita (‪+6285655789522‬)\r\n\r\n#KASTRAFASILKOM2023\r\n#BEMFASILKOMUPNVJATIM\r\n#SATUFASILKOMKITAKUAT\r\n', 9, 'seminar', '2023-11-29', '2023-12-06', '2023-12-06', 'kastra.jpg', 0, ''),
(6, 'KOPI 3rd', 'Halo halo halo KM-TP❗❗\r\nSebagai pembawa informasi, kami dari departemen Kominfo hadir dengan \"KOPI\" yang akan terbit di bulan Desember ini lohhh!\r\n\r\nMaka dari itu kami membuka formulir pengumpulan karya berupa puisi yang nantinya akan kami publikasikan di instagram @himatepaupn dan penempelan karya terbaik pada mading✨\r\n\r\nTema: Hari Bela Negara\r\n\"Semangat Bela Negara, Junjung Tinggi Nilai Kemanusiaan\"\r\n\r\nTimeline:\r\n2-17 Desember 2023: Pengumpulan karya\r\n19 Desember 2023: Penerbitan KOPI di ig himatepa\r\n[ HARI BELA NEGARA ]\r\n\r\nBerikut link gformnya:\r\nhttps://bit.ly/SubmitKaryaKOPI2023\r\n\r\nMenarik bukan?? Ayo tunggu apa lagi? Jangan khawatir, ada hadiah buat karya terbaik kok🤩\r\n\r\nDitunggu yaa karya dari kalian!!! Have a nice day🙌🏼\r\n\r\n#himatepa\r\n#himatepa2023\r\n#himatepajaya\r\n#kabinetkarsacipta\r\n#rasakankarsaciptakankarya\r\n', 15, 'lomba', '2023-12-02', '2023-12-17', '2023-12-19', 'kopi3rd.jpg', 0, ''),
(7, 'SPECTRUM ~Begin to Get Your Career into Data Science', '[HIMASADA UPN \'VETERAN\' JAWA TIMUR PROUDLY PRESENT]\r\n\r\n✨SPECTRUM ~Begin to Get Your Career into Data Science✨\r\n\r\nHai Pejuang Data!👋\r\n\"Spectrum\" atau Science Data Industry Insight Forum adalah kegiatan seminar yang diadakan oleh Himpunan Mahasiswa Sains Data UPN \"Veteran\" Jawa Timur dengan tujuan memberikan wawasan berharga tentang persiapan karir, terutama dalam pembuatan CV, dan portofolio yang efektif.\r\n\r\n🗣Speaker:\r\n1. Pemateri CV: Ika Noviani Pratiwi (Operation Manager Maxy Academy)\r\n2. Pemateri Portofolio dan LinkedIn: Andy Febrico Bintoro (CTO dan Co-Founder Maxy Academy)\r\n\r\n‼Save the date‼\r\n📅 : Saturday, 09 December 2023\r\n⏲ : 11.45 (Open Gate) - selesai\r\n📍: Gedung Barat, Balai Pemuda, Surabaya\r\n\r\n📌Terbuka untuk Mahasiswa dan umum📌\r\n💸 HTM :\r\n- Rp.12.000 {Mahasiswa Prodi Sains Data}\r\n- Rp.18.000 {Umum}\r\n\r\n✨Benefits✨\r\n📚 Knowledge\r\n📜 E-Certificate\r\n📝Seminar Kit\r\n🎁Doorprize\r\n👥Relation\r\n🧾Bedah CV *bagi 2 terpilih\r\n\r\nWhat are u waiting for?\r\nREGISTER NOW‼\r\n🔗https://linktr.ee/SPECTRUM.2023\r\n\r\n📄Timeline Pendaftaran\r\nPendaftaran: 28 November-7 Desember 2023\r\n\r\nFor more information check out our Instagram : @himasada.upnvjatim\r\n\r\n📞 Contact Person\r\nJasmine ( wa.me/6285231059721 )\r\nMila ( wa.me/6285602961012 )\r\n\r\n#SPECTRUM2023 #DataScience #BedahCV #HIMASADA #HimasadaUPNVeteranJawaTimur\r\n', 16, 'seminar', '2023-11-28', '2023-12-07', '2023-12-09', 'spectrum.jpg', 0, ''),
(8, 'Seminar KECE PASTI : Kiat-Kiat Cara Cepat dan Tepat menjadi Sarjana Teknik Industri', 'Pendaftaran Seminar\r\nKECE PASTI : Kiat-Kiat Cara Cepat dan Tepat menjadi Sarjana Teknik Industri👨‍🎓👩‍🎓\r\n\r\nHalo teman-teman!🙌🙌\r\nKece pasti merupakan salah satu program dari departemen riset dan teknologi yang bertujuan untuk membantu mahasiswa dalam hal kelulusannya.\r\nMaka dari itu, tingkatkan pengetahuanmu dan persiapkan masa depanmu dengan mengikuti seminar KECE PASTI yang bertemakan\r\n\"Mewujudkan Karir Gemerlang Dengan 2S (Skripsi Tepat Dan Sinta 3)\"\r\n\r\nTerdapat 2 sesi interaktif, yaitu:\r\n📌Sesi 1: Tips and Trick Penyusunan Skripsi\r\nNarasumber: Alisa Qothrunnada, ST.\r\n\r\n📌Sesi 2: Tips and Trick Jurnal Sinta 3\r\nNarasumber: Tasya Az\'zahra P.W, ST\r\n\r\nTanggal dan Waktu Pelaksanaan:\r\n🗓: 10 Desember 2023\r\n⏰: 08.15 - 11.00 WIB\r\n📍: Zoom Meeting\r\nHTM: GRATIS\r\n\r\nDaftar sekarang dan buka pintu menuju pemahaman yang lebih baik tentang skripsi dan Sinta 3!\r\n\r\n✨ Terdapat hadiah bagi yang beruntung ✨\r\n\r\nLink Pendaftaran : https://bit.ly/PendaftaranSeminarKecePasti2023\r\n\r\n☎Contact Person:\r\nSasa (+6285238538347)\r\nDwi (+62 888-0583-6128)\r\n\r\n', 17, 'seminar', '2023-12-03', '2023-12-10', '2023-12-10', 'seminar-kece.jpg', 0, ''),
(9, 'ART EXHIBITION 16 HAKTP BEM FISIP UPN “VETERAN” JAWA TIMUR', '[ 🎨 ART EXHIBITION 16 HAKTP BEM FISIP UPN “VETERAN” JAWA TIMUR 🖼 ]\r\n\r\nCalling out for art enthusiast! 📣\r\n\r\n🪄It’s finally here, Art Exhibition 16 HAKTP🖌\r\n\r\nAda kabar gembira buat kita semua, 16 HAKTP BEM Fisip UPN “Veteran” Jawa Timur mengadakan pameran spesial terkait isu-isu perempuan, HAM, Disabilitas, Penghapusan Perbudakan, dan AIDS🦋.\r\n\r\nWill be held on:\r\n🗓 4 Desember - 8 Desember 2023\r\n📌 4 Desember 2023 (12.00-17.00 WIB)\r\n📌 5 Desember - 8 Desember 2023 (08.00 - 17.00 WIB)\r\n📍Lobby Fisip 2 UPN “Veteran” Jawa Timur\r\n👥 Free terbuka untuk umum\r\n\r\nSo, go mark your calendar and see you in 16 HAKTP Art Exhibition! 🎨👋🏻\r\n\r\nDepartemen Hubungan Masyarakat\r\n————————————————\r\n-HIMANIS 2023-\r\n“Kabinet Abhikara”\r\n#AdbiskuSatu', 9, 'pameran', '2023-12-04', '2023-12-08', '2023-12-04', 'art-exhibition.jpg', 0, ''),
(10, '[Open Recruitment Panitia EKSPEDISI MENYIMPUL ASA 2024]', '[Open Recruitment Panitia EKSPEDISI MENYIMPUL ASA 2024]\r\n\r\nHALO KMFH ‼️✨\r\n\r\nKami dari Bidang Sosial Masyarakat BEM FH UPN \"Veteran\" Jawa timur Kabinet Bhakti Nawasena membuka Oprec Panitia Ekspedisi Menyimpul Asa 2024, mari menjadi bagian dari Panitia Ekspedisi Menyimpul Asa 2024 Fakultas Hukum UPN \"Veteran\" Jawa Timur ⚖️\r\n\r\nPelaksanaan Kegiatan\r\nTanggal : 8 Januari - 20 Januari 2024\r\nTempat : Desa Taman Suruh Banyuwangi\r\n\r\nSyarat dan Ketentuan‼️\r\n1. Mahasiswa Aktif Fakultas Hukum UPNVJT\r\n2. Mengisi Gform yang tersedia dengan melampirkan KRS/KTM sebagai bukti\r\n3. Wajib melampirkan Portofolio bagi divisi PDD\r\n4. Berkomitmen, tanggung jawab dan dapat bekerja dengan Tim\r\n\r\nDivisi yang kami tawarkan🌟\r\n🎯Acara\r\n🎯Humas\r\n🎯Perlengkapan\r\n🎯Keamanan\r\n🎯Konsumsi dan Kesehatan\r\n🎯PDD\r\n\r\nBenefits🍁\r\n✨Sertifikat\r\n✨Pengalaman\r\n✨Relasi\r\n✨Transportasi Kereta\r\n✨Konsumsi 37x\r\n✨Vest\r\n✨Topi\r\n\r\niuran💰\r\nRp650.000\r\n\r\nTimeline⌛️\r\nPendaftaran : 4-7 Desemer 2023\r\nWawancara : 8 Desember 2023\r\nPengumuman : 9 Desember 2023\r\n\r\nSegera daftarkan dirimu dan kami tunggu kontribusimu! ✨\r\n\r\nUntuk info lanjut dan link pendaftaran silakan dicek dibawah ini👇🏻\r\n(https://linktr.ee/Ekspedisimenyimpulasa)\r\n\r\n📲CP :\r\n081313015945 (Nataka)\r\n089677971838 (Ica)\r\n\r\n__\r\n#EMA2024\r\n#EMAfhupnvjt\r\n#bemfhupnvjt\r\n#KarsaMenyimpulAsa\r\n#Sosmabemfhupnvjt', 9, 'oprec kepanitiaan', '2023-12-04', '2023-12-07', '2023-12-08', 'oprec-ema.jpg', 0, ''),
(11, '[TALKSHOW MAHASISWA MSIB BATCH 5]', '[TALKSHOW MAHASISWA MSIB BATCH 5]\r\n\r\nSenang menyapa KM FISIP! 🙌🏻🙆🏻‍♀️\r\n\r\nHayo siapaa kemarin yang udah ikutan talkshow MSIB hari rabu kemarin? Gimana udah terjawab pertanyaannya soal MSIB ? Atau masih banyak pertanyaan tapi belum sempet tanya? 🤭💨\r\n\r\nTenang tenang, kami punya solusinyaaa🫣\r\nBEM FISIP UPNVJT proudly present\r\n\r\n\"TALKSHOW BERSAMA MAHASISWA MSIB BATCH 5\"\r\n\r\nWahhhhh gasabarr bangett kan, kapan sih talkshownya❓🤔\r\n\r\n📅 hari/tanggal : Senin, 4 Desember 2023\r\n⏰ jam : 18.00 WIB\r\n📍via : Instagram live @bemfisip_upn\r\n\r\nJangan lupa buat ikutan yahh, kita bareng-bareng dengerin cerita soal MSIB dari pov mahasiswa MSIB wiiii🙆🏻‍♀️🧚🏻‍♀️\r\n\r\nKEMENTERIAN RISET DAN KEILMUAN\r\n_______________________________________\r\n#BEMFISIP2023\r\n#KabinetGembira\r\n#BerkaryaDenganGembira', 9, 'talkshow', '2023-12-04', '2023-12-04', '2023-12-04', 'talkshow-bemfisip.jpg', 0, ''),
(12, 'OPEN DONASI FAPERTA CARE 2023', '✨BEM FAPERTA UPN VETERAN JAWA TIMUR✨\r\n\r\n• Proudly Present •\r\n📢OPEN DONASI FAPERTA CARE 2023📢\r\nHalo Keluarga Mahasiswa Fakultas Pertanian😊🌾\r\n\r\nSatu tambah satu sama dengan dua\r\nAku dan kamu bisa berbagi bersama\r\n\r\nAyo berbagi kebaikan bersama kami untuk menciptakan kebahagiaan bagi orang-orang yang membutuhkan🤝🏻\r\n\r\nDonasi dapat berupa :\r\n- Uang\r\n- Sembako\r\nDisalurkan melalui\r\nBNI : 1214924161 (a.n Rangga Ardana Gegana Suryadi)\r\nOVO : 087850354440 (a.n Rangga Ardana)\r\nShopeePay : 087850354440 (@ranggardanagegana)\r\n\r\nDonasi akan diberikan kepada masyarakat marginal yang membutuhkan bantuan dari kita.\r\n\r\nTerima kasih orang baik atas donasinya, semoga menjadi berkah bagi kita🙏🏻\r\nKonfirmasi dan informasi lebih lanjut dapat melalui : 087850354440 (Rangga)\r\n\r\n#BEMUPNVJT23\r\n#KabinetAkselerasiKarya', 9, 'open donasi', '2023-12-03', '2023-12-10', '2023-12-10', 'donasi-bemfaperta.jpg', 0, ''),
(13, 'LATIHAN KETERAMPILAN MANAGEMEN MAHASISWA TINGKAT MENENGAH', '[BIDANG PENGEMBANGAN SUMBER DAYA MAHASISWA BEM FAKULTAS HUKUM UPN “VETERAN” JAWA TIMUR]\r\n\r\n🥁”LATIHAN KETERAMPILAN MANAGEMEN MAHASISWA TINGKAT MENENGAH”🥁\r\n\r\nHALO KMFH🙌🏻🙌🏻\r\n\r\nKabinet Bhakti Nawasena menghadirkan Sebuah kegiatan yang memberikan wawasan serta pengetahuan baru seputar organisasi yang baik dan inovatif dengan narasumber yang berpengalaman dan kompeten dalam bidangnya guna menunjang mahasiswa dalam menjalani kegiatan berorganisasi.\r\n\r\nLKMM-TM (Latihan Keterampilan Manajemen Mahasiswa Tingkat Menengah) merupakan sebuah wadah bagi para KMFH UPN Veteran Jawa Timur yang telah mengikuti LKMM-TD untuk mewujudkan Jiwa Leadership Yang Profesional, berkontributif, dan berwawasa saat memimpin sebuah organisasi.\r\n\r\nAcara ini akan diadakan pada:\r\n🗓️Tanggal : 16 dan 17 Desember 2023\r\n⏰Hari : Sabtu dan Minggu\r\n📍Tempat : Perpustakaan Bank Indonesia Surabaya.\r\nhttps://maps.app.goo.gl/p8YYFETMwdSgo955A\r\n\r\nInformasi LKMM-TM:\r\n💸HTM : Rp 85.000\r\n🕰️OPREC : 06-13 Desember 2023\r\n🖥️T.M : 14 Desember 2024\r\n🎁Benefit : Relasi, Sertifikat, Point SKPM, Makan dan Minum.\r\n🔗S&K : Sudah pernah mengikuti dan lulus LKMM TD (dibuktikan dengan surat pernyataan kelulusan/sertifikat LKMM TD).\r\n\r\nPembayaran:\r\nBCA: 6750818763\r\na/n Nadira Nathania Munzir\r\nFormat pembayaran: Nama_LKMMTM\r\n\r\n‼️Terbuka bagi seluruh KMFH UPN Veteran Jawa Timur‼️✨\r\n\r\nLink informasi LKMM-TM :\r\nhttps://linktr.ee/LKMMTM.FHUPNVJT.2023\r\n\r\n☎️Narahubung:\r\n081213296661 (Rangga Rasendriya)\r\n\r\n#BEMFHUPNVJT\r\n#KABINETBHAKTINAWASENA\r\n#PSDMBEMUPNVJT', 9, 'lkmm', '2023-12-06', '2023-12-13', '2023-12-14', 'lkmm-bemfh.jpg', 0, ''),
(14, 'NIGHT BAZAAR FESTIVAL', 'Bem faperta upn veteran jawa timur\nproudly present\n\n[night bazaar festival ]\n\nselamat datang di form penjualan tiket \"night bazaar festival\" dekan festival 2023! Mohon lengkapi informasi di bawah ini untuk memastikan kalian semua bisa meraih pengalaman spektakuler yang tak terlupakan dalam rangkaian acara puncak dekan festival 2023 fakultas pertanian upn veteran jawa timur.\n\nNight bazaar festival merupakan kegiatan yang diadakan pada puncak acara dari serangkaian kegiatan yang diselenggarakan oleh dekan fest 2023. Night bazaar festival dibuka secara umum dalam lingkup upn veteran jawa timur. Night bazaar festival akan membuka stand-stand\nyang diisi oleh umum dalam lingkup upn veteran jawa timur. Dan akan dimeriahkan dengan penampilan spesial dari mahasiswa fakultas pertanian dan akan ada penampilan spesial dari dua guest star spesial yang kami undang lhoo\n\nhari/tanggal: jumat, 15 desember 2023\nopen gate: 16.00  19.00 wib\nlokasi: lapangan parkiran fakultas pertanian upnvjt\nprice ticket: rp30.000\n\ntiket internal km fakultas pertanian\nhttps: //bit. Ly/tiketinternaldekanfest2023\n\ntiket eksternal fakultas pertanian\nhttps: //bit. Ly/tiketeksternaldekanfest2023\n\npembayaran bisa ditransfer ke:\n087862337664 (shopeepay) a. N. Novianty nur rahmadhani\n0184149202 (bca) a. N novianty nur rahmadhani\n1427161659 (bni) a. N. Kezia pauline rimadani\n\nsave the date and sing together with us\n\ncontact person:\n089521428737 (kiki)', 9, 'festival', '2023-12-08', '2023-12-15', '2023-12-15', 'nbf-bemfaperta.jpg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

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

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lingkup`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Subairi', NULL, 'broapin18@gmail.com', 'Subai.jpg', '$2y$10$xHuJUiFHttrEgjIbOVecCup1XDtVDyBAl/FOiYm4OwbGuraNcWMXe', 2, 1, 1695555391),
(2, 'Subairi', NULL, 'broa@gmail.com', 'default.jpg', '$2y$10$QmIDk2mi5mg3l7m06bn4L.UwQQMZcAXm3RxEHJRg.D5qplVmiS9KK', 2, 1, 1695556430),
(3, 'Subairi', NULL, '21081010019@student.upnjatim.ac.id', 'default.jpg', '$2y$10$Jf5u5TyooZh5DWSPIm7C2OQfjBbIB2v.zHebhDY3ROcjRRt09GTxa', 2, 1, 1695607098),
(4, 'Admin Subai', NULL, 'subairibai689@yahoo.com', 'Subai1.jpg', '$2y$10$eQyI.PoW9L6Bwd5ieQR3m.5tUpKwcR8CpwEnq1ihZZ0Y.D/vb9laK', 1, 1, 1695644638),
(5, 'sabui', NULL, 'subairibai689@yahoo.co', 'default.jpg', '$2y$10$KDgE3H3jgzPdkVqIBIyXZeQLxboW9M7TWYhdx5pNVpubj9Ntgyw/u', 2, 1, 1696910674),
(6, 'Nanda', NULL, 'nanda@gmail.com', 'default.jpg', '$2y$10$UG0ihZXlUsRu./vnela8OOnpoLQkWstLBNLFj3l485VOUd6Osjb/i', 2, 1, 1696911810),
(9, 'BEM FASILKOM', 2, 'bemfasilkom@gmail.com', 'BEM_FASILKOM.png', '$2y$10$EKpJj2wDtdjTDu1tp8k/HOwugQjHdc4s6tefOihwnjtQJ.cRax8rS', 3, 1, 1700485949),
(11, 'bem ui', 1, 'bemui@gmail.com', 'default.jpg', '$2y$10$4hXv8G8wMPk4iSnGt3Cgpuv7aEhLY4MGSGlx3jRTtSHLu3GI/ISJC', 3, 1, 1700568760),
(12, 'HIMIESPA', 3, 'HIMIESPA@gmail.com', 'HIMIESPA.jpeg', '$2y$10$X3EImPeX4MRInKEUKNbBaem12wA2JrwfTmT8X782O0OIsnOpX/94y', 3, 1, 1701750358),
(14, 'HIMATIFA', 3, 'HIMATIFA@gmail.com', 'HIMATIFA.jpg', '$2y$10$xh857PKL9SvhOz6P8mXugue3mqCSny02k9fG66Svxn2e1MrNT.z0m', 3, 1, 1701750533),
(15, 'HIMATEPA', 3, 'HIMATEPA@gmail.com', 'HIMATEPA.jpeg', '$2y$10$/TDPsMqqoQymGC2/XuPFRus4.24g.C.Y7ot2B6aF3UiMfEQ4qH5TG', 3, 1, 1701750603),
(16, 'HIMASADA', 3, 'HIMASADA@gmail.com', 'HIMASADA.jpeg', '$2y$10$X01wWCjT8GEpmx0LCWR4fuz4eJMT10xO9TlVweeTqfOovoPBbImfS', 3, 1, 1701750682),
(17, 'HMTI', 3, 'HMTI@gmail.com', 'HMTI.png', '$2y$10$xTEoB9rN9gM4.4PRchKttecU4.3640oU4YulX7QVL824qAlr5G3aC', 3, 1, 1701750752),
(18, 'HIMASATA', 3, 'HIMASATA@gmail.com', 'HIMASATA.jpeg', '$2y$10$mqDHBLsqMXo7AvPEpI0XPO8hdTj10tVS85a5XJzYlEmQ92UZz9yHK', 3, 1, 1701750837),
(19, 'hilmi', NULL, 'hilmi@gmail.com', 'Subai4.jpg', '$2y$10$5OS3kRQKoP81/R9365l0b.kATrIzShyQWiYhBPqe9JX8r9LZ0Ysma', 2, 1, 1701757874),
(20, 'Himasifo', 3, 'himasifo@gmail.com', 'default.jpg', '$2y$10$c1q.RShs3xBTM2pNIYZLLe0/s9VlcivA0vUus4OvKDlUw//DUVcDu', 3, 1, 1701757941),
(21, 'fasilkom', 3, 'fasilkom@gmail.com', 'default.jpg', '$2y$10$ROIradcE3/SjGeN8KN1Pn.ek5KNS2sPv6B3NV0S6A3sXP/gUJMYYu', 3, 1, 1702531063);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(8, 3, 2),
(10, 3, 7),
(11, 4, 2),
(12, 4, 3),
(13, 4, 7),
(15, 1, 8),
(16, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(7, 'Kegiatan'),
(11, 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'admin_organisasi');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(11, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(12, 7, 'Management Kegiatan', 'Kegiatan', 'fas fa-fw fa-user', 1),
(13, 8, 'baru', 'baru/baru', 'fas fa-fw fa-user', 1),
(14, 1, 'Request Aktivasi', 'admin/request', 'fas fa-fw fa-user', 1),
(15, 10, 'submenu', 'Kegiatan/manage', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_kegiatan` (`id_kegiatan`),
  ADD KEY `daftar_user` (`id_user`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_kegiatan` (`id_kegiatan`),
  ADD KEY `favorite_user` (`id_user`);

--
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungan`
--
ALTER TABLE `hubungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `pengikut` (`pengikut`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyelenggara_userid` (`penyelenggara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hubungan`
--
ALTER TABLE `hubungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorite_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hubungan`
--
ALTER TABLE `hubungan`
  ADD CONSTRAINT `hubungan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hubungan_ibfk_2` FOREIGN KEY (`pengikut`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `penyelenggara_userid` FOREIGN KEY (`penyelenggara`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
