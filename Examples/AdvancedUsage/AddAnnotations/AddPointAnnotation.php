<?php

class AddPointAnnotation {
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
		$a->setOpacity(0.7);
		$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_POINT);
		$a->setText("This is point annotation");
		$a->setCreatorName("Anonym A.");   

		$request = new GroupDocs\Annotation\Model\Requests\postAnnotationsRequest("annotationdocs\\one-page.docx", [$a]);
		$apiInstance->postAnnotations($request);

		echo "AddPointAnnotation: Point Annotation added.";
	}
}
