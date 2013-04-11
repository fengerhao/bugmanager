-- 
-- 表的结构 `project`
-- 

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(6) NOT NULL auto_increment,
  `proname` varchar(20) NOT NULL COMMENT '项目名',
  `crttime` datetime NOT NULL COMMENT '创建时间',
  `owner` varchar(20) NOT NULL COMMENT '创建人',
  `progress` varchar(5) NOT NULL,
  `state` tinyint(2) NOT NULL COMMENT '项目状态',
  `updtime` datetime default NULL COMMENT '修改时间',
  `clstime` datetime default NULL COMMENT '关闭时间',
  `plantime` datetime NOT NULL COMMENT '计划时间',
  `acttime` datetime default NULL COMMENT '实际时间',
  `blameman` varchar(20) NOT NULL COMMENT '责任人',
  `attachment` text COMMENT '附件',
  `history` text COMMENT '历史',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `project`
-- 

INSERT INTO `project` VALUES (1, 'bugmanager', '2013-04-11 19:39:25', 'cxz', '1%', 0, NULL, NULL, '2013-04-26 19:40:46', NULL, 'cxz', NULL, NULL);
