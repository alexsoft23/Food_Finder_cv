<?php
class Institution implements Model {
	
	protected static function table_name() {
		return "qwerty_institution";
	}
	
	public function __get($field_name)
	{	
		if(property_exists($this, $field_name))
		{	
			return $this->$field_name;
		}
		return null;
	}
}
?>