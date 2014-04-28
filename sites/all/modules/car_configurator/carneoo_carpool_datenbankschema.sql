/*!40100 SET CHARACTER SET latin1;*/


#
# Table structure for table 'con_fzg_group'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `con_fzg_group` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `fzg_id` int(12) unsigned DEFAULT '0',
  `group_id` int(12) unsigned DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'con_user_group'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `con_user_group` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(12) unsigned DEFAULT '0',
  `group_id` int(12) unsigned DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



#
# Table structure for table 'config_global'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `config_global` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `config_key` text,
  `config_value` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;



#
# Table structure for table 'connect'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `connect` (
  `open` int(3) unsigned DEFAULT '0',
  `id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `close` int(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



#
# Table structure for table 'email'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



#
# Table structure for table 'lst_car_fzgart'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `lst_car_fzgart` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` char(50) DEFAULT NULL,
  `id_order` int(10) unsigned DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'lst_car_getriebe'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `lst_car_getriebe` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` char(50) DEFAULT NULL,
  `id_order` int(10) unsigned DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'lst_car_kategorie'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `lst_car_kategorie` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` char(50) DEFAULT NULL,
  `id_order` int(10) unsigned DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'lst_car_lieferant'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `lst_car_lieferant` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` char(50) DEFAULT NULL,
  `id_order` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'lst_car_standort'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `lst_car_standort` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` char(50) DEFAULT NULL,
  `id_order` int(10) unsigned DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'lst_car_treibstoff'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `lst_car_treibstoff` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` char(50) DEFAULT NULL,
  `id_order` int(10) unsigned DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'lst_picture'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `lst_picture` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `hersteller` varchar(30) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'mail_stat'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `mail_stat` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `typ` smallint(5) unsigned DEFAULT NULL,
  `absender` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `zeit` int(12) unsigned DEFAULT NULL,
  `message` text,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'newsletter'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text,
  `newsletter` text,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



#
# Table structure for table 'statistic'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `statistic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(150) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `hersteller` varchar(200) DEFAULT NULL,
  `typ` varchar(200) DEFAULT NULL,
  `configstep` int(3) unsigned DEFAULT NULL,
  `submit` int(2) unsigned DEFAULT '0',
  `refer` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



#
# Table structure for table 'statistic_all'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `statistic_all` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(150) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `hersteller` varchar(200) DEFAULT NULL,
  `typ` varchar(200) DEFAULT NULL,
  `configstep` int(3) unsigned DEFAULT NULL,
  `submit` int(2) unsigned DEFAULT '0',
  `domain` varchar(150) DEFAULT NULL,
  `refer` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



