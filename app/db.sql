-- 本系统中使用的数据库
-- admin表
drop table if exists `lar_admin`;
create table `lar_admin`(
	`id` int(10) not null auto_increment comment 'di主键',
    `loginName` varchar(36) not null default '' comment '登录名',
    `realName` varchar(36) not null default '真实姓名',
    `sex` tinyint(1) not null default '1' comment '性别',
    `email` varchar(40) not null default '' comment '邮箱',
    `phone` varchar(15) not null default '' comment '手机',
    `status` tinyint(1) not null default '1' comment '状态',
    `created_at` timestamp not null default current_timestamp comment '创建时时间',
    `update_at` timestamp not null default current_timestamp comment '升级时间',
    primary key(`id`)
)engine=InnoDB auto_increment=1 default charset=utf8;

ALTER TABLE `lar_admin`
ADD COLUMN `passWord`  varchar(255) NOT NULL AFTER `loginName`;

ALTER TABLE `lar_admin`
    CHANGE COLUMN `status` `workStatus`  tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态' AFTER `phone`;

ALTER TABLE `lar_admin`
ADD COLUMN `lastIP`  varchar(30) NOT NULL AFTER `workStatus`;

ALTER TABLE `lar_admin`
ADD COLUMN `lastTime`  datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP AFTER `lastIP`;

ALTER TABLE `lar_admin`
CHANGE COLUMN `update_at` `updated_at`  timestamp NOT NULL DEFAULT current_timestamp() COMMENT '升级时间' AFTER `created_at`;
