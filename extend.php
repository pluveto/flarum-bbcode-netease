<?php
namespace Pluveto\netease;
use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addCustom(
               '[bilibili id={NUMBER1?}}][/bilibili]',
               '<iframe src="http://music.163.com/outchain/player?type=0&amp;id={NUMBER1}&amp;auto=0&amp;height=430" width="100%" height="450" frameborder="no" marginwidth="0" marginheight="0"></iframe>'
            );
        })
];
