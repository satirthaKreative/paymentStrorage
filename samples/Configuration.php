<?php 
class Configuration
{
  // For a full list of configuration parameters refer in wiki page (https://github.com/paypal/sdk-core-php/wiki/Configuring-the-SDK)
  public static function getConfig()
  {
    $config = array(
        // values: 'sandbox' for testing
        //       'live' for production
        "mode" => "sandbox",
        'log.LogEnabled' => true,
        'log.FileName' => '../PayPal.log',
        'log.LogLevel' => 'FINE'
  
        // These values are defaulted in SDK. If you want to override default values, uncomment it and add your value.
        // "http.ConnectionTimeOut" => "5000",
        // "http.Retry" => "2",
       
    );
    return $config;
  }
  
  // Creates a configuration array containing credentials and other required configuration parameters.
  public static function getAcctAndConfig()
  {
    $config = array(
        // Signature Credential
        "acct1.UserName" => "sb-yucx43854868_api1.business.example.com",
        "acct1.Password" => "2V525HA5ELW46RMC",
        "acct1.Signature" => "AwF6ruVhMF8QSdMoJOvkdHcABZ8IAQYTtH3rsW36C-pfQbRi7k3yFz-v",
    	// Subject is optional and is required only in case of third party authorization
    	//"acct1.Subject" => "",        
    
        // Sample Certificate Credential
        // "acct1.UserName" => "certuser_biz_api1.paypal.com",
        // "acct1.Password" => "D6JNKKULHN3G5B8A",
        // Certificate path relative to config folder or absolute path in file system
        // "acct1.CertPath" => "cert_key.pem",
        // "acct1.AppId" => "APP-80W284485P519543T"
        );
    
    return array_merge($config, self::getConfig());;
  }

}


