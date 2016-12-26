-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Set 03, 2012 as 10:03 PM
-- Versão do Servidor: 5.0.51
-- Versão do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `itacolomy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `txtlogin` varchar(32) NOT NULL,
  `txtsenha` varchar(32) NOT NULL,
  `txtemail` varchar(64) NOT NULL,
  PRIMARY KEY  (`txtlogin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_acessos`
--

CREATE TABLE IF NOT EXISTS `admin_acessos` (
  `idacesso` int(11) NOT NULL auto_increment,
  `txtlogin` varchar(32) NOT NULL,
  `txtip` varchar(128) NOT NULL,
  `biterro` bit(1) NOT NULL,
  `dtcadastro` datetime NOT NULL,
  PRIMARY KEY  (`idacesso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `admin_acessos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `idvisita` int(11) NOT NULL auto_increment,
  `dtdata` date NOT NULL,
  `dthora` time NOT NULL,
  `txtip` varchar(128) NOT NULL,
  `txtstring` varchar(256) NOT NULL,
  `txtbrowser` varchar(128) NOT NULL,
  `txtsistema` varchar(128) NOT NULL,
  `txtcookie` varchar(32) NOT NULL,
  PRIMARY KEY  (`idvisita`),
  UNIQUE KEY `uq_dtdata_txtip` (`dtdata`,`txtip`),
  UNIQUE KEY `uq_dtdata_txtcookie` (`dtdata`,`txtcookie`)
)