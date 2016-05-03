<?php

/**
 * Class alfatestMainController
 */
abstract class alfatestMainController extends modExtraManagerController {
	/** @var alfatest $alfatest */
	public $alfatest;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('alfatest_core_path', null, $this->modx->getOption('core_path') . 'components/alfatest/');
		require_once $corePath . 'model/alfatest/alfatest.class.php';

		$this->alfatest = new alfatest($this->modx);
		//$this->addCss($this->alfatest->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->alfatest->config['jsUrl'] . 'mgr/alfatest.js');
		$this->addHtml('
		<script type="text/javascript">
			alfatest.config = ' . $this->modx->toJSON($this->alfatest->config) . ';
			alfatest.config.connector_url = "' . $this->alfatest->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('alfatest:default');
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
class IndexManagerController extends alfatestMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}