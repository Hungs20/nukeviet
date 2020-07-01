<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2020 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 01 Jul 2020 02:42:46 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$db_config['dbhost'] = 'd6q8diwwdmy5c9k9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$db_config['dbport'] = '3306';
$db_config['dbname'] = 'i3vl81tehp2otnoe';
$db_config['dbsystem'] = 'chuyenhalong';
$db_config['dbuname'] = 'nnhssl9qncz91my7';
$db_config['dbpass'] = 'y58egk8v76p3svdd';
$db_config['dbtype'] = 'mysql';
$db_config['collation'] = 'utf8mb4_unicode_ci';
$db_config['charset'] = 'utf8mb4';
$db_config['persistent'] = false;
$db_config['prefix'] = 'chl';

$global_config['site_domain'] = '';
$global_config['name_show'] = 0;
$global_config['idsite'] = 0;
$global_config['sitekey'] = 'a4cd5e180bc897f8d054220cb1a4f681';// Do not change sitekey!
$global_config['hashprefix'] = '{SSHA512}';
$global_config['cached'] = 'files';
$global_config['session_handler'] = 'files';
$global_config['extension_setup'] = 3; // 0: No, 1: Upload, 2: NukeViet Store, 3: Upload + NukeViet Store
// Readmore: https://wiki.nukeviet.vn/nukeviet4:advanced_setting:file_config