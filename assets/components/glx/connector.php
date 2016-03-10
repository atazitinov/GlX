<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var GlX $GlX */
$GlX = $modx->getService('glx', 'GlX', $modx->getOption('glx_core_path', null, $modx->getOption('core_path') . 'components/glx/') . 'model/glx/');
$modx->lexicon->load('glx:default');

// handle request
$corePath = $modx->getOption('glx_core_path', null, $modx->getOption('core_path') . 'components/glx/');
$path = $modx->getOption('processorsPath', $GlX->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));