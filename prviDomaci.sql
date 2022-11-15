
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `prviDomaci`
--
CREATE DATABASE IF NOT EXISTS `prviDomaci` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `prviDomaci`;

DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `slike`;
DROP TABLE IF EXISTS `prijave`;
CREATE TABLE `prijave` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `godine` int(11) NOT NULL,
  `pol` varchar(255) NOT NULL,
  `ljstatus` varchar(255) NOT NULL,
  `datumRodj` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `prijave`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `prijave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


INSERT INTO `prijave` (`id`, `ime`, `prezime`, `godine`, `pol`, `ljstatus`, `datumRodj`) VALUES
(1, 'Milica', 'Perić', '22', 'ženski', 'muž/žena', '2000-12-26'),
(2, 'Isidora', 'Lazovski', '23', 'ženski', 'ljubavnica', '1999-11-26'),
(3, 'Marija', 'Nikolin', '20', 'ženski', 'ljubavnica', '2002-12-13');

-- --------------------------------------------------------




CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user`
ADD PRIMARY KEY (`id`);

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--

CREATE TABLE `slike` (
  `id` INT(11) NOT NULL,
  `imeslike` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `slike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

  ALTER TABLE `slike`
  ADD FOREIGN KEY (`id`) REFERENCES `prijave`(`id`);

INSERT INTO `slike` (`id`, `imeslike`) VALUES
(1, 'MilicaS'),
(2, 'IsidoraS'),
(3, 'MarijaS');

COMMIT;
