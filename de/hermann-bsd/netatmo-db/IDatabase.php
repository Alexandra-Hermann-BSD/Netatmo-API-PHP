<?php
namespace de\hermannbsd\netatmodb;

use net\netatmo\IApiClient;
use net\netatmo\IApiHelper;

/**
 * 
 * @author A. Hermann
 * @copy Copyright &copy; 2015 Alexander Hermann - Beratung, Software, Design
 * project_name
 *
 * @version 1.0
 *
 */
interface IDatabase
{
	/**
	 * Gets the API-Client.
	 * 
	 *  @return IApiClient the API-Client.
	 */
	function getApiClient();
	
	/**
	 * Gets the API-Helper.
	 * 
	 * @return IApiHelper the API-Helper.
	 */
	function getApiHelper();
	
	/**
	 * Saves the current value to DB.
	 * 
	 * @param int $modul the Database modul ID.
	 * @param \DateTime $moment the current DateTime, the data was taken.
	 * @param object $value the taken value.
	 */
	
	function saveCurrentValue($modul, $moment, $value);
}

?>