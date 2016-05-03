<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var alfatest $alfatest */
$alfatest = $modx->getService('alfatest', 'alfatest', $modx->getOption('alfatest_core_path', null, $modx->getOption('core_path') . 'components/alfatest/') . 'model/alfatest/');
$modx->lexicon->load('alfatest:default');

// handle request
$corePath = $modx->getOption('alfatest_core_path', null, $modx->getOption('core_path') . 'components/alfatest/');
$path = $modx->getOption('processorsPath', $alfatest->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));
