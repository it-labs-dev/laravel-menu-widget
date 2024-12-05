<?php

namespace ItLabs\Widgets\Menu;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Arr;

class Menu extends AbstractMenu
{
    protected function getMenuData(): array
    {
        $configKey = Arr::get($this->config, 'configKey');

        if($configKey){
            return config($configKey, []);
        }

        return Arr::get($this->config, 'items', []);
    }
}
