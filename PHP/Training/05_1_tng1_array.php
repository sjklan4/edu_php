<?php

// 음식종류 5개 이상을 배열로 만들어주세요.
$food = array("짜장면", "짬뽕"
			, "탕수육", "볶음밥"
			, "짜장밥", "짬뽕밥");
//echo $food[4];

// array $food에서 무작위로 값을 출력해 주세요.
$rand_num = rand(0,5);
//echo $food[$rand_num];

// 키는 요리명, 값은 주재료 하나 로 인루어진 배열을
// 만들어주세요.(배열 길이는 4)
$arr_ass = array("된장찌개" => "파"
				, "볶음밥" => "양파"
				, "김치" => "마늘"
				, "비빔밥" => "참기름");
//echo $arr_ass["비빔밥"];

// 키:김치 원소를 삭제해 주세요.
$arr_ass_del = array(
				"된장찌개" => "파"
				, "볶음밥" => "양파"
				, "김치" => "마늘"
				, "비빔밥" => "참기름"
			);
unset($arr_ass_del["김치"]);
//var_dump($arr_ass_del);

// foreach문을 이용해서 키가 "삭제"인 요소를 제거해 주세요.
// if문 사용, unset("삭제") X, 키가 "삭제" 이외는 "키 : 값"포맷으로 출력
$arr_ass_del = array(
	"된장찌개" => "파"
	, "볶음밥" => "양파"
	, "삭제" => "값값"
	, "김치" => "마늘"
	, "비빔밥" => "참기름"
);

foreach($arr_ass_del as $key => $val)
{
	if($key === "삭제")
	{
		unset($arr_ass_del[$key]);
	}
	else
	{
		echo $key . " : " . $val . "\n";
	}
}
print_r($arr_ass_del);