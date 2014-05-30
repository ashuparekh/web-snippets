CREATE TABLE `s_ajax_chat_messages` (
  `id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
  `member_id` INT( 11 ) NOT NULL ,
  `member_name` VARCHAR( 255 ) NOT NULL ,
  `message` VARCHAR( 255 ) NOT NULL ,
  `when` INT( 11 ) NOT NULL ,
  PRIMARY KEY ( `id` ) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `s_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `s_members` (`id`, `name`, `pass`) VALUES
(NULL, 'User1', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(NULL, 'User2', 'd8578edf8458ce06fbc5bb76a58c5ca4');