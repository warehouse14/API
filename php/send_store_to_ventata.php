
<?php
function send_store_to_ventata($store)
{   
	//enter your ventata company API key here
	$companyApiKey = '';
	
    $data = array(
        'Name' => 'My Awesome TShirt Store',
        'URL' => 'https://myTShirtStoreOnline.com',        
    );
    
    $data_string = json_encode($data);
    $ch = curl_init();
    $url = "https://api.ventata.com/store?ApiKey=" . $apiKey;
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    
    $result = curl_exec($ch);	
    print_r($result);
    curl_close($ch);
}

?>
