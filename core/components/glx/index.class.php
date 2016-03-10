<?php

/**
 * Class GlXMainController
 */
abstract class GlXMainController extends modExtraManagerController {
	/** @var GlX $GlX */
	public $GlX;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('glx_core_path', null, $this->modx->getOption('core_path') . 'components/glx/');
		require_once $corePath . 'model/glx/glx.class.php';

		$this->GlX = new GlX($this->modx);
		$this->addCss($this->GlX->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->GlX->config['jsUrl'] . 'mgr/glx.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			GlX.config = ' . $this->modx->toJSON($this->GlX->config) . ';
			GlX.config.connector_url = "' . $this->GlX->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('glx:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends GlXMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}