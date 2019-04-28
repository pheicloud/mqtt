手机号码归属地查询

## 1. 系统介绍

```
PHP 实现手机号码归属地查询，数据文件来自 https://github.com/lovedboy/phone
```

## 2. 安装

composer require "pheicloud/pheiphone"

## 3. 使用


### 3.1 注册

```
Pheicloud\Pheiphone\PheiphoneServiceProvider::class,

```
### 3.2 解析
```
$phone = app('pheiphone')->find(18621281566);
print_r($info);

// Output;
Array
(
    [province] => 上海
    [city] => 上海
    [postcode] => 200000
    [code] => 021
    [operators] => 联通
)
```

## 4 Thanks
```
https://github.com/lovedboy/phone

https://github.com/shitoudev/phone-location

```

## 5. License

This project is licensed under the Apache License - see the [LICENSE.md](LICENSE.md) file for details
