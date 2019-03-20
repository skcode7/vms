<?php /**
    *
    * Copyright (c) 2019
    * @package VMS - Video CMS v1.0
    * @author Igor Karpov <ika@noxls.net>
    * @author Sergey Karpov
    * @website https://noxls.net
    *
*/?>
<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Search extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('Theme::widgets.search');
    }
}