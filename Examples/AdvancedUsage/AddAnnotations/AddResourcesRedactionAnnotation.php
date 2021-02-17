<?php

class AddResourcesRedactionAnnotation {
	public static function Run() { 
		$apiInstance = Utils::GetAnnotateApiInstance();
		
		$a = new GroupDocs\Annotation\Model\AnnotationInfo();
		$pt = new GroupDocs\Annotation\Model\Point();
		$pt->setX(1);
		$pt->setY(1);
		$a->setAnnotationPosition($pt);
		$box = new GroupDocs\Annotation\Model\Rectangle();
		$box->setX(100);
		$box->setY(100);
		$box->setWidth(200);
		$box->setHeight(100);
		$a->setBox($box);
		$a->setPageNumber(0);
		$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_RESOURCES_REDACTION);
		$a->setText("This is resource redaction annotation");
		$a->setCreatorName("Anonym A.");   

		$fileInfo = new GroupDocs\Annotation\Model\FileInfo();
		$fileInfo->setFilePath("annotationdocs\\one-page.docx");

		$options = new GroupDocs\Annotation\Model\AnnotateOptions();
		$options->setFileInfo($fileInfo);
		$options->setAnnotations([$a]);
		$options->setOutputPath("Output\\output.docx");

		$request = new GroupDocs\Annotation\Model\Requests\annotateRequest($options);
		$result = $apiInstance->annotate($request);

		echo "AddResourcesRedactionAnnotation: Resource redaction Annotation added: " . $result->getHref();
	}
}
