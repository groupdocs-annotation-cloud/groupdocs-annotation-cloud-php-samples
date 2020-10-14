<?php

class DeletePages {
	public static function Run() { 
		$apiInstance = Utils::GetPreviewApiInstance();
		
		$request = new GroupDocs\Annotation\Model\Requests\DeletePagesRequest("annotationdocs\\one-page.docx");
		$apiInstance->deletePages($request);
	
		echo "DeletePages: pages deleted.";
	}
}
