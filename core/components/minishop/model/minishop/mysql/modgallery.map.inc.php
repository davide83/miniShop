<?php
$xpdo_meta_map['MsGallery']= array (
  'package' => 'minishop',
  'version' => '1.1',
  'table' => 'ms_modGallery',
  'extends' => 'xPDOSimpleObject',
  'fields' =>
  array (
    'wid' => NULL,
    'gid' => NULL,
    'name' => NULL,
    'description' => NULL,
    'file' => NULL,
    'fileorder' => 0,
  ),
  'fieldMeta' =>
  array (
    'wid' =>
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'gid' =>
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'name' =>
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'description' =>
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'file' =>
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'fileorder' =>
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'indexes' =>
  array (
    'wid' =>
    array (
      'alias' => 'wid',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' =>
      array (
        'wid' =>
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'gid' =>
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'file' =>
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
