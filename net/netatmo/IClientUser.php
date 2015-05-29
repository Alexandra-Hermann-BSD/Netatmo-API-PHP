<?php
namespace net\netatmo;

/**
 * Interface for user client values.
 * 
 * @author A. Hermann
 * @copy Copyright &copy; 2015 Alexander Hermann - Beratung, Software, Design
 * Netatmo-API-PHP FORK
 *
 * @version 1.0
 *
 */
interface IClientUser
{
	/**
	 * Client-ID.
	 * @return \string current client-id.
	 */
	function GetClientID();
	/**
	 * Client-Secret.
	 * @return \string current client secret.
	 */
	function GetClientSecret();
	/**
	 * User name.
	 * @return \string current user name.
	 */
	function GetUsername();
	/**
	 * User password.
	 * @return \string current user password
	 */
	function GetPassword();
}

?>