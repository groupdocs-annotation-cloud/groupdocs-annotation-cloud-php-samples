<?php

class GetDiscUsage {
  public static function Run() { 
	$apiInstance = Utils::GetStorageApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\GetDiscUsageRequest();
	$response = $apiInstance->getDiscUsage($request);
		
	echo "Expected response type is DiscUsage: ", $response;
  }
}
