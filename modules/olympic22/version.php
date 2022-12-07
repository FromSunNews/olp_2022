<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$module_version = [
    'name' => '',
    'modfuncs' => '',
    'is_sysmod' => 1,
    'virtual' => 1,
    'version' => '4.5.01',
    'date' => '',
    'author' => '',
    'note' => '',
    'uploads_dir' => [
        $module_upload
    ]
];
