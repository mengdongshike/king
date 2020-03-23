<?php
/*************************************************
 * Author: King
 * CopyRight: King
 * FrameKernel: KingPHP
 * FileName: Index.php
 * Date: 2020/3/22 Time: 21:24
 *************************************************/
// [ 应用入口文件 ]
namespace king;

require __DIR__ . '/../vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$app=new App();
$app->run();

