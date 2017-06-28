-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2014 年 10 月 27 日 15:10
-- 服务器版本: 5.0.90
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `mm_donate`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `duser`
-- 

CREATE TABLE `duser` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL COMMENT '登陆账号',
  `nickname` varchar(50) NOT NULL COMMENT '姓名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `sex` varchar(5) default NULL COMMENT '性别',
  `email` varchar(100) default NULL COMMENT '邮箱',
  `qq` int(12) default NULL COMMENT 'qq',
  `tel` varchar(50) NOT NULL COMMENT '联系电话',
  `dep` varchar(20) NOT NULL COMMENT '学院',
  `banji` varchar(50) NOT NULL COMMENT '班级',
  `addr` varchar(100) NOT NULL COMMENT '工作地址',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=14 ;

-- 
-- 导出表中的数据 `duser`
-- 

INSERT INTO `duser` VALUES (12, 'ztest', '测试', '123456', '男', '5555@qq.com', 45555, '44441122', '新疆', '3班', '3号楼');
INSERT INTO `duser` VALUES (13, 'jtest', '捐赠测试', '123456', '男', '555555@qq.com', 55555, '1111111', '新疆财经大学', '计算机12-1', '3号楼');

-- --------------------------------------------------------

-- 
-- 表的结构 `goods`
-- 

CREATE TABLE `goods` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL COMMENT '物品名称',
  `ptype` varchar(50) NOT NULL COMMENT '物品类别',
  `num` varchar(10) NOT NULL COMMENT '数量',
  `duser` varchar(50) NOT NULL COMMENT '捐赠用户',
  `s` int(1) NOT NULL default '0' COMMENT '是否审核',
  `addtime` timestamp NOT NULL default CURRENT_TIMESTAMP COMMENT '捐赠时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `goods`
-- 

INSERT INTO `goods` VALUES (1, '捐一个被子0', '生活用品', '0', 'ztest', 1, '2016-05-07 14:12:27');
INSERT INTO `goods` VALUES (2, '捐一个床单', '生活用品', '0', 'ztest', 1, '2016-05-07 14:17:31');
INSERT INTO `goods` VALUES (3, '捐一本c语言书', '学习用品', '0', 'ztest', 1, '2016-05-07 14:17:48');
INSERT INTO `goods` VALUES (4, '笔记本电脑', '生活用品', '1', 'jtest', 1, '2016-05-08 13:54:32');
INSERT INTO `goods` VALUES (5, '饮水机一台', '生活用品', '0', 'ztest', 1, '2016-05-08 15:32:10');

-- --------------------------------------------------------

-- 
-- 表的结构 `guest`
-- 

