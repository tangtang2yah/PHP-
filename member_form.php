<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<script>
function check_input()
{
	if (!document.member_form.id.value) {
	alter("아이디를 입력하세요!");
	document.member_form.id.focus();
	return;
	}

	if (!document.member_form.pass.value) {
	alter("비밀번호를 입력하세요!");
	document.member_form.pass.focus();
	return;
	}

    if (!document.member_form.pass_confirm.value) {
	alter("비밀번호 확인을 입력하세요!");
	document.member_form.pass_confirm.focus();
	return;
	}

	if (!document.member_form.id.name.value) {
	alter("이름을 입력하세요");
	document.member_form.name.focus();
	return;
	}

	if (!document.member_form.id.email1.value) {
	alter("이메일 주소를 입력하세요");
	document.member_form.email1.focus();
	return;
	}
    
    if (!document.member_form.id.email2.value) {
	alter("이메일 주소를 입력하세요");
	document.member_form.email2.focus();
	return;
	}

}