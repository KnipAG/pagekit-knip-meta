<?php

namespace Knip\Meta;

use Pagekit\Framework\Application;
use Pagekit\Extension\Extension;

class KnipMetaExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
        parent::boot($app);

        $view = $app['view'];

        $app['view.sections']->prepend('head', function () use ($view) {

            $result = [];

            if ($description = $view->get('head.description')) {
                $result[] = sprintf('        <meta name="description" content="%s"/>', $description);
            }

            return implode(PHP_EOL, $result);
        });
    }
}
