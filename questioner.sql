-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2015 at 02:25 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `questioner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_evaluasi`
--

CREATE TABLE IF NOT EXISTS `tb_evaluasi` (
`id_evaluasi` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_tk` int(2) NOT NULL,
  `id_question` int(4) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_question`
--

CREATE TABLE IF NOT EXISTS `tb_question` (
`id_question` int(4) NOT NULL,
  `t1` int(1) DEFAULT NULL,
  `t2` int(1) DEFAULT NULL,
  `t3` int(1) DEFAULT NULL,
  `t4` int(1) DEFAULT NULL,
  `t5` int(1) DEFAULT NULL,
  `t6` int(1) DEFAULT NULL,
  `t7` int(1) DEFAULT NULL,
  `t8` int(1) DEFAULT NULL,
  `k1` text,
  `q1` int(1) DEFAULT NULL,
  `q2` int(1) DEFAULT NULL,
  `q3` int(1) DEFAULT NULL,
  `q4` int(1) DEFAULT NULL,
  `q5` int(1) DEFAULT NULL,
  `q6` int(1) DEFAULT NULL,
  `k2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tenaga_kerja`
--

CREATE TABLE IF NOT EXISTS `tb_tenaga_kerja` (
`id_tk` int(2) NOT NULL,
  `nama_tk` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_tenaga_kerja`
--

INSERT INTO `tb_tenaga_kerja` (`id_tk`, `nama_tk`) VALUES
(1, 'Koperasi Karyawan'),
(2, 'Karya Dinasti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(2) NOT NULL,
  `username` varchar(40) NOT NULL,
  `seksi` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `seksi`, `email`, `password`) VALUES
(1, 'admin', 'administrator', '', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'finishing', 'Finishing', '', '0c115e260619516ae760def05ae53567'),
(3, 'utility', 'Utility', '', '67b732dc42aaffa9056d34cc477c863c'),
(4, 'corrugator', 'Corrugator', '', 'dcdf213e7d6ed859f21d3da4519a5dfb'),
(5, 'papertube', 'Papertube', '', 'a8ae265301ef815413176b67d85be2a6'),
(6, 'logistik', 'Logistik', '', 'cb1f02561c07f62717a4814c048a6239'),
(7, 'GA', 'General Affair', '', '32d7508fe69220cb40af28441ef746d9'),
(8, 'minibox', 'Minibox', '', '7536954d57c5284dbbd66deba6190d75'),
(9, 'finance', 'Finance', '', '57336afd1f4b40dfd9f5731e35302fe5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_evaluasi`
--
ALTER TABLE `tb_evaluasi`
 ADD PRIMARY KEY (`id_evaluasi`), ADD KEY `id_user` (`id_user`,`id_question`), ADD KEY `id_question` (`id_question`), ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `tb_question`
--
ALTER TABLE `tb_question`
 ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `tb_tenaga_kerja`
--
ALTER TABLE `tb_tenaga_kerja`
 ADD PRIMARY KEY (`id_tk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_evaluasi`
--
ALTER TABLE `tb_evaluasi`
MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_question`
--
ALTER TABLE `tb_question`
MODIFY `id_question` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tenaga_kerja`
--
ALTER TABLE `tb_tenaga_kerja`
MODIFY `id_tk` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_evaluasi`
--
ALTER TABLE `tb_evaluasi`
ADD CONSTRAINT `tb_evaluasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
ADD CONSTRAINT `tb_evaluasi_ibfk_2` FOREIGN KEY (`id_question`) REFERENCES `tb_question` (`id_question`),
ADD CONSTRAINT `tb_evaluasi_ibfk_3` FOREIGN KEY (`id_tk`) REFERENCES `tb_tenaga_kerja` (`id_tk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
