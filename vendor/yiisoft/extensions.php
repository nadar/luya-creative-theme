<?php

$vendorDir = dirname(__DIR__);

return array (
  'sizeg/yii2-jwt' => 
  array (
    'name' => 'sizeg/yii2-jwt',
    'version' => '1.2.1.0',
    'alias' => 
    array (
      '@sizeg/jwt' => $vendorDir . '/sizeg/yii2-jwt',
    ),
  ),
  'yiisoft/yii2-queue' => 
  array (
    'name' => 'yiisoft/yii2-queue',
    'version' => '2.3.0.0',
    'alias' => 
    array (
      '@yii/queue' => $vendorDir . '/yiisoft/yii2-queue/src',
      '@yii/queue/amqp' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/amqp',
      '@yii/queue/amqp_interop' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/amqp_interop',
      '@yii/queue/beanstalk' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/beanstalk',
      '@yii/queue/db' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/db',
      '@yii/queue/file' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/file',
      '@yii/queue/gearman' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/gearman',
      '@yii/queue/redis' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/redis',
      '@yii/queue/sync' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/sync',
      '@yii/queue/sqs' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/sqs',
      '@yii/queue/stomp' => $vendorDir . '/yiisoft/yii2-queue/src/drivers/stomp',
    ),
  ),
  'yiisoft/yii2-imagine' => 
  array (
    'name' => 'yiisoft/yii2-imagine',
    'version' => '2.2.0.0',
    'alias' => 
    array (
      '@yii/imagine' => $vendorDir . '/yiisoft/yii2-imagine/src',
    ),
  ),
);
