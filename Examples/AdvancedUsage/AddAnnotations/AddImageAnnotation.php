<?php

class AddImageAnnotation {
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
		$a->setImagePath("annotationdocs\\JohnSmith.png");
		$a->setPenStyle(GroupDocs\Annotation\Model\AnnotationInfo::PEN_STYLE_SOLID);
		$a->setOpacity(0.7);
		$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_IMAGE);
		$a->setText("This is image annotation");
		$a->setCreatorName("Anonym A.");   

		$fileInfo = new GroupDocs\Annotation\Model\FileInfo();
		$fileInfo->setFilePath("annotationdocs\\one-page.docx");

		$options = new GroupDocs\Annotation\Model\AnnotateOptions();
		$options->setFileInfo($fileInfo);
		$options->setAnnotations([$a]);
		$options->setOutputPath("Output\\output.docx");

		$request = new GroupDocs\Annotation\Model\Requests\annotateRequest($options);
		$result = $apiInstance->annotate($request);

		echo "AddImageAnnotation: Image Annotation added: " . $result->getHref();
	}
}
