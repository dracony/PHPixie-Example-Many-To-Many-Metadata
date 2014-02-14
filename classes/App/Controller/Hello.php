<?php

namespace App\Controller;

class Hello extends \PHPixie\Controller {

	public function action_index() {
		$borrows = $this->pixie-> orm->get('user')
								->where('name', 'user_1')
									->borrows
										->with('item', 'user')
										->find_all();
		foreach($borrows as $borrow) {
			$this->response->body.="{$borrow->user->name} {$borrow->state} {$borrow->item->name}<br/>";
		}
	}

}
