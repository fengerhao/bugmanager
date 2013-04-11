-- 
-- 表的结构 `users`
-- 

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `grade` tinyint(1) NOT NULL,
  `position` tinyint(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `users`
-- 

INSERT INTO `users` VALUES (1, 'cxz', '123456', 1, 1);
