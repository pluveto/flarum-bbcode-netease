<?php
namespace Pluveto\netease;                                                           
use Flarum\Extend;                                                                   
use s9e\TextFormatter\Configurator;                                                  
return [                                                                             
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addCustom(
               '[netease id={NUMBER1?}][/netease]',
               '<p><iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="https://music.163.com/outchain/player?type=2&id={NUMBER1}&auto=0&height=66"></iframe></p>'
            );
        })     
];
