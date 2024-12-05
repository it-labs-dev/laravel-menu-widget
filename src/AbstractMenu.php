<?php

namespace ItLabs\Widgets\Menu;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Arr;

abstract class AbstractMenu extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('menuWidget::index', [
            'menu' => $this->getMenuData(),
            'classes' => Arr::get($this->config, 'classes', [])
        ]);
    }

    protected abstract function getMenuData(): array;
}
