# proftpd-gui
Graphical User Interface for ProFTPd

Allows you to:

## General
 * View users expiring within the next X days
 * View all users in a list table with pagination

## User Administration
 * Add new users
 * Edit existing users

## Database Set-up

The 'groups' table which stores a list of the groups and a single column, with comma separated list of subscribed members (userid from the users table).

```
CREATE TABLE IF NOT EXISTS 'groups' (
  'name' varchar(16) COLLATE utf8_general_ci NOT NULL,
  'gid' smallint(6) NOT NULL DEFAULT '5500',
  'members' varchar(16) COLLATE utf8_general_ci NOT NULL,
  KEY 'name' ('name')
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='ProFTP group table';
```

The 'users' table which stores a list of all the users and their primary group 'gid'.

```
CREATE TABLE IF NOT EXISTS 'users' (
  'id' int(10) unsigned NOT NULL AUTO_INCREMENT,
  'userid' varchar(32) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  'passwd' varchar(32) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  'uid' smallint(6) NOT NULL DEFAULT '5500',
  'gid' smallint(6) NOT NULL DEFAULT '5500',
  'homedir' varchar(255) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  'shell' varchar(16) COLLATE utf8_general_ci NOT NULL DEFAULT '/sbin/nologin',
  'count' int(11) NOT NULL DEFAULT '0',
  'accessed' datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  'modified' datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ('id'),
  UNIQUE KEY 'userid' ('userid')
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='ProFTP user table';
```
