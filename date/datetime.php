<?php
//时间类DateTime
date_default_timezone_set("Asia/Shanghai");
$raw = '06.03.2018';
$start = DateTime::createFromFormat('d.m.Y', $raw);
echo "currentTime:".$start->format("Y-m-d")."\n";
