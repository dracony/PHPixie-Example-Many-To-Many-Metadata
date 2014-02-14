<?php

namespace App\Model;

class Borrow extends \PHPixie\ORM\Model {
	public $table = "users_items";
	protected $belongs_to = array('user', 'item');
}