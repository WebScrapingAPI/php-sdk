# WebScrapingApi PHP SDK
WebScrapingApi is an API that allows scraping websites while using rotating proxies to prevent bans. This SDK for PHP makes the usage of the API easier to implement in any project you have.

# Installation
Run the following command in the main folder of your project:
```
composer require webscrapingapi/php-sdk
```
# API Key
To use the API and the SDK you will need a API Key. You can get one by registering at [WebScrapingAPI](https://app.webscrapingapi.com/dashboard).

# Usage
Using the SDK it's quite easy. An example of a GET call to the API is the following:
```
<?php
 namespace Examples {
    
 require('main.php');
 use WebScrapingApi\Client;
    
 $API_KEY = "YOUR_API_KEY_HERE"; // enter your api key here
    
 $client = new Client($API_KEY);
    
 $params = array(
     # API Parameters
     # Set to 0 (off, default) or 1 (on) depending on whether or not to render JavaScript on the target web page. JavaScript rendering is done by using a browser.
     "render_js" => 1,
     # Set datacenter (default) or residential depending on whether proxy type you want to use for your scraping request. Please note that a single residential proxy API request is counted as 25 API requests.
     "proxy_type" => "datacenter",
     # Using the auto_parser parameter, you can get the scraped site in JSON format.
     "auto_parser" => 1
    ); 
    
  print($client->get('https://bing.com', $params));
 
 }   
 ```
For more reference, you can check out multiple examples here [here](https://github.com/aao056/php-sdk/blob/main/example/examples.php)

For a better understanding of the parameters, please check out our [documentation](https://app.webscrapingapi.com/documentation/getting-started)
