-- 
-- ��Ľṹ `project`
-- 

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(6) NOT NULL auto_increment,
  `proname` varchar(20) NOT NULL COMMENT '��Ŀ��',
  `crttime` datetime NOT NULL COMMENT '����ʱ��',
  `owner` varchar(20) NOT NULL COMMENT '������',
  `progress` varchar(5) NOT NULL,
  `state` tinyint(2) NOT NULL COMMENT '��Ŀ״̬',
  `updtime` datetime default NULL COMMENT '�޸�ʱ��',
  `clstime` datetime default NULL COMMENT '�ر�ʱ��',
  `plantime` datetime NOT NULL COMMENT '�ƻ�ʱ��',
  `acttime` datetime default NULL COMMENT 'ʵ��ʱ��',
  `blameman` varchar(20) NOT NULL COMMENT '������',
  `attachment` text COMMENT '����',
  `history` text COMMENT '��ʷ',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- �������е����� `project`
-- 

INSERT INTO `project` VALUES (1, 'bugmanager', '2013-04-11 19:39:25', 'cxz', '1%', 0, NULL, NULL, '2013-04-26 19:40:46', NULL, 'cxz', NULL, NULL);
