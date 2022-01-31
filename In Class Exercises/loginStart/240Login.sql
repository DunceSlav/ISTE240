-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 10:11 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.29


CREATE TABLE `240Login` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `uname` varchar(15) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

