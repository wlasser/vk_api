<?php
require_once('../../../autoload.php'); //подключаем библу
use DigitalStar\vk_api\vk_api;

//**********CONFIG**************
const VK_KEY = ""; //ключ авторизации сообщества, который вы получили
const CONFIRM_STR = ""; //ключ авторизации сообщества, который вы получили
const VERSION = "5.95"; //ваша версия используемого api
//******************************

$vk = vk_api::create(VK_KEY, VERSION)->setConfirm(CONFIRM_STR);
$vk->debug();
$vk->initVars('id, message', $id, $message); //инициализация переменных
$vk->reply('Секретная информация'); //отвечает пользователю или в беседу
