Mqtt

## 1. 系统介绍

```
连接/发布/订阅MQTT代理
```

## 2. 安装

composer require pheicloud/pheimqtt  --dev

## 3. 使用


### 3.1 注册

```
Pheicloud\Pheimqtt\PheimqttServiceProvider::class,

```
### 3.2 解析
```
$mqtt = new Pheicloud\Pheimqtt\Pheimqtt($server, $port, $client_id);
```

## 4 Thanks
```
https://github.com/bluerhinos/phpMQTT.git
```

## 5. License

This project is licensed under the Apache License - see the [LICENSE.md](LICENSE.md) file for details
