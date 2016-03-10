<?php
$xpdo_meta_map['glxCommonFieldValue']= array (
  'package' => 'glx',
  'version' => '1.1',
  'table' => 'glx_common_fields_values',
  'extends' => 'xPDOSimpleObject',
  'xpos' => '529',
  'ypos' => '48',
  'fields' => 
  array (
    'city_id' => 0,
    'common_field_id' => 0,
    'value' => '',
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
    'common_field_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
    ),
    'value' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'text',
      'null' => true,
      'default' => '',
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
    'CommonField' => 
    array (
      'class' => 'glxCommonField',
      'local' => 'common_field_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
