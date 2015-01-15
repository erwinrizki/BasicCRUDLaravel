-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2015 at 12:11 PM
-- Server version: 5.5.33
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `books_kode_buku_unique` (`kode_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `kode_buku`, `judul_buku`, `pengarang`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'A001', 'Cara Bercinta Yang Sehat', 'Yohanes Yantari Wicaksono', 'Buku ini berisi tentang tips - tips dan trik pasangan suami istri untuk bisa bercinta secara sehat', '2014-09-24 23:33:47', '2015-01-14 20:32:29'),
(2, 'A002', 'Mahir PHP Dalam 24 Jam Bro', 'Erwin Rizki Ariyanto, S.Kom', 'Anda berminat di pemrograman web? Buku ini akan mengantarkan anda menjadi seorang programmer web dalam waktu 24 jam', '2014-09-24 23:50:37', '2014-09-26 03:33:24'),
(3, 'A003', 'Interaksi Manusia dan Komputer', 'Erwin Rizki Ariyanto, S.Kom', 'Human Computer Interaction dan tips desain antar muka sistem yang sesuai kaidah', '2014-09-24 23:54:36', '2014-09-24 23:54:36'),
(4, 'A004', 'Menelusuri Framework CodeIgniter', 'Erwin Rizki Ariyanto, S.Kom', 'Dari sekian banyak framework PHP, CodeIgniter merupakan framework PHP yang populer. Dalam buku ini akan dibahas secara detail tentang CI', '2014-09-24 23:57:18', '2014-09-24 23:57:18'),
(5, 'A005', 'Asiknya Bercinta', 'Muhammad Syarif', 'Bingung yang anda lakukan saat malam pertama? baca buku ini solusinya', '2014-09-26 03:54:14', '2014-09-26 03:54:14'),
(6, 'A106', 'Hajar Framework Laravel Dalam 3 Hari', 'Erwin Rizki Ariyanto, S.Kom', 'Cara belajar framework laravel dengan mudah, beserta studi kasus pembuatan sistem informasi di dalamnya', '2015-01-14 20:34:08', '2015-01-14 20:34:08'),
(7, 'A107', 'Buku Matematika SD Kelas 5', 'Budi Sentosa, S. Pd', 'Buku materi pelajaran matematika kelas 5 SD', '2015-01-14 20:38:16', '2015-01-14 20:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_09_25_060347_create_books_table', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
