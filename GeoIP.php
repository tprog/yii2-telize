<?php
/**
 * GeoIP.php
 * @author Artem Bondarenko taxist0@gmail.com
 */
namespace tprog\telize;

use linslin\yii2\curl;


class GeoIP extends \yii\base\Component
{
    protected $url='http://www.telize.com/geoip/';

	public function request($ip=null){
        $ip=$ip?$ip:$_SERVER['REMOTE_ADDR'];
		$curl = new curl\Curl();
		$result = $curl->get($this->url.$ip);
		prn($result);
	 	return "Hello";
	}











}