<?php
require_once $modx->getOption('stercseo.core_path',null,$modx->getOption('core_path').'components/stercseo/').'model/stercseo/stercseo.class.php';
$stercseo = new StercSeo($modx,$scriptProperties);
return $stercseo->sitemap($modx->resource->get('context_key'), 'sitemap/rowTpl', 'sitemap/outerTpl');