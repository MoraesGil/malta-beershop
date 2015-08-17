
CREATE TABLE `albuns` (
  `album_id` int(11) NOT NULL auto_increment,
  `album_name` varchar(200) default NULL,
  PRIMARY KEY  (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE `fotos` (
  `foto_id` int(11) NOT NULL auto_increment,
  `foto_url` varchar(200) default NULL,
  `foto_caption` varchar(100) default NULL,
  `foto_data` datetime default NULL,
  `foto_album` int(11) default NULL,
  `foto_pos` int(11) default '0',
  `foto_info` varchar(100) default NULL,
  PRIMARY KEY  (`foto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_login` varchar(20) default NULL,
  `user_password` varchar(50) default NULL,
  `user_email` varchar(200) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


INSERT INTO `users` (`user_login`, `user_password`, `user_email`) VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'rafadinix@gmail.com');
