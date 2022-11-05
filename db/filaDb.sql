-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 19-12-05 04:06
-- 서버 버전: 10.1.21-MariaDB
-- PHP 버전: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `db3`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `color`
--

CREATE TABLE `color` (
  `ccno` int(11) NOT NULL,
  `ccname` varchar(50) NOT NULL,
  `ccnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `color`
--

INSERT INTO `color` (`ccno`, `ccname`, `ccnum`) VALUES
(0, '레드', 10),
(0, '옐로우', 2),
(0, '블루', 8),
(0, '그린', 8);

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `userpw` varchar(50) NOT NULL,
  `userphone` varchar(40) NOT NULL,
  `useremail` varchar(60) NOT NULL,
  `post` int(11) NOT NULL,
  `addr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `qnaboard`
--

CREATE TABLE `qnaboard` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpw` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `mdate` datetime NOT NULL,
  `view` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `qnaboard`
--
ALTER TABLE `qnaboard`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- 테이블의 AUTO_INCREMENT `qnaboard`
--
ALTER TABLE `qnaboard`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
