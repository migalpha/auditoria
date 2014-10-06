-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2014 a las 15:17:45
-- Versión del servidor: 5.5.36
-- Versión de PHP: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `auditoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_activities`
--

CREATE TABLE IF NOT EXISTS `bf_activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=319 ;

--
-- Volcado de datos para la tabla `bf_activities`
--

INSERT INTO `bf_activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
(1, 1, 'logged in from: ::1', 'users', '2014-08-21 18:25:39', 0),
(2, 1, 'Created Module: categorias : ::1', 'modulebuilder', '2014-08-21 18:31:02', 0),
(3, 1, 'Deleted Module: categorias : ::1', 'builder', '2014-08-21 18:32:00', 0),
(4, 1, 'Created Module: categorias : ::1', 'modulebuilder', '2014-08-21 18:34:04', 0),
(5, 1, 'Created record with ID: 1 : ::1', 'categorias', '2014-08-21 18:34:38', 0),
(6, 1, 'Deleted Module: categorias : ::1', 'builder', '2014-08-21 18:35:38', 0),
(7, 1, 'Created Module: Categorias : ::1', 'modulebuilder', '2014-08-21 18:36:24', 0),
(8, 1, 'Created Module: Categorias : ::1', 'modulebuilder', '2014-08-21 18:36:30', 0),
(9, 1, 'Created record with ID: 1 : ::1', 'categorias', '2014-08-21 18:36:42', 0),
(10, 1, 'Created record with ID: 2 : ::1', 'categorias', '2014-08-21 18:36:50', 0),
(11, 1, 'Created record with ID: 3 : ::1', 'categorias', '2014-08-21 18:37:06', 0),
(12, 1, 'Created record with ID: 4 : ::1', 'categorias', '2014-08-21 18:37:17', 0),
(13, 1, 'Created record with ID: 5 : ::1', 'categorias', '2014-08-21 18:37:26', 0),
(14, 1, 'Created record with ID: 6 : ::1', 'categorias', '2014-08-21 18:37:37', 0),
(15, 1, 'Created record with ID: 7 : ::1', 'categorias', '2014-08-21 18:37:55', 0),
(16, 1, 'Created record with ID: 8 : ::1', 'categorias', '2014-08-21 18:38:08', 0),
(17, 1, 'Created Module: Preguntas : ::1', 'modulebuilder', '2014-08-21 18:42:57', 0),
(18, 1, 'logged in from: ::1', 'users', '2014-08-21 23:06:24', 0),
(19, 1, 'logged in from: ::1', 'users', '2014-08-22 16:28:20', 0),
(20, 1, 'Created Module: auditorias : ::1', 'modulebuilder', '2014-08-22 16:36:29', 0),
(21, 1, 'logged in from: ::1', 'users', '2014-08-22 19:10:27', 0),
(22, 1, 'Created Module: Tiendas Tipo : ::1', 'modulebuilder', '2014-08-22 19:12:37', 0),
(23, 1, 'logged in from: ::1', 'users', '2014-08-22 21:40:13', 0),
(24, 1, 'Created record with ID: 1 : ::1', 'tiendas_tipo', '2014-08-22 21:40:37', 0),
(25, 1, 'Created record with ID: 2 : ::1', 'tiendas_tipo', '2014-08-22 21:40:46', 0),
(26, 1, 'Created record with ID: 3 : ::1', 'tiendas_tipo', '2014-08-22 21:40:58', 0),
(27, 1, 'Created record with ID: 4 : ::1', 'tiendas_tipo', '2014-08-22 21:41:09', 0),
(28, 1, 'logged in from: ::1', 'users', '2014-08-27 23:30:02', 0),
(29, 1, 'logged in from: ::1', 'users', '2014-08-28 22:02:43', 0),
(30, 1, 'Migrate Type: preguntas_ to Version: 3 from: ::1', 'migrations', '2014-08-28 22:21:06', 0),
(31, 1, 'Migrate module: preguntas Version: 3 from: ::1', 'migrations', '2014-08-28 22:21:06', 0),
(32, 1, 'Created Module: Preguntas : ::1', 'modulebuilder', '2014-08-28 22:39:16', 0),
(33, 1, 'Created Module: Preguntas : ::1', 'modulebuilder', '2014-08-28 22:44:31', 0),
(34, 1, 'Migrate module: auditorias Version: 3 from: ::1', 'migrations', '2014-08-28 22:50:31', 0),
(35, 1, 'Migrate Type: auditorias_ to Version: 3 from: ::1', 'migrations', '2014-08-28 22:51:02', 0),
(36, 1, 'Migrate module: auditorias Version: 3 from: ::1', 'migrations', '2014-08-28 22:51:02', 0),
(37, 1, 'Created Module: auditorias : ::1', 'modulebuilder', '2014-08-28 22:53:38', 0),
(38, 1, 'logged in from: ::1', 'users', '2014-08-29 17:21:05', 0),
(39, 1, 'Created Module: Tiendas : ::1', 'modulebuilder', '2014-08-29 17:45:28', 0),
(40, 1, 'Migrate module: auditorias Version: 4 from: ::1', 'migrations', '2014-08-29 18:59:20', 0),
(41, 1, 'Migrate Type: auditorias_ to Version: 4 from: ::1', 'migrations', '2014-08-29 19:08:10', 0),
(42, 1, 'Migrate module: auditorias Version: 4 from: ::1', 'migrations', '2014-08-29 19:08:10', 0),
(43, 1, 'Created Module: auditorias : ::1', 'modulebuilder', '2014-08-29 19:10:20', 0),
(44, 1, 'Created Module: Preguntas Tipo : ::1', 'modulebuilder', '2014-08-29 21:45:51', 0),
(45, 1, 'Created record with ID: 1 : ::1', 'preguntas_tipo', '2014-08-29 22:29:33', 0),
(46, 1, 'Created record with ID: 2 : ::1', 'preguntas_tipo', '2014-08-29 22:29:43', 0),
(47, 1, 'Updated record with ID: 1 : ::1', 'preguntas', '2014-08-29 22:39:54', 0),
(48, 1, 'Updated record with ID: 2 : ::1', 'preguntas', '2014-08-29 22:50:00', 0),
(49, 1, 'Updated record with ID: 3 : ::1', 'preguntas', '2014-08-29 22:50:09', 0),
(50, 1, 'Updated record with ID: 4 : ::1', 'preguntas', '2014-08-29 22:50:20', 0),
(51, 1, 'logged in from: ::1', 'users', '2014-09-01 20:57:54', 0),
(52, 1, 'logged in from: 192.168.0.155', 'users', '2014-09-01 21:05:10', 0),
(53, 1, 'Migrate Type: auditorias_ to Version: 5 from: ::1', 'migrations', '2014-09-01 21:58:55', 0),
(54, 1, 'Migrate module: auditorias Version: 5 from: ::1', 'migrations', '2014-09-01 21:58:55', 0),
(55, 1, 'Created record with ID: 1 : ::1', 'auditorias', '2014-09-01 22:51:33', 0),
(56, 1, 'Created record with ID: 2 : ::1', 'auditorias', '2014-09-01 22:54:31', 0),
(57, 1, 'Created record with ID: 3 : 192.168.0.155', 'auditorias', '2014-09-01 22:56:51', 0),
(58, 1, 'Created record with ID: 4 : ::1', 'auditorias', '2014-09-01 23:11:30', 0),
(59, 1, 'logged in from: ::1', 'users', '2014-09-01 23:34:50', 0),
(60, 1, 'App settings saved from: ::1', 'core', '2014-09-01 23:39:01', 0),
(61, 1, 'logged in from: ::1', 'users', '2014-09-01 23:39:22', 0),
(62, 1, 'App settings saved from: ::1', 'core', '2014-09-01 23:40:34', 0),
(63, 1, 'Created record with ID: 5 : 192.168.0.155', 'auditorias', '2014-09-01 23:56:45', 0),
(64, 1, 'logged in from: ::1', 'users', '2014-09-02 15:53:29', 0),
(65, 1, 'modified user: admin', 'users', '2014-09-02 16:03:52', 0),
(66, 1, 'Created Module: Auditorias Tipo : ::1', 'modulebuilder', '2014-09-02 16:16:39', 0),
(67, 1, 'Migrate Type: auditorias_ to Version: 6 from: ::1', 'migrations', '2014-09-02 16:19:37', 0),
(68, 1, 'Migrate module: auditorias Version: 6 from: ::1', 'migrations', '2014-09-02 16:19:37', 0),
(69, 1, 'Created record with ID: 1 : ::1', 'auditorias_tipo', '2014-09-02 16:20:05', 0),
(70, 1, 'Created record with ID: 2 : ::1', 'auditorias_tipo', '2014-09-02 16:20:11', 0),
(71, 1, 'logged in from: 192.168.0.153', 'users', '2014-09-02 16:39:34', 0),
(72, 1, 'Created record with ID: 1 : 192.168.0.153', 'auditorias', '2014-09-02 16:48:14', 0),
(73, 1, 'logged in from: 192.168.0.235', 'users', '2014-09-02 17:35:29', 0),
(74, 1, 'Updated record with ID: 1 : 192.168.0.235', 'preguntas', '2014-09-02 17:37:02', 0),
(75, 1, 'Updated record with ID: 2 : 192.168.0.235', 'preguntas', '2014-09-02 17:37:27', 0),
(76, 1, 'Updated record with ID: 3 : 192.168.0.235', 'preguntas', '2014-09-02 17:37:50', 0),
(77, 1, 'Updated record with ID: 2 : 192.168.0.235', 'preguntas', '2014-09-02 17:38:04', 0),
(78, 1, 'Updated record with ID: 1 : 192.168.0.235', 'preguntas', '2014-09-02 17:38:18', 0),
(79, 1, 'Updated record with ID: 1 : 192.168.0.235', 'preguntas', '2014-09-02 17:38:38', 0),
(80, 1, 'Updated record with ID: 1 : 192.168.0.235', 'preguntas', '2014-09-02 17:40:35', 0),
(81, 1, 'Updated record with ID: 2 : 192.168.0.235', 'preguntas', '2014-09-02 17:40:49', 0),
(82, 1, 'Updated record with ID: 3 : 192.168.0.235', 'preguntas', '2014-09-02 17:41:12', 0),
(83, 1, 'Updated record with ID: 14 : ::1', 'preguntas', '2014-09-02 18:47:41', 0),
(84, 1, 'Updated record with ID: 24 : ::1', 'preguntas', '2014-09-02 18:50:18', 0),
(85, 1, 'Updated record with ID: 25 : ::1', 'preguntas', '2014-09-02 18:50:27', 0),
(86, 1, 'Updated record with ID: 26 : ::1', 'preguntas', '2014-09-02 18:50:38', 0),
(87, 1, 'Updated record with ID: 27 : ::1', 'preguntas', '2014-09-02 18:50:47', 0),
(88, 1, 'Migrate Type: preguntas_ to Version: 4 from: ::1', 'migrations', '2014-09-02 19:06:06', 0),
(89, 1, 'Migrate module: preguntas Version: 4 from: ::1', 'migrations', '2014-09-02 19:06:06', 0),
(90, 1, 'Deleted Module: Preguntas : ::1', 'builder', '2014-09-02 19:24:27', 0),
(91, 1, 'Migrate Type: preguntas_ to Version: 1 from: ::1', 'migrations', '2014-09-02 20:53:50', 0),
(92, 1, 'Migrate module: preguntas Version: 1 from: ::1', 'migrations', '2014-09-02 20:53:51', 0),
(93, 1, 'Migrate Type: preguntas_ to Version: 2 from: ::1', 'migrations', '2014-09-02 20:53:57', 0),
(94, 1, 'Migrate module: preguntas Version: 2 from: ::1', 'migrations', '2014-09-02 20:53:57', 0),
(95, 1, 'Migrate Type: preguntas_ to Version: 3 from: ::1', 'migrations', '2014-09-02 20:54:03', 0),
(96, 1, 'Migrate module: preguntas Version: 3 from: ::1', 'migrations', '2014-09-02 20:54:03', 0),
(97, 1, 'Migrate Type: preguntas_ to Version: 4 from: ::1', 'migrations', '2014-09-02 21:09:42', 0),
(98, 1, 'Migrate module: preguntas Version: 4 from: ::1', 'migrations', '2014-09-02 21:09:42', 0),
(99, 1, 'Updated record with ID: 1 : ::1', 'preguntas', '2014-09-02 21:14:04', 0),
(100, 1, 'Updated record with ID: 2 : ::1', 'preguntas', '2014-09-02 21:14:16', 0),
(101, 1, 'Updated record with ID: 3 : ::1', 'preguntas', '2014-09-02 21:14:32', 0),
(102, 1, 'Updated record with ID: 3 : ::1', 'preguntas', '2014-09-02 21:21:06', 0),
(103, 1, 'Updated record with ID: 1 : ::1', 'preguntas', '2014-09-02 21:22:26', 0),
(104, 1, 'Updated record with ID: 2 : ::1', 'preguntas', '2014-09-02 21:22:40', 0),
(105, 1, 'Updated record with ID: 3 : ::1', 'preguntas', '2014-09-02 21:23:15', 0),
(106, 1, 'Updated record with ID: 4 : ::1', 'preguntas', '2014-09-02 21:23:30', 0),
(107, 1, 'Updated record with ID: 8 : ::1', 'preguntas', '2014-09-02 21:24:42', 0),
(108, 1, 'Updated record with ID: 8 : ::1', 'preguntas', '2014-09-02 21:25:31', 0),
(109, 1, 'Updated record with ID: 14 : ::1', 'preguntas', '2014-09-02 21:26:14', 0),
(110, 1, 'Created Module: Preguntas : ::1', 'modulebuilder', '2014-09-02 21:40:35', 0),
(111, 1, 'Migrate Type: preguntas_ to Version: 3 from: ::1', 'migrations', '2014-09-02 21:42:59', 0),
(112, 1, 'Migrate module: preguntas Version: 3 from: ::1', 'migrations', '2014-09-02 21:42:59', 0),
(113, 1, 'Migrate Type: preguntas_ to Version: 4 from: ::1', 'migrations', '2014-09-02 21:44:29', 0),
(114, 1, 'Migrate module: preguntas Version: 4 from: ::1', 'migrations', '2014-09-02 21:44:29', 0),
(115, 1, 'Created Module: Preguntas : ::1', 'modulebuilder', '2014-09-02 21:46:59', 0),
(116, 1, 'logged in from: ::1', 'users', '2014-09-02 21:58:16', 0),
(117, 1, 'Created Module: Preguntas : ::1', 'modulebuilder', '2014-09-02 22:02:09', 0),
(118, 1, 'Updated record with ID: 24 : ::1', 'preguntas', '2014-09-02 22:15:17', 0),
(119, 1, 'Updated record with ID: 25 : ::1', 'preguntas', '2014-09-02 22:15:36', 0),
(120, 1, 'Updated record with ID: 26 : ::1', 'preguntas', '2014-09-02 22:15:47', 0),
(121, 1, 'Updated record with ID: 27 : ::1', 'preguntas', '2014-09-02 22:16:00', 0),
(122, 1, 'Created record with ID: 59 : ::1', 'preguntas', '2014-09-02 22:16:41', 0),
(123, 1, 'Updated record with ID: 39 : ::1', 'preguntas', '2014-09-02 22:52:19', 0),
(124, 1, 'Updated record with ID: 41 : ::1', 'preguntas', '2014-09-02 22:52:43', 0),
(125, 1, 'Updated record with ID: 40 : ::1', 'preguntas', '2014-09-02 22:53:37', 0),
(126, 1, 'Created record with ID: 60 : ::1', 'preguntas', '2014-09-02 22:58:19', 0),
(127, 1, 'Updated record with ID: 45 : ::1', 'preguntas', '2014-09-02 23:05:44', 0),
(128, 1, 'Created record with ID: 61 : ::1', 'preguntas', '2014-09-02 23:06:36', 0),
(129, 1, 'Updated record with ID: 53 : ::1', 'preguntas', '2014-09-02 23:18:09', 0),
(130, 1, 'Updated record with ID: 52 : ::1', 'preguntas', '2014-09-02 23:18:22', 0),
(131, 1, 'Updated record with ID: 51 : ::1', 'preguntas', '2014-09-02 23:18:35', 0),
(132, 1, 'Updated record with ID: 42 : ::1', 'preguntas', '2014-09-02 23:49:15', 0),
(133, 1, 'logged in from: ::1', 'users', '2014-09-03 15:42:45', 0),
(134, 1, 'Updated record with ID: 20 : ::1', 'preguntas', '2014-09-03 16:23:50', 0),
(135, 1, 'Updated record with ID: 21 : ::1', 'preguntas', '2014-09-03 16:24:08', 0),
(136, 1, 'Updated record with ID: 24 : ::1', 'preguntas', '2014-09-03 16:25:15', 0),
(137, 1, 'Updated record with ID: 25 : ::1', 'preguntas', '2014-09-03 16:25:43', 0),
(138, 1, 'Updated record with ID: 28 : ::1', 'preguntas', '2014-09-03 16:27:38', 0),
(139, 1, 'Updated record with ID: 29 : ::1', 'preguntas', '2014-09-03 16:27:49', 0),
(140, 1, 'Updated record with ID: 29 : ::1', 'preguntas', '2014-09-03 16:27:54', 0),
(141, 1, 'Updated record with ID: 29 : ::1', 'preguntas', '2014-09-03 16:45:19', 0),
(142, 1, 'Created record with ID: 62 : ::1', 'preguntas', '2014-09-03 17:21:50', 0),
(143, 1, 'Created record with ID: 63 : ::1', 'preguntas', '2014-09-03 17:22:23', 0),
(144, 1, 'Created record with ID: 64 : ::1', 'preguntas', '2014-09-03 17:22:55', 0),
(145, 1, 'logged in from: 192.168.0.155', 'users', '2014-09-03 17:24:48', 0),
(146, 1, 'logged in from: 192.168.0.153', 'users', '2014-09-03 17:35:14', 0),
(147, 1, 'Created record with ID: 2 : 192.168.0.153', 'auditorias', '2014-09-03 17:38:32', 0),
(148, 1, 'Migrate Type: preguntas_ to Version: 5 from: ::1', 'migrations', '2014-09-03 19:02:11', 0),
(149, 1, 'Migrate module: preguntas Version: 5 from: ::1', 'migrations', '2014-09-03 19:02:11', 0),
(150, 1, 'Created Module: Preguntas : ::1', 'modulebuilder', '2014-09-03 19:06:01', 0),
(151, 1, 'logged in from: ::1', 'users', '2014-09-04 16:52:55', 0),
(152, 1, 'Migrate Type: categorias_ to Version: 3 from: ::1', 'migrations', '2014-09-04 16:53:48', 0),
(153, 1, 'Migrate module: categorias Version: 3 from: ::1', 'migrations', '2014-09-04 16:53:48', 0),
(154, 1, 'Created Module: categorias : ::1', 'modulebuilder', '2014-09-04 16:55:09', 0),
(155, 1, 'Created record with ID: 9 : ::1', 'categorias', '2014-09-04 16:56:15', 0),
(156, 1, 'Created record with ID: 10 : ::1', 'categorias', '2014-09-04 16:56:33', 0),
(157, 1, 'Created record with ID: 11 : ::1', 'categorias', '2014-09-04 16:56:49', 0),
(158, 1, 'Created record with ID: 12 : ::1', 'categorias', '2014-09-04 16:57:22', 0),
(159, 1, 'Created record with ID: 13 : ::1', 'categorias', '2014-09-04 16:57:42', 0),
(160, 1, 'logged in from: 192.168.0.155', 'users', '2014-09-04 17:38:13', 0),
(161, 1, 'logged in from: ::1', 'users', '2014-09-04 23:02:42', 0),
(162, 1, 'logged in from: ::1', 'users', '2014-09-05 16:18:57', 0),
(163, 1, 'logged in from: 192.168.0.155', 'users', '2014-09-05 16:32:14', 0),
(164, 1, 'logged in from: 192.168.0.235', 'users', '2014-09-05 22:00:11', 0),
(165, 1, 'logged in from: ::1', 'users', '2014-09-09 18:11:07', 0),
(166, 1, 'logged in from: ::1', 'users', '2014-09-09 21:29:02', 0),
(167, 1, 'Created record with ID: 000100109092014 : ::1', 'auditorias', '2014-09-09 21:30:59', 0),
(168, 1, 'logged in from: 192.168.0.235', 'users', '2014-09-09 21:46:12', 0),
(169, 1, 'logged in from: 192.168.0.155', 'users', '2014-09-09 22:59:47', 0),
(170, 1, 'logged in from: 192.168.0.235', 'users', '2014-09-10 15:24:35', 0),
(171, 1, 'logged in from: ::1', 'users', '2014-09-10 17:42:48', 0),
(172, 1, 'logged in from: 192.168.0.97', 'users', '2014-09-10 17:53:14', 0),
(173, 1, 'Created Module: Respuestas : 192.168.0.97', 'modulebuilder', '2014-09-10 18:00:53', 0),
(174, 1, 'Created Module: Respuestas : 192.168.0.97', 'modulebuilder', '2014-09-10 18:00:59', 0),
(175, 1, 'logged in from: 192.168.0.97', 'users', '2014-09-10 22:40:54', 0),
(176, 1, 'logged in from: ::1', 'users', '2014-09-11 16:40:01', 0),
(177, 1, 'logged in from: ::1', 'users', '2014-09-11 17:07:52', 0),
(178, 1, 'logged in from: 192.168.0.155', 'users', '2014-09-11 17:45:26', 0),
(179, 1, 'logged in from: 192.168.0.235', 'users', '2014-09-11 18:06:09', 0),
(180, 1, 'created a new User: Miguel', 'users', '2014-09-11 21:31:23', 0),
(181, 2, 'logged in from: ::1', 'users', '2014-09-11 21:32:18', 0),
(182, 2, 'Created record with ID: 000400211092014 : ::1', 'auditorias', '2014-09-11 21:33:42', 0),
(183, 1, 'logged in from: ::1', 'users', '2014-09-11 21:37:31', 0),
(184, 2, 'logged in from: ::1', 'users', '2014-09-11 21:39:26', 0),
(185, 1, 'logged in from: ::1', 'users', '2014-09-11 23:24:40', 0),
(186, 1, 'logged in from: ::1', 'users', '2014-09-12 16:35:03', 0),
(187, 1, 'logged in from: 192.168.0.97', 'users', '2014-09-12 16:48:26', 0),
(188, 1, 'Created record with ID: 002300112092014 : ::1', 'auditorias', '2014-09-12 17:44:12', 0),
(189, 1, 'Migrate Type: respuestas_ to Version: 3 from: ::1', 'migrations', '2014-09-12 18:08:07', 0),
(190, 1, 'Migrate module: respuestas Version: 3 from: ::1', 'migrations', '2014-09-12 18:08:07', 0),
(191, 1, 'Created Module: Respuestas : ::1', 'modulebuilder', '2014-09-12 18:14:10', 0),
(192, 1, 'Created record with ID: 000700112092014 : ::1', 'auditorias', '2014-09-12 18:22:29', 0),
(193, 1, 'logged in from: ::1', 'users', '2014-09-12 21:17:17', 0),
(194, 1, 'logged in from: ::1', 'users', '2014-09-15 18:41:26', 0),
(195, 1, 'logged in from: ::1', 'users', '2014-09-16 17:55:52', 0),
(196, 1, 'logged in from: 192.168.0.97', 'users', '2014-09-17 20:43:07', 0),
(197, 1, 'logged in from: ::1', 'users', '2014-09-18 18:37:38', 0),
(198, 1, 'logged in from: ::1', 'users', '2014-09-18 21:40:28', 0),
(199, 1, 'Created Module: Preguntas Grupos : ::1', 'modulebuilder', '2014-09-18 21:44:48', 0),
(200, 1, 'logged in from: 192.168.0.153', 'users', '2014-09-18 21:47:22', 0),
(201, 1, 'Created record with ID: 1 : ::1', 'preguntas_grupos', '2014-09-18 21:51:10', 0),
(202, 1, 'Created record with ID: 2 : ::1', 'preguntas_grupos', '2014-09-18 21:51:29', 0),
(203, 1, 'Created record with ID: 3 : ::1', 'preguntas_grupos', '2014-09-18 21:51:43', 0),
(204, 1, 'Updated record with ID: 2 : ::1', 'preguntas_grupos', '2014-09-18 21:52:24', 0),
(205, 1, 'Created record with ID: 4 : ::1', 'preguntas_grupos', '2014-09-18 21:52:38', 0),
(206, 1, 'Created record with ID: 5 : ::1', 'preguntas_grupos', '2014-09-18 21:52:50', 0),
(207, 1, 'Migrate Type: respuestas_ to Version: 2 from: ::1', 'migrations', '2014-09-18 22:11:06', 0),
(208, 1, 'Migrate module: respuestas Version: 2 from: ::1', 'migrations', '2014-09-18 22:11:06', 0),
(209, 1, 'Migrate Type: respuestas_ to Version: 3 from: ::1', 'migrations', '2014-09-18 22:14:58', 0),
(210, 1, 'Migrate module: respuestas Version: 3 from: ::1', 'migrations', '2014-09-18 22:14:58', 0),
(211, 1, 'Created Module: Respuestas : ::1', 'modulebuilder', '2014-09-18 22:16:49', 0),
(212, 1, 'Migrate Type: categorias_ to Version: 2 from: ::1', 'migrations', '2014-09-18 22:49:37', 0),
(213, 1, 'Migrate module: categorias Version: 2 from: ::1', 'migrations', '2014-09-18 22:49:37', 0),
(214, 1, 'Migrate Type: categorias_ to Version: 3 from: ::1', 'migrations', '2014-09-18 22:51:56', 0),
(215, 1, 'Migrate module: categorias Version: 3 from: ::1', 'migrations', '2014-09-18 22:51:56', 0),
(216, 1, 'Created Module: categorias : ::1', 'modulebuilder', '2014-09-18 22:53:37', 0),
(217, 1, 'Created record with ID: 14 : ::1', 'categorias', '2014-09-18 23:39:35', 0),
(218, 1, 'Created record with ID: 92 : ::1', 'preguntas', '2014-09-18 23:42:21', 0),
(219, 1, 'Created record with ID: 93 : ::1', 'preguntas', '2014-09-18 23:43:31', 0),
(220, 1, 'logged in from: ::1', 'users', '2014-09-19 21:18:42', 0),
(221, 1, 'Created record with ID: 000700119092014 : ::1', 'auditorias', '2014-09-19 21:19:02', 0),
(222, 1, 'Created record with ID: 000200119092014 : ::1', 'auditorias', '2014-09-19 21:20:26', 0),
(223, 1, 'logged in from: 192.168.0.169', 'users', '2014-09-19 22:44:39', 0),
(224, 1, 'Created record with ID: 002100119092014 : 192.168.0.169', 'auditorias', '2014-09-19 23:00:21', 0),
(225, 1, 'logged in from: 192.168.0.25', 'users', '2014-09-19 23:40:48', 0),
(226, 1, 'logged in from: ::1', 'users', '2014-09-22 17:09:15', 0),
(227, 1, 'created a new Sorpresa: secreto', 'users', '2014-09-22 17:18:09', 0),
(228, 1, 'logged in from: ::1', 'users', '2014-09-22 18:04:11', 0),
(229, 1, 'Created Module: Observaciones : ::1', 'modulebuilder', '2014-09-22 18:10:24', 0),
(230, 1, 'logged in from: 192.168.0.251', 'users', '2014-09-22 18:49:23', 0),
(231, 1, 'logged in from: ::1', 'users', '2014-09-22 21:37:02', 0),
(232, 1, 'Updated record with ID: 2 : ::1', 'tiendas_tipo', '2014-09-22 22:32:28', 0),
(233, 1, 'logged in from: ::1', 'users', '2014-09-24 18:37:03', 0),
(234, 1, 'modified user: secreto', 'users', '2014-09-24 18:38:03', 0),
(235, 3, 'logged in from: ::1', 'users', '2014-09-24 18:38:21', 0),
(236, 1, 'logged in from: ::1', 'users', '2014-09-24 18:48:27', 0),
(237, 1, 'logged in from: ::1', 'users', '2014-09-24 18:54:43', 0),
(238, 1, 'Created record with ID: 3 : ::1', 'auditorias_tipo', '2014-09-24 19:15:15', 0),
(239, 3, 'logged in from: ::1', 'users', '2014-09-24 19:25:22', 0),
(240, 1, 'logged in from: ::1', 'users', '2014-09-25 16:01:54', 0),
(241, 3, 'logged in from: ::1', 'users', '2014-09-25 16:02:40', 0),
(242, 1, 'logged in from: ::1', 'users', '2014-09-25 16:10:47', 0),
(243, 1, 'Created Module: Auditorias Datos Cliente Secreto : ::1', 'modulebuilder', '2014-09-25 16:16:56', 0),
(244, 3, 'logged in from: ::1', 'users', '2014-09-25 16:50:32', 0),
(245, 3, 'Created record with ID: 000100325092014 : ::1', 'auditorias', '2014-09-25 17:21:36', 0),
(246, 3, 'Created record with ID: 000100325092014 : ::1', 'auditorias', '2014-09-25 17:27:43', 0),
(247, 3, 'Created record with ID: 000100325092014 : ::1', 'auditorias', '2014-09-25 18:24:44', 0),
(248, 3, 'Created record with ID: 002700325092014 : ::1', 'auditorias', '2014-09-25 18:29:40', 0),
(249, 3, 'Created record with ID: 002000325092014 : ::1', 'auditorias', '2014-09-25 18:44:29', 0),
(250, 3, 'Created record with ID: 002300325092014 : ::1', 'auditorias', '2014-09-25 18:47:02', 0),
(251, 3, 'Created record with ID: 057000325092014 : ::1', 'auditorias', '2014-09-25 18:58:12', 0),
(252, 1, 'logged in from: ::1', 'users', '2014-09-25 19:07:50', 0),
(253, 3, 'logged in from: ::1', 'users', '2014-09-25 19:10:34', 0),
(254, 3, 'logged in from: 192.168.0.251', 'users', '2014-09-25 19:15:57', 0),
(255, 3, 'Created record with ID: 011600325092014 : 192.168.0.251', 'auditorias', '2014-09-25 19:16:49', 0),
(256, 3, 'logged in from: 192.168.0.39', 'users', '2014-09-25 19:20:29', 0),
(257, 1, 'logged in from: ::1', 'users', '2014-09-25 23:12:28', 0),
(258, 3, 'logged in from: ::1', 'users', '2014-09-25 23:16:04', 0),
(259, 1, 'Created record with ID: 6 : ::1', 'preguntas_grupos', '2014-09-25 23:39:46', 0),
(260, 1, 'logged in from: ::1', 'users', '2014-09-26 16:27:34', 0),
(261, 3, 'logged in from: ::1', 'users', '2014-09-26 17:30:06', 0),
(262, 1, 'Created record with ID: 15 : ::1', 'categorias', '2014-09-26 17:35:06', 0),
(263, 1, 'Created record with ID: 16 : ::1', 'categorias', '2014-09-26 17:35:46', 0),
(264, 1, 'Created record with ID: 17 : ::1', 'categorias', '2014-09-26 17:38:23', 0),
(265, 1, 'Created record with ID: 18 : ::1', 'categorias', '2014-09-26 17:38:34', 0),
(266, 1, 'Created record with ID: 19 : ::1', 'categorias', '2014-09-26 17:38:55', 0),
(267, 1, 'Created record with ID: 20 : ::1', 'categorias', '2014-09-26 17:39:20', 0),
(268, 3, 'logged in from: ::1', 'users', '2014-09-26 21:11:26', 0),
(269, 1, 'logged in from: ::1', 'users', '2014-09-26 21:13:15', 0),
(270, 3, 'Created record with ID: 019200326092014 : ::1', 'auditorias', '2014-09-26 21:45:27', 0),
(271, 3, 'logged in from: 192.168.0.251', 'users', '2014-09-26 21:57:58', 0),
(272, 3, 'logged in from: 192.168.0.153', 'users', '2014-09-26 22:53:47', 0),
(273, 1, 'logged in from: ::1', 'users', '2014-09-29 17:06:37', 0),
(274, 1, 'Migrate Type: auditorias_datos_cliente_secreto_ to Version: 3 from: ::1', 'migrations', '2014-09-29 17:06:58', 0),
(275, 1, 'Migrate module: auditorias_datos_cliente_secreto Version: 3 from: ::1', 'migrations', '2014-09-29 17:06:58', 0),
(276, 1, 'Created Module: Auditorias Datos Cliente Secreto : ::1', 'modulebuilder', '2014-09-29 17:29:22', 0),
(277, 3, 'logged in from: ::1', 'users', '2014-09-29 17:32:52', 0),
(278, 3, 'Created record with ID: 002400329092014 : ::1', 'auditorias', '2014-09-29 18:14:28', 0),
(279, 3, 'logged in from: 192.168.0.251', 'users', '2014-09-29 18:40:53', 0),
(280, 1, 'logged in from: ::1', 'users', '2014-09-29 21:10:54', 0),
(281, 1, 'Created record with ID: 000700129092014 : ::1', 'auditorias', '2014-09-29 21:11:23', 0),
(282, 3, 'logged in from: ::1', 'users', '2014-09-29 21:23:52', 0),
(283, 3, 'Created record with ID: 019200329092014 : ::1', 'auditorias', '2014-09-29 22:02:14', 0),
(284, 3, 'logged in from: ::1', 'users', '2014-09-29 15:48:21', 0),
(285, 3, 'Created record with ID: 017200329092014 : ::1', 'auditorias', '2014-09-29 15:48:54', 0),
(286, 3, 'logged in from: ::1', 'users', '2014-09-30 14:46:46', 0),
(287, 1, 'logged in from: ::1', 'users', '2014-09-30 14:47:54', 0),
(288, 3, 'logged in from: 192.168.0.253', 'users', '2014-09-30 15:29:47', 0),
(289, 1, 'logged in from: ::1', 'users', '2014-10-01 15:30:44', 0),
(290, 3, 'logged in from: ::1', 'users', '2014-10-01 15:36:25', 0),
(291, 1, 'logged in from: ::1', 'users', '2014-10-02 10:22:50', 0),
(292, 3, 'logged in from: ::1', 'users', '2014-10-02 10:30:13', 0),
(293, 3, 'Created record with ID: 017200302102014 : ::1', 'auditorias', '2014-10-02 12:01:50', 0),
(294, 3, 'Created record with ID: 017700302102014 : ::1', 'auditorias', '2014-10-02 12:06:18', 0),
(295, 1, 'created a new Supervisor: supervisor', 'users', '2014-10-02 12:09:49', 0),
(296, 4, 'logged in from: ::1', 'users', '2014-10-02 12:10:49', 0),
(297, 3, 'logged in from: ::1', 'users', '2014-10-02 17:17:44', 0),
(298, 3, 'Created record with ID: 001700302102014 : ::1', 'auditorias', '2014-10-02 17:18:22', 0),
(299, 4, 'logged in from: ::1', 'users', '2014-10-02 17:19:58', 0),
(300, 4, 'logged in from: 192.168.0.251', 'users', '2014-10-02 17:26:47', 0),
(301, 3, 'logged in from: ::1', 'users', '2014-10-03 07:42:32', 0),
(302, 3, 'Created record with ID: 001100303102014 : ::1', 'auditorias', '2014-10-03 08:19:14', 0),
(303, 4, 'logged in from: ::1', 'users', '2014-10-03 08:22:04', 0),
(304, 1, 'logged in from: ::1', 'users', '2014-10-03 08:49:05', 0),
(305, 1, 'Created Module: Tiendas Grupos : ::1', 'modulebuilder', '2014-10-03 08:52:34', 0),
(306, 1, 'Migrate Type: tiendas_ to Version: 3 from: ::1', 'migrations', '2014-10-03 09:01:11', 0),
(307, 1, 'Migrate module: tiendas Version: 3 from: ::1', 'migrations', '2014-10-03 09:01:11', 0),
(308, 1, 'Migrate Type: tiendas_ to Version: 2 from: ::1', 'migrations', '2014-10-03 09:06:19', 0),
(309, 1, 'Migrate module: tiendas Version: 2 from: ::1', 'migrations', '2014-10-03 09:06:19', 0),
(310, 1, 'Migrate Type: tiendas_ to Version: 3 from: ::1', 'migrations', '2014-10-03 09:07:01', 0),
(311, 1, 'Migrate module: tiendas Version: 3 from: ::1', 'migrations', '2014-10-03 09:07:01', 0),
(312, 3, 'logged in from: ::1', 'users', '2014-10-03 09:26:27', 0),
(313, 3, 'Created record with ID: 002100303102014 : ::1', 'auditorias', '2014-10-03 09:27:00', 0),
(314, 3, 'logged in from: 192.168.0.153', 'users', '2014-10-03 09:35:03', 0),
(315, 3, 'Created record with ID: 002700303102014 : 192.168.0.153', 'auditorias', '2014-10-03 09:37:01', 0),
(316, 4, 'logged in from: 192.168.0.153', 'users', '2014-10-03 09:39:21', 0),
(317, 1, 'logged in from: ::1', 'users', '2014-10-06 09:23:42', 0),
(318, 3, 'logged in from: ::1', 'users', '2014-10-06 14:43:29', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_auditorias`
--

CREATE TABLE IF NOT EXISTS `bf_auditorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auditoria_id` varchar(15) NOT NULL,
  `cod_base` varchar(4) NOT NULL,
  `auditor_id` varchar(3) NOT NULL,
  `atendido_por` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `puntaje` float NOT NULL DEFAULT '60',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tipo_tienda_id` tinyint(4) NOT NULL DEFAULT '0',
  `cerrado` tinyint(1) NOT NULL DEFAULT '0',
  `auditoria_tipo_id` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `auditoria_id` (`auditoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `bf_auditorias`
--

INSERT INTO `bf_auditorias` (`id`, `auditoria_id`, `cod_base`, `auditor_id`, `atendido_por`, `cargo`, `puntaje`, `deleted`, `created_on`, `tipo_tienda_id`, `cerrado`, `auditoria_tipo_id`) VALUES
(1, '017200302102014', '0172', '003', 'N/A', 'N/A', 47, 0, '2014-10-02 12:01:50', 0, 1, 3),
(2, '017700302102014', '0177', '003', 'N/A', 'N/A', 47, 0, '2014-10-02 12:06:18', 0, 1, 3),
(3, '001700302102014', '0017', '003', 'N/A', 'N/A', 36, 0, '2014-10-02 17:18:22', 0, 1, 3),
(4, '001100303102014', '0011', '003', 'N/A', 'N/A', 41, 0, '2014-10-03 08:19:14', 0, 1, 3),
(5, '002100303102014', '0021', '003', 'N/A', 'N/A', 50, 0, '2014-10-03 09:27:00', 0, 0, 3),
(6, '002700303102014', '0027', '003', 'N/A', 'N/A', 28, 0, '2014-10-03 09:37:01', 0, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_auditorias_datos_cliente_secreto`
--

CREATE TABLE IF NOT EXISTS `bf_auditorias_datos_cliente_secreto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auditoria_id` varchar(15) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `ci` varchar(8) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `fecha_audit` datetime DEFAULT NULL,
  `punt_audit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `bf_auditorias_datos_cliente_secreto`
--

INSERT INTO `bf_auditorias_datos_cliente_secreto` (`id`, `auditoria_id`, `nombre`, `apellidos`, `ci`, `ciudad`, `telefono`, `fecha_audit`, `punt_audit`) VALUES
(1, '017200302102014', 'LUIS', 'JIMENEZ', '555555', 'SAN JUAN', '5559292', '2014-09-02 00:00:00', 9),
(2, '017700302102014', 'LUIS', 'JIMENEZ', '555555', 'SAN JUAN', '5559292', '2014-09-02 00:00:00', 8),
(3, '001700302102014', 'MIGUEL', 'GIL', '17514612', 'CARACAS', '5559292', '2014-10-01 00:00:00', 1),
(4, '001100303102014', 'MIGUEL', 'GIL', '17514612', 'CARACAS', '5559292', '2014-10-01 12:30:00', 7),
(5, '002100303102014', 'MIGUEL', 'GIL', '17514612', 'CARACAS', '5559292', '2014-10-01 11:30:00', 0),
(6, '002700303102014', 'MIGUEL', 'GIL', '17514612', 'CARACAS', '559292', '2014-09-26 11:30:00', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_auditorias_tipo`
--

CREATE TABLE IF NOT EXISTS `bf_auditorias_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `bf_auditorias_tipo`
--

INSERT INTO `bf_auditorias_tipo` (`id`, `descripcion`, `deleted`) VALUES
(1, 'Avisada', 0),
(2, 'Sorpresa', 0),
(3, 'Cliente Secreto', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_categorias`
--

CREATE TABLE IF NOT EXISTS `bf_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `preguntas_grupos_id` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `bf_categorias`
--

INSERT INTO `bf_categorias` (`id`, `descripcion`, `deleted`, `preguntas_grupos_id`) VALUES
(1, 'Inventarios', 0, 1),
(2, 'Preparación de Perfume', 0, 1),
(3, 'Limpieza y Estética', 0, 1),
(4, 'Mantenimiento', 0, 1),
(5, 'Publicidad', 0, 1),
(6, 'Personal', 0, 1),
(7, 'Seguridad Industrial', 0, 1),
(8, 'Deberes Fiscales', 0, 1),
(9, 'Atención al cliente', 0, 2),
(10, 'Información suministrada', 0, 2),
(11, 'Precios, descuentos y promociones', 0, 2),
(12, 'Facturación y entrega', 0, 2),
(13, 'Perfume preparado', 0, 2),
(14, 'Información', 0, 5),
(15, 'Atención al cliente', 0, 6),
(16, 'Información suministrada', 0, 6),
(17, 'Precios, descuentos y promociones', 0, 6),
(18, 'Preparacion de perfume', 0, 6),
(19, 'Facturación y entrega', 0, 6),
(20, 'Perfume preparado', 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_countries`
--

CREATE TABLE IF NOT EXISTS `bf_countries` (
  `iso` char(2) NOT NULL DEFAULT 'US',
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`iso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bf_countries`
--

INSERT INTO `bf_countries` (`iso`, `name`, `printable_name`, `iso3`, `numcode`) VALUES
('AD', 'ANDORRA', 'Andorra', 'AND', 20),
('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784),
('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4),
('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28),
('AI', 'ANGUILLA', 'Anguilla', 'AIA', 660),
('AL', 'ALBANIA', 'Albania', 'ALB', 8),
('AM', 'ARMENIA', 'Armenia', 'ARM', 51),
('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530),
('AO', 'ANGOLA', 'Angola', 'AGO', 24),
('AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL),
('AR', 'ARGENTINA', 'Argentina', 'ARG', 32),
('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16),
('AT', 'AUSTRIA', 'Austria', 'AUT', 40),
('AU', 'AUSTRALIA', 'Australia', 'AUS', 36),
('AW', 'ARUBA', 'Aruba', 'ABW', 533),
('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31),
('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70),
('BB', 'BARBADOS', 'Barbados', 'BRB', 52),
('BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50),
('BE', 'BELGIUM', 'Belgium', 'BEL', 56),
('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854),
('BG', 'BULGARIA', 'Bulgaria', 'BGR', 100),
('BH', 'BAHRAIN', 'Bahrain', 'BHR', 48),
('BI', 'BURUNDI', 'Burundi', 'BDI', 108),
('BJ', 'BENIN', 'Benin', 'BEN', 204),
('BM', 'BERMUDA', 'Bermuda', 'BMU', 60),
('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96),
('BO', 'BOLIVIA', 'Bolivia', 'BOL', 68),
('BR', 'BRAZIL', 'Brazil', 'BRA', 76),
('BS', 'BAHAMAS', 'Bahamas', 'BHS', 44),
('BT', 'BHUTAN', 'Bhutan', 'BTN', 64),
('BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL),
('BW', 'BOTSWANA', 'Botswana', 'BWA', 72),
('BY', 'BELARUS', 'Belarus', 'BLR', 112),
('BZ', 'BELIZE', 'Belize', 'BLZ', 84),
('CA', 'CANADA', 'Canada', 'CAN', 124),
('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180),
('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140),
('CG', 'CONGO', 'Congo', 'COG', 178),
('CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756),
('CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384),
('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184),
('CL', 'CHILE', 'Chile', 'CHL', 152),
('CM', 'CAMEROON', 'Cameroon', 'CMR', 120),
('CN', 'CHINA', 'China', 'CHN', 156),
('CO', 'COLOMBIA', 'Colombia', 'COL', 170),
('CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188),
('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL),
('CU', 'CUBA', 'Cuba', 'CUB', 192),
('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132),
('CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL),
('CY', 'CYPRUS', 'Cyprus', 'CYP', 196),
('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203),
('DE', 'GERMANY', 'Germany', 'DEU', 276),
('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262),
('DK', 'DENMARK', 'Denmark', 'DNK', 208),
('DM', 'DOMINICA', 'Dominica', 'DMA', 212),
('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214),
('DZ', 'ALGERIA', 'Algeria', 'DZA', 12),
('EC', 'ECUADOR', 'Ecuador', 'ECU', 218),
('EE', 'ESTONIA', 'Estonia', 'EST', 233),
('EG', 'EGYPT', 'Egypt', 'EGY', 818),
('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732),
('ER', 'ERITREA', 'Eritrea', 'ERI', 232),
('ES', 'SPAIN', 'Spain', 'ESP', 724),
('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231),
('FI', 'FINLAND', 'Finland', 'FIN', 246),
('FJ', 'FIJI', 'Fiji', 'FJI', 242),
('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238),
('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583),
('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234),
('FR', 'FRANCE', 'France', 'FRA', 250),
('GA', 'GABON', 'Gabon', 'GAB', 266),
('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826),
('GD', 'GRENADA', 'Grenada', 'GRD', 308),
('GE', 'GEORGIA', 'Georgia', 'GEO', 268),
('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254),
('GH', 'GHANA', 'Ghana', 'GHA', 288),
('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292),
('GL', 'GREENLAND', 'Greenland', 'GRL', 304),
('GM', 'GAMBIA', 'Gambia', 'GMB', 270),
('GN', 'GUINEA', 'Guinea', 'GIN', 324),
('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312),
('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226),
('GR', 'GREECE', 'Greece', 'GRC', 300),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
('GT', 'GUATEMALA', 'Guatemala', 'GTM', 320),
('GU', 'GUAM', 'Guam', 'GUM', 316),
('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624),
('GY', 'GUYANA', 'Guyana', 'GUY', 328),
('HK', 'HONG KONG', 'Hong Kong', 'HKG', 344),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL),
('HN', 'HONDURAS', 'Honduras', 'HND', 340),
('HR', 'CROATIA', 'Croatia', 'HRV', 191),
('HT', 'HAITI', 'Haiti', 'HTI', 332),
('HU', 'HUNGARY', 'Hungary', 'HUN', 348),
('ID', 'INDONESIA', 'Indonesia', 'IDN', 360),
('IE', 'IRELAND', 'Ireland', 'IRL', 372),
('IL', 'ISRAEL', 'Israel', 'ISR', 376),
('IN', 'INDIA', 'India', 'IND', 356),
('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL),
('IQ', 'IRAQ', 'Iraq', 'IRQ', 368),
('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364),
('IS', 'ICELAND', 'Iceland', 'ISL', 352),
('IT', 'ITALY', 'Italy', 'ITA', 380),
('JM', 'JAMAICA', 'Jamaica', 'JAM', 388),
('JO', 'JORDAN', 'Jordan', 'JOR', 400),
('JP', 'JAPAN', 'Japan', 'JPN', 392),
('KE', 'KENYA', 'Kenya', 'KEN', 404),
('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417),
('KH', 'CAMBODIA', 'Cambodia', 'KHM', 116),
('KI', 'KIRIBATI', 'Kiribati', 'KIR', 296),
('KM', 'COMOROS', 'Comoros', 'COM', 174),
('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659),
('KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408),
('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410),
('KW', 'KUWAIT', 'Kuwait', 'KWT', 414),
('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136),
('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398),
('LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418),
('LB', 'LEBANON', 'Lebanon', 'LBN', 422),
('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662),
('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438),
('LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144),
('LR', 'LIBERIA', 'Liberia', 'LBR', 430),
('LS', 'LESOTHO', 'Lesotho', 'LSO', 426),
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440),
('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442),
('LV', 'LATVIA', 'Latvia', 'LVA', 428),
('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434),
('MA', 'MOROCCO', 'Morocco', 'MAR', 504),
('MC', 'MONACO', 'Monaco', 'MCO', 492),
('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498),
('MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450),
('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807),
('ML', 'MALI', 'Mali', 'MLI', 466),
('MM', 'MYANMAR', 'Myanmar', 'MMR', 104),
('MN', 'MONGOLIA', 'Mongolia', 'MNG', 496),
('MO', 'MACAO', 'Macao', 'MAC', 446),
('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580),
('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474),
('MR', 'MAURITANIA', 'Mauritania', 'MRT', 478),
('MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500),
('MT', 'MALTA', 'Malta', 'MLT', 470),
('MU', 'MAURITIUS', 'Mauritius', 'MUS', 480),
('MV', 'MALDIVES', 'Maldives', 'MDV', 462),
('MW', 'MALAWI', 'Malawi', 'MWI', 454),
('MX', 'MEXICO', 'Mexico', 'MEX', 484),
('MY', 'MALAYSIA', 'Malaysia', 'MYS', 458),
('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508),
('NA', 'NAMIBIA', 'Namibia', 'NAM', 516),
('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540),
('NE', 'NIGER', 'Niger', 'NER', 562),
('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574),
('NG', 'NIGERIA', 'Nigeria', 'NGA', 566),
('NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558),
('NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528),
('NO', 'NORWAY', 'Norway', 'NOR', 578),
('NP', 'NEPAL', 'Nepal', 'NPL', 524),
('NR', 'NAURU', 'Nauru', 'NRU', 520),
('NU', 'NIUE', 'Niue', 'NIU', 570),
('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554),
('OM', 'OMAN', 'Oman', 'OMN', 512),
('PA', 'PANAMA', 'Panama', 'PAN', 591),
('PE', 'PERU', 'Peru', 'PER', 604),
('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258),
('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598),
('PH', 'PHILIPPINES', 'Philippines', 'PHL', 608),
('PK', 'PAKISTAN', 'Pakistan', 'PAK', 586),
('PL', 'POLAND', 'Poland', 'POL', 616),
('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666),
('PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612),
('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630),
('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL),
('PT', 'PORTUGAL', 'Portugal', 'PRT', 620),
('PW', 'PALAU', 'Palau', 'PLW', 585),
('PY', 'PARAGUAY', 'Paraguay', 'PRY', 600),
('QA', 'QATAR', 'Qatar', 'QAT', 634),
('RE', 'REUNION', 'Reunion', 'REU', 638),
('RO', 'ROMANIA', 'Romania', 'ROM', 642),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643),
('RW', 'RWANDA', 'Rwanda', 'RWA', 646),
('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682),
('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90),
('SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690),
('SD', 'SUDAN', 'Sudan', 'SDN', 736),
('SE', 'SWEDEN', 'Sweden', 'SWE', 752),
('SG', 'SINGAPORE', 'Singapore', 'SGP', 702),
('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654),
('SI', 'SLOVENIA', 'Slovenia', 'SVN', 705),
('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744),
('SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703),
('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694),
('SM', 'SAN MARINO', 'San Marino', 'SMR', 674),
('SN', 'SENEGAL', 'Senegal', 'SEN', 686),
('SO', 'SOMALIA', 'Somalia', 'SOM', 706),
('SR', 'SURINAME', 'Suriname', 'SUR', 740),
('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678),
('SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222),
('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760),
('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748),
('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796),
('TD', 'CHAD', 'Chad', 'TCD', 148),
('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL),
('TG', 'TOGO', 'Togo', 'TGO', 768),
('TH', 'THAILAND', 'Thailand', 'THA', 764),
('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762),
('TK', 'TOKELAU', 'Tokelau', 'TKL', 772),
('TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL),
('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795),
('TN', 'TUNISIA', 'Tunisia', 'TUN', 788),
('TO', 'TONGA', 'Tonga', 'TON', 776),
('TR', 'TURKEY', 'Turkey', 'TUR', 792),
('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780),
('TV', 'TUVALU', 'Tuvalu', 'TUV', 798),
('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158),
('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834),
('UA', 'UKRAINE', 'Ukraine', 'UKR', 804),
('UG', 'UGANDA', 'Uganda', 'UGA', 800),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL),
('US', 'UNITED STATES', 'United States', 'USA', 840),
('UY', 'URUGUAY', 'Uruguay', 'URY', 858),
('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860),
('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336),
('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670),
('VE', 'VENEZUELA', 'Venezuela', 'VEN', 862),
('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92),
('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850),
('VN', 'VIET NAM', 'Viet Nam', 'VNM', 704),
('VU', 'VANUATU', 'Vanuatu', 'VUT', 548),
('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876),
('WS', 'SAMOA', 'Samoa', 'WSM', 882),
('YE', 'YEMEN', 'Yemen', 'YEM', 887),
('YT', 'MAYOTTE', 'Mayotte', NULL, NULL),
('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710),
('ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894),
('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_email_queue`
--

CREATE TABLE IF NOT EXISTS `bf_email_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_login_attempts`
--

CREATE TABLE IF NOT EXISTS `bf_login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_observaciones`
--

CREATE TABLE IF NOT EXISTS `bf_observaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auditoria_id` varchar(15) NOT NULL,
  `preguntas_grupos_id` int(3) NOT NULL,
  `observacion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `bf_observaciones`
--

INSERT INTO `bf_observaciones` (`id`, `auditoria_id`, `preguntas_grupos_id`, `observacion`) VALUES
(1, '019200326092014', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget aliquet tellus, et ultricies diam. Sed lobortis magna in sem pharetra rutrum. Vivamus ac metus auctor augue rhoncus sollicitudin. Phasellus laoreet lorem in sapien imperdiet laoreet. Duis elementum purus feugiat, suscipit orci a, viverra quam. Ut ac odio aliquam, sodales sapien at, scelerisque risus. Maecenas non pellentesque risus. Cras lacinia ullamcorper orci a cursus. Integer sed tortor erat. Nulla velit sapien, cursus sit amet lacus sit amet, vehicula aliquam est.</p>\r\n'),
(2, '002400329092014', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur laoreet nisi a sagittis. Phasellus et sollicitudin diam. Aliquam vestibulum mattis sagittis. Nam tincidunt, augue id efficitur accumsan, nisl arcu ullamcorper magna, eu faucibus sapien odio posuere lorem. Sed faucibus ligula et commodo cursus. Ut ac ante sit amet odio feugiat maximus. Nam quis porttitor quam. Morbi a luctus lorem. Nullam molestie, neque quis consectetur pulvinar, libero mauris posuere ligula, convallis eleifend lectus orci non tellus.</p>\r\n\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed varius luctus est, auctor pellentesque lacus varius at. Vivamus quis ipsum quis arcu lobortis placerat et quis justo. Donec laoreet enim eu ante accumsan, quis bibendum diam mollis. Suspendisse condimentum urna in fermentum cursus. Nullam imperdiet eros eu mi lobortis aliquam nec pharetra enim. Phasellus efficitur erat nulla, a pellentesque libero rhoncus non. Nullam orci tortor, fringilla ut felis in, congue posuere metus. Nam a justo sagittis, laoreet urna id, molestie enim. Sed venenatis non nisl id malesuada. Sed et vestibulum purus, at interdum quam. Phasellus velit ex, dapibus vitae porta eu, ullamcorper a lorem. Integer eu sapien in quam tincidunt ultrices a non libero. Aliquam maximus enim diam, ac feugiat ex pellentesque in.</p>\r\n\r\n<p>Nam posuere est urna. In auctor, felis consectetur feugiat scelerisque, lectus est imperdiet velit, ut blandit orci quam quis purus. Etiam urna libero, sodales et consectetur id, volutpat pretium neque. Sed purus urna, iaculis vitae accumsan ac, ultrices quis dui. Curabitur aliquet semper ex at molestie. Vestibulum commodo luctus interdum. Mauris nec auctor tellus. Vestibulum ultrices lectus sit amet lectus dignissim, nec faucibus massa gravida. Nam molestie dictum dolor, eu vulputate purus finibus non. Duis commodo lacinia massa, vitae maximus neque pellentesque eget. Fusce a sem ultricies, ultricies massa quis, maximus leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum elementum eros sit amet odio euismod porta. Nulla facilisi. Donec sed ante a orci placerat porttitor. Suspendisse nulla quam, ornare congue dolor id, rhoncus ullamcorper eros.</p>\r\n\r\n<p>Aliquam erat volutpat. Nam et velit sit amet justo lacinia hendrerit eget et magna. Vivamus quis nisl quis nulla consectetur blandit. Phasellus cursus justo a lectus ultrices fringilla. Donec dapibus diam id quam blandit porttitor. Sed nec felis mattis, porttitor lorem nec, pellentesque risus. Nam felis dolor, vulputate sit amet varius eu, convallis a augue. Sed a egestas lectus, ac porttitor ipsum. Mauris et felis nec ante fringilla scelerisque eu at mi.</p>\r\n\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus velit lorem, rhoncus sit amet feugiat non, placerat eget nulla. Morbi sodales tempus elit vitae sollicitudin. Sed aliquet dolor et sem aliquet, id pharetra lectus molestie. Aenean sit amet dolor est. Proin mollis, lectus ac tempus dictum, ipsum erat molestie nisi, vitae rutrum elit risus sed ipsum. Cras egestas volutpat augue. Nam sed sollicitudin lacus. Vestibulum nec ultricies arcu.</p>\r\n'),
(3, '017200302102014', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ut mauris eu gravida. Phasellus quis sem sit amet dolor congue tincidunt. Cras feugiat, libero a mattis vulputate, dolor magna pharetra dolor, fermentum bibendum leo nunc at nulla. Vivamus egestas fermentum tortor. Vestibulum laoreet vulputate lectus eu placerat. Ut placerat eros lectus, quis eleifend dui iaculis ac. Nam eget eros erat. Mauris sagittis augue sit amet urna vulputate, eget sodales arcu rhoncus. Sed orci enim, vehicula at purus eu, sollicitudin dignissim mauris. Donec commodo justo id turpis bibendum, sed ultrices ligula gravida.</p>\r\n'),
(4, '017700302102014', 6, '<p>Vestibulum id nulla purus. Sed nec ultricies justo, sed vestibulum augue. Sed ac finibus diam. Curabitur tempus pulvinar turpis eget porttitor. Duis faucibus sem enim, et feugiat dui congue ut. Morbi ultricies mauris elit, sed laoreet risus mollis vitae. Fusce maximus vulputate magna, at tempus ipsum scelerisque vel. Aliquam sed sollicitudin erat. Aenean sed ex sapien. Sed tempus erat vel risus vehicula, dignissim faucibus magna accumsan. Sed at bibendum risus. Phasellus in elit dapibus, mattis est ut, pretium sapien.</p>\r\n'),
(5, '001700302102014', 6, '<p>es una asco de tienda, no me reglaron nada</p>\r\n'),
(6, '001100303102014', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius, nisi ac scelerisque accumsan, sapien lectus ullamcorper mauris, ac congue felis risus id libero. Nam erat eros, varius vitae purus at, lobortis euismod orci. Ut libero lacus, cursus et imperdiet non, finibus quis est. Aliquam pellentesque lobortis massa in molestie. Maecenas mollis id nibh cursus posuere. Phasellus bibendum felis eu efficitur lobortis. In pretium feugiat elit, gravida egestas neque consectetur ut. In pulvinar justo eget finibus tristique. Aliquam nulla lorem, pulvinar ut consequat id, tempus a magna.</p>\r\n'),
(7, '002700303102014', 6, '<p>Comentario de prueba&nbsp;Comentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de pruebaComentario de prueba</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_permissions`
--

CREATE TABLE IF NOT EXISTS `bf_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=125 ;

--
-- Volcado de datos para la tabla `bf_permissions`
--

INSERT INTO `bf_permissions` (`permission_id`, `name`, `description`, `status`) VALUES
(2, 'Site.Content.View', 'Allow users to view the Content Context', 'active'),
(3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'),
(4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'),
(5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'),
(6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'),
(7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'),
(8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'),
(9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'),
(10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'),
(11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'),
(12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'),
(13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'),
(14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'),
(15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'),
(16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'),
(17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'),
(18, 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active'),
(19, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'),
(20, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'),
(21, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'),
(22, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'),
(24, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'),
(25, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'),
(27, 'Activities.Own.View', 'To view the users own activity logs', 'active'),
(28, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'),
(29, 'Activities.User.View', 'To view the user activity logs', 'active'),
(30, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'),
(31, 'Activities.Module.View', 'To view the module activity logs', 'active'),
(32, 'Activities.Module.Delete', 'To delete the module activity logs', 'active'),
(33, 'Activities.Date.View', 'To view the users own activity logs', 'active'),
(34, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'),
(35, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'),
(36, 'Bonfire.Settings.View', 'To view the site settings page.', 'active'),
(37, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'),
(38, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'),
(39, 'Bonfire.Database.View', 'To view the Database menu.', 'active'),
(40, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'),
(41, 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active'),
(42, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'),
(43, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'),
(44, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'),
(45, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'),
(46, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active'),
(49, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'),
(50, 'Bonfire.Roles.Add', 'To add New Roles', 'active'),
(59, 'Categorias.Content.View', '', 'active'),
(60, 'Categorias.Content.Create', '', 'active'),
(61, 'Categorias.Content.Edit', '', 'active'),
(62, 'Categorias.Content.Delete', '', 'active'),
(67, 'Auditorias.Content.View', '', 'active'),
(68, 'Auditorias.Content.Create', '', 'active'),
(69, 'Auditorias.Content.Edit', '', 'active'),
(70, 'Auditorias.Content.Delete', '', 'active'),
(71, 'Tiendas_Tipo.Content.View', '', 'active'),
(72, 'Tiendas_Tipo.Content.Create', '', 'active'),
(73, 'Tiendas_Tipo.Content.Edit', '', 'active'),
(74, 'Tiendas_Tipo.Content.Delete', '', 'active'),
(75, 'Tiendas_Tipo.Reports.View', '', 'active'),
(76, 'Tiendas_Tipo.Reports.Create', '', 'active'),
(77, 'Tiendas_Tipo.Reports.Edit', '', 'active'),
(78, 'Tiendas_Tipo.Reports.Delete', '', 'active'),
(79, 'Tiendas_Tipo.Settings.View', '', 'active'),
(80, 'Tiendas_Tipo.Settings.Create', '', 'active'),
(81, 'Tiendas_Tipo.Settings.Edit', '', 'active'),
(82, 'Tiendas_Tipo.Settings.Delete', '', 'active'),
(83, 'Tiendas_Tipo.Developer.View', '', 'active'),
(84, 'Tiendas_Tipo.Developer.Create', '', 'active'),
(85, 'Tiendas_Tipo.Developer.Edit', '', 'active'),
(86, 'Tiendas_Tipo.Developer.Delete', '', 'active'),
(87, 'Tiendas.Content.View', '', 'active'),
(88, 'Tiendas.Content.Create', '', 'active'),
(89, 'Tiendas.Content.Edit', '', 'active'),
(90, 'Tiendas.Content.Delete', '', 'active'),
(91, 'Preguntas_Tipo.Content.View', '', 'active'),
(92, 'Preguntas_Tipo.Content.Create', '', 'active'),
(93, 'Preguntas_Tipo.Content.Edit', '', 'active'),
(94, 'Preguntas_Tipo.Content.Delete', '', 'active'),
(95, 'Auditorias_Tipo.Content.View', '', 'active'),
(96, 'Auditorias_Tipo.Content.Create', '', 'active'),
(97, 'Auditorias_Tipo.Content.Edit', '', 'active'),
(98, 'Auditorias_Tipo.Content.Delete', '', 'active'),
(99, 'Preguntas.Content.View', '', 'active'),
(100, 'Preguntas.Content.Create', '', 'active'),
(101, 'Preguntas.Content.Edit', '', 'active'),
(102, 'Preguntas.Content.Delete', '', 'active'),
(103, 'Respuestas.Content.View', '', 'active'),
(104, 'Respuestas.Content.Create', '', 'active'),
(105, 'Respuestas.Content.Edit', '', 'active'),
(106, 'Respuestas.Content.Delete', '', 'active'),
(107, 'Preguntas_Grupos.Content.View', '', 'active'),
(108, 'Preguntas_Grupos.Content.Create', '', 'active'),
(109, 'Preguntas_Grupos.Content.Edit', '', 'active'),
(110, 'Preguntas_Grupos.Content.Delete', '', 'active'),
(111, 'Permissions.Sorpresa.Manage', 'To manage the access control permissions for the Sorpresa role.', 'active'),
(112, 'Observaciones.Content.View', '', 'active'),
(113, 'Observaciones.Content.Create', '', 'active'),
(114, 'Observaciones.Content.Edit', '', 'active'),
(115, 'Observaciones.Content.Delete', '', 'active'),
(116, 'Auditorias_Datos_Cliente_Secreto.Content.View', '', 'active'),
(117, 'Auditorias_Datos_Cliente_Secreto.Content.Create', '', 'active'),
(118, 'Auditorias_Datos_Cliente_Secreto.Content.Edit', '', 'active'),
(119, 'Auditorias_Datos_Cliente_Secreto.Content.Delete', '', 'active'),
(120, 'Permissions.Supervisor.Manage', 'To manage the access control permissions for the Supervisor role.', 'active'),
(121, 'Tiendas_Grupos.Content.View', '', 'active'),
(122, 'Tiendas_Grupos.Content.Create', '', 'active'),
(123, 'Tiendas_Grupos.Content.Edit', '', 'active'),
(124, 'Tiendas_Grupos.Content.Delete', '', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_preguntas`
--

CREATE TABLE IF NOT EXISTS `bf_preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(1000) NOT NULL,
  `puntuacion` double NOT NULL,
  `categoria_id` int(10) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `tipo_pregunta` tinyint(4) NOT NULL,
  `preguntas_grupos_id` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `atencion` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=125 ;

--
-- Volcado de datos para la tabla `bf_preguntas`
--

INSERT INTO `bf_preguntas` (`id`, `descripcion`, `puntuacion`, `categoria_id`, `deleted`, `tipo_pregunta`, `preguntas_grupos_id`, `orden`, `atencion`) VALUES
(1, 'Uso de bata', 2, 2, 0, 1, 1, 0, 0),
(2, 'Uso de lentes', 2, 2, 0, 1, 1, 0, 0),
(3, 'Uso de proporciones correctas', 5, 2, 0, 1, 1, 0, 0),
(4, 'Máquina selladora', 0, 2, 0, 1, 1, 0, 0),
(5, 'Vidrios del mostrador marcados con huellas', 0.16, 3, 0, 2, 1, 0, 0),
(6, 'Restos o exceso de teipe en los vidrios', 0.16, 3, 0, 2, 1, 0, 0),
(7, 'Papeles en mal estado pegados a los vidrios', 0.18, 3, 0, 2, 1, 0, 0),
(8, 'Mostrador/estantes con restos de polvo', 0.5, 3, 0, 2, 1, 0, 0),
(9, 'Manchas en alguna de las paredes', 0.25, 3, 0, 2, 1, 0, 0),
(10, 'Manchas/suciedad en el piso', 0.25, 3, 0, 2, 1, 0, 0),
(11, 'Módulos o repisas con restos de polvo', 0.25, 3, 0, 2, 1, 0, 0),
(12, 'Restos de teipe o similares en muebles', 0.25, 3, 0, 2, 1, 0, 0),
(13, 'Zona de preparación de perfume desordenada', 0.25, 3, 0, 2, 1, 0, 0),
(14, 'Zona de preparación de perfume con restos de alcohol/ otros', 0.25, 3, 0, 2, 1, 0, 0),
(15, 'Caja registradora desordenada', 0.25, 3, 0, 2, 1, 0, 0),
(16, 'Cables desordenados', 0.25, 3, 0, 2, 1, 0, 0),
(17, 'Taras y probadores desordenados', 0.5, 3, 0, 2, 1, 0, 0),
(18, 'Taras y probadores con la etiqueta de frente', 0.5, 3, 0, 1, 1, 0, 0),
(19, 'Taras y probadores libres de polvo', 0.5, 3, 0, 1, 1, 0, 0),
(20, 'Bombillos quemados', 1, 4, 0, 2, 1, 1, 0),
(21, 'Cajas de luz publicitarias quemadas', 1, 4, 0, 2, 1, 0, 0),
(22, 'Luz externa no completamente iluminada', 0.5, 4, 0, 2, 1, 0, 0),
(23, 'Luz externa deteriorada', 0.5, 4, 0, 2, 1, 0, 0),
(24, 'Aire encendido', 1, 4, 0, 1, 1, 1, 0),
(25, 'Punto de venta', 1, 4, 0, 1, 1, 0, 0),
(26, 'Balanza calibrada', 5, 4, 0, 1, 1, 0, 0),
(27, 'Computador funcionando', 5, 4, 0, 1, 1, 0, 0),
(28, 'Alguna pared con grietas o deterioro', 1, 4, 0, 2, 1, 0, 0),
(29, 'Alguna cerámica del piso rota', 1, 4, 0, 2, 1, 1, 0),
(30, 'Espacios publicitarios vacíos', 1, 5, 0, 2, 1, 0, 0),
(31, 'Publicidad de Carácter Obligatorio', 1, 5, 0, 2, 1, 0, 0),
(32, 'Publicidad actualizada', 1, 5, 0, 2, 1, 0, 0),
(33, 'Existencia de publicidad ajena a PF', 5, 5, 0, 2, 1, 0, 0),
(34, 'Venta de productos o servicios ajenos a PF', 10, 5, 0, 2, 1, 0, 0),
(35, 'Volantes ordenados/actualizados', 1, 5, 0, 1, 1, 0, 0),
(36, 'Volantes suficientes', 1, 5, 0, 1, 1, 0, 0),
(37, 'Pared de color Azul Satinado (Egyptian Nile SW 1762)', 0, 5, 0, 1, 1, 0, 0),
(38, 'Catálogos desplegables suficientes', 1, 5, 0, 1, 1, 0, 0),
(39, 'Tiras olfativas suficientes (más de 1 caja de 2500)', 1, 5, 0, 1, 1, 0, 0),
(40, 'Bolsas suficientes (más de 1 paquete de 100)', 1, 5, 0, 1, 1, 0, 0),
(41, 'Bolsas grandes suficientes', 0, 5, 1, 1, 1, 0, 0),
(42, 'Personal completamente uniformado ', 4, 6, 0, 1, 1, 0, 0),
(43, 'Aseados', 0.6, 6, 0, 1, 1, 0, 0),
(44, 'Afeitado / cabello recogido', 0.6, 6, 0, 1, 1, 0, 0),
(45, 'Zarcillos cortos / Esmalte de uñas claros', 0.6, 6, 0, 1, 1, 0, 0),
(46, 'Uniforme limpio', 0.6, 6, 0, 1, 1, 0, 0),
(47, 'Uniforme en buen estado    ', 0.6, 6, 0, 1, 1, 0, 0),
(48, 'Extintor cargado y con fecha reciente', 2.5, 7, 0, 1, 1, 0, 0),
(49, 'Detector de humo', 1, 7, 0, 1, 1, 0, 0),
(50, 'Alarma contra incendios', 1, 7, 0, 1, 1, 0, 0),
(51, 'Extractores', 1, 7, 0, 1, 1, 0, 0),
(52, 'Carteles de prohibido fumar', 1, 7, 0, 1, 1, 0, 0),
(53, 'Alcohol almacenado en ambiente fresco ', 1, 7, 0, 1, 1, 0, 0),
(54, 'Certificado balanza', 0.5, 8, 0, 1, 1, 0, 0),
(55, 'RIF', 0.5, 8, 0, 1, 1, 0, 0),
(56, 'ISLR', 0.5, 8, 0, 1, 1, 0, 0),
(57, 'IVA', 0.5, 8, 0, 1, 1, 0, 0),
(58, 'Patente', 0.5, 8, 0, 1, 1, 0, 0),
(59, '¿Tiene internet?', 0, 4, 0, 1, 1, 9, 0),
(60, 'Cuadro PF', 0, 5, 0, 2, 1, 9, 0),
(61, 'Piercings / Tatuajes visibles', 0, 6, 0, 2, 1, 9, 0),
(62, 'Etiquetas de perfumes correctas', 5, 1, 0, 1, 1, 0, 0),
(63, 'Probadores (sin fecha, sin etiquetas, presentación, otro) ', 1, 1, 0, 1, 1, 0, 0),
(64, 'Anomalías en olor probadores', 1, 1, 0, 2, 1, 0, 0),
(65, 'Atención inmediata', 0, 9, 0, 1, 2, 0, 1),
(66, 'Saludo y bienvenida a la tienda', 0, 9, 0, 1, 2, 0, 1),
(67, 'Concepto/Discurso de Ventas', 0, 9, 0, 1, 2, 0, 1),
(68, 'Entrega de catálogo o volante', 0, 9, 0, 1, 2, 0, 1),
(69, 'Trato amable y buena disposición', 0, 9, 0, 1, 2, 0, 1),
(70, 'Muestras de todas las fragancias solicitadas', 0, 9, 0, 1, 2, 0, 1),
(71, 'Conocimiento de estilos y casas', 0, 10, 0, 1, 2, 0, 1),
(72, 'Sugerencias', 0, 10, 0, 1, 2, 0, 1),
(73, 'Ofrece Cremas Corporales, Línea  Infantil o Spa', 0, 10, 0, 1, 2, 0, 1),
(74, 'Ofrecer todas las presentaciones', 0, 11, 0, 1, 2, 0, 1),
(75, 'Mencionar los precios verbalmente', 0, 11, 0, 1, 2, 0, 1),
(76, 'Señalar las presentaciones visualmente', 0, 11, 0, 1, 2, 0, 1),
(77, 'Precios vigentes correctos', 0, 11, 0, 1, 2, 0, 1),
(78, 'Economía de escala', 0, 11, 0, 1, 2, 0, 1),
(79, 'Promociones', 0, 11, 0, 1, 2, 0, 1),
(80, 'Toma de datos por parte del vendedor', 0, 12, 0, 1, 2, 0, 1),
(81, 'Entrega del perfume en su caja', 0, 12, 0, 1, 2, 0, 1),
(82, 'Entrega en bolsa de Perfumes Factory', 0, 12, 0, 1, 2, 0, 1),
(83, 'Entrega de factura', 0, 12, 0, 1, 2, 0, 1),
(84, 'Frasco limpio y en buen estado', 0, 13, 0, 1, 2, 0, 1),
(85, 'Tapa y atomizador adecuados para género', 0, 13, 0, 1, 2, 0, 1),
(86, 'Tapa limpia y en buen estado', 0, 13, 0, 1, 2, 0, 1),
(87, 'Atomizador funciona correctamente', 0, 13, 0, 1, 2, 0, 1),
(88, 'Etiqueta de Casa Matriz', 0, 13, 0, 1, 2, 0, 1),
(89, 'Etiqueta colocada de forma correcta', 0, 13, 0, 1, 2, 0, 1),
(90, 'Perfume sin oxidaciones ni malos olores', 0, 13, 0, 1, 2, 0, 1),
(91, 'Fragancia adecuada', 0, 13, 0, 1, 2, 0, 1),
(92, '¿Tienen pedido en tránsito?', 0, 14, 0, 1, 5, 0, 1),
(93, '¿El encargado valido la identidad con casa matriz?', 0, 14, 0, 1, 5, 0, 1),
(94, 'Atención inmediata', 2, 15, 0, 1, 6, 0, 1),
(95, 'Saludo y bienvenida a la tienda', 2, 15, 0, 1, 6, 0, 1),
(96, 'Concepto/Discurso de Ventas', 1, 15, 0, 1, 6, 0, 1),
(97, 'Entrega de catálogo o volante', 1, 15, 0, 1, 6, 0, 1),
(98, 'Trato amable y buena disposición', 4, 15, 0, 1, 6, 0, 1),
(99, 'Muestras de todas las fragancias solicitadas', 2, 15, 0, 1, 6, 0, 1),
(100, 'Conocimiento de estilos y casas', 1, 16, 0, 1, 6, 0, 1),
(101, 'Sugerencias', 1, 16, 0, 1, 6, 0, 1),
(102, 'Ofrece Cremas Corporales, Línea  Infantil o Spa', 1, 16, 0, 1, 6, 0, 1),
(103, 'Ofrecer todas las presentaciones', 2, 17, 0, 1, 6, 0, 1),
(104, 'Mencionar los precios verbalmente', 1, 17, 0, 1, 6, 0, 1),
(105, 'Señalar las presentaciones visualmente', 1, 17, 0, 1, 6, 0, 1),
(106, 'Precios vigentes correctos', 3, 17, 0, 1, 6, 0, 1),
(107, 'Economía de escala', 2, 17, 0, 1, 6, 0, 1),
(108, 'Promociones/ Combos y Otros', 3, 17, 0, 1, 6, 0, 1),
(109, 'Toma de datos por parte del vendedor', 1, 19, 0, 1, 6, 0, 1),
(110, 'Entrega del perfume en su caja', 1, 19, 0, 1, 6, 0, 1),
(111, 'Entrega en bolsa de Perfumes Factory', 1, 19, 0, 1, 6, 0, 1),
(112, 'Entrega de factura', 1, 19, 0, 1, 6, 0, 1),
(113, 'Frasco limpio y en buen estado', 2, 20, 0, 1, 6, 0, 1),
(114, 'Tapa y atomizador adecuados para género', 1, 20, 0, 1, 6, 0, 1),
(115, 'Tapa limpia y en buen estado', 1, 20, 0, 1, 6, 0, 1),
(116, 'Atomizador funciona correctamente', 1, 20, 0, 1, 6, 0, 1),
(117, 'Etiqueta de Casa Matriz', 2, 20, 0, 1, 6, 0, 1),
(118, 'Etiqueta colocada de forma correcta', 1, 20, 0, 1, 6, 0, 1),
(119, 'Perfume sin oxidaciones ni malos olores', 2, 20, 0, 1, 6, 0, 1),
(120, 'Fragancia adecuada', 2, 20, 0, 1, 6, 0, 1),
(121, 'Preparación de Perfume "en vivo"', 3, 18, 0, 1, 6, 0, 1),
(122, 'Uso de bata en la preparación', 1, 18, 1, 1, 6, 0, 1),
(123, 'Uso de lentes al utilizar la selladora', 1, 18, 0, 1, 6, 0, 1),
(124, 'Proporciones correctas', 3, 18, 0, 1, 6, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_preguntas_grupos`
--

CREATE TABLE IF NOT EXISTS `bf_preguntas_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `bf_preguntas_grupos`
--

INSERT INTO `bf_preguntas_grupos` (`id`, `descripcion`, `deleted`) VALUES
(1, 'Evaluación Operativa', 0),
(2, 'Evaluación Atención al Público', 0),
(3, 'Evaluación de Imagen', 0),
(4, 'Evaluación Inventario', 0),
(5, 'Evaluación Otros', 0),
(6, 'Evaluación Cliente Secreto', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_preguntas_tipo`
--

CREATE TABLE IF NOT EXISTS `bf_preguntas_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `bf_preguntas_tipo`
--

INSERT INTO `bf_preguntas_tipo` (`id`, `descripcion`, `deleted`) VALUES
(1, 'Si +', 0),
(2, 'No +', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_respuestas`
--

CREATE TABLE IF NOT EXISTS `bf_respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auditoria_id` varchar(15) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `preguntas_grupos_id` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=181 ;

--
-- Volcado de datos para la tabla `bf_respuestas`
--

INSERT INTO `bf_respuestas` (`id`, `auditoria_id`, `pregunta_id`, `valor`, `puntuacion`, `preguntas_grupos_id`) VALUES
(1, '017200302102014', 94, '0', 2, 6),
(2, '017200302102014', 95, '0', 2, 6),
(3, '017200302102014', 96, '0', 1, 6),
(4, '017200302102014', 97, '0', 1, 6),
(5, '017200302102014', 98, '0', 4, 6),
(6, '017200302102014', 99, '0', 2, 6),
(7, '017200302102014', 100, '0', 1, 6),
(8, '017200302102014', 101, '0', 1, 6),
(9, '017200302102014', 102, '0', 1, 6),
(10, '017200302102014', 103, '0', 2, 6),
(11, '017200302102014', 104, '0', 1, 6),
(12, '017200302102014', 105, '0', 1, 6),
(13, '017200302102014', 106, '0', 3, 6),
(14, '017200302102014', 107, '0', 2, 6),
(15, '017200302102014', 108, '1', 3, 6),
(16, '017200302102014', 121, '0', 3, 6),
(17, '017200302102014', 123, '0', 1, 6),
(18, '017200302102014', 124, '0', 3, 6),
(19, '017200302102014', 109, '0', 1, 6),
(20, '017200302102014', 110, '0', 1, 6),
(21, '017200302102014', 111, '0', 1, 6),
(22, '017200302102014', 112, '0', 1, 6),
(23, '017200302102014', 113, '0', 2, 6),
(24, '017200302102014', 114, '0', 1, 6),
(25, '017200302102014', 115, '0', 1, 6),
(26, '017200302102014', 116, '0', 1, 6),
(27, '017200302102014', 117, '0', 2, 6),
(28, '017200302102014', 118, '0', 1, 6),
(29, '017200302102014', 119, '0', 2, 6),
(30, '017200302102014', 120, '0', 2, 6),
(31, '017700302102014', 94, '0', 2, 6),
(32, '017700302102014', 95, '0', 2, 6),
(33, '017700302102014', 96, '0', 1, 6),
(34, '017700302102014', 97, '0', 1, 6),
(35, '017700302102014', 98, '0', 4, 6),
(36, '017700302102014', 99, '0', 2, 6),
(37, '017700302102014', 100, '0', 1, 6),
(38, '017700302102014', 101, '0', 1, 6),
(39, '017700302102014', 102, '0', 1, 6),
(40, '017700302102014', 103, '0', 2, 6),
(41, '017700302102014', 104, '0', 1, 6),
(42, '017700302102014', 105, '0', 1, 6),
(43, '017700302102014', 106, '0', 3, 6),
(44, '017700302102014', 107, '0', 2, 6),
(45, '017700302102014', 108, '1', 3, 6),
(46, '017700302102014', 121, '0', 3, 6),
(47, '017700302102014', 123, '0', 1, 6),
(48, '017700302102014', 124, '0', 3, 6),
(49, '017700302102014', 109, '0', 1, 6),
(50, '017700302102014', 110, '0', 1, 6),
(51, '017700302102014', 111, '0', 1, 6),
(52, '017700302102014', 112, '0', 1, 6),
(53, '017700302102014', 113, '0', 2, 6),
(54, '017700302102014', 114, '0', 1, 6),
(55, '017700302102014', 115, '0', 1, 6),
(56, '017700302102014', 116, '0', 1, 6),
(57, '017700302102014', 117, '0', 2, 6),
(58, '017700302102014', 118, '0', 1, 6),
(59, '017700302102014', 119, '0', 2, 6),
(60, '017700302102014', 120, '0', 2, 6),
(61, '001700302102014', 94, '1', 2, 6),
(62, '001700302102014', 95, '0', 2, 6),
(63, '001700302102014', 96, '1', 1, 6),
(64, '001700302102014', 97, '1', 1, 6),
(65, '001700302102014', 98, '1', 4, 6),
(66, '001700302102014', 99, '0', 2, 6),
(67, '001700302102014', 100, '0', 1, 6),
(68, '001700302102014', 101, '1', 1, 6),
(69, '001700302102014', 102, '0', 1, 6),
(70, '001700302102014', 103, '0', 2, 6),
(71, '001700302102014', 104, '0', 1, 6),
(72, '001700302102014', 105, '1', 1, 6),
(73, '001700302102014', 106, '0', 3, 6),
(74, '001700302102014', 107, '0', 2, 6),
(75, '001700302102014', 108, '0', 3, 6),
(76, '001700302102014', 121, '0', 3, 6),
(77, '001700302102014', 123, '0', 1, 6),
(78, '001700302102014', 124, '0', 3, 6),
(79, '001700302102014', 109, '0', 1, 6),
(80, '001700302102014', 110, '1', 1, 6),
(81, '001700302102014', 111, '1', 1, 6),
(82, '001700302102014', 112, '0', 1, 6),
(83, '001700302102014', 113, '0', 2, 6),
(84, '001700302102014', 114, '0', 1, 6),
(85, '001700302102014', 115, '1', 1, 6),
(86, '001700302102014', 116, '0', 1, 6),
(87, '001700302102014', 117, '0', 2, 6),
(88, '001700302102014', 118, '1', 1, 6),
(89, '001700302102014', 119, '0', 2, 6),
(90, '001700302102014', 120, '0', 2, 6),
(91, '001100303102014', 94, '0', 2, 6),
(92, '001100303102014', 95, '1', 2, 6),
(93, '001100303102014', 96, '0', 1, 6),
(94, '001100303102014', 97, '1', 1, 6),
(95, '001100303102014', 98, '0', 4, 6),
(96, '001100303102014', 99, '1', 2, 6),
(97, '001100303102014', 100, '0', 1, 6),
(98, '001100303102014', 101, '1', 1, 6),
(99, '001100303102014', 102, '0', 1, 6),
(100, '001100303102014', 103, '0', 2, 6),
(101, '001100303102014', 104, '0', 1, 6),
(102, '001100303102014', 105, '0', 1, 6),
(103, '001100303102014', 106, '0', 3, 6),
(104, '001100303102014', 107, '0', 2, 6),
(105, '001100303102014', 108, '0', 3, 6),
(106, '001100303102014', 121, '0', 3, 6),
(107, '001100303102014', 123, '1', 1, 6),
(108, '001100303102014', 124, '0', 3, 6),
(109, '001100303102014', 109, '0', 1, 6),
(110, '001100303102014', 110, '1', 1, 6),
(111, '001100303102014', 111, '1', 1, 6),
(112, '001100303102014', 112, '0', 1, 6),
(113, '001100303102014', 113, '0', 2, 6),
(114, '001100303102014', 114, '0', 1, 6),
(115, '001100303102014', 115, '0', 1, 6),
(116, '001100303102014', 116, '0', 1, 6),
(117, '001100303102014', 117, '0', 2, 6),
(118, '001100303102014', 118, '0', 1, 6),
(119, '001100303102014', 119, '0', 2, 6),
(120, '001100303102014', 120, '0', 2, 6),
(151, '002700303102014', 94, '0', 2, 6),
(152, '002700303102014', 95, '0', 2, 6),
(153, '002700303102014', 96, '0', 1, 6),
(154, '002700303102014', 97, '1', 1, 6),
(155, '002700303102014', 98, '1', 4, 6),
(156, '002700303102014', 99, '1', 2, 6),
(157, '002700303102014', 100, 'na', 1, 6),
(158, '002700303102014', 101, 'na', 1, 6),
(159, '002700303102014', 102, 'na', 1, 6),
(160, '002700303102014', 103, '1', 2, 6),
(161, '002700303102014', 104, '1', 1, 6),
(162, '002700303102014', 105, '1', 1, 6),
(163, '002700303102014', 106, '0', 3, 6),
(164, '002700303102014', 107, '1', 2, 6),
(165, '002700303102014', 108, 'na', 3, 6),
(166, '002700303102014', 121, '1', 3, 6),
(167, '002700303102014', 123, '1', 1, 6),
(168, '002700303102014', 124, '0', 3, 6),
(169, '002700303102014', 109, '0', 1, 6),
(170, '002700303102014', 110, '0', 1, 6),
(171, '002700303102014', 111, '0', 1, 6),
(172, '002700303102014', 112, '0', 1, 6),
(173, '002700303102014', 113, '1', 2, 6),
(174, '002700303102014', 114, '1', 1, 6),
(175, '002700303102014', 115, '1', 1, 6),
(176, '002700303102014', 116, '1', 1, 6),
(177, '002700303102014', 117, '0', 2, 6),
(178, '002700303102014', 118, '0', 1, 6),
(179, '002700303102014', 119, '0', 2, 6),
(180, '002700303102014', 120, 'na', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_roles`
--

CREATE TABLE IF NOT EXISTS `bf_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `bf_roles`
--

INSERT INTO `bf_roles` (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES
(1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, '/auditorias', 0, 'content'),
(2, 'Editor', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 0, 'content'),
(4, 'User', 'This is the default user with access to login.', 1, 0, '/auditorias', 0, 'content'),
(6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 1, '', 0, 'content'),
(7, 'Sorpresa', 'Rol para crear un auditoria de cliente secreto', 0, 1, '/auditorias', 0, 'content'),
(8, 'Supervisor', 'Rol para revisar las auditorias cerradas', 0, 0, '/auditorias/ver_cerradas', 0, 'content');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_role_permissions`
--

CREATE TABLE IF NOT EXISTS `bf_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bf_role_permissions`
--

INSERT INTO `bf_role_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 24),
(1, 25),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 49),
(1, 50),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(2, 2),
(2, 3),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_schema_version`
--

CREATE TABLE IF NOT EXISTS `bf_schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bf_schema_version`
--

INSERT INTO `bf_schema_version` (`type`, `version`) VALUES
('auditorias_', 6),
('auditorias_datos_cliente_secreto_', 3),
('auditorias_tipo_', 2),
('categorias_', 3),
('core', 37),
('observaciones_', 2),
('preguntas_', 5),
('preguntas_grupos_', 2),
('preguntas_tipo_', 2),
('respuestas_', 3),
('tiendas_', 3),
('tiendas_grupos_', 2),
('tiendas_tipo_', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_sessions`
--

CREATE TABLE IF NOT EXISTS `bf_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_settings`
--

CREATE TABLE IF NOT EXISTS `bf_settings` (
  `name` varchar(30) NOT NULL,
  `module` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bf_settings`
--

INSERT INTO `bf_settings` (`name`, `module`, `value`) VALUES
('auth.allow_name_change', 'core', '1'),
('auth.allow_register', 'core', '0'),
('auth.allow_remember', 'core', '1'),
('auth.do_login_redirect', 'core', '1'),
('auth.login_type', 'core', 'email'),
('auth.name_change_frequency', 'core', '1'),
('auth.name_change_limit', 'core', '1'),
('auth.password_force_mixed_case', 'core', '0'),
('auth.password_force_numbers', 'core', '0'),
('auth.password_force_symbols', 'core', '0'),
('auth.password_min_length', 'core', '8'),
('auth.password_show_labels', 'core', '0'),
('auth.remember_length', 'core', '1209600'),
('auth.user_activation_method', 'core', '0'),
('auth.use_extended_profile', 'core', '0'),
('auth.use_usernames', 'core', '1'),
('ext.country', 'core', 'US'),
('ext.state', 'core', 'CA'),
('ext.street_name', 'core', ''),
('ext.type', 'core', 'small'),
('form_save', 'core.ui', 'ctrl+s/⌘+s'),
('goto_content', 'core.ui', 'alt+c'),
('mailpath', 'email', '/usr/sbin/sendmail'),
('mailtype', 'email', 'text'),
('password_iterations', 'users', '8'),
('protocol', 'email', 'mail'),
('sender_email', 'email', ''),
('site.languages', 'core', 'a:3:{i:0;s:7:"english";i:1;s:7:"persian";i:2;s:10:"portuguese";}'),
('site.list_limit', 'core', '25'),
('site.show_front_profiler', 'core', '1'),
('site.show_profiler', 'core', '1'),
('site.status', 'core', '1'),
('site.system_email', 'core', 'admin@mybonfire.com'),
('site.title', 'core', 'Auditoria'),
('smtp_host', 'email', ''),
('smtp_pass', 'email', ''),
('smtp_port', 'email', ''),
('smtp_timeout', 'email', ''),
('smtp_user', 'email', ''),
('updates.bleeding_edge', 'core', '0'),
('updates.do_check', 'core', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_states`
--

CREATE TABLE IF NOT EXISTS `bf_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `abbrev` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `bf_states`
--

INSERT INTO `bf_states` (`id`, `name`, `abbrev`) VALUES
(1, 'Alaska', 'AK'),
(2, 'Alabama', 'AL'),
(3, 'American Samoa', 'AS'),
(4, 'Arizona', 'AZ'),
(5, 'Arkansas', 'AR'),
(6, 'California', 'CA'),
(7, 'Colorado', 'CO'),
(8, 'Connecticut', 'CT'),
(9, 'Delaware', 'DE'),
(10, 'District of Columbia', 'DC'),
(11, 'Florida', 'FL'),
(12, 'Georgia', 'GA'),
(13, 'Guam', 'GU'),
(14, 'Hawaii', 'HI'),
(15, 'Idaho', 'ID'),
(16, 'Illinois', 'IL'),
(17, 'Indiana', 'IN'),
(18, 'Iowa', 'IA'),
(19, 'Kansas', 'KS'),
(20, 'Kentucky', 'KY'),
(21, 'Louisiana', 'LA'),
(22, 'Maine', 'ME'),
(23, 'Marshall Islands', 'MH'),
(24, 'Maryland', 'MD'),
(25, 'Massachusetts', 'MA'),
(26, 'Michigan', 'MI'),
(27, 'Minnesota', 'MN'),
(28, 'Mississippi', 'MS'),
(29, 'Missouri', 'MO'),
(30, 'Montana', 'MT'),
(31, 'Nebraska', 'NE'),
(32, 'Nevada', 'NV'),
(33, 'New Hampshire', 'NH'),
(34, 'New Jersey', 'NJ'),
(35, 'New Mexico', 'NM'),
(36, 'New York', 'NY'),
(37, 'North Carolina', 'NC'),
(38, 'North Dakota', 'ND'),
(39, 'Northern Mariana Islands', 'MP'),
(40, 'Ohio', 'OH'),
(41, 'Oklahoma', 'OK'),
(42, 'Oregon', 'OR'),
(43, 'Palau', 'PW'),
(44, 'Pennsylvania', 'PA'),
(45, 'Puerto Rico', 'PR'),
(46, 'Rhode Island', 'RI'),
(47, 'South Carolina', 'SC'),
(48, 'South Dakota', 'SD'),
(49, 'Tennessee', 'TN'),
(50, 'Texas', 'TX'),
(51, 'Utah', 'UT'),
(52, 'Vermont', 'VT'),
(53, 'Virgin Islands', 'VI'),
(54, 'Virginia', 'VA'),
(55, 'Washington', 'WA'),
(56, 'West Virginia', 'WV'),
(57, 'Wisconsin', 'WI'),
(58, 'Wyoming', 'WY'),
(59, 'Armed Forces Africa', 'AE'),
(60, 'Armed Forces Canada', 'AE'),
(61, 'Armed Forces Europe', 'AE'),
(62, 'Armed Forces Middle East', 'AE'),
(63, 'Armed Forces Pacific', 'AP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_tiendas`
--

CREATE TABLE IF NOT EXISTS `bf_tiendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_base` varchar(4) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `cod_grupo_base` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=179 ;

--
-- Volcado de datos para la tabla `bf_tiendas`
--

INSERT INTO `bf_tiendas` (`id`, `cod_base`, `nombre`, `empresa`, `deleted`, `cod_grupo_base`) VALUES
(1, '0001', 'C.C. METROCENTER', 'INVERSIONES FRAGANCE II 1999 C.A. (mtc)', 0, 1),
(2, '0002', 'C.C.GALERIAS PARAISO', 'INVERSIONES FRAGANCE 1999 C.A. (gal)', 0, 1),
(3, '0003', 'C.C. EL VALLE', 'INVERSIONES FRAGANCE 1999 C.A. (val)', 0, 1),
(4, '0004', 'SUPERCENTRO PETARE', 'INVERSIONES FRAGANCE 1999 C.A. (pet)', 0, 1),
(5, '0005', 'C.C. LOCATEL CANDEL', 'INVERSIONES FRAGANCE 1999 C.A. (can)', 0, 1),
(6, '0006', 'CENTRO CENTRUM  S G', 'INVERSIONES FRAGANCE 1999 C.A. (s gde)', 0, 1),
(7, '0007', 'LA URBINA', 'INVERSIONES FRAGANCE  1999, C.A.(urb)', 0, 1),
(8, '0010', 'C.C.C.T I', 'INVERSIONES FRAGANCE II 1999 C.A. (cct)', 0, 1),
(9, '0011', 'C.C. EL RECREO', 'INVERSIONES FRAGANCE 1999 C.A. (rec)', 0, 1),
(10, '0014', 'C.C.C.T. II', 'INVERSIONES FRAGANCE II 1999 C.A. (cct2)', 0, 1),
(11, '0015', 'C.C. SAMBIL', 'INVERSIONES FRAGANCE II 1999 C.A. (sam)', 0, 1),
(12, '0017', 'UNICENTRO EL MARQUES', 'INVERSIONES FRAGANCE 1999 C.A. (unic)', 0, 1),
(13, '0018', 'C.C GALERIAS AVILA', 'INVERSIONES FRAGANCE II 1999 C.A. (Avila', 0, 1),
(14, '0020', 'MULTIPLAZA PARAISO', 'INVERSIONES FRAGANCE II 1999 C.A. (mpar)', 0, 1),
(15, '0021', 'C.C MILLENIUM MALL', 'INVERSIONES FRAGANCE 1999 C.A. (mill)', 0, 1),
(16, '0022', 'C.C LIDO', 'INVERSIONES FRAGANCE II 1999 C.A. (Lido)', 0, 1),
(17, '0023', 'C.C LIDER', 'INVERSIONES FRAGANCE II 1999 C.A. (lider', 0, 1),
(18, '0024', 'Boleita Center', 'INVERSIONES FRAGANCE 1999 C.A. (BOL)', 0, 1),
(19, '0026', 'Plaza el Venezolano', 'INVERSIONES FRAGANCE II 1999, C.A. (PV)', 0, 1),
(20, '0027', 'Chacao', 'INVERSIONES FRAGANCE II 1999, C.A. (Ch)', 0, 1),
(21, '0028', 'PLAZA VENEZUELA', 'INVERSIONES FRAGANCE II 1999, C.A. (PVL)', 0, 1),
(22, '0029', 'C.C. METROCENTER (ki', 'INVERSIONES FRAGANCE II 1999 C.A. (mtck)', 0, 1),
(23, '0100', 'TELARES LOS ANDES', 'INVERSIONES FRAGANCE 1999 C.A. (tel)', 0, 1),
(24, '0102', 'C.C PROPATRIA', 'INVERSIONES FRAGANCE II 1999, C.A. (Pro)', 0, 1),
(25, '0103', 'ATLANTIC LA GUAIRA', 'REPRESENTACIONES LILI 1111,C.A.', 0, 2),
(26, '0110', 'C.C PLAZA MAYOR', 'R Y L SUPPLY C.A.', 0, 3),
(27, '0111', 'C.C REGINA', 'J.L.M SUMINISTROS C.A.', 0, 3),
(28, '0113', 'CRISTOFORO COLOMBO', 'LRB FRAGANCIAS, C.A.', 0, 3),
(29, '0114', 'C.C PLAZA MAYOR 2', 'R Y L SUPPLY C.A. (pza2)', 0, 3),
(30, '0115', 'BARCELONA', 'MIMAR PERFUMES C.A.', 0, 4),
(31, '0116', 'C.C. LA LIBERTAD', 'J.L.M SUMINISTROS C.A. (LIB)', 0, 3),
(32, '0120', 'BOLEVARD CENTRO BA I', 'INVERSIONES JIREH C.A. ', 0, 5),
(33, '0121', 'C.C LAS TRINITARIAS', 'INVERSORA JIREH II C.A. ', 0, 5),
(34, '0122', 'CC METROPOLIS BQTO', 'INVERSIONES JIREH III C.A.  (met)', 0, 5),
(35, '0123', 'TEREPAIMA CABUDARE', 'INVERSIONES JIREH IV, C.A.  ', 0, 5),
(36, '0124', 'C.C. SUPERFERIA', 'INVERSIONES JIREH 77, C.A', 0, 5),
(37, '0135', 'METROPOLIS', 'INVERSIONES FACTORIA 3 C.A. (kiosk)', 0, 6),
(38, '0140', 'C.C EL VIÑEDO', 'INVERSIONES FACTORIA 3 C.A. (v', 0, 6),
(39, '0141', 'PLAZA DE TORO', 'INVERSIONES FACTORIA 3 C.A. (b', 0, 6),
(40, '0142', 'C.COMERCIAL CRISTAL', 'INVERSIONES FACTORIA 3 C.A. (c', 0, 6),
(41, '0143', 'C.C. METROPOLIS', 'INVERSIONES FACTORIA 3 C.A. (m', 0, 6),
(42, '0144', 'CENTRO VALENCIA', 'INVERSIONES FACTORIA 3 C.A. (cen)', 0, 6),
(43, '0145', 'LA FERIA VALENCIA', 'GRUPO DANRA C.A. (FERIAS)', 0, 6),
(44, '0146', 'CAMORUCO VALENCIA', 'INVERSIONES FACTORIA 3, C.A. (CAM)', 0, 6),
(45, '0147', 'PUERTO CABELLO ', 'INVERSIONES FACTORIA 3 C.A. (PC)', 0, 6),
(46, '0148', 'GRAN BAZAR', 'INVERSIONES FACTORIA 3, C.A. (GB)', 0, 6),
(47, '0149', 'CEIBA', 'INVERSIONES FACTORIA 3, C.A. (CEIBA)', 0, 6),
(48, '0150', 'VISTA PLACE', 'PERFUMES DHD C.A.', 0, 7),
(49, '0151', 'CENTRO BARINAS', 'PERFUMES OCCIDENTE I C.A. (cenb)', 0, 8),
(50, '0152', 'MBO CENTRO SUR', 'PERFUMES DAV C.A. (centrosur)', 0, 9),
(51, '0153', 'EDIVICA VALERA', 'PERFUMES OCCIDENTE C.A. (EDIVICA)', 0, 10),
(52, '0154', 'CALABOZO GUARICO', 'PERFUMES DEEY MC 771, C.A', 0, 8),
(53, '0155', 'Cabimas', 'PERFUMES OCCIDENTE C.A. (Cab)', 0, 10),
(54, '0156', 'CENTRO EL VIGIA', 'PERFUMES OCCIDENTAL C.A.', 0, 10),
(55, '0157', 'VALERA CENTRO', 'PERFUMES ANDINOS C.A.', 0, 10),
(56, '0158', 'MERIDA CENTRO', 'PERFUMERIDA C.A.', 0, 10),
(57, '0159', 'VIADUCTO', 'PERFUMERIDA C.A. (viaducto)', 0, 10),
(58, '0160', 'ACARIGUA CENTRO', 'PERFUMES LLANOS CENTRALES, C.A. (ACA)', 0, 11),
(59, '0161', 'SAN ANTONIO(TACHIRA)', 'PERFUMES HDS, C.A. (SA)', 0, 9),
(60, '0162', 'SAN C. CALLE 6', 'PERFUTACHIRA C.A.', 0, 10),
(61, '0163', 'PLAZA LAGO', 'PERFUMES HDS, C.A. (PL)', 0, 9),
(62, '0170', 'CHARALLAVE T.TUY', 'REPRESENTACIONES PESCARA C.A.', 0, 2),
(63, '0171', 'C.C. PASEO TUY', 'REPRESENTACIONES EL  CARMEN 111, C.A', 0, 2),
(64, '0172', 'VIA VENETO SAN JUAN ', 'INVERSIONES BIGISAN, C.A.', 0, 12),
(65, '0173', 'C.C LOS PROCERES', 'REPRESENTACIONES SAN LORENZO 111, C.A.', 0, 13),
(66, '0174', 'SUPERLIDER', 'REPRESENTACIONES PESCARA 1111, C.A.', 0, 2),
(67, '0175', 'OCUMARE DEL TUY', 'REPRESENTACIONES DI GREGORIO 1111, C.A.', 0, 2),
(68, '0176', 'MAIQUETIA', 'REPRESENTACIONES ABRUZZO 11-11 ,C.A.', 0, 2),
(69, '0177', 'SAN JUAN CENTRO', 'INVERSIONES SANBIG, C.A.', 0, 12),
(70, '0180', 'C.C PASEO MIRANDINO', 'PERFUMES D.R.S. C.A. ', 0, 14),
(71, '0181', 'C.C. JJ', 'PERFUMES D.R.S. C.A.  II', 0, 14),
(72, '0182', 'LOS MOLINOS', 'INVERSIONES OXALA, C.A.', 0, 14),
(73, '0190', 'C.C SAN DIEGO', 'INVERSIONES M.R. MARRIER C.A. ', 0, 15),
(74, '0191', 'C.C. CEDEÑO', 'INVERSIONES M.R. MARRIER C.A. (Ce) ', 0, 15),
(75, '0192', 'C.C BOLIVAR P BEJUMA', 'INVERSIONES RAYALEX 2029 C.A.', 0, 15),
(76, '0193', 'GUACARA', 'INVERSIONES M.R. MARRIER C.A. (Gua)', 0, 15),
(77, '0194', 'ALIANZA MALL', 'INVERSIONES M.R. MARRIER C.A. (Am)', 0, 15),
(78, '0200', 'MARACAIBO (SAMBIL)', 'PERFUMES DDH C.A. (s)', 0, 9),
(79, '0201', 'CIMA MARACAIBO', 'PERFUMES HDS, C.A.', 0, 9),
(80, '0202', 'SAN CRISTOBAL 2', 'PERFUMES DDH C.A. (sc2)', 0, 9),
(81, '0203', 'MARACAIBO IV (CHIN)', 'PERFUMES DAV C.A.', 0, 9),
(82, '0204', 'MARACAIBO V (GA II)', 'PERFUMES DAV C.A. (G II)', 0, 9),
(83, '0205', 'CC PLAZA (VALERA)', 'PERFUMES OCCIDENTE C.A. (Val)', 0, 10),
(84, '0206', 'C.C. EL DORADO', 'PERFUMES OCCIDENTE I C.A. (ba)', 0, 8),
(85, '0207', 'C.C. EL REY (MERIDA)', 'PERFUMES OCCIDENTE C.A. (Me)', 0, 10),
(86, '0208', 'SAN CRISTOB (SAMBIL)', 'PERFUMES DDH C.A. (sc)', 0, 9),
(87, '0209', 'GUANARE', 'PERFUMES LLANOS CENTRALES, C.A.', 0, 11),
(88, '0210', 'CC EXPRESS MALL CUM', 'RED DE PROD. DIAMANTE C.A. (c)', 0, 16),
(89, '0211', 'PASAJE MARIÑO S FELI', 'RED DE PROD. DIAMANTE C.A. (s)', 0, 16),
(90, '0212', 'C.C PASAJE GUAYANA', 'RED DE PROD. DIAMANTE C.A. (g)', 0, 16),
(91, '0213', 'C.C ALTAVISTA', 'RED DE ORO, C.A.', 0, 16),
(92, '0214', 'C.C. PETRUCCI', 'RED DE ORO, C.A. (Tig)', 0, 16),
(93, '0215', 'C.C. AMERICA BOLIVAR', 'RED DE PROD. DIAMANTE C.A. (cb2)', 0, 16),
(94, '0216', 'SAN REMO MALL', 'REDOCA 2007, C.A. (SRM)', 0, 16),
(95, '0217', 'C.C CUMANA PLAZA', 'REDOCA 2007, C.A (CU)', 0, 16),
(96, '0218', 'UNIMALL', 'RED DE PROD. DIAMANTE C.A.(UNI)', 0, 16),
(97, '0219', 'ALTA VISTA 2', 'REDOCA 2007, C.A. (AV2)', 0, 16),
(98, '0221', 'Santa Elena ', 'FRAGANCIAS GRAN SABANA , C.A.', 0, 16),
(99, '0222', 'EL TIGRITO', 'RED DE ORO, C.A. (TI)', 0, 16),
(100, '0223', 'MARINA PLAZA', 'RED DE ORO, C.A. (MarP)', 0, 16),
(101, '0251', 'C.C  SAMBIL', 'INVERSIONES FLUMI, C.A.', 0, 17),
(102, '0252', 'C.C SIGO MARGARITA', 'INVERSIONES FLU 3, C.A.', 0, 17),
(103, '0260', 'C.C LA CASCADA', 'INVERSIONES ALDAKA C.A.', 0, 18),
(104, '0261', 'CASCADA MATURIN', 'DAKAL MATURIN, C.A.', 0, 18),
(105, '0262', 'C.C GUATIRE PLAZA', 'REPRESENTACIONES SENSES, C.A.', 0, 19),
(106, '0263', 'C.C. ANACO CENTER', 'INVERSIONES IL PROFUMO C.A.', 0, 20),
(107, '0264', 'CENTRO BARCELONA', 'INVERSIONES IL PROFUMO II, C.A.', 0, 20),
(108, '0265', 'AV 5 DE JULIO', 'INVERSIONES IL PROFUMO III, C.A.', 0, 20),
(109, '0266', 'SISCOMED', 'INVERSIONES IL PROFUMO IV C.A.', 0, 20),
(110, '0270', 'C.C. LLANO MALL', 'INVERSIONES AFIGAL, C.A. (ACA)', 0, 21),
(111, '0271', 'CIMA BARINAS ', 'INVERSIONES AQUIRA C.A. (BAR)', 0, 21),
(112, '0272', 'CC BABYLON BARQ', 'INVERSIONES FIAL, C.A. (Ba)', 0, 21),
(113, '0273', 'C.C. ARCA BAR', 'INVERSIONES FIAL, C.A. (Ar)', 0, 21),
(114, '0274', 'SAMBIL BARQUISIMETO', 'INVERSIONES AFIGAL C.A.', 0, 21),
(115, '0275', 'CARORA', 'INVERSIONES AFIJOR, C.A.', 0, 22),
(116, '0276', 'BUENAVENTURA', 'INVERSIONES AQUIRA C.A. (BUE)', 0, 21),
(117, '0277', 'ARENA PLAZA', 'INVERSIONES FIAL, C.A. ', 0, 21),
(118, '0278', 'C.C. EL RECREO', 'INVERSIONES AQUIRA C.A. (REC)', 0, 21),
(119, '0279', 'BARINAS II', 'INVERSIONES AQUIRA C.A. (BA II)', 0, 21),
(120, '0281', 'PARQUE CARACAS', 'PERFUMES NDR 2000, C.A.', 0, 23),
(121, '0290', 'C.C MONAGAS PLAZA', 'DIAMOND FRAGANCIAS, C.A.', 0, 24),
(122, '0291', 'CENTRO MATURIN', 'EXOTIK FRAGANCIAS C.A.', 0, 24),
(123, '0292', 'SIGO  MATURIN', 'EXOTIK FRAGANCIAS C.A. (S)', 0, 24),
(124, '0293', 'CENTRO MATURIN II', 'MONAGAS FRAGANCIAS, C.A.', 0, 24),
(125, '0300', 'CARUPANO', 'RAIN COMPAÑIA ANONIMA', 0, 25),
(126, '0320', 'TREBOL PTO. ORDAZ 2', 'OLOR FRAGANTE N°.7, C.A.', 0, 26),
(127, '0330', 'C C MULTI VICTORIA', 'INVERSIONES 707305, C.A.', 0, 27),
(128, '0340', 'PLAZA MAYOR MERIDA', 'DISTRIBUIDORA CERMAR C.A.', 0, 28),
(129, '0360', 'TINAQUILLO', 'DISTRIBUIDORA LAURENDOS, C.A.', 0, 29),
(130, '0361', 'SAN CARLOS', 'CORPORACION AROMA''S C.A.', 0, 29),
(131, '0362', 'MORON ', 'CENTRO FRAGANCIAS, C.A.', 0, 29),
(132, '0363', 'GUIGUE VALENCIA', 'CORPORACION LAUCROC, C.A.', 0, 29),
(133, '0370', 'CHACAO', 'INVERSIONES SERV M & M 2009, C.A.', 0, 30),
(134, '0380', 'SAMBIL PARAGUANA', 'PERFUMES CLASS 2009, C.A. (Sam)', 0, 14),
(135, '0381', 'C.C. LAS VIRTUDES', 'PERFUMES CLASS 2009, C.A. (Vir)', 0, 14),
(136, '0382', 'CENTRO PUNTO FIJO', 'PERFUMES CLASS 2009, C.A. (Cen)', 0, 14),
(137, '0383', 'CORO', 'PERFUMES CLASS 2012, C.A.', 0, 14),
(138, '0384', 'CORO II', 'PERFUMES CLASS 2012, C.A. (PS)', 0, 14),
(139, '0390', 'SAN FELIPE', 'CORPORACION WIX, C.A.', 0, 31),
(140, '0391', 'SAN FELIPE', 'CORPORACION WIX, C.A. II', 0, 31),
(141, '0392', 'CHIVACOA', 'CORPORACION WIX, C.A. (chiv)', 0, 31),
(142, '0393', 'NIRGUA', 'CORPORACION WIX, C.A. (nirg)', 0, 31),
(143, '0400', 'C.C. PARQUE ARAGUA ', 'L.T.C. PERFUMES, C.A.', 0, 32),
(144, '0401', 'C.C. GALERIAS PLAZA ', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(145, '0402', 'C.C.PALMA CENTER ', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(146, '0403', 'TURMERO', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(147, '0404', 'VILLA DE CURA', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(148, '0405', 'LAS AMERICAS', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(149, '0406', 'C.C.MORICHAL ', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(150, '0407', 'C.C.HIPERJUMBO', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(151, '0408', 'CAGUA', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(152, '0409', 'LOS AVIADORES', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(153, '0410', 'ALMACEN ', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(154, '0411', 'PALO NEGRO', 'L.T.C. PERFUMES, C.A. ', 0, 32),
(155, '0420', 'SAN FERNANDO DE APUR', 'ZAM, C.A.', 0, 33),
(156, '0421', 'SAN FERNANDO DE APUR', 'ZAM, C.A. (II)', 0, 33),
(157, '0430', 'VALENCIA ', 'CHEIRO, C.A.', 0, 34),
(158, '0440', 'EL VIGIA', 'PERFUMES C.A.', 0, 35),
(159, '0441', 'SANTA BARBARA', 'PERFUMES SUR DEL LAGO C.A.', 0, 35),
(160, '0450', 'MACHIQUES', 'INVERSIONES YAREVE, C.A.', 0, 36),
(161, '0451', 'CONCEPCION ', 'INVERSIONES YAREVE, C.A. ( II )', 0, 36),
(162, '0460', 'PORLAMAR COSTA AZUL', 'PERFUMES PW, C.A.', 0, 37),
(163, '0461', 'CONCORD', 'PERFUMES PW, C.A. II', 0, 37),
(164, '0470', 'AMAZONAS', 'PERFUAMA, C.A.', 0, 38),
(165, '0471', 'CAICARA', 'PERFUAMA, C.A. II', 0, 38),
(166, '0480', 'BARUTA', 'INVERSIONES GUANGZI, C.A.', 0, 39),
(167, '0490', 'GALERIAS PERICO', 'PERFUMES ANGELAN, C.A.', 0, 40),
(168, '0500', 'PLAZA LAS AMERICAS', 'CORPORACION 4HB, C.A.', 0, 41),
(169, '0510', 'SAN CRISTOBAL', 'PERFUMES HUNGRIA C.A.  (sc)', 0, 42),
(170, '0513', 'RUBIO', 'FRAGANCIAS ANDINAS C.A.', 0, 42),
(171, '0514', 'LA GRITA ', 'FRAGANCIAS ANDINAS C.A.  (GRITA)', 0, 42),
(172, '0520', 'VILLA  DEL ROSARIO', 'M Y A INVERSIONES , COMPAÑIA ANONIMA.', 0, 43),
(173, '0530', 'CIUDAD OJEDA', 'CMS FRAGANCIAS, C.A.', 0, 44),
(174, '0531', 'CIUDAD OJEDA II', 'CMS FRAGANCIAS, C.A. (II)', 0, 44),
(175, '0540', 'Centro Plaza', 'INVERSIONES JY 6680, C.A.', 0, 45),
(176, '0550', 'TUCUPITA', 'PERFUMAN - 2T, C.A. ', 0, 46),
(177, '0560', 'CHACAITO', 'REPRESENTACIONES 0913, C.A.', 0, 47),
(178, '0570', 'CARICUAO', 'INVERSIONES JOSALIER 2122, C.A.', 0, 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_tiendas_grupos`
--

CREATE TABLE IF NOT EXISTS `bf_tiendas_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_grupo_base` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `bf_tiendas_grupos`
--

INSERT INTO `bf_tiendas_grupos` (`id`, `cod_grupo_base`, `descripcion`, `deleted`) VALUES
(1, 1, 'Caracas Fragance', 0),
(2, 2, 'Charallave', 0),
(3, 3, 'Pto. La Cruz', 0),
(4, 4, 'Pto. La Cruz II', 0),
(5, 5, 'Barquisimeto I', 0),
(6, 6, 'Valencia I', 0),
(7, 7, 'Vista Place', 0),
(8, 8, 'Barinas / Calabozo', 0),
(9, 9, 'Maracaibo Y San Cristobal', 0),
(10, 10, 'Mérida / Valera', 0),
(11, 11, 'Guanare', 0),
(12, 12, 'San Juan', 0),
(13, 13, 'Caracas Los Próceres', 0),
(14, 14, 'Marilyn', 0),
(15, 15, 'Valencia II', 0),
(16, 16, 'Bolívar', 0),
(17, 17, 'Margarita', 0),
(18, 18, 'Carrizal / Cascada Maturín', 0),
(19, 19, 'Guatire', 0),
(20, 20, 'Anaco', 0),
(21, 21, 'Barquisimeto II', 0),
(22, 22, 'Carora', 0),
(23, 23, 'Caracas Parque Caracas', 0),
(24, 24, 'Maturín', 0),
(25, 25, 'Carúpano', 0),
(26, 26, 'Trébol', 0),
(27, 27, 'Caracas Multiplaza Victoria', 0),
(28, 28, 'Mérida Plaza Mayor', 0),
(29, 29, 'Tinaquillo', 0),
(30, 30, 'Caracas Chacao', 0),
(31, 31, 'San Felipe', 0),
(32, 32, 'Maracay', 0),
(33, 33, 'Apure', 0),
(34, 34, 'Branger', 0),
(35, 35, 'Traki El Vigía', 0),
(36, 36, 'Machiques', 0),
(37, 37, 'Costa Azul', 0),
(38, 38, 'Amazonas', 0),
(39, 39, 'Baruta', 0),
(40, 40, 'Galerias Perico', 0),
(41, 41, 'Plaza Las Américas', 0),
(42, 42, 'San Cristóbal II', 0),
(43, 43, 'Villa del Rosario', 0),
(44, 44, 'Ciudad Ojeda', 0),
(45, 45, 'Caracas Centro Plaza', 0),
(46, 46, 'Tucupita', 0),
(47, 47, 'Chacaito', 0),
(48, 48, 'Caricuao', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_tiendas_tipo`
--

CREATE TABLE IF NOT EXISTS `bf_tiendas_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `bf_tiendas_tipo`
--

INSERT INTO `bf_tiendas_tipo` (`id`, `descripcion`, `deleted`) VALUES
(1, 'Modelo Nuevo', 0),
(2, 'Modelo Inicial', 0),
(3, 'Kiosko', 0),
(4, 'Kiosko de Paso', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_users`
--

CREATE TABLE IF NOT EXISTS `bf_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` char(60) NOT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `reset_by` int(10) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` char(4) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  `password_iterations` int(4) NOT NULL,
  `force_password_reset` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `bf_users`
--

INSERT INTO `bf_users` (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `last_login`, `last_ip`, `created_on`, `deleted`, `reset_by`, `banned`, `ban_message`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`, `password_iterations`, `force_password_reset`) VALUES
(1, 1, 'admin@mybonfire.com', 'admin', '$2a$08$XBW/3rcFutKv0kSvFkdGiuVJ1YtofXE4PdXAZ6PD887kvPCyCgelq', NULL, '2014-10-06 09:23:42', '::1', '2014-08-21 18:25:10', 0, NULL, 0, NULL, 'admin', NULL, 'UM45', 'english', 1, '', 0, 0),
(2, 4, 'mgil@perfumesfactory.com', 'miguel', '$2a$08$o17l9JTcIjesecS6hmEHk.RNx7xL5Zft8T.vXwsug4RYgzVpTC0Ju', NULL, '2014-09-11 21:39:25', '::1', '2014-09-11 21:31:23', 0, NULL, 0, NULL, 'Miguel', NULL, 'UM45', 'english', 1, '', 8, 0),
(3, 7, 'secreto@perfumesfactory.com', 'secreto', '$2a$08$D9M7wxmMjMhYpmSEn4E3XOwQfXi2lDx31HbMq0WGdH5pTMEdQLXYC', NULL, '2014-10-06 14:43:29', '::1', '2014-09-22 17:18:09', 0, NULL, 0, NULL, 'secreto', NULL, 'UM45', 'english', 1, '', 8, 0),
(4, 8, 'supervisor@perfumesfactory.com', 'supervisor', '$2a$08$rGDM.t2AlYeB89eL1QXCDeHYNoUrxenKnkB7C6...X93jGJ8QNKGS', NULL, '2014-10-03 09:39:20', '192.168.0.153', '2014-10-02 12:09:49', 0, NULL, 0, NULL, 'supervisor', NULL, 'UM45', 'english', 1, '', 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_user_cookies`
--

CREATE TABLE IF NOT EXISTS `bf_user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bf_user_meta`
--

CREATE TABLE IF NOT EXISTS `bf_user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `bf_user_meta`
--

INSERT INTO `bf_user_meta` (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'street_name', ''),
(2, 1, 'state', 'SC'),
(3, 1, 'country', 'US'),
(4, 1, 'type', 'small'),
(5, 2, 'street_name', ''),
(6, 2, 'state', 'SC'),
(7, 2, 'country', 'US'),
(8, 2, 'type', 'small'),
(9, 3, 'street_name', ''),
(10, 3, 'state', 'SC'),
(11, 3, 'country', 'US'),
(12, 3, 'type', 'small'),
(13, 4, 'street_name', ''),
(14, 4, 'state', 'SC'),
(15, 4, 'country', 'US'),
(16, 4, 'type', 'small');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
