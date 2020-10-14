<?php

// This example demonstrates how to get document information
class GetDocumentInformation {
  public static function Run() { 
      $infoApi = Utils::GetInfoApiInstance();

	  $request = new GroupDocs\Annotation\Model\Requests\getInfoRequest("annotationdocs\one-page.docx");
	  $response = $infoApi->getInfo($request);	  
      
      echo "InfoResult.PagesCount: " . count($response->getPages());
      echo "\n";
  }
}
