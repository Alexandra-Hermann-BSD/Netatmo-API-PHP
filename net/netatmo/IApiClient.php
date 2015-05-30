<?php
namespace net\netatmo;

/**
 * Aditional Interface for net\netatmo\ApiClient to make everything more OOP.
 * 
 * @author A. Hermann
 * @copy Copyright &copy; 2015 Alexander Hermann - Beratung, Software, Design
 * 
 * Netatmo-API-PHP FORK
 *
 * @version 1.0
 *
 */
interface IApiClient
{
	/**
	 * Make an API call.
	 *
	 * Support both OAuth2.0 or normal GET/POST API call, with relative
	 * or absolute URI.
	 *
	 * If no valid OAuth2.0 access token found in session object, this function
	 * will automatically switch as normal remote API call without "access_token"
	 * parameter.
	 *
	 * Assume server reply in JSON object and always decode during return. If
	 * you hope to issue a raw query, please use makeRequest().
	 *
	 * @param string $path The target path, relative to base_path/service_uri or an absolute URI.
	 * @param string $method (optional) The HTTP method (default 'GET').
	 * @param \array $params (optional) The GET/POST parameters.
	 * @param \bool $secure
	 * @return \array The JSON decoded body response object.
	 */
	function api($path, $method, $params, $secure);
	
	/**
	 * Retrieve an access token following the best grant to recover it (order id : code, refresh_token, password)
	 *
	 * @throws InternalErrorType if unable to retrieve an access_token
	 * @return \array A valid array containing at least an access_token as an index
	 */
	function getAccessToken();
	
	/**
	 * Get url to redirect to oauth2.0 netatmo authorize endpoint
	 * This is the url where app server needing netatmo access need to route their user (via redirect)
	 *
	 * @param string $state state returned in redirect_uri
	 * @return string The URL for the given parameters.
	 */
	function getAuthorizeUrl($state);
	
	/**
	 * Returns, if the current token should be refreshed.
	 *
	 * @return \bool
	 */
	function getRefreshToken();
	
	/**
	 * Sets a persistent variable.
	 *
	 * To avoid problems, always use lower case for persistent variable names.
	 *
	 * @param string $name The name of the variable to set.
	 * @param \object $value The value to set.
	 * @return \net\netatmo\IApiClient this object.
	 */
	function setVariable($name, $value);
	
	/**
	 * Since $_SERVER['REQUEST_URI'] is only available on Apache, we
	 * generate an equivalent using other environment variables.
	 *
	 * @return string
	 */
	function getRequestUri();
	
	/**
	 * Returns a persistent variable.
	 *
	 * To avoid problems, always use lower case for persistent variable names.
	 *
	 * @param string $name The name of the variable to return.
	 * @param \object $default The default value to use if this variable has never been set.
	 * @return \object The value of the variable.
	 */
	function getVariable($name, $default);
	
	/**
	 * Makes an HTTP request.
	 *
	 * This method can be overriden by subclasses if developers want to do
	 * fancier things or use something other than cURL to make the request.
	 *
	 * @param string $path The target path, relative to base_path/service_uri or an absolute URI.
	 * @param string $method (optional) The HTTP method (default 'GET').
	 * @param array $params (optional) The GET/POST parameters.
	 * @throws CurlErrorType ClientException if pb happend
	 * @throws JsonErrorType ClientException if pb happend
	 * @throws ApiErrorType ClientException if pb happend
	 * @return \array The json_decoded result
	 */
	function makeRequest($path, $method, $params);
	
	/**
	 * Make a REST call to a Netatmo server that do not need access_token
	 *
	 * @param string $path The target path, relative to base_path/service_uri or an absolute URI.
	 * @param string $method (optional) The HTTP method (default 'GET').
	 * @param \array $params (optional) The GET/POST parameters.
	 * @return \array The JSON decoded response object.
	 */
	function noTokenApi($path, $method, $params);
	
	/**
	 * Set token stored by application (in session generally) into this object.
	 *
	 * @param \array $value
	 */
	function setTokensFromStore($value);
	
	/**
	 * unset all tokens.
	 */
	function unsetTokens();
}

/**
 * Aditional Interface for net\netatmo\ApiHelper to make everything more OOP.
 * 
 * @author A. Hermann
 * @copy Copyright &copy; 2015 Alexander Hermann - Beratung, Software, Design
 * 
 * Netatmo-API-PHP FORK
 *
 * @version 1.0
 *
 */
interface IApiHelper
{
	/**
	 *
	 * @param string $method
	 * @param string $action
	 * @param \array $params
	 * @return \array
	 */
	function api($method, $action, $params);
	
	/**
	 *
	 * @param unknown $date_begin
	 * @return multitype:multitype:
	 */
	function getAllMeasures($date_begin);
	
	/**
	 *
	 * @return multitype:multitype:
	 */
	function getLastMeasures();
	
	/**
	 *
	 * @param unknown $device
	 * @param unknown $device_type
	 * @param unknown $date_begin
	 * @param string $module
	 * @param string $module_type
	 * @return multitype:NULL unknown
	 */
	function getMeasure($device, $device_type, $date_begin, $module, $module_type);
	
	/**
	 *
	 * @param \string $app_type
	 * @return \array
	 */
	function simplifyDeviceList($app_type);
}
?>