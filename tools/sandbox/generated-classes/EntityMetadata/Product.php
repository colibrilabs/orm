<?php

return array (
  'entityClass' => 'ProCard\\Models\\Product',
  'entityRepositoryClass' => 'ProCard\\Models\\ProductRepository',
  'tableName' => 'products',
  'identifier' => 'id',
  'rawSQLNames' => 
  array (
    'id' => 'products.id',
    'category_id' => 'products.category_id',
    'manufacturer_id' => 'products.manufacturer_id',
    'picture_id' => 'products.picture_id',
    'slug' => 'products.slug',
    'code' => 'products.vendor_code',
    'name' => 'products.name',
    'price' => 'products.price',
    'has_in_stock' => 'products.product_in_stock',
    'quantity' => 'products.quantity',
    'status' => 'products.status',
    'version' => 'products.version',
    'modified' => 'products.created',
  ),
  'names' => 
  array (
    'id' => 'id',
    'category_id' => 'category_id',
    'manufacturer_id' => 'manufacturer_id',
    'picture_id' => 'picture_id',
    'slug' => 'slug',
    'code' => 'vendor_code',
    'name' => 'name',
    'price' => 'price',
    'has_in_stock' => 'product_in_stock',
    'quantity' => 'quantity',
    'status' => 'status',
    'version' => 'version',
    'modified' => 'created',
  ),
  'relations' => 
  array (
  ),
  'enumerations' => 
  array (
    'status' => 
    array (
      0 => 'OK',
      1 => 'AO',
      2 => 'RQ',
      3 => 'XX',
    ),
  ),
  'default' => 
  array (
    'status' => 'RQ',
  ),
  'nullables' => 
  array (
  ),
  'unsigned' => 
  array (
    'id' => 'id',
    'category_id' => 'category_id',
    'manufacturer_id' => 'manufacturer_id',
    'picture_id' => 'picture_id',
    'quantity' => 'quantity',
    'version' => 'version',
  ),
  'primary' => 
  array (
    'id' => 'id',
  ),
  'instances' => 
  array (
    'id' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'id',
       'name' => 'id',
       'type' => 
      Colibri\Schema\Types\IntegerType::__set_state(array(
         'length' => 11,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => true,
       'nullable' => false,
       'autoIncrement' => true,
       'primaryKey' => true,
       'identity' => false,
    )),
    'category_id' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'category_id',
       'name' => 'category_id',
       'type' => 
      Colibri\Schema\Types\IntegerType::__set_state(array(
         'length' => 11,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => true,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'manufacturer_id' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'manufacturer_id',
       'name' => 'manufacturer_id',
       'type' => 
      Colibri\Schema\Types\IntegerType::__set_state(array(
         'length' => 11,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => true,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'picture_id' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'picture_id',
       'name' => 'picture_id',
       'type' => 
      Colibri\Schema\Types\IntegerType::__set_state(array(
         'length' => 11,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => true,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'slug' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'slug',
       'name' => 'slug',
       'type' => 
      Colibri\Schema\Types\StringType::__set_state(array(
         'length' => 64,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => false,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'code' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'vendor_code',
       'name' => 'code',
       'type' => 
      Colibri\Schema\Types\StringType::__set_state(array(
         'length' => 16,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => false,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'name' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'name',
       'name' => 'name',
       'type' => 
      Colibri\Schema\Types\StringType::__set_state(array(
         'length' => 128,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => false,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'price' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'price',
       'name' => 'price',
       'type' => 
      Colibri\Schema\Types\DoubleType::__set_state(array(
         'length' => 10,
         'precision' => 4,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => false,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'has_in_stock' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'product_in_stock',
       'name' => 'has_in_stock',
       'type' => 
      Colibri\Schema\Types\BooleanType::__set_state(array(
         'length' => 0,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => false,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'quantity' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'quantity',
       'name' => 'quantity',
       'type' => 
      Colibri\Schema\Types\IntegerType::__set_state(array(
         'length' => 11,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => true,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'status' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'status',
       'name' => 'status',
       'type' => 
      Colibri\Schema\Types\EnumType::__set_state(array(
         'length' => 0,
         'precision' => 0,
         'extra' => 
        array (
          0 => 'OK',
          1 => 'AO',
          2 => 'RQ',
          3 => 'XX',
        ),
      )),
       'default' => 'RQ',
       'unsigned' => false,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'version' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'version',
       'name' => 'version',
       'type' => 
      Colibri\Schema\Types\IntegerType::__set_state(array(
         'length' => 11,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => true,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
    'modified' => 
    Colibri\Schema\Field::__set_state(array(
       'column' => 'created',
       'name' => 'modified',
       'type' => 
      Colibri\Schema\Types\DatetimeType::__set_state(array(
         'length' => 0,
         'precision' => 0,
         'extra' => NULL,
      )),
       'default' => NULL,
       'unsigned' => false,
       'nullable' => false,
       'autoIncrement' => false,
       'primaryKey' => false,
       'identity' => false,
    )),
  ),
);