-- 
-- 表的结构 `bug`
-- 

DROP TABLE IF EXISTS `bug`;
CREATE TABLE IF NOT EXISTS `bug` (
  `id` int(10) NOT NULL auto_increment,
  `owner` varchar(20) NOT NULL,
  `crttime` datetime NOT NULL,
  `directman` varchar(20) NOT NULL,
  `state` tinyint(2) NOT NULL,
  `history` text,
  `attachment` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `bug`
-- 