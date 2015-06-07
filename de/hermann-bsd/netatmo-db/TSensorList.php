<?php
namespace de\hermannbsd\netatmodb;

use de\hermannbsd\netatmodb\ISensor;



/**
 * 
 * @author A. Hermann
 * @copy Copyright &copy; 2015 Alexander Hermann - Beratung, Software, Design
 * project_name
 *
 * @version 1.0
 *
 */
trait TSensorList
{
	/**
	 * Array for a list of sensors.
	 * 
	 * @var \ArrayObject 
	 */
	protected $sensorList;
	
	/**
	 * Adds a sensor to the sensor-list.
	 * 
	 * @param ISensor $sensor
	 */
	public function AddSensor($sensor)
	{
		$this->sensorList->append($sensor);
	}
	
	/**
	 * Gets a sensor from the sensor list from an id of the list (position).
	 * 
	 * @param int $id the position in the sensor list.
	 * 
	 * @return ISensor the sensor from the given position.
	 */
	public function GetSensor($id) 
	{
		return $this->sensorList[$id];
	}
	
	/**
	 * Loads the own list with sensors from the given DataBase.
	 * 
	 * @param object $db DataBase.
	 * @param array $sensorIdList array with the DataBase-IDs of sensors.
	 * @param ISensor $exampleSensor a sensor of an implementing class, to get the load function.
	 */
	public function LoadFromDB($db, $sensorIdList, $exampleSensor)
	{
		
		$sList = array();
		
		$sensor = NULL;
		
		foreach ($sensorIdList as $sID) {
			$sensor = $exampleSensor->load($db, $sID);
			array_push($sList, $sensor);
		}
		
		$this->sensorList = new \ArrayObject($sList);
	}
	
	/**
	 * Saves all content of sensorList to DataBase.
	 * @param object $db DataBase to save to.
	 */
	public function SafeToDB($db) {
		foreach ($this->sensorList as $value) {
			$value->save($db);
		}
	}
}

?>