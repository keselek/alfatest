<?php

/**
 * The home manager controller for alfatest.
 *
 */
class alfatestHomeManagerController extends alfatestMainController {
	/* @var alfatest $alfatest */
	public $alfatest;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('alfatest');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->alfatest->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->alfatest->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->alfatest->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->alfatest->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->alfatest->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->alfatest->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->alfatest->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "alfatest-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->alfatest->config['templatesPath'] . 'home.tpl';
	}
}