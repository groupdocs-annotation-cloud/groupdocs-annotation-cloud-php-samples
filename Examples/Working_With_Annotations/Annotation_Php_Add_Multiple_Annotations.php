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
	$a->setPageNumber(0);
	$a->setPenColor(1201033);
	$a->setPenStyle(0);
	$a->setPenWidth(1);
	$a->setOpacity(0.7);
	$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_DISTANCE);
	$a->setText("This is distance annotation");
	$a->setCreatorName("Anonym A.");

	$a1 = new GroupDocs\Annotation\Model\AnnotationInfo();
	$pt = new GroupDocs\Annotation\Model\Point();
	$pt->setX(852);
	$pt->setY(59.388262910798119);
	$a1->setAnnotationPosition($pt);
	$box = new GroupDocs\Annotation\Model\Rectangle();
	$box->setX(375.89276123046875);
	$box->setY(59.388263702392578);
	$box->setWidth(88.7330551147461);
	$box->setHeight(37.7290153503418);
	$a1->setBox($box);
	$a1->setPageNumber(2);
	$a1->setPenColor(1201033);
	$a1->setPenStyle(0);
	$a1->setPenWidth(1);
	$a1->setOpacity(0.7);
	$a1->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_AREA);
	$a1->setText("This is area annotation");
	$a1->setCreatorName("Anonym A.");   

	$a2 = new GroupDocs\Annotation\Model\AnnotationInfo();
	$pt = new GroupDocs\Annotation\Model\Point();
	$pt->setX(852);
	$pt->setY(59.388262910798119);
	$a2->setAnnotationPosition($pt);
	$box = new GroupDocs\Annotation\Model\Rectangle();
	$box->setX(375.89276123046875);
	$box->setY(59.388263702392578);
	$box->setWidth(88.7330551147461);
	$box->setHeight(37.7290153503418);
	$a2->setBox($box);
	$a2->setPageNumber(4);
	$a2->setOpacity(0.7);
	$a2->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_POINT);
	$a2->setText("This is point annotation");
	$a2->setCreatorName("Anonym A.");

	$a3 = new GroupDocs\Annotation\Model\AnnotationInfo();
	$pt = new GroupDocs\Annotation\Model\Point();
	$pt->setX(852);
	$pt->setY(59.388262910798119);
	$a3->setAnnotationPosition($pt);
	$box = new GroupDocs\Annotation\Model\Rectangle();
	$box->setX(375.89276123046875);
	$box->setY(59.388263702392578);
	$box->setWidth(88.7330551147461);
	$box->setHeight(37.7290153503418);
	$a3->setBox($box);
	$a1->setPageNumber(5);
	$a1->setPenColor(1201033);
	$a1->setPenStyle(0);
	$a1->setPenWidth(1);
	$a3->setOpacity(0.7);
	$a3->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_ARROW);
	$a3->setText("This is arrow annotation");
	$a3->setCreatorName("Anonym A."); 

	$request = new GroupDocs\Annotation\Model\Requests\postAnnotationsRequest("annotationdocs\\ten-pages.docx", [$a, $a1, $a2, $a3]);
	$apiInstance->postAnnotations($request);

    echo "Expected response type is void: Multiple Annotations added.";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}