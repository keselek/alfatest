<?php

/**
 * Create an Item
 */
class alfatestItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'alfatestItem';
	public $classKey = 'alfatestItem';
	public $languageTopics = array('alfatest');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('alfatest_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('alfatest_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'alfatestItemCreateProcessor';