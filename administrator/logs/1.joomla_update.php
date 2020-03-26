#
#<?php die('Forbidden.'); ?>
#Date: 2019-06-12 09:12:42 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2019-06-12T09:12:42+00:00	INFO ::1	update	Update started by user Super User (706). Old version is 3.9.4.
2019-06-12T09:12:46+00:00	INFO ::1	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.9.8-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20190612%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20190612T091234Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=f13711047b13c6a5fdf4b30095697d115bc8b02c9303a907ac6099d4f7ea458e.
2019-06-12T09:12:50+00:00	INFO ::1	update	File Joomla_3.9.8-Stable-Update_Package.zip downloaded.
2019-06-12T09:12:50+00:00	INFO ::1	update	Starting installation of new version.
2019-06-12T09:13:08+00:00	INFO ::1	update	Finalising installation.
2019-06-12T09:13:08+00:00	INFO ::1	update	Ran query from file 3.9.7-2019-04-23. Query text: ALTER TABLE `#__session` ADD INDEX `client_id_guest` (`client_id`, `guest`);.
2019-06-12T09:13:08+00:00	INFO ::1	update	Ran query from file 3.9.7-2019-04-26. Query text: UPDATE `#__content_types` SET `content_history_options` = REPLACE(`content_histo.
2019-06-12T09:13:08+00:00	INFO ::1	update	Ran query from file 3.9.8-2019-06-11. Query text: UPDATE #__users SET params = REPLACE(params, '",,"', '","');.
2019-06-12T09:13:08+00:00	INFO ::1	update	Deleting removed files and folders.
2019-06-12T09:13:09+00:00	INFO ::1	update	Cleaning up after installation.
2019-06-12T09:13:09+00:00	INFO ::1	update	Update to version 3.9.8 is complete.
