<?php

namespace App\Model;

class Item extends \PHPixie\ORM\Model{
	protected $has_many = array('borrow');
}