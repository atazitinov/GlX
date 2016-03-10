<?php
$xpdo_meta_map['glxCommonField']= array (
  'package' => 'glx',
  'version' => '1.1',
  'table' => 'glx_common_fields',
  'extends' => 'xPDOSimpleObject',
  'xpos' => '30',
  'ypos' => '48',
  'fields' => 
  array (
    'key' => '',
    'xtype' => 'textfield',
  ),
  'fieldMeta' => 
  array (
    'key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
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
  'composites' => 
  array (
    'CommonFieldsValues' => 
    array (
      'class' => 'glxCommonFieldValue',
      'local' => 'id',
      'foreign' => 'common_field_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
