<?php

namespace Pheicloud\Pheimqtt;

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

    /**
     * Register the application services
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pheimqtt', function () {
            return new Pheimqtt;
        });
    }

    /*
     * Get the services provided by the provider
     *
     * @return array
     */
    public function provides()
    {
        //延迟加载，定义provides函数
        return ['pheimqtt'];
    }
}
