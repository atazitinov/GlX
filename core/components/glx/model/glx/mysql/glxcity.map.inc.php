<?php
$xpdo_meta_map['glxCity']= array (
  'package' => 'glx',
  'version' => '1.1',
  'table' => 'glx_cities',
  'extends' => 'xPDOSimpleObject',
  'xpos' => '529',
  'ypos' => '436',
  'fields' => 
  array (
    'title' => '',
    'is_default' => 1,
  ),
  'fieldMeta' => 
  array (
    'title' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'is_default' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'null' => true,
      'default' => 1,
    ),
  ),
  'composites' => 
  array (
    'ExtraFields' => 
    array (
      'class' => 'glxExtraField',
      'local' => 'id',
      'foreign' => 'city_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'CommonFieldsValues' => 
    array (
      'class' => 'glxCommonFieldValue',
      'local' => 'id',
      'foreign' => 'city_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
