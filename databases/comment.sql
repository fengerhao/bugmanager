--  
-- ��Ľṹ `comment` 
--  

DROP TABLE IF EXISTS `comment`; 
CREATE TABLE IF NOT EXISTS `comment` ( 
  `id` int(6) NOT NULL auto_increment, 
  `uid` tinyint(4) NOT NULL COMMENT '�û�id', 
  `pid` int(6) default NULL COMMENT '��Ŀid', 
  `bid` int(10) default NULL COMMENT 'bug id', 
  `title` text, 
  `content` text, 
  `time` datetime default NULL COMMENT '����ʱ��', 
  PRIMARY KEY  (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;