CREATE TABLE `guest` (
  `id` int(4) NOT NULL auto_increment COMMENT '主键',
  `userid` varchar(40) default NULL COMMENT '用户帐号',
  `title` varchar(200) default NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `addtime` date default NULL COMMENT '预约时间',
  `replay` text NOT NULL COMMENT '回复内容',
  `rtime` datetime NOT NULL COMMENT '回复时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=14 ;

-- 
-- 导出表中的数据 `guest`
-- 

INSERT INTO `guest` VALUES (11, 'ztest', '11', '11', '2016-05-08', '123', '2016-05-08 11:44:42');
INSERT INTO `guest` VALUES (12, 'jtest', '111112', '1111111111', '2016-05-08', '', '0000-00-00 00:00:00');
INSERT INTO `guest` VALUES (13, 'rr2014', '嘎哈韩国帅哥', '阿斯顿阿斯顿', '2016-05-08', '22222222222', '2016-05-08 15:33:53');

-- --------------------------------------------------------

-- 
-- 表的结构 `manage`
-- 

CREATE TABLE `manage` (
  `UserName` varchar(50) NOT NULL COMMENT '管理员帐号',
  `Password` varchar(50) NOT NULL COMMENT '管理员密码',
  `type` varchar(50) NOT NULL COMMENT '类型',
  PRIMARY KEY  (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- 
-- 导出表中的数据 `manage`
-- 

INSERT INTO `manage` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', '超级管理员');
INSERT INTO `manage` VALUES ('admin1', '202cb962ac59075b964b07152d234b70', '普通管理员');

-- --------------------------------------------------------

-- 
-- 表的结构 `news`
-- 

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(250) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `addtime` date NOT NULL COMMENT '添加时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `news`
-- 

INSERT INTO `news` VALUES (4, '新闻测试测试', '111111111111111', '2016-05-08');
INSERT INTO `news` VALUES (5, '捐赠平台开通了去', '捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去捐赠平台开通了去', '2016-05-08');

-- --------------------------------------------------------

-- 
-- 表的结构 `pingjia`
-- 

CREATE TABLE `pingjia` (
  `id` int(11) NOT NULL auto_increment,
  `goodsid` varchar(20) NOT NULL COMMENT '物品id',
  `content` text NOT NULL COMMENT '内容',
  `ruser` varchar(50) NOT NULL COMMENT '接受用户',
  `addtime` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `pingjia`
-- 

INSERT INTO `pingjia` VALUES (1, '3', '11111111111', 'rtest', '2016-05-27 23:06:57', '1111');

-- --------------------------------------------------------

-- 
-- 表的结构 `ptype`
-- 

CREATE TABLE `ptype` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL COMMENT '分类',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=10 ;

-- 
-- 导出表中的数据 `ptype`
-- 

INSERT INTO `ptype` VALUES (7, '学习用品');
INSERT INTO `ptype` VALUES (8, '生活用品');
INSERT INTO `ptype` VALUES (9, '其他');

-- --------------------------------------------------------

-- 
-- 表的结构 `ruser`
-- 

CREATE TABLE `ruser` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL COMMENT '登陆账号',
  `nickname` varchar(50) NOT NULL COMMENT '姓名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `sex` varchar(5) default NULL COMMENT '性别',
  `email` varchar(100) default NULL COMMENT '邮箱',
  `qq` int(12) default NULL COMMENT 'qq',
  `tel` varchar(50) NOT NULL COMMENT '联系电话',
  `dep` varchar(20) NOT NULL COMMENT '学院',
  `banji` varchar(50) NOT NULL COMMENT '班级',
  `addr` varchar(100) NOT NULL COMMENT '工作地址',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=14 ;

-- 
-- 导出表中的数据 `ruser`
-- 

INSERT INTO `ruser` VALUES (12, 'rtest', '张力丝', '123456', '男', '1111@qq.com', 454545, '4545455445', '4545', '4545', '5445');
INSERT INTO `ruser` VALUES (13, 'rr2014', '贫困者', '123456', '男', '4555@qq.com', 454545, '1384545451', '西藏大学', '财务04-1', '7号楼');

-- --------------------------------------------------------

-- 
-- 表的结构 `shenqing`
-- 

CREATE TABLE `shenqing` (
  `id` int(11) NOT NULL auto_increment,
  `goodsid` varchar(50) NOT NULL COMMENT '物品编号',
  `num` int(1) NOT NULL COMMENT '数量',
  `ruser` varchar(50) NOT NULL COMMENT '接收人',
  `duser` varchar(50) NOT NULL COMMENT '捐赠人',
  `w_date` date NOT NULL COMMENT '日期',
  `content` text NOT NULL COMMENT '原因',
  `s` int(1) NOT NULL default '0' COMMENT '是否审核',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `shenqing`
-- 

INSERT INTO `shenqing` VALUES (4, '5', 1, 'rr2014', 'ztest', '2016-05-24', '希望能获得捐赠,家里比较穷啊', 1);
INSERT INTO `shenqing` VALUES (2, '3', 1, 'rtest', 'ztest', '2016-05-30', '11111111111', 0);
INSERT INTO `shenqing` VALUES (3, '4', 1, 'rr2014', 'jtest', '2016-05-15', '学习用,谢谢你', 1);
INSERT INTO `shenqing` VALUES (5, '1', 1, 'rtest', 'ztest', '2016-05-15', '1', 0);
INSERT INTO `shenqing` VALUES (6, '5', 11, 'rtest', 'ztest', '2016-05-08', '11111111111', 0);
