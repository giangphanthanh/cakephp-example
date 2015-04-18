<?php
class Category extends AppModel {
	var $name = 'Category';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Book' => array(
			'className' => 'Book',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
