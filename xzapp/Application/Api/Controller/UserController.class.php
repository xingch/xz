<?php
/**
 * 用户控制器
 * @author wg
 * @version 2015-04-07 
 */
namespace Api\Controller;
use Think\Controller;
class UserController extends Controller {
	public function __construct(){
		
	}
	
	/**
	 * 注册 
	 */
    public function register(){
		$this->show('这里是注册');
    }
}