<?php
namespace de\hermannbsd\netatmodb;

/**
 * Class to define a type of a sensor.
 * 
 * @author A. Hermann
 * @copy Copyright &copy; 2015 Alexander Hermann - Beratung, Software, Design
 * project_name
 *
 * @version 1.0
 *
 */
class SensorType
{
	/**
	 * The type of a sensor is a sensor.
	 * 
	 * @var bool
	 */
	public $sensor;
	/**
	 * The type of the sensor is a base station.
	 * 
	 * @var bool
	 */
	public $base;

	/**
	 * Constructor. Sets base to false and sensor to true.
	 */
	function __construct()
	{
		$this->base = FALSE;
		$this->sensor = TRUE;
	}
}

/**
 * 
 * @author A. Hermann
 * @copy Copyright &copy; 2015 Alexander Hermann - Beratung, Software, Design
 * project_name
 *
 * @version 1.0
 *
 */
interface ISensor
{
	/**
	 * Gets the name of the sensor.
	 * 
	 * @return string the name of the sensor.
	 */
	function getName();
	/**
	 * Gets the sensor ID.
	 * 
	 * @return int the sensor ID.
	 */
	function getID();
	/**
	 * Gets the sensor type of this sensor.
	 * 
	 * @return SensorType the sensor type.
	 */
	function getType();
	/**
	 * Gets, if the sensor is active or not.
	 * 
	 * @return bool active state.
	 */
	function getActive();
	/**
	 * Sets the active state.
	 * 
	 * @param bool $active the active state.
	 */
	function setActive($active);
	/**
	 * Load from DataBase.
	 * 
	 * @param object $db the DataBase object.
	 * @param int $id the sensor DataBase ID.
	 * 
	 * @return ISensor a Sensor.
	 */
	function load($db, $id);
	
	/**
	 * Saves Sensor to DataBase..
	 * 
	 * @param object $db the DataBase object.
	 */
	function save($db);
	
	/**
	 * Gets an array with current DataBase sensor-IDs.
	 * 
	 * @return \ArrayObject an array, with a list of current DataBase sensor-IDs.
	 */
	function getSensorIdList();
}

?>