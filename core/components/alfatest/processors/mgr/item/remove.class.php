<?php

/**
 * Remove an Items
 */
class alfatestItemRemoveProcessor extends modObjectProcessor {
	public $objectType = 'alfatestItem';
	public $classKey = 'alfatestItem';
	public $languageTopics = array('alfatest');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('alfatest_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var alfatestItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('alfatest_item_err_nf'));
			}

			$object->remove();
		}

		return $this->success();
	}

}

return 'alfatestItemRemoveProcessor';