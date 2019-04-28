<?php

namespace Pheicloud\PheiMqtt;

use Illuminate\Support\ServiceProvider;

class PheimqttServiceProvider extends ServiceProvider
{
    /**
     * 在注册后进行服务的启动
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('pheimqtt', function () {
            return new Pheimqtt;
        });
    }
}
