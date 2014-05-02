CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `shelfmark` varchar(100) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `location_code` varchar(20) NOT NULL,
  `location_desc` varchar(100) NOT NULL,
  `checkouts` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `title`, `author`, `shelfmark`, `barcode`, `location_code`, `location_desc`, `checkouts`) VALUES
(1, 'The age of Titian', 'Venetian r', 'ND621.V4H8', '840297331x', 'MLI', 'IN LIBRARY', 13),
(2, 'Albrecht Dürer and the Venetia Luber', 'Katherine Cra', 'ND588.D9L8', '8403232768', 'MLI', 'IN LIBRARY', 32),
(3, 'The altarpiece in Renaissance Humfrey', 'Peter, 1947', 'N6921.V5H9', 'JLK300A', 'MLI', 'IN LIBRARY', 1),
(4, 'Andrea Mantegna', '', 'ND623.M2A64', 'JG3700Z', 'MLI', 'IN LIBRARY', 14),
(5, 'Architectural principles in th Wittkower', 'Rudolf', 'NA510.W5F73', 'DH0700D', 'MLI', 'IN LIBRARY', 0),
(6, 'Architecture in Italy, 1400-15 Heydenreich', 'Ludwig', 'NA1115.H4L7H7F96', '8400154788', 'MLI', 'IN LIBRARY', 12),
(7, 'Architecture in Italy, 1400 Heydenreich', 'Ludwig', 'NA1115.H4L7H7', 'E0VE006', 'MLI', 'IN LIBRARY', 2),
(8, 'The architecture of the Italia Murray', 'Peter, 1920', 'NA520.M8F86', 'T1D4007', 'MLTC', 'IN LIBRARY', 1),
(9, 'Art and architecture in Italy White', 'John, 1924 Oc', 'N6913.W5F93', '8400465532', 'MLI', 'IN LIBRARY', 3),
(10, 'Art and architecture in Italy White', 'John, 1924 Oc', 'N6913.W5F93', 'T1D3000', 'MLTC', 'IN LIBRARY', 3),
(11, 'The art of Renaissance Venice Huse', 'Norbert', 'N6921.V5H8', 'J2H6024', 'MLI', 'IN LIBRARY', 1),
(12, 'The art of Renaissance Venice Huse', 'Norbert', 'N6921.V5H8', '8401346553', 'MLI', 'IN LIBRARY', 2),
(13, 'The Brancacci Chapel, Florence Ladis', 'Andrew, 1949', 'ND2757.F6L2', 'T10100E', 'MLI', 'IN LIBRARY', 15),
(14, 'The Brancacci Chapel frescoes Baldini', 'Umberto', 'ND2757.F6B2', 'JCZM00G', 'MLI', 'IN LIBRARY', 15),
(15, 'Brunelleschi Fanelli', 'Giovanni', 'NA1123.B8F2C2', '8400108030', 'MLI', 'IN LIBRARY', 7),
(16, 'Brunelleschi : the complete wo Brunelleschi', 'Filipp', 'NA1123.B8B2', 'FYJ100U', 'MLI', 'IN LIBRARY', 3),
(17, 'Brunelleschi : the complete wo Brunelleschi', 'Filipp', 'NA1123.B8B2', 'FYJ100U', 'MLI', 'IN LIBRARY', 3),
(18, 'The classical language of arch Summerson', 'John Newe', 'NA31.S8', '8402927843', 'MLI', 'IN LIBRARY', 0),
(19, 'The dawn of Italian painting, Smart', 'Alastair', 'ND613.S62', 'F8BL00C', 'MLI', 'IN LIBRARY', 0),
(20, 'Donatello Bennett', 'Bonnie Apga', 'NB623.D7B4', 'GM36007', 'MLI', 'IN LIBRARY', 1),
(21, 'Donatello : an introduction Avery', 'Charles', 'NB623.D7A8F5', '840000641X', 'MLI', 'IN LIBRARY', 1),
(22, 'Donatello and his world : scul Poeschke', 'Joachim', 'NB623.D7P74', '8400821709', 'MLI', 'IN LIBRARY', 4),
(23, 'Donatello : sculptor Pope-­‐Hennessy', 'John', 'NB623.D7P7', 'JNYZ007', 'MLTC', 'IN LIBRARY', 0),
(24, 'The drawings of Leonardo da Vi Leonardo', 'da Vinci', 'ND623.V3P8F94', 'JYVV01Y', 'MLI', 'IN LIBRARY', 0),
(25, 'Dürer : paintings, prints, dra Strieder', 'Peter, 191', 'ND588.D9S8', 'GV0J00Z', 'MLI', 'IN LIBRARY', 17),
(26, 'Early Netherlandish painting : Panofsky', 'Erwin, 189', 'ND635.P2F71', 'DX7B04H', 'MLI', 'IN LIBRARY', 14),
(27, 'Early Netherlandish painting : Panofsky', 'Erwin, 189', 'ND635.P2F71', 'DX7B05J', 'MLI', 'IN LIBRARY', 1),
(28, 'Early Netherlandish painting. Friedländer', 'Max Jul', 'ND635.F8E2', 'DNP200W', 'MLI', 'IN LIBRARY', 3),
(29, 'Early Netherlandish triptychs Blum', 'Shirley Neilse', 'ND669.F5B6', '8405770770', 'MLI', 'IN LIBRARY', 2),
(30, 'Filippo Brunelleschi, 1377-­‐144 Gärtner', 'Peter J', 'NA1123.B8G2', '8401249742', 'MLI', 'IN LIBRARY', 2),
(31, 'Filippo Brunelleschi : the bui Saalman', 'Howard', 'NA1123.B8S22F5', 'UGH300P', 'MLI', 'IN LIBRARY', 2),
(32, 'Filippo Brunelleschi : the ear Klotz', 'Heinrich', 'NA1123.B8K6', '8400677208', 'MLI', 'IN LIBRARY', 4),
(33, 'Florentine Renaissance sculptu Avery', 'Charles', 'NB621.F7A8', 'GXL703F', 'MLI', 'IN LIBRARY', 10),
(35, 'Florentine Renaissance sculptu Avery', 'Charles', 'NB621.F7A8', 'GXL704G', 'MLTC', 'IN LIBRARY', 9);
