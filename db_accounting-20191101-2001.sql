-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 01, 2019 at 02:01 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `t01_grup`
--

CREATE TABLE `t01_grup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t01_grup`
--

INSERT INTO `t01_grup` (`id`, `name`) VALUES
(1, 'Harta'),
(2, 'Kewajiban'),
(3, 'Modal'),
(4, 'Pendapatan'),
(5, 'Biaya atas Pendapatan'),
(6, 'Pengeluaran Operasional'),
(7, 'Pengeluaran Non Operasional'),
(8, 'Pendapatan Lain'),
(9, 'Pengeluaran Lain'),
(10, 'COBA-2 GRUP');

-- --------------------------------------------------------

--
-- Table structure for table `t02_subgrup`
--

CREATE TABLE `t02_subgrup` (
  `id` int(11) NOT NULL,
  `grup_id` int(11) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t02_subgrup`
--

INSERT INTO `t02_subgrup` (`id`, `grup_id`, `kode`, `nama`) VALUES
(1, 1, '110', 'Kas'),
(2, 1, '120', 'Bank'),
(3, 1, '130', 'Piutang Dagang'),
(4, 1, '140', 'Persediaan'),
(5, 1, '150', 'Biaya Dibayar Dimuka'),
(6, 1, '160', 'Investasi Jangka Panjang'),
(7, 1, '170', 'Harta Tetap Berwujud'),
(8, 1, '180', 'Harta Tetap Tidak Berwujud'),
(9, 1, '190', 'Harta Lainnya'),
(10, 2, '210', 'Hutang Lancar'),
(11, 2, '220', 'Pendapatan yang diterima di muka'),
(12, 2, '230', 'Hutang Jangka Panjang'),
(13, 3, '310', 'Modal'),
(14, 3, '320', 'Laba'),
(15, 4, '410', 'Pendapatan Usaha'),
(16, 5, '510', 'Biaya Produksi'),
(17, 5, '520', 'Biaya Lain'),
(18, 6, '610', 'Biaya Operasional'),
(19, 7, '660', 'Biaya Non Operasional'),
(20, 8, '810', 'Pendapatan Luar Usaha'),
(21, 9, '910', 'Pengeluaran Luar Usaha'),
(24, 10, '12', '1234'),
(25, 10, '14', '11223344');

-- --------------------------------------------------------

--
-- Table structure for table `t03_matauang`
--

CREATE TABLE `t03_matauang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t03_matauang`
--

INSERT INTO `t03_matauang` (`id`, `kode`, `nama`) VALUES
(1, 'United Arab Emirates dirham', 'AED'),
(2, 'Afghani', 'AFN'),
(3, 'Lek', 'ALL'),
(4, 'Armenian Dram', 'AMD'),
(5, 'Netherlands Antillian Guilder', 'ANG'),
(6, 'Kwanza', 'AOA'),
(7, 'Argentine Peso', 'ARS'),
(8, 'Australian Dollar', 'AUD'),
(9, 'Aruban Guilder', 'AWG'),
(10, 'Azerbaijanian Manat', 'AZN'),
(11, 'Convertible Marks', 'BAM'),
(12, 'Barbados Dollar', 'BBD'),
(13, 'Bangladeshi Taka', 'BDT'),
(14, 'Bulgarian Lev', 'BGN'),
(15, 'Bahraini Dinar', 'BHD'),
(16, 'Burundian Franc', 'BIF'),
(17, 'Bermudian Dollar', 'BMD'),
(18, 'Brunei Dollar', 'BND'),
(19, 'Boliviano', 'BOB'),
(20, 'Brazilian Real', 'BRL'),
(21, 'Bahamian Dollar', 'BSD'),
(22, 'Ngultrum', 'BTN'),
(23, 'Pula', 'BWP'),
(24, 'Belarussian Ruble', 'BYR'),
(25, 'Belize Dollar', 'BZD'),
(26, 'Canadian Dollar', 'CAD'),
(27, 'Franc Congolais', 'CDF'),
(28, 'Swiss Franc', 'CHF'),
(29, 'Chilean Peso', 'CLP'),
(30, 'Yuan Renminbi', 'CNY'),
(31, 'Colombian Peso', 'COP'),
(32, 'Costa Rican Colon', 'CRC'),
(33, 'Cuban Peso', 'CUP'),
(34, 'Cape Verde Escudo', 'CVE'),
(35, 'Cyprus Pound', 'CYP'),
(36, 'Czech Koruna', 'CZK'),
(37, 'Djibouti Franc', 'DJF'),
(38, 'Danish Krone', 'DKK'),
(39, 'Dominican Peso', 'DOP'),
(40, 'Algerian Dinar', 'DZD'),
(41, 'Kroon', 'EEK'),
(42, 'Egyptian Pound', 'EGP'),
(43, 'Nakfa', 'ERN'),
(44, 'Ethiopian Birr', 'ETB'),
(45, 'Euro', 'EUR'),
(46, 'Fiji Dollar', 'FJD'),
(47, 'Falkland Islands Pound', 'FKP'),
(48, 'Pound Sterling', 'GBP'),
(49, 'Lari', 'GEL'),
(50, 'Cedi', 'GHS'),
(51, 'Gibraltar pound', 'GIP'),
(52, 'Dalasi', 'GMD'),
(53, 'Guinea Franc', 'GNF'),
(54, 'Quetzal', 'GTQ'),
(55, 'Guyana Dollar', 'GYD'),
(56, 'Hong Kong Dollar', 'HKD'),
(57, 'Lempira', 'HNL'),
(58, 'Croatian Kuna', 'HRK'),
(59, 'Haiti Gourde', 'HTG'),
(60, 'Forint', 'HUF'),
(61, 'Indonesian Rupiah', 'IDR'),
(62, 'New Israeli Shekel', 'ILS'),
(63, 'Indian Rupee', 'INR'),
(64, 'Iraqi Dinar', 'IQD'),
(65, 'Iranian Rial', 'IRR'),
(66, 'Iceland Krona', 'ISK'),
(67, 'Jamaican Dollar', 'JMD'),
(68, 'Jordanian Dinar', 'JOD'),
(69, 'Japanese yen', 'JPY'),
(70, 'Kenyan Shilling', 'KES'),
(71, 'Som', 'KGS'),
(72, 'Riel', 'KHR'),
(73, 'Comoro Franc', 'KMF'),
(74, 'North Korean Won', 'KPW'),
(75, 'South Korean Won', 'KRW'),
(76, 'Kuwaiti Dinar', 'KWD'),
(77, 'Cayman Islands Dollar', 'KYD'),
(78, 'Tenge', 'KZT'),
(79, 'Kip', 'LAK'),
(80, 'Lebanese Pound', 'LBP'),
(81, 'Sri Lanka Rupee', 'LKR'),
(82, 'Liberian Dollar', 'LRD'),
(83, 'Loti', 'LSL'),
(84, 'Lithuanian Litas', 'LTL'),
(85, 'Latvian Lats', 'LVL'),
(86, 'Libyan Dinar', 'LYD'),
(87, 'Moroccan Dirham', 'MAD'),
(88, 'Moldovan Leu', 'MDL'),
(89, 'Malagasy Ariary', 'MGA'),
(90, 'Denar', 'MKD'),
(91, 'Kyat', 'MMK'),
(92, 'Tugrik', 'MNT'),
(93, 'Pataca', 'MOP'),
(94, 'Ouguiya', 'MRO'),
(95, 'Maltese Lira', 'MTL'),
(96, 'Mauritius Rupee', 'MUR'),
(97, 'Rufiyaa', 'MVR'),
(98, 'Kwacha', 'MWK'),
(99, 'Mexican Peso', 'MXN'),
(100, 'Malaysian Ringgit', 'MYR'),
(101, 'Metical', 'MZN'),
(102, 'Namibian Dollar', 'NAD'),
(103, 'Naira', 'NGN'),
(104, 'Cordoba Oro', 'NIO'),
(105, 'Norwegian Krone', 'NOK'),
(106, 'Nepalese Rupee', 'NPR'),
(107, 'New Zealand Dollar', 'NZD'),
(108, 'Rial Omani', 'OMR'),
(109, 'Balboa', 'PAB'),
(110, 'Nuevo Sol', 'PEN'),
(111, 'Kina', 'PGK'),
(112, 'Philippine Peso', 'PHP'),
(113, 'Pakistan Rupee', 'PKR'),
(114, 'Zloty', 'PLN'),
(115, 'Guarani', 'PYG'),
(116, 'Qatari Rial', 'QAR'),
(117, 'Romanian New Leu', 'RON'),
(118, 'Serbian Dinar', 'RSD'),
(119, 'Russian Ruble', 'RUB'),
(120, 'Rwanda Franc', 'RWF'),
(121, 'Saudi Riyal', 'SAR'),
(122, 'Solomon Islands Dollar', 'SBD'),
(123, 'Seychelles Rupee', 'SCR'),
(124, 'Sudanese Pound', 'SDG'),
(125, 'Swedish Krona', 'SEK'),
(126, 'Singapore Dollar', 'SGD'),
(127, 'Saint Helena Pound', 'SHP'),
(128, 'Slovak Koruna', 'SKK'),
(129, 'Leone', 'SLL'),
(130, 'Somali Shilling', 'SOS'),
(131, 'Surinam Dollar', 'SRD'),
(132, 'Dobra', 'STD'),
(133, 'Syrian Pound', 'SYP'),
(134, 'Lilangeni', 'SZL'),
(135, 'Baht', 'THB'),
(136, 'Somoni', 'TJS'),
(137, 'Manat', 'TMM'),
(138, 'Tunisian Dinar', 'TND'),
(139, 'Pa\'anga', 'TOP'),
(140, 'New Turkish Lira', 'TRY'),
(141, 'Trinidad and Tobago Dollar', 'TTD'),
(142, 'New Taiwan Dollar', 'TWD'),
(143, 'Tanzanian Shilling', 'TZS'),
(144, 'Hryvnia', 'UAH'),
(145, 'Uganda Shilling', 'UGX'),
(146, 'US Dollar', 'USD'),
(147, 'Peso Uruguayo', 'UYU'),
(148, 'Uzbekistan Som', 'UZS'),
(149, 'Venezuelan bolívar', 'VEB'),
(150, 'Vietnamese dong', 'VND'),
(151, 'Vatu', 'VUV'),
(152, 'Samoan Tala', 'WST'),
(153, 'CFA Franc BEAC', 'XAF'),
(154, 'Silver (one Troy ounce)', 'XAG'),
(155, 'Gold (one Troy ounce)', 'XAU'),
(156, 'CFA Franc BCEAO', 'XOF'),
(157, 'Palladium (one Troy ounce)', 'XPD'),
(158, 'CFP franc', 'XPF'),
(159, 'Platinum (one Troy ounce)', 'XPT'),
(160, 'Yemeni Rial', 'YER'),
(161, 'South African Rand', 'ZAR'),
(162, 'Kwacha', 'ZMK'),
(163, 'Zimbabwe Dollar', 'ZWD');

-- --------------------------------------------------------

--
-- Table structure for table `t04_akun`
--

CREATE TABLE `t04_akun` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `subgrup_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `matauang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t04_akun`
--

INSERT INTO `t04_akun` (`id`, `kode`, `nama`, `subgrup_id`, `user_id`, `matauang_id`) VALUES
(2, '110-20', 'Kas', 1, NULL, 61),
(3, '110-30', 'Kas (USD)', 1, NULL, 146),
(4, '120-10', 'Bank', 2, NULL, 61),
(5, '120-20', 'Bank (USD)', 2, NULL, 146),
(6, '120-21', 'bang kecil', 2, NULL, 61),
(7, '130-10', 'Piutang Giro', 3, NULL, 61),
(8, '130-20', 'Piutang Usaha', 3, NULL, 61),
(9, '130-30', 'Piutang Usaha (USD)', 3, NULL, 146),
(10, '130-40', 'Cadangan Kerugian Piutang', 3, NULL, 61),
(11, '130-50', 'Piutang Non Usaha', 3, NULL, 61),
(12, '140-10', 'Persediaan 1', 4, NULL, 61),
(13, '140-20', 'Persediaan 2', 4, NULL, 61),
(14, '140-30', 'Persediaan 3', 4, NULL, 61),
(15, '140-40', 'Persediaan 4', 4, NULL, 61),
(16, '150-10', 'Pajak Dibayar di Muka', 5, NULL, 61),
(17, '150-20', 'Asuransi Dibayar di Muka', 5, NULL, 61),
(18, '160-10', 'Investasi Saham', 6, NULL, 61),
(19, '160-20', 'Investasi Obligasi', 6, NULL, 61),
(20, '170-10', 'Tanah', 7, NULL, 61),
(21, '170-20', 'Bangunan', 7, NULL, 61),
(22, '170-21', 'Akumulasi Penyusutan Bangunan', 7, NULL, 61),
(23, '170-30', 'Mesin dan Peralatan Kantor', 7, NULL, 61),
(24, '170-31', 'Akumulasi Penyusutan Mesin dan Peralatan', 7, NULL, 61),
(25, '170-40', 'Mebel dan Alat Tulis Kantor', 7, NULL, 61),
(26, '170-41', 'Akumulasi Penyusutan Mebel dan ATK', 7, NULL, 61),
(27, '170-50', 'Kendaraan', 7, NULL, 61),
(28, '170-51', 'Akumulasi Penyusutan Kendaraan', 7, NULL, 61),
(29, '170-70', 'Harta Lainnya', 7, NULL, 61),
(30, '170-71', 'Akumulasi Penyusutan Harta Lainnya', 7, NULL, 61),
(31, '180-10', 'Hak Merek', 8, NULL, 61),
(32, '180-20', 'Hak Cipta', 8, NULL, 61),
(33, '180-30', 'Good Will', 8, NULL, 61),
(34, '190-20', 'Biaya Pra Operasi dan Operasi', 9, NULL, 61),
(35, '190-21', 'Akumulasi Amortisasi Pra Operasi dan Operasi', 9, NULL, 61),
(36, '210-10', 'Wesel Bayar', 10, NULL, 61),
(37, '210-15', 'Hutang Giro', 10, NULL, 61),
(38, '210-20', 'Hutang Usaha', 10, NULL, 61),
(39, '210-25', 'Hutang Usaha (USD)', 10, NULL, 61),
(40, '210-30', 'Hutang Konsinyasi', 10, NULL, 61),
(41, '210-40', 'Uang Muka Penjualan', 10, NULL, 61),
(42, '210-55', 'Hutang Deviden', 10, NULL, 61),
(43, '210-60', 'Hutang Bunga', 10, NULL, 61),
(44, '210-65', 'Biaya yang Masih Harus Dibayar', 10, NULL, 61),
(45, '210-75', 'Kartu Kredit', 10, NULL, 61),
(46, '210-80', 'Hutang Pajak Penjualan', 10, NULL, 61),
(47, '210-82', 'Hutang Komisi Penjualan', 10, NULL, 61),
(48, '210-85', 'Hutang Gaji', 10, NULL, 61),
(49, '210-90', 'Hutang Jangka Pendek', 10, NULL, 61),
(50, '220-10', 'Sewa Diterima di Muka', 11, NULL, 61),
(51, '230-10', 'Pinjaman Hipotik', 12, NULL, 61),
(52, '230-20', 'Hutang Bank', 12, NULL, 61),
(53, '310-10', 'Saham Preferen', 13, NULL, 61),
(54, '310-20', 'Modal Disetor', 13, NULL, 61),
(55, '310-30', 'Saham Biasa', 13, NULL, 61),
(56, '320-10', 'Laba ditahan', 14, NULL, 61),
(57, '320-20', 'Laba Tahun Berjalan', 14, NULL, 61),
(58, '320-99', 'Historical Balancing', 14, NULL, 61),
(59, '410-10', 'Penjualan Produk 1', 15, NULL, 61),
(60, '410-20', 'Penjualan Produk 2', 15, NULL, 61),
(61, '410-30', 'Penjualan Produk 3', 15, NULL, 61),
(62, '410-40', 'Penjualan Lain', 15, NULL, 61),
(63, '420-10', 'Potongan Penjualan', 15, NULL, 61),
(64, '410-80', 'Pendapatan Denda Keterlambatan', 20, NULL, 61),
(65, '410-90', 'Pendapatan atas Pengantaran', 20, NULL, 61),
(66, '510-10', 'Biaya 1', 16, NULL, 61),
(67, '510-20', 'Biaya 2', 16, NULL, 61),
(68, '510-30', 'Biaya 3', 16, NULL, 61),
(69, '510-40', 'Komisi Penjualan', 16, NULL, 61),
(70, '510-70', 'Potongan Pembelian', 16, NULL, 61),
(71, '510-80', 'Biaya atas Pengiriman Barang', 16, NULL, 61),
(72, '520-10', 'Kerugian Piutang', 17, NULL, 61),
(73, '520-20', 'Biaya Denda Keterlambatan', 17, NULL, 61),
(74, '520-30', 'Kerusakan dan Kegagalan Material', 17, NULL, 61),
(75, '610-10', 'Gaji Direksi dan Karyawan', 18, NULL, 61),
(76, '610-30', 'Listrik, Air dan Telpon', 18, NULL, 61),
(77, '610-50', 'Promosi dan Iklan', 18, NULL, 61),
(78, '610-60', 'Administrasi Kantor', 18, NULL, 61),
(79, '660-11', 'Penyusutan Mesin dan Peralatan', 19, NULL, 61),
(80, '660-12', 'Penyusutan Mebel dan ATK', 19, NULL, 61),
(81, '660-13', 'Penyusutan Kendaraan', 19, NULL, 61),
(82, '660-15', 'Penyusutan Harta Lainnya', 19, NULL, 61),
(83, '660-16', 'Amortisasi Pra Operasi dan Operasi', 19, NULL, 61),
(84, '810-20', 'Laba Rugi Selisih Kurs', 20, NULL, 61),
(85, '810-30', 'Hasil Sewa', 20, NULL, 61),
(86, '910-10', 'Biaya Bunga', 21, NULL, 61),
(87, '910-11', 'Jasa Bank', 21, NULL, 61),
(88, '240-10', 'Ppn Keluaran', 12, NULL, 61),
(89, '240-20', 'Ppn Masukan', 18, NULL, 61),
(90, '510-90', 'Pembelian', 16, NULL, 61),
(91, '410-9010', 'Pendapatan jasa service', 20, NULL, 61),
(92, '430-10', 'Retur Penjualan', 15, NULL, 61),
(93, '610-70', 'Beban Service dan Perawatan', 18, NULL, 61),
(94, '510-9010', 'Retur Pembelian', 16, NULL, 61),
(95, '410-9030', 'Pendapatan Bunga Bank', 20, NULL, 61),
(96, '660-17', 'Beban administrasi bank', 19, NULL, 61),
(97, '660-18', 'Beban Lain-lain', 19, NULL, 61),
(98, '170-72', 'Perlengkapan Kantor', 7, NULL, 61),
(99, '510-90', 'HPP', 16, NULL, 61),
(100, '660-19', 'Beban Asuransi', 19, NULL, 61),
(101, '660-20', 'Beban Peny.Gedung', 19, NULL, 61),
(102, '660-21', 'Beban Peny.Peralatan', 19, NULL, 61),
(103, '660-22', 'Beban Peny.Kendaraan', 19, NULL, 61),
(104, '610-80', 'Beban Perlengkapan Kantor', 18, NULL, 61),
(107, '110-10', 'Kas Kecil', 1, NULL, 61),
(108, '12345', '123456', 24, NULL, 61);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t01_grup`
--
ALTER TABLE `t01_grup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t02_subgrup`
--
ALTER TABLE `t02_subgrup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_GrupSubgrup` (`grup_id`);

--
-- Indexes for table `t03_matauang`
--
ALTER TABLE `t03_matauang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t04_akun`
--
ALTER TABLE `t04_akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_MatauangAkun` (`matauang_id`),
  ADD KEY `fk_SubgrupAkun` (`subgrup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t01_grup`
--
ALTER TABLE `t01_grup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t02_subgrup`
--
ALTER TABLE `t02_subgrup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `t03_matauang`
--
ALTER TABLE `t03_matauang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `t04_akun`
--
ALTER TABLE `t04_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
