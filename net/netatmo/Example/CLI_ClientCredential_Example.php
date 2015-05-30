#!/usr/bin/php
<?php
namespace net\netatmo\Example;
use net\netatmo\ApiClient;
use net\netatmo\ApiHelper;
use net\netatmo\Scopes;
use net\netatmo\ClientException;
use net\netatmo\Example\ExampleClient;
/*
Authentication to Netatmo Server with the user credentials grant
*/
require_once '../AppliCommonPublic.php';
require_once '../ApiClient.php';
require_once 'Config.php';

$scope = Scopes::SCOPE_READ_STATION;

$client = new ApiClient(array("client_id" => ExampleClient::CLIENT_ID, "client_secret" => ExampleClient::CLIENT_SECRET, "username" => ExampleClient::TEST_USERNAME, "password" => ExampleClient::TEST_PASSWORD, "scope" => $scope));
$helper = new ApiHelper($client);

try {
    $tokens = $client->getAccessToken();

} catch(ClientException $ex) {
    echo "An error happend while trying to retrieve your tokens\n";
    exit(-1);
}

// Retrieve User Info :
$user = $helper->api("getuser", "POST");
echo ("-------------\n");
echo ("- User Info -\n");
echo ("-------------\n");
//print_r($user);
echo ("OK\n");
echo ("---------------\n");
echo ("- Device List -\n");
echo ("---------------\n");
$devicelist = $helper->simplifyDeviceList();
echo ("OK\n");
echo ("-----------------\n");
echo ("- Last Measures -\n");
echo ("-----------------\n");
$mesures = $helper->getLastMeasures();
print_r($mesures);
echo ("OK\n");
echo ("---------------------\n");
echo ("- Last Day Measures -\n");
echo ("---------------------\n");
$mesures = $helper->getAllMeasures(mktime() - 86400);
print_r($mesures);
echo ("OK\n");


?>
