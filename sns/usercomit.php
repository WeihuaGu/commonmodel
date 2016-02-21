<?php
/**
用户管理系统接口
@auther gu
*/
interface UserCommit{
	public  function addUser($useremail);
	public  function delUser($userid);
}

