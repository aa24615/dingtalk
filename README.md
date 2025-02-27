<p align="center">
    <h1 align="center">EasyDingTalk</h1>
</p>

<p align="center">
    <a href="https://travis-ci.org/mingyoung/dingtalk"><img src="https://travis-ci.org/mingyoung/dingtalk.svg" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/mingyoung/dingtalk/?branch=master"><img src="https://scrutinizer-ci.com/g/mingyoung/dingtalk/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
    <a href="https://packagist.org/packages/mingyoung/dingtalk"><img src="https://poser.pugx.org/mingyoung/dingtalk/v/stable.svg" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/mingyoung/dingtalk"><img src="https://poser.pugx.org/mingyoung/dingtalk/d/total.svg" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/mingyoung/dingtalk"><img src="https://poser.pugx.org/mingyoung/dingtalk/license.svg" alt="License"></a>
</p>

## 介绍

EasyDingTalk 封装了钉钉身份验证、通讯录管理、消息通知、审批、群机器人、业务事件回调管理等服务端接口，让开发者可以使用简单的配置，提供简洁的 API 以供方便快速地调用钉钉接口。

注意: 此包有点老,N年没有更新,由于没有找到其他适用包,被我捡回来修修补补, 所以有些地方可能和原作者的代码有区别,但是基本功能都一样,只是加了一些新的接口,需要用到啥接口,我就会加到该包里!

## 环境要求

- PHP 7.0+
- [Composer](https://getcomposer.org/)

## 安装

```bash
composer require mingyoung/dingtalk:^2.0
```

## 使用

```php
use EasyDingTalk\Application;

$config = [
    'corp_id' => 'dingd3ir8195906jfo93',

    'app_key' => 'dingwu33fo1fjc0fszad',
    'app_secret' => 'RsuMFgEIY3jg5UMidkvwpzEobWjf9Fcu3oLqLyCUIgzULm54WcV7j9fi3fJlUshk',
];

$app = new Application($config);
```

## 文档

[https://docs.easydingtalk.org](https://docs.easydingtalk.org)


## License

MIT
