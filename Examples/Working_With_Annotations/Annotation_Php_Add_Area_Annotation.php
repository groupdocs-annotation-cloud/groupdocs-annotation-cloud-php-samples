<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetAnnotateApiInstance();
	
	$a = new GroupDocs\Annotation\Model\AnnotationInfo();
	$pt = new GroupDocs\Annotation\Model\Point();
	$pt->setX(852);
	$pt->setY(59.388262910798119);
	$a->setAnnotationPosition($pt);
	$box = new GroupDocs\Annotation\Model\Rectangle();
	$box->setX(375.89276123046875);
	$box->setY(59.388263702392578);
	$box->setWidth(88.7330551147461);
	$box->setHeight(37.7290153503418);
	$a->setBox($box);
	$a->setPageNumber(2);
	$a->setPenColor(1201033);
	$a->setPenStyle(0);
	$a->setPenWidth(1);
	$a->setOpacity(0.7);
	$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_AREA);
	$a->setText("This is area annotation");
	$a->setCreatorName("Anonym A.");   

	$request = new GroupDocs\Annotation\Model\Requests\postAnnotationsRequest("annotationdocs\\ten-pages.docx", [$a]);
	$apiInstance->postAnnotations($request);

    echo "Expected response type is void: Area Annotation added.";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}