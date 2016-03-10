<?php
$xpdo_meta_map['glxExtraField']= array (
  'package' => 'glx',
  'version' => '1.1',
  'table' => 'glx_extra_fields',
  'extends' => 'xPDOSimpleObject',
  'xpos' => '921',
  'ypos' => '436',
  'fields' => 
  array (
    'city_id' => 0,
    'key' => '',
    'value' => '',
    'xtype' => 'textfield',
  ),
  'fieldMeta' => 
  array (
    'city_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
    ),
    'key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'value' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'text',
      'null' => true,
      'default' => '',
    ),
    'xtype' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '75',
      'phptype' => 'string',
      'null' => false,
      'default' => 'textfield',
    ),
  ),
  'aggregates' => 
  array (
    'City' => 
    array (
      'class' => 'glxCity',
      'local' => 'city_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