#
# Table structure for table 'xc_access'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_access` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(80) DEFAULT NULL,
  `task` char(80) DEFAULT NULL,
  `place` char(80) DEFAULT NULL,
  `login` char(20) DEFAULT NULL,
  `passwd` char(20) DEFAULT NULL,
  `usergroup` char(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_car_equip'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_car_equip` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `equip_id` int(10) unsigned DEFAULT '0',
  `car_id` int(10) unsigned DEFAULT '0',
  `status` char(1) DEFAULT NULL,
  `description` char(255) DEFAULT NULL,
  `code` char(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7934 DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_car_extended'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_car_extended` (
  `id` int(12) unsigned DEFAULT NULL,
  `kfz_brief` varchar(200) DEFAULT NULL,
  `zweitschluessel` varchar(50) DEFAULT NULL,
  `stellplatz` varchar(50) DEFAULT NULL,
  `radiocode` char(50) DEFAULT NULL,
  `schluessel` varchar(50) DEFAULT NULL,
  `last_insp_date` int(12) unsigned DEFAULT '0',
  `last_insp_km` int(12) unsigned DEFAULT '0',
  `next_insp_date` int(12) unsigned DEFAULT '0',
  `next_insp_km` int(12) unsigned DEFAULT '0',
  `last_oil_date` int(12) unsigned DEFAULT '0',
  `last_oil_km` int(12) unsigned DEFAULT '0',
  `next_oil_date` int(12) unsigned DEFAULT '0',
  `next_oil_km` int(12) unsigned DEFAULT '0',
  `last_hu_date` int(12) unsigned DEFAULT '0',
  `last_hu_km` int(12) unsigned DEFAULT '0',
  `next_hu_date` int(12) unsigned DEFAULT '0',
  `next_hu_km` int(12) unsigned DEFAULT '0',
  `last_au_date` int(12) unsigned DEFAULT '0',
  `last_au_km` int(12) unsigned DEFAULT '0',
  `next_au_date` int(12) unsigned DEFAULT '0',
  `next_au_km` int(12) unsigned DEFAULT '0',
  `ek_person` text,
  `ek_date` int(12) unsigned DEFAULT NULL,
  `bemerkung` text,
  `vorschaden` text,
  `ek_bank` varchar(100) DEFAULT NULL,
  `ek_betrag` float(10,2) DEFAULT '0.00',
  `bezahlt` tinyint(1) unsigned DEFAULT '0',
  `gereinigt` tinyint(1) unsigned DEFAULT '0',
  `werkstatt` tinyint(1) unsigned DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_car_image'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_car_image` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `id_fzg` int(12) unsigned DEFAULT NULL,
  `image` char(100) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1262 DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_car_list'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_car_list` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `id_modell` int(8) unsigned DEFAULT '0',
  `id_fzg` varchar(25) DEFAULT NULL,
  `hersteller` varchar(50) DEFAULT NULL,
  `typ` varchar(50) DEFAULT NULL,
  `modell` varchar(50) DEFAULT NULL,
  `www` tinyint(3) unsigned DEFAULT '0',
  `id_fzgart` tinyint(3) unsigned DEFAULT '0',
  `id_standort` tinyint(3) unsigned DEFAULT '0',
  `farbe` varchar(50) DEFAULT NULL,
  `fahrgestellnr` varchar(50) DEFAULT NULL,
  `vorschaden` varchar(255) DEFAULT NULL,
  `erstzulassung` varchar(10) DEFAULT NULL,
  `km` int(12) unsigned DEFAULT '0',
  `hubraum` varchar(5) DEFAULT NULL,
  `kw` varchar(5) DEFAULT NULL,
  `ps` varchar(5) DEFAULT NULL,
  `id_getriebe` tinyint(3) unsigned DEFAULT '0',
  `id_treibstoff` tinyint(3) unsigned DEFAULT '0',
  `innenraum` varchar(255) DEFAULT NULL,
  `vorbesitzer` varchar(5) DEFAULT NULL,
  `tueren` varchar(5) DEFAULT NULL,
  `hu` varchar(10) DEFAULT NULL,
  `preconfig` text,
  `preconfig_name` text,
  `au` varchar(10) DEFAULT NULL,
  `id_kategorie` smallint(3) unsigned DEFAULT '0',
  `preis_ek` varchar(8) DEFAULT '0',
  `preis_hk` varchar(8) DEFAULT '0',
  `preis_vk` varchar(8) DEFAULT '0',
  `preis_lk` varchar(8) DEFAULT '0',
  `mwst` smallint(1) unsigned DEFAULT '1',
  `bemerkung` mediumtext,
  `modified` int(12) unsigned DEFAULT NULL,
  `id_import` varchar(10) DEFAULT NULL,
  `nodes` varchar(255) DEFAULT NULL,
  `anzahl` int(10) unsigned DEFAULT '1',
  `motor` varchar(50) DEFAULT NULL,
  `ausstattung` varchar(50) DEFAULT NULL,
  `maximum` mediumint(8) unsigned DEFAULT '1',
  `minimum` mediumint(8) unsigned DEFAULT '1',
  `config` tinyint(3) unsigned DEFAULT NULL,
  `co2` varchar(20) DEFAULT NULL,
  `co2_max` varchar(10) DEFAULT NULL,
  `verbrauch_i` varchar(10) DEFAULT NULL,
  `verbrauch_i_max` varchar(10) DEFAULT NULL,
  `verbrauch_a` varchar(10) DEFAULT NULL,
  `verbrauch_a_max` varchar(10) DEFAULT NULL,
  `verbrauch_k` varchar(10) DEFAULT NULL,
  `verbrauch_k_max` varchar(10) DEFAULT NULL,
  `verkauft` tinyint(3) unsigned DEFAULT '0',
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_host` varchar(50) DEFAULT NULL,
  `transport` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id_lieferant` tinyint(3) unsigned DEFAULT '0',
  `comment` text,
  `tageszulassung` tinyint(1) unsigned DEFAULT '0',
  `schadstoffklasse` char(1) DEFAULT NULL,
  `ueberfuehrung` int(4) unsigned DEFAULT '0',
  `transmissions` text,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1118 DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_car_options'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_car_options` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `equip_id` int(10) unsigned DEFAULT '0',
  `car_id` int(10) unsigned DEFAULT '0',
  `status` char(1) DEFAULT NULL,
  `description` char(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_car_struct'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_car_struct` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `hersteller` char(20) DEFAULT NULL,
  `herstellnr` smallint(5) unsigned DEFAULT NULL,
  `herstellnr2` smallint(5) unsigned DEFAULT NULL,
  `typ` char(50) DEFAULT NULL,
  `tueren` smallint(3) unsigned DEFAULT NULL,
  `fzgart` char(30) DEFAULT NULL,
  `fzgartnr` smallint(5) unsigned DEFAULT NULL,
  `bild` char(30) DEFAULT NULL,
  `modified` int(12) unsigned DEFAULT NULL,
  `lastuser` char(50) DEFAULT NULL,
  `locked` tinyint(1) unsigned DEFAULT '0',
  `passwd` char(20) DEFAULT NULL,
  `lastsystem` char(50) DEFAULT NULL,
  `rabatt` float(3,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_car_task'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_car_task` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `car_id` int(12) unsigned DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` text,
  `state` tinyint(3) DEFAULT '0',
  `progress` int(100) unsigned DEFAULT '0',
  `completed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date` int(12) unsigned NOT NULL DEFAULT '0',
  `created` int(12) unsigned NOT NULL DEFAULT '0',
  `owner` varchar(50) DEFAULT 'unbekannt',
  `modified` int(12) unsigned DEFAULT '0',
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_enduser_cars'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_enduser_cars` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `enduser_id` int(7) unsigned DEFAULT NULL,
  `config_id` text COLLATE latin1_general_ci,
  `hersteller` varchar(24) COLLATE latin1_general_ci DEFAULT '0',
  `typ` varchar(64) COLLATE latin1_general_ci DEFAULT '0',
  `config` tinytext COLLATE latin1_general_ci,
  `configtext` text COLLATE latin1_general_ci,
  `image` text COLLATE latin1_general_ci,
  `carid` int(10) unsigned DEFAULT NULL,
  `date` int(7) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



#
# Table structure for table 'xc_enduser_information'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_enduser_information` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `enduser_id` int(7) unsigned DEFAULT '0',
  `name` tinytext COLLATE latin1_general_ci,
  `ip` varchar(16) COLLATE latin1_general_ci DEFAULT NULL,
  `date` int(7) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



#
# Table structure for table 'xc_equ_code'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_equ_code` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `equip_id` int(12) unsigned DEFAULT NULL,
  `modell_id` int(12) unsigned DEFAULT NULL,
  `code` char(10) DEFAULT NULL,
  `typ` char(30) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_equ_items'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_equ_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modell_id` int(10) unsigned NOT NULL DEFAULT '0',
  `bezeichnung` text,
  `code` varchar(20) DEFAULT NULL,
  `preis` varchar(10) DEFAULT '0',
  `hk_preis` varchar(10) DEFAULT '0',
  `vk_preis` varchar(10) DEFAULT '0',
  `lk_preis` varchar(10) DEFAULT '0',
  `exclude_code` text,
  `include_code` text,
  `hk_proz` varchar(10) DEFAULT '0',
  `vk_proz` varchar(10) DEFAULT '0',
  `group_id` smallint(5) unsigned DEFAULT NULL,
  `group_pos` smallint(5) unsigned DEFAULT NULL,
  `rabatt` tinyint(3) unsigned DEFAULT '1',
  `web` tinyint(3) unsigned DEFAULT '0',
  `state` tinyint(3) unsigned DEFAULT '0',
  `sortid` int(4) unsigned DEFAULT NULL,
  `todelete` int(5) unsigned DEFAULT '0',
  `description` text,
  `opt_calc` tinyint(3) unsigned DEFAULT NULL,
  `modified` int(12) unsigned DEFAULT '0',
  `ca_price` tinyint(3) DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_host` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_equ_pgroup'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_equ_pgroup` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `id_equip` int(12) DEFAULT NULL,
  `caption` char(15) DEFAULT NULL,
  `price_ek` char(10) DEFAULT '0',
  `price_hk` char(10) DEFAULT '0',
  `price_vk` char(10) DEFAULT '0',
  `price_lk` char(10) DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_equ_state'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_equ_state` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modell_id` int(10) unsigned DEFAULT NULL,
  `id_ausstattung` int(10) unsigned DEFAULT NULL,
  `untertyp` char(50) DEFAULT NULL,
  `status` char(1) DEFAULT '-',
  `pgroup` int(12) unsigned DEFAULT NULL,
  `todelete` int(5) unsigned DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_equ_subitems'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_equ_subitems` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` text,
  `modell_id` int(10) unsigned DEFAULT NULL,
  `parent_id` int(12) unsigned DEFAULT '0',
  `typ_id` tinyint(4) DEFAULT '0',
  `node_id` text,
  `showstate` tinyint(3) unsigned DEFAULT '0',
  `atyp_name` varchar(30) DEFAULT NULL,
  `atyp_state` varchar(30) DEFAULT NULL,
  `price_ek` varchar(10) DEFAULT '0',
  `price_hk` varchar(10) DEFAULT '0',
  `price_vk` varchar(10) DEFAULT '0',
  `price_lk` varchar(10) DEFAULT '0',
  `todelete` int(5) unsigned DEFAULT NULL,
  `orderid` smallint(5) unsigned DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_access'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_access` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(80) DEFAULT NULL,
  `contact` varchar(80) DEFAULT NULL,
  `mail` varchar(80) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `passwd` varchar(20) DEFAULT NULL,
  `anmerkung` longtext,
  `active` tinyint(3) unsigned DEFAULT NULL,
  `last_access` int(12) unsigned DEFAULT '0',
  `deleted` tinyint(1) unsigned DEFAULT '0',
  `modified` int(10) unsigned DEFAULT NULL,
  `validtill` int(12) unsigned DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_access_group'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_access_group` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(100) DEFAULT NULL,
  `description` text,
  `usertype` tinyint(2) unsigned DEFAULT '0',
  `order_stop` tinyint(3) unsigned DEFAULT '0',
  `access_denied` tinyint(1) unsigned DEFAULT '0',
  `show_sort` tinyint(1) unsigned DEFAULT '0',
  `vk_percent` varchar(10) DEFAULT '0',
  `hk_percent` varchar(10) DEFAULT '0',
  `def_cost` varchar(10) DEFAULT '0',
  `skonto` varchar(10) DEFAULT '0',
  `system` tinyint(1) unsigned DEFAULT '0',
  `default_add` tinyint(1) unsigned DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_access_log'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_access_log` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `access_id` int(12) unsigned DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `logtext` text,
  `zeit` varchar(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_conf_log'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_conf_log` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `hersteller` char(20) DEFAULT NULL,
  `modell` char(20) DEFAULT NULL,
  `modellversion` char(20) DEFAULT NULL,
  `used_nodes` char(100) DEFAULT NULL,
  `used_equip` char(100) DEFAULT NULL,
  `datum` char(10) DEFAULT NULL,
  `benutzer` char(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_fax_b'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_fax_b` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `number` char(30) DEFAULT NULL,
  `selection` char(255) DEFAULT NULL,
  `search` char(30) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_fax_w'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_fax_w` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `number` char(30) DEFAULT NULL,
  `selection` char(255) DEFAULT NULL,
  `search` char(30) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_fzgconf'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_fzgconf` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(20) DEFAULT NULL,
  `modell_id` int(10) unsigned DEFAULT '0',
  `bezeichnung` text,
  `price` varchar(10) DEFAULT '0',
  `image` varchar(100) DEFAULT NULL,
  `ausstattung` varchar(50) DEFAULT NULL,
  `web` tinyint(3) unsigned DEFAULT '1',
  `OrderID` varchar(20) DEFAULT NULL,
  `todelete` int(5) unsigned DEFAULT '0',
  `HK_price` varchar(10) DEFAULT '0',
  `VK_price` varchar(10) DEFAULT '0',
  `LK_price` varchar(10) DEFAULT '0',
  `HK_prozent` varchar(10) DEFAULT '0',
  `VK_prozent` varchar(10) DEFAULT '0',
  `LK_vorfracht` varchar(10) DEFAULT '0',
  `listenbezug` varchar(50) DEFAULT NULL,
  `bemerkung` text,
  `kw` varchar(4) DEFAULT NULL,
  `ps` varchar(4) DEFAULT NULL,
  `extension` text,
  `verbrauch_i` decimal(3,1) DEFAULT NULL,
  `verbrauch_i_max` decimal(3,1) DEFAULT NULL,
  `verbrauch_a` decimal(3,1) DEFAULT NULL,
  `verbrauch_a_max` decimal(3,1) DEFAULT NULL,
  `verbrauch_k` decimal(3,1) DEFAULT NULL,
  `verbrauch_k_max` decimal(3,1) DEFAULT NULL,
  `co2` smallint(5) unsigned DEFAULT NULL,
  `co2_max` smallint(5) unsigned DEFAULT NULL,
  `HSN` varchar(24) DEFAULT NULL,
  `TSN` varchar(24) DEFAULT NULL,
  `schwackecode` varchar(64) DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL,
  `color2` varchar(7) DEFAULT NULL,
  `modified` int(10) unsigned DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_host` varchar(50) DEFAULT NULL,
  `InternalComment` text,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_fzgdescr'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_fzgdescr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `modell_id` int(10) unsigned DEFAULT NULL,
  `step` int(3) unsigned DEFAULT NULL,
  `titel` char(100) DEFAULT NULL,
  `beschreibung` char(255) DEFAULT NULL,
  `bild` char(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_fzgorder'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_fzgorder` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `modell_id` int(12) unsigned DEFAULT NULL,
  `bezeichnung` char(50) DEFAULT NULL,
  `prio` smallint(3) unsigned DEFAULT '0',
  `lieferzeit` char(30) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_lexicar'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_lexicar` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `lexiid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_mail'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_mail` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL DEFAULT '',
  `body` text,
  `embedded` varchar(255) DEFAULT NULL,
  `attached` varchar(255) DEFAULT NULL,
  `state` tinyint(3) DEFAULT '-1',
  `email_from` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `attached2` varchar(255) DEFAULT NULL,
  `attached3` varchar(255) DEFAULT NULL,
  `attached4` varchar(255) DEFAULT NULL,
  `attached5` varchar(255) DEFAULT NULL,
  `prio` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_mail_b'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_mail_b` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `number` char(50) DEFAULT NULL,
  `selection` char(255) DEFAULT NULL,
  `search` char(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_mail_w'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_mail_w` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `number` char(50) DEFAULT NULL,
  `selection` char(255) DEFAULT NULL,
  `search` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`search`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_offers'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_offers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_key` varchar(50) NOT NULL DEFAULT '',
  `id_fzg` int(8) unsigned NOT NULL DEFAULT '0',
  `order_type` tinyint(1) unsigned DEFAULT '0',
  `id_user` int(12) unsigned DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `strasse` varchar(100) DEFAULT NULL,
  `strasse2` varchar(100) DEFAULT NULL,
  `plz` varchar(10) DEFAULT NULL,
  `ort` varchar(100) DEFAULT NULL,
  `bundesland` varchar(30) DEFAULT NULL,
  `land` varchar(30) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `bemerkung` text,
  `kommentar` text,
  `status` smallint(5) unsigned DEFAULT '0',
  `verantwortung` varchar(50) DEFAULT NULL,
  `cookie_items` text,
  `cookie_price` text,
  `message` text,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_special'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_special` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `special_id` varchar(10) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `description` text,
  `pre` varchar(10) DEFAULT NULL,
  `preis` varchar(10) DEFAULT '0',
  `preis_hk` varchar(10) DEFAULT '0',
  `preis_vk` varchar(10) DEFAULT '0',
  `background` varchar(50) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '0',
  `visible` tinyint(1) unsigned DEFAULT '1',
  `maximum` mediumint(8) unsigned DEFAULT NULL,
  `minimum` mediumint(8) unsigned DEFAULT '1',
  `optimum` smallint(5) unsigned DEFAULT '1',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_mod_stats'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_mod_stats` (
  `Id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `year` smallint(4) unsigned DEFAULT NULL,
  `month` tinyint(2) unsigned DEFAULT NULL,
  `day` tinyint(2) unsigned DEFAULT NULL,
  `weekday` char(3) DEFAULT NULL,
  `client` varchar(15) DEFAULT NULL,
  `modell` int(11) DEFAULT NULL,
  `node1` int(12) DEFAULT NULL,
  `node2` int(11) DEFAULT NULL,
  `node3` int(11) DEFAULT NULL,
  `node4` int(11) DEFAULT NULL,
  `node5` int(11) DEFAULT NULL,
  `equip` text,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_model_changes'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_model_changes` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `cfg_key` varchar(150) DEFAULT NULL,
  `cfg_value` text,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_rabatt'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_rabatt` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `modell_id` int(10) unsigned DEFAULT NULL,
  `bezeichnung` varchar(255) DEFAULT NULL,
  `group_1_fix` text,
  `group_1_prozent` text,
  `group_10_fix` text,
  `group_10_prozent` text,
  `group_13_fix` text,
  `group_13_prozent` text,
  `group_3_fix` text,
  `group_3_prozent` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_rules'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_rules` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `modell_id` int(12) unsigned DEFAULT '0',
  `caption` char(255) DEFAULT '0',
  `base` char(2) DEFAULT NULL,
  `currency` char(3) DEFAULT '€',
  `net` tinyint(1) DEFAULT '1',
  `used` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_rules_items'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_rules_items` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `rules_id` int(12) unsigned NOT NULL DEFAULT '0',
  `modell_id` int(12) unsigned DEFAULT '0',
  `caption` char(255) DEFAULT NULL,
  `mode` char(10) DEFAULT 'ek|n',
  `output` char(10) DEFAULT NULL,
  `amout` float(10,2) DEFAULT '0.00',
  `follow` tinyint(1) unsigned DEFAULT '1',
  `base100` tinyint(1) unsigned DEFAULT '0',
  `state` char(1) DEFAULT '%',
  `valid` char(1) DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_key` char(50) DEFAULT NULL,
  `last_access` int(12) unsigned DEFAULT NULL,
  `user_ip` char(15) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_advertising'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_advertising` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(12) unsigned DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `modell_id` int(10) unsigned DEFAULT NULL,
  `base` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `node_id` text NOT NULL,
  `datefrom` int(12) unsigned NOT NULL DEFAULT '0',
  `dateto` int(12) unsigned NOT NULL DEFAULT '0',
  `atyp_name` varchar(50) DEFAULT NULL,
  `atyp_state` char(1) NOT NULL DEFAULT '',
  `price` float(6,2) NOT NULL DEFAULT '0.00',
  `percent` float(3,2) NOT NULL DEFAULT '0.00',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_config'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_config` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(12) unsigned DEFAULT NULL,
  `cfg_key` varchar(150) DEFAULT NULL,
  `cfg_value` text,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_data'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_data` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `webid` varchar(60) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `anrede` varchar(10) DEFAULT NULL,
  `vorname` varchar(75) DEFAULT NULL,
  `nachname` varchar(75) DEFAULT NULL,
  `adresse1` varchar(255) DEFAULT NULL,
  `adresse2` varchar(255) DEFAULT NULL,
  `plz` varchar(5) DEFAULT NULL,
  `ort` varchar(75) DEFAULT NULL,
  `bundesland` varchar(25) DEFAULT NULL,
  `land` varchar(25) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `mobil` varchar(50) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `internet` varchar(255) DEFAULT NULL,
  `ustid` varchar(50) DEFAULT NULL,
  `betreuer` varchar(50) DEFAULT NULL,
  `funktion` varchar(75) DEFAULT NULL,
  `kdnr` varchar(20) DEFAULT NULL,
  `kdtyp` varchar(50) DEFAULT NULL,
  `kontakt` varchar(100) DEFAULT NULL,
  `IsPrivat` tinyint(1) unsigned DEFAULT '0',
  `IsDeleted` tinyint(1) unsigned DEFAULT '0',
  `modified` int(12) unsigned NOT NULL DEFAULT '0',
  `steuer` varchar(50) DEFAULT NULL,
  `geburtstag` int(12) unsigned DEFAULT NULL,
  `posturl` varchar(512) DEFAULT NULL,
  `marken` text,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_data_log'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_data_log` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `datum` char(30) DEFAULT NULL,
  `bezeichnung` char(100) DEFAULT NULL,
  `verweis` char(255) DEFAULT NULL,
  `bearbeiter` char(50) DEFAULT NULL,
  `typ` char(10) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_images'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cfg_key` text,
  `big_img` text,
  `smal_img` text,
  `big_h` int(11) DEFAULT NULL,
  `big_w` int(11) DEFAULT NULL,
  `smal_h` int(11) DEFAULT NULL,
  `smal_w` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_leads'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_leads` (
  `id` bigint(3) NOT NULL AUTO_INCREMENT,
  `webid` varchar(60) DEFAULT NULL,
  `timestamp` int(10) DEFAULT '0',
  `leadtype` tinyint(3) unsigned DEFAULT '0',
  `hersteller` varchar(64) DEFAULT NULL,
  `typ` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_leads_progress'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_leads_progress` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `webid` varchar(60) DEFAULT NULL,
  `period` varchar(8) DEFAULT NULL,
  `progress` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_plz'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_plz` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ort` char(100) DEFAULT NULL,
  `zusatz` char(100) DEFAULT NULL,
  `plz` char(10) DEFAULT NULL,
  `vorwahl` char(10) DEFAULT NULL,
  `bundesland` char(30) DEFAULT NULL,
  `coc` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_saved'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_saved` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `modell_id` int(12) DEFAULT NULL,
  `car` varchar(255) DEFAULT NULL,
  `addon` text,
  `price_ek` float(10,2) DEFAULT '0.00',
  `price_hk` float(10,2) DEFAULT '0.00',
  `price_vk` float(10,2) DEFAULT '0.00',
  `price_lk` float(10,2) DEFAULT '0.00',
  `link` text,
  `created` int(12) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



#
# Table structure for table 'xc_user_updates'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_updates` (
  `id` int(10) unsigned DEFAULT NULL,
  `readstatus` int(1) unsigned DEFAULT NULL,
  `typstatus` int(1) unsigned DEFAULT NULL,
  `visible` int(1) unsigned DEFAULT NULL,
  `modified` varchar(10) DEFAULT NULL,
  `memo` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



#
# Table structure for table 'xc_user_vertrag'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `xc_user_vertrag` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(12) unsigned NOT NULL DEFAULT '0',
  `RechNr` varchar(20) DEFAULT NULL,
  `RechDatum` int(12) unsigned DEFAULT '0',
  `Vertragsart` varchar(50) DEFAULT NULL,
  `Hersteller` varchar(50) DEFAULT NULL,
  `Modell` varchar(50) DEFAULT NULL,
  `FzgText` varchar(50) NOT NULL DEFAULT '',
  `Lieferzeit` varchar(20) DEFAULT NULL,
  `Farbe` varchar(100) DEFAULT NULL,
  `EZ` varchar(20) DEFAULT NULL,
  `FzgGestell` varchar(100) DEFAULT NULL,
  `kmStand` varchar(20) DEFAULT NULL,
  `EZltBrief` varchar(20) DEFAULT NULL,
  `Kennzeichen` varchar(20) DEFAULT NULL,
  `Ausstattung` text,
  `IsVornutzung` tinyint(1) unsigned DEFAULT '0',
  `IsFahrbereit` tinyint(1) unsigned DEFAULT '0',
  `VerpflErkl` int(12) unsigned DEFAULT '0',
  `FzgSchKopie` int(12) unsigned DEFAULT '0',
  `ServiceHeft` int(12) unsigned DEFAULT '0',
  `EK` varchar(50) DEFAULT NULL,
  `LW` varchar(50) DEFAULT NULL,
  `Verkaeufer` varchar(30) DEFAULT NULL,
  `EndKdAnrede` varchar(30) DEFAULT NULL,
  `EndKdName` varchar(100) DEFAULT NULL,
  `EndKdStrasse` varchar(100) DEFAULT NULL,
  `EndKdPLZ` varchar(10) DEFAULT NULL,
  `EndKdOrt` varchar(100) DEFAULT NULL,
  `EndKdLand` varchar(20) DEFAULT NULL,
  `IsExport` tinyint(1) unsigned DEFAULT '0',
  `UIDUser` varchar(50) DEFAULT NULL,
  `UIDKunde` varchar(50) DEFAULT NULL,
  `IsPara25a` tinyint(1) unsigned DEFAULT '0',
  `Para25aTxt` varchar(255) DEFAULT NULL,
  `Preis` varchar(10) DEFAULT '0',
  `IsInklMwSt` tinyint(1) unsigned DEFAULT '0',
  `MwSt` varchar(10) DEFAULT NULL,
  `ZahlArt` char(1) DEFAULT NULL,
  `LZ` varchar(50) DEFAULT NULL,
  `Rate` float(10,2) DEFAULT NULL,
  `IsDeleted` tinyint(1) unsigned DEFAULT '0',
  `IsStorno` tinyint(1) unsigned DEFAULT '0',
  `LogAnlage` int(12) unsigned DEFAULT '0',
  `LogDateAnz` int(12) unsigned DEFAULT '0',
  `LogBetragAnz` varchar(10) DEFAULT NULL,
  `LogRestbetrag` varchar(10) DEFAULT NULL,
  `LogIsBriefFrg` tinyint(1) unsigned DEFAULT '0',
  `LogIsBriefBez` tinyint(1) unsigned DEFAULT '0',
  `Leistungszeitraum` varchar(50) DEFAULT NULL,
  `State` tinyint(1) unsigned DEFAULT '0',
  `StornoText` varchar(50) DEFAULT NULL,
  `RechDatumEK` int(12) unsigned DEFAULT '0',
  `IsEkExport` tinyint(1) unsigned DEFAULT '0',
  `EndKdAufschlag` float(10,2) DEFAULT '0.00',
  `Gutschrift` text,
  `IsEkPara25a` tinyint(1) unsigned DEFAULT '0',
  `IsEndkunde` tinyint(1) DEFAULT NULL,
  `PreisEK` float(10,2) DEFAULT NULL,
  `StateEK` tinyint(1) unsigned DEFAULT NULL,
  `Kommentar` text,
  `typ` char(3) DEFAULT 'ORD',
  KEY `user_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

