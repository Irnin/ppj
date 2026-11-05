-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2026 at 10:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somsiedzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `browary`
--

CREATE TABLE `browary` (
  `id` int(11) NOT NULL,
  `id_postu` int(11) DEFAULT NULL,
  `id_uzytkownika` int(11) DEFAULT NULL,
  `kurrr` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `browary`
--

INSERT INTO `browary` (`id`, `id_postu`, `id_uzytkownika`, `kurrr`) VALUES
(2, 1, 3, ''),
(3, 81, 5, 'c'),
(4, 60, 5, 'c'),
(5, 59, 5, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `komentarze`
--

CREATE TABLE `komentarze` (
  `id` int(11) NOT NULL,
  `id_uzytkownika` int(11) DEFAULT NULL,
  `id_postu` int(11) DEFAULT NULL,
  `tresc` text DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentarze`
--

INSERT INTO `komentarze` (`id`, `id_uzytkownika`, `id_postu`, `tresc`, `data`) VALUES
(1, 2, 66, 'kiedy? to by?o', '2017-11-24 18:33:06'),
(2, 3, 66, 'siema', '2017-11-24 19:05:12'),
(3, 1, 65, 'siema eniu', '2017-11-24 19:08:14'),
(4, 1, 67, 'Ä…ÅºÄ‡Å‚Ä…\r\n', '2017-11-24 20:02:20'),
(5, 2, 68, 'widzÄ™ Å¼e somsiad to szpanuje poprawnÄ… polszczznom ', '2017-11-24 20:09:56'),
(6, 2, 67, 'pewnie ukradÅ‚', '2017-11-24 20:10:58'),
(7, 3, 53, 'Å›Ä‡Å‚', '2017-11-25 00:02:47'),
(8, 3, 70, 'siema tomuÅ›', '2017-11-25 00:03:42'),
(9, 3, 73, 'nom jutro to ogarnÄ™ do tego potrzeba ajaxa', '2017-11-25 00:06:01'),
(10, 3, 74, 'ja caÅ‚y dzieÅ„ dziÅ› Ä‡wiczyÅ‚em', '2017-11-25 00:06:15'),
(11, 6, 73, 'Czo to Ajax? XD\r\n', '2017-11-25 00:06:39'),
(12, 6, 74, 'No fajnie XD \r\nej a jest na mysqli czy mysql?\r\n', '2017-11-25 00:07:00'),
(13, 3, 75, 'uuu coÅ› nie pykÅ‚o xd', '2017-11-25 00:07:04'),
(14, 3, 74, 'mysqli', '2017-11-25 00:07:21'),
(15, 6, 76, 'dooobra \r\nale logo jakie ma byc? w weekend ogarne', '2017-11-25 00:07:29'),
(16, 3, 76, 'nie wiem myÅ›lÄ™ o jakimÅ› nosaczu i na nim napis', '2017-11-25 00:07:50'),
(17, 3, 76, 'jutro jeszcze zrobiÄ™ browary w formie like xd\r\n', '2017-11-25 00:08:11'),
(18, 6, 76, 'XDD\r\n', '2017-11-25 00:09:58'),
(19, 6, 76, 'Powiadomienia xD\r\n', '2017-11-25 00:10:14'),
(20, 3, 76, 'ej ale ta strona ma potencjaÅ‚ xd', '2017-11-25 00:11:12'),
(21, 6, 76, 'noooo wÅ‚asnie patrzyÅ‚em to PRO na cba kosztuje 5 zÅ‚ :V \r\n', '2017-11-25 00:12:00'),
(22, 3, 76, 'ale tylko na rok mozesz kupiÄ‡ pro a mnie na to nie staÄ‡', '2017-11-25 00:14:15'),
(23, 3, 78, 'test', '2017-11-25 13:40:02'),
(24, 1, 84, 'kiedys to bylo', '2017-11-25 15:03:36'),
(25, 1, 85, 'asd', '2017-11-25 15:23:49'),
(26, 1, 85, '', '2017-11-25 15:25:08'),
(27, 2, 88, 'witam', '2017-11-25 15:56:30'),
(28, 2, 88, 'test', '2017-11-25 15:56:56'),
(29, 5, 78, 'tomek chuj', '2026-11-05 21:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `nowosci`
--

CREATE TABLE `nowosci` (
  `id` int(11) NOT NULL,
  `data` text DEFAULT NULL,
  `tresc` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowosci`
--

INSERT INTO `nowosci` (`id`, `data`, `tresc`) VALUES
(1, 'naprawa systemu logowania', ''),
(2, 'naprawa systemu postow', ''),
(3, 'dodanie komentarzy', ''),
(4, 'strona profilu konta', ''),
(5, 'dodana obsluga polskich znakow', ''),
(6, 'System znajomych', '2017-11-24 23:24:50'),
(7, 'automatyczne doczytywanie postow', '2017-11-25 15:48:02'),
(8, 'zmiana szaty graficznej', '2017-11-25 15:58:27'),
(9, 'przywrocono trupa do szycia', '05/11/2026');

-- --------------------------------------------------------

--
-- Table structure for table `posty`
--

CREATE TABLE `posty` (
  `id` int(11) NOT NULL,
  `id_uzytkownika` int(11) DEFAULT NULL,
  `tresc` text DEFAULT NULL,
  `data_dodania` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posty`
--

INSERT INTO `posty` (`id`, `id_uzytkownika`, `tresc`, `data_dodania`) VALUES
(1, 1, 'Kurrrr?a kiedy? to by?o!!!1!1!!', '2017-11-23'),
(2, 1, 'Ale pyszna kie?baska, bigosik weselny!!!1!1!!', '2017-11-23'),
(3, 1, 'Helena mam zawa?!', '2017-11-23 13:23:47'),
(4, 1, 'pozdrawiam tomusia', '2017-11-23 14:02:37'),
(5, 1, 'wincyj php', '2017-11-23 14:04:43'),
(6, 1, 'wincyj php', '2017-11-23 14:06:01'),
(7, 1, 'wincyj php', '2017-11-23 14:06:29'),
(8, 1, 'TO MA DZIALAC HALINA', '2017-11-23 14:07:07'),
(9, 1, '#HALYNA mam ZAWAÅ!@!\r\n', '2017-11-23 14:07:35'),
(10, 1, '#HALYNA mam ZAWAÅ!@!\r\n', '2017-11-23 14:08:00'),
(11, 2, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum, tortor eu placerat suscipit, eros ex accumsan lectus, eget ultrices diam ante quis justo. Quisque eget tincidunt velit. Nunc porttitor venenatis odio et congue. Phasellus pretium porttitor efficitur. Praesent neque dui, fermentum quis rutrum eget, porttitor vitae risus. Mauris lobortis dolor non nunc volutpat tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue eget velit vel ultrices. Nullam nec lacus cursus, porttitor lacus sed, imperdiet felis. Mauris sit amet porttitor leo, at pharetra diam.\r\n\r\nDuis interdum blandit turpis. Sed placerat enim turpis, id egestas libero auctor hendrerit. Ut sed neque massa. Vestibulum in sagittis nulla, a imperdiet justo. Donec et auctor elit, a porttitor sem. Cras ac vestibulum justo. Sed vitae euismod dolor. Sed dui justo, malesuada eget est feugiat, aliquam finibus neque. Vivamus fermentum consequat luctus.\r\n\r\nSed elit elit, hendrerit ut tortor eu, fermentum vulputate augue. Vivamus pellentesque eleifend vestibulum. Quisque ac gravida neque. Curabitur at purus blandit, pretium turpis sed, sollicitudin nunc. Maecenas tempus malesuada molestie. Maecenas suscipit erat massa, sit amet blandit sapien cursus ac. Nullam eu risus non libero efficitur eleifend sit amet ut urna. Aliquam erat volutpat. Donec eleifend at ex vitae porttitor. Phasellus efficitur elit dolor, id mollis est mattis sit amet. Proin varius mi eget augue tincidunt, et hendrerit magna sodales. Sed efficitur tortor dui, et bibendum urna euismod non.\r\n\r\nUt vestibulum maximus metus, sed sodales tellus luctus a. Nam sagittis tempor sapien. In sollicitudin bibendum sem, nec fringilla tortor bibendum a. Curabitur egestas venenatis nulla, sed efficitur leo dictum ac. Mauris id orci fringilla, semper turpis molestie, molestie lacus. Integer id suscipit diam, vitae efficitur arcu. Quisque enim elit, pharetra vitae vulputate quis, tristique nec felis.\r\n\r\nNunc efficitur nisi at augue elementum ullamcorper. Pellentesque nec rhoncus justo. Praesent est nulla, laoreet maximus sapien vitae, egestas interdum eros. Cras feugiat iaculis risus, at varius tellus ultrices at. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras interdum, neque id posuere facilisis, nisl nisi accumsan eros, at iaculis enim neque nec mauris. Suspendisse in blandit nisl. Aliquam cursus magna ac diam pretium suscipit. ', '2017-11-23 17:19:25'),
(26, 3, 'Testuje hakowanie', '2017-11-23 19:01:52'),
(27, 3, 'witam sonsiadow oficjalny start', '2017-11-23 14:19:33'),
(28, 6, 'hejka', '2017-11-23 14:20:44'),
(29, 6, 'Witam Polskie Janusze Tu Tomek Janusz Mi?o was widzie? somsiedzie\r\n', '2017-11-23 14:20:52'),
(30, 6, 'Za darmo?\r\n', '2017-11-23 14:21:01'),
(31, 6, 'Witam Polskie Janusze Tu Tomek Janusz Mi?o was widzie? somsiedzie\r\n', '2017-11-23 14:21:01'),
(32, 6, 'fwqfq', '2017-11-23 14:21:18'),
(33, 5, 'kurrr?a kiedy? to by?o!!!', '2017-11-23 14:24:49'),
(34, 5, 'kwiiiiiiiiiiii', '2017-11-23 14:24:57'),
(35, 3, 'teraz to jest\r\n', '2017-11-23 14:25:53'),
(36, 3, 'jak sie podoba gui??', '2017-11-23 14:27:54'),
(37, 6, 'SIEMA !\r\n', '2017-11-23 14:27:58'),
(38, 6, 'Ej, nie mam polskich znakow a to miala byc polska strona POJDE Z TYM DO PROKURATORY !\r\n', '2017-11-23 14:28:54'),
(39, 3, 'jak sie podoba gui??', '2017-11-23 14:29:01'),
(40, 5, 'kwiiiiiiiiiiii', '2017-11-23 14:29:32'),
(41, 5, '?ukasz zmie? awatar', '2017-11-23 14:29:44'),
(47, 6, 'ej piszmy bez polskich znakow bedzie latwiej czytac jak narazie XD', '2017-11-23 14:31:39'),
(44, 5, 'widze post dalej nie kasowany przy od?wie?aniu XD', '2017-11-23 14:30:14'),
(45, 3, 'nom usune z bazy danych ale jak recznie odswierzasz to dziala czyli bez f5', '2017-11-23 14:31:01'),
(46, 6, 'Kurde nie od?wie?a sie jeszvze :/\r\n', '2017-11-23 14:31:04'),
(48, 3, 'dobra usunolem duplikaty', '2017-11-23 14:31:50'),
(49, 3, 'zmienic ci nazwisko?', '2017-11-23 14:32:05'),
(50, 6, '.', '2017-11-23 14:32:52'),
(51, 3, 'zmienic ci nazwisko?', '2017-11-23 14:33:00'),
(52, 6, 'No zmien xD\r\n', '2017-11-23 14:33:08'),
(53, 3, 'prosze', '2017-11-23 14:33:46'),
(54, 3, '<img style=\"width: 700px;\" src=\'http://www.harley-davidson.com/content/dam/h-d/images/motorcycles/my14/softail/softail-deluxe/gallery-images/14-hd-softail-deluxe-bs-zoom.jpg\'/>', '2017-11-23 14:40:49'),
(55, 6, 'Witam somsiedzie.\r\n', '2017-11-24 01:57:15'),
(56, 3, 'Powodzenia na maturce', '2017-11-24 01:58:28'),
(57, 6, 'Co tam somsiedzie\r\n', '2017-11-24 01:59:45'),
(58, 5, 'witam somsiedzi', '2017-11-24 01:59:53'),
(59, 5, 'witam somsiedzi', '2017-11-24 01:59:57'),
(60, 5, 'witam somsiedzi', '2017-11-24 02:00:10'),
(61, 6, 'Juz por sala?', '2017-11-24 02:02:30'),
(62, 3, 'siema', '2017-11-24 17:38:46'),
(63, 1, 'elo mordo', '2017-11-24 17:39:02'),
(64, 1, 'elo mordo', '2017-11-24 17:42:17'),
(65, 3, 'frgd', '2017-11-24 18:22:45'),
(66, 3, 'elo', '2017-11-24 18:22:50'),
(67, 1, 'test polskich znakow ???', '2017-11-24 20:02:13'),
(68, 1, 'Å›Ä‡Å‚Ä…', '2017-11-24 20:06:32'),
(69, 3, 'jak siÄ™ podobajÄ… zmiany?', '2017-11-25 00:03:10'),
(70, 6, 'Siemka wszystkim! :D\r\n', '2017-11-25 00:03:22'),
(71, 6, 'sad', '2017-11-25 00:03:31'),
(72, 3, 'jak co to f5 nie psuje juÅ¼ strony', '2017-11-25 00:04:03'),
(73, 6, 'WÅ‚asnie zauwaÅ¼yÅ‚em, a daÅ‚o by rade jakoÅ›, Å¼eby caÅ‚y czas odÅ›wieÅ¼aÅ‚o newsy i te posty?\r\n', '2017-11-25 00:04:58'),
(74, 6, 'EEEEJ \r\nNA JUTRO MUSZE SE PRZYPOMNIEC KOMEND DO PHP I MYSQL XD\r\n', '2017-11-25 00:05:29'),
(75, 6, '<img src=\"https://www.google.pl/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjGyZjJqdjXAhVPb5oKHbEYA-oQjRwIBw&url=http%3A%2F%2Fnk.pl%2Fszkola%2F8659%2Fklasa%2F50982%2Fgaleria%2F1&psig=AOvVaw0s3cm8b8Ac748x7wKHXhrL&ust=1511651168517045\"/>\r\n', '2017-11-25 00:06:21'),
(76, 3, 'buÅ‚a jakieÅ› fajne logo jest potrzebne i ikonki', '2017-11-25 00:06:46'),
(77, 3, 'kurde smutno bez Krzysztofa ', '2017-11-25 00:10:09'),
(78, 3, 'test', '2017-11-25 13:33:30'),
(79, 3, 'siema', '2017-11-25 13:45:24'),
(80, 3, 'elo', '2017-11-25 13:45:50'),
(81, 3, 'test', '2017-11-25 13:46:25'),
(82, 1, 'siema\r\n', '2017-11-25 15:00:28'),
(83, 1, 'elo', '2017-11-25 15:00:36'),
(84, 1, 'co tam slychac', '2017-11-25 15:03:05'),
(85, 1, 'witam', '2017-11-25 15:23:23'),
(86, 1, 'no i ja siÄ™ pytam czÅ‚owieku dumny ty jesteÅ› z siebie zdajesz sobie sprawÄ™ z tego co robisz?masz ty wogÃ³le rozum i godnoÅ›c czÅ‚owieka?ja nie wiem ale Å¼aÅ‚osny typek z ciebie ,chyba nie pomyÅ›laÅ‚es nawet co robisz i kogo obraÅ¼asz ,moÅ¼esz sobie obraÅ¼ac tych co na to zasÅ‚uÅ¼yli sobie ale nie naszego papieÅ¼a polaka naszego rodaka wielkÄ… osobÄ™ ,i tak wyjÄ…tkowa i waÅ¼nÄ… bo to nie jest ktoÅ› tam taki sobie Å¼e moÅ¼esz go sobie wyÅ›miaÄ‡ bo tak ci siÄ™ podoba nie wiem w jakiej ty siÄ™ wychowaÅ‚es rodzinie ale chyba ty nie wiem nie rozumiesz co to jest wiara .jeÅ›li myslisz Å¼e jestes wspaniaÅ‚y to jestes zwykÅ‚ym czubkiem ktÃ³rego ktoÅ› nie odizolowaÅ‚ jeszcze od spoÅ‚eczeÅ„stwa ,nie wiem co w tym jest takie Å›mieszne ale czepcie siÄ™ stalina albo hitlera albo innych zwyrodnialcÃ³w a nie czepiacie siÄ™ takiej Å›wiÄ™tej osoby jak papieÅ¼ jan paweÅ‚ 2 .jak moÅ¼na wogÃ³le publicznie zamieszczac takie zdiÄ™cia na forach internetowych?ja siÄ™ pytam kto powinien za to odpowiedziec bo chyba widac Å¼e do koscioÅ‚a nie chodzi jak jestes nie wiem ateistÄ… albo wierzysz w jakies sekty czy wogÃ³le jestes moÅ¼e ty sÅ‚ugÄ… szatana a nie bÄ™dziesz z papieÅ¼a robiÅ‚ takiego ,to ty chyba jestes jakis nie wiem co sie jarasz pomiotami szatana .wez pomyÅ›l sobie ile papieÅ¼ zrobiÅ‚ ,on byÅ‚ kimÅ› a ty kim jestes Å¼eby z niego sobie robiÄ‡ kpiny co? kto daÅ‚ ci prawo obraÅ¼ac wogÃ³le papieÅ¼a naszego ?pomyÅ›laÅ‚es wogÃ³le nad tym Å¼e to nie jest osoba taka sobie Å¼e jÄ… wyÅ›mieje i mnie bÄ™da wszyscy chwalic? wez dziecko naprawdÄ™ jestes jakis psycholek bo w przeciwieÅ„stwie do ciebie to papieÅ¼ jest autorytetem dla mnie a ty to nie wiem czyim moÅ¼esz byÄ‡ autorytetem chyba takich samych jakiÅ› gÅ‚upkÃ³w jak ty ktÃ³rzy nie wiedza co to kosciÃ³Å‚ i religia ,widac Å¼e siÄ™ nie modlisz i nie chodzisz na religie do szkoÅ‚y ,widac nie szanujesz religii to nie wiem jak chcesz to sobie wez swoje zdiÄ™cie wstaw ciekawe czy byÅ› sie odwaÅ¼yÅ‚ .naprawdÄ™ wezta siÄ™ dzieci zastanÃ³wcie co wy roicie bo nie macie widac pojÄ™cia o tym kim byÅ‚ papieÅ¼ jan paweÅ‚2 jak nie jestescie w peÅ‚ni rozwiniÄ™te umysÅ‚owo to siÄ™ nie zabierajcie za takÄ… osobÄ™ jak ojciec swiÄ™ty bo to Å›wiadczy o tym Å¼e nie macie chyba w domu krzyÅ¼a ani jednego obraza Å›wiÄ™tego nie chodzi tutaj o kosciÃ³Å‚ mnie ale wogÃ³le ogÃ³lnie o zasady wiary Å¼eby mieÄ‡ jakÄ…s godnosc bo papieÅ¼ nikogo nie obraÅ¼aÅ‚ a ty za co go obraÅ¼asz co? no powiedz za co obraÅ¼asz takÄ… osobÄ™ jak ojciec Å›wiÄ™ty ?brak mnie sÅ‚Ã³w ale jakbyÅ› miaÅ‚ pojÄ™cie chociaz i siÄ™gnÄ…Å‚ po pismo Å›wiÄ™te i poczytaÅ‚ sobie to moÅ¼e byÅ› siÄ™ odmieniÅ‚ .nie wiem idz do koÅ›cioÅ‚a bo widac juÅ¼ dawno szatan jest w tobie czÅ‚owieku ,nie lubisz koÅ›cioÅ‚a to chociaÅ¼ siedz cicho i nie obraÅ¼aj innych ludzi ', '2017-11-25 15:25:21'),
(87, 2, 'witam pana', '2017-11-25 15:28:02'),
(88, 2, 'co tam', '2017-11-25 15:28:17'),
(89, 1, 'test', 'nie ma');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text DEFAULT NULL,
  `haslo` text DEFAULT NULL,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL,
  `plec` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `haslo`, `imie`, `nazwisko`, `plec`) VALUES
(1, 'a1', 'a1', 'Andrzej', 'TRIAL', NULL),
(2, 'a2', 'a2', 'Janusz', 'TRIAL2', NULL),
(3, 'Irnin', 'Aa444444', 'Lukasz', 'Michalak', 'm'),
(5, 'januszex_69', 'grazynka123', 'Krzyszof', 'Dziewicki', 'm'),
(6, 'tomasz', 'janusz69', 'Tomek Janusz', 'Bedziechowski', 'm'),
(7, 'dziabinito', 'Aa444444', 'Dziabin', 'Dziabi?ski', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `znajomi`
--

CREATE TABLE `znajomi` (
  `id` int(11) NOT NULL,
  `id_somsiada1` int(11) DEFAULT NULL,
  `id_somsiada2` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `znajomi`
--

INSERT INTO `znajomi` (`id`, `id_somsiada1`, `id_somsiada2`, `data`, `status`) VALUES
(7, 5, 3, '2017-11-24', 'n'),
(8, 6, 3, '2017-11-24', 'a'),
(9, 2, 1, '2017-11-25', 'a'),
(10, 2, 1, '2017-11-25', 'a'),
(11, 3, 1, '2017-11-25', 'o'),
(12, 3, 5, '2026-11-05', 'o'),
(13, 3, 5, '2026-11-05', 'a'),
(14, 1, 5, '2026-11-05', 'o'),
(15, 1, 7, '2026-11-05', 'o'),
(16, 5, 7, '2026-11-05', 'a'),
(17, 7, 5, '2026-11-05', 'o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `browary`
--
ALTER TABLE `browary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowosci`
--
ALTER TABLE `nowosci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `znajomi`
--
ALTER TABLE `znajomi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `browary`
--
ALTER TABLE `browary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `nowosci`
--
ALTER TABLE `nowosci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posty`
--
ALTER TABLE `posty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `znajomi`
--
ALTER TABLE `znajomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
