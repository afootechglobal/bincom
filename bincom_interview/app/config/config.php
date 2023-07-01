<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
//header("Access-Control-Allow-Origin: *");
//header('Content-Type: application/json; charset=UTF-8');
$thename='Bincom ICT';
$website_address =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$website_url="http://localhost/bincom/bincom_interview/app";
//$website_url="http://192.168.43.159/sowapp.com";
?>


<script>

    //// for application
var website_url="http://localhost/bincom/bincom_interview/app";
var local_url=website_url+"/config/code.php"


//// for API
var api_url='http://localhost/bincom/bincom_interview/api';
var fetch_states_url=api_url+'/?action=fetch_states';
var fetch_lga_url=api_url+'/?action=fetch_lga';
var fetch_ward_url=api_url+'/?action=fetch_ward';
var fetch_polling_unit_url=api_url+'/?action=fetch_polling_unit';
var fetch_election_result_url=api_url+'/?action=get_election_result';
var total_polling_unit_url=api_url+'/?action=total_polling_unit';


</script>