<?php
/**
 * Абстрактний клас для роботи з таблицями бази даних.
 * Кожна таблиця матиме свій клас для роботи з нею,
 * який буде нащадком даного базового класу.
 */
abstract class Model
{
	/**
	 * Абстрактний метод, який повертатиме назву таблиці БД.
	 * Для кожної моделі буде своя назва таблиці.
	 */
	abstract protected static function table_name();
	
	/**
	 * Універсальний getter для всіх полів.
	 * @param string $field_name назва поля
	 * @return mixed null, якщо такого поля в класі не існує
	 */
	public function __get($field_name)
	{	
		if(property_exists($this, $field_name))
		{	
			return $this->$field_name;
		}
		return null;
	}
	
	/**
	 * Create new record.
	 * @param array $fields associative array. Keys - fields in database,
	 * values - new values
	 * @return boolean true if success, false otherwise
	 */
	public function create($fields = [])
	{
		global $link;
		$table = $this->table_name();
		$keys = ""; $values = "";
		foreach($fields as $key => $value) {
			if (property_exists($this, $key)) {
				$keys = $keys . "`" . $key . "`,";
				$values = $values . "'" . $value . "',";
			}
		}
		$values = rtrim($values, ",");
		$keys = rtrim($keys, ",");
		if($keys != "")
			return $link->query("INSERT INTO `$table` ($keys) VALUES ($values)");
		else
			return false;
	}
	
	/**
	 * Find record by any fields or its part.
	 * @param array $fields associative array. Keys - fields in database,
	 * @return resulting array of appropriate records
	 */
	public function find($fields = []) {
		global $link;
		$table = $this->table_name();
		$where = "";
		foreach($fields as $key => $value) {
			if (property_exists($this, $key)) {
				//die($key);
				$where = $where . "AND " . "$key" . " Like('%$value%') ";
			}
		}
		$where = trim($where, "AND");
		$where = trim($where);
		$query = "SELECT * FROM " . "`$table`" . " WHERE $where";
		$res = $link->query($query);
		$i = 0;
		//die($query);
		$result = [];
		while ($row = mysqli_fetch_array($res)) {
			$result[] = $row;
		}
		return $result;
	}
	
	/**
	 * Пошук запису за будь-яким полем.
	 * @param array $fields асоціативний масив. Ключі - це назви полів у БД,
	 * значення - шукані значення
	 * @return mixed масив знайдених записів або false, якщо нічого не знайдено
	 */
	/*public function find($fields = [])
	{
		// ТУТ МОЖЕ БУТИ ВАШ КОД :)
	}*/
	
	/**
	 * Редагування запису.
	 * @param array $fields асоціативний масив. Ключі - це назви полів у БД,
	 * значення - нові значення
	 * @return boolean true, якщо запис успішно відредаговано або
	 * не вказано полів для оновлення
	 */
	public function update($fields = [])
	{
		global $link;
		foreach($fields as $key=>$value)
		{
			// якщо такого поля не існує в базі даних
			if(!property_exists($this, $key))
			{
				// вилучаємо його з масиву
				unset($fields[$key]);
			}
		}
		if(empty($fields)==true)
		{
			return true;
		}
		// зараз у масиві $fields лише елементи з тими ключами, які точно є в БД
		$string = "";
		foreach($fields as $key=>$value)
		{
			$string = $string . $key . "='" . $value . "',";
		}
		$string = substr($string,0,-1);
		$sql = "UPDATE `{$this->table_name}` SET $string WHERE `id`=".$this->id;
		$res = $link->query($sql);
		return $res;
	}
	
	/**
	 * Видалення вказаного запису.
	 * @param integer $id ID запису, який потрібно видалити
	 * @return boolean true, якщо запит успішно вдався, false в іншому випадку
	 */
	public static function delete($id)
	{
		global $link;
		$class = get_called_class(); // визначення, з якого саме дочірнього класу 
		// ми викликаємо метод delete
		return $link->query("DELETE FROM `".$class::table_name()."` WHERE `id`='$id'");
	}
}
