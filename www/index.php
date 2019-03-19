<?php

/* 
 * Copyright (C) 2019 vladislav
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();

//подключаем файлы
include_once '../config/config.php';
include_once '../config/db.php';
include_once '../core/mainFunctions.php';
$router = include_once '../core/Router.php';

//определяем с каким контроллером будем работать
echo '<pre>';
echo $_SERVER['REQUEST_URI'] . "<br>";
echo preg_match("~/[a-z]/[a-z]~", $_SERVER['REQUEST_URI']) . "<br>";
if(preg_match("~/[a-z]/[a-z]~", $_SERVER['REQUEST_URI'])){
    preg_replace("~/[a-z]/[a-z]~", $replacement, "$1,$2");
    
}else{
    echo "no";
}
echo '</pre>';
//определяем функцию контроллера


