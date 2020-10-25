<?php

$modversion['name'] = _SATZ_MODULE_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _SATZ_MODULE_DESC;
$modversion['credits'] = 'Andreas Sing<br>http://www.mailey.de';
$modversion['author'] = 'Andreas Sing';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/slogo.gif';
$modversion['dirname'] = 'satzung';

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'satzung_index.html';
$modversion['templates'][1]['description'] = '';

//Config
$modversion['config'][1]['name'] = 'cfgSatzung';
$modversion['config'][1]['title'] = '_SATZ_MESSAGE';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'textarea';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] = 'Satzung';
