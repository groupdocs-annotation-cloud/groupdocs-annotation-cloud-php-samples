<?php

// This example demonstrates how to get document information
class GetDocumentInformation {
  public static function Run() { 
      $infoApi = Utils::GetInfoApiInstance();
      
      $fileInfo = new GroupDocs\Annotation\Model\FileInfo();
      $fileInfo->setFilePath("annotationdocs\\one-page.docx");

	    $request = new GroupDocs\Annotation\Model\Requests\getInfoRequest($fileInfo);
	    $response = $infoApi->getInfo($request);	  
      
      echo "InfoResult.PagesCount: " . count($response->getPages());
      echo "\n";
  }
}
