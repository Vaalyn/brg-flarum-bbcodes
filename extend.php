<?php

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/vaalyn-brg-bbcodes/styles.css">';
        }),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[hr]',
                '<hr/>'
            );
		})
];
