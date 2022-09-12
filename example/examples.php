<?php
namespace Examples {
    require('main.php');
    use WebScrapingApi\Client;
 
    $API_KEY = "YOUR_API_KEY_HERE"; // enter your api key here
    $client = new Client($API_KEY);

    $params = array(
        "render_js" => 1,
        "proxy_type" => "datacenter",
        "auto_parser" => 1
    );

    $headers = array(
        "Wsa-My-header" => "test",
        "Wsa-User-Agent" => "potato"
    );

    $body = array(
        "foo" => "bar"
    );

    //print($client -> get('https://httpbin.org/get')); // GET request example

    //print($client -> get('https://bing.com',$params)); // GET request with params example
     
    //print($client -> get('https://httpbin.org/get',$params)); // GET request with params example

    //print($client -> get('https://webscrapingapi.com',$params)); // GET request with params example

    //print($client -> get('https://httpbin.org/headers',[],$headers)); // GET request with headers example

    //print($client -> post('https://httpbin.org/post',[],[],$body)); // POST request with body example

}