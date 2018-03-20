<?php
/**
 * Created by PhpStorm.
 * User: ic171239
 * Date: 2018/03/14
 * Time: 17:33
 */

use Carbon\Carbon;

require __DIR__ . "/../vendor/autoload.php";

echo Carbon::now();
echo '<br>';
echo Carbon::now('Asia/Tokyo');
echo '<br>';
echo Carbon::now()->toDateString();

