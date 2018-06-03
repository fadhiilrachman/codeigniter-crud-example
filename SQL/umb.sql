SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(255) NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`) VALUES
(1001, 'Budi'),
(1002, 'Aris'),
(1003, 'Panji');

CREATE TABLE `matakuliah` (
  `id_matakuliah` int(255) NOT NULL,
  `nama_matakuliah` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `matakuliah` (`id_matakuliah`, `nama_matakuliah`) VALUES
(101, 'Struktur Data'),
(102, 'Rangkaian Digital'),
(103, 'Aljabar Linear');

CREATE TABLE `nilai` (
  `id_nilai` int(255) NOT NULL,
  `id_mahasiswa` int(255) NOT NULL,
  `id_matakuliah` int(255) NOT NULL,
  `nilai` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `nilai` (`id_nilai`, `id_mahasiswa`, `id_matakuliah`, `nilai`) VALUES
(1000001, 1001, 101, 85),
(1000002, 1001, 102, 75),
(1000003, 1001, 103, 70),
(1000004, 1002, 101, 69),
(1000005, 1002, 102, 55),
(1000006, 1002, 103, 90),
(1000007, 1003, 101, 73),
(1000008, 1003, 102, 81),
(1000009, 1003, 103, 61);


ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);


ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

ALTER TABLE `matakuliah`
  MODIFY `id_matakuliah` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

ALTER TABLE `nilai`
  MODIFY `id_nilai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000010;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
