-- Set SQL mode dan timezone
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Membuat tabel admin jika belum ada
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `user_admin` varchar(50) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `foto_admin` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Menambahkan data awal ke tabel admin
INSERT INTO `admin` (`id_admin`, `nama_admin`, `user_admin`, `password_admin`, `foto_admin`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin.jpg');

-- Membuat tabel barang jika belum ada
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Menambahkan data awal ke tabel barang
INSERT INTO `barang` (`id_barang`, `nama`, `stok`, `harga`, `keterangan`, `id_admin`) VALUES
(1, 'Kampas Rem', '5', '30000', 'Kampas Rem', 1),
(2, 'Oli Yamaha Jupiter MX 135', '4', '75000', 'Oli Yamaha Jupiter MX 135', 1),
(3, 'Velg Motor', '4', '400000', 'Velg Motor', 1);

-- Menambahkan primary key untuk tabel admin
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

-- Menambahkan primary key untuk tabel barang
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

-- Mengatur id_admin sebagai AUTO_INCREMENT
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- Mengatur id_barang sebagai AUTO_INCREMENT
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
