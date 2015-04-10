<?php
/**
 * GeoIP.php
 * @author Artem Bondarenko taxist0@gmail.com
 */
namespace tprog\telize;

use wenbin1989\yii2\curl;


class GeoIP extends \yii\base\Component
{
    protected $url;
    protected $result;

    public function __construct($url = 'http://www.telize.com/geoip/')
    {
        $this->url = $url;
    }

    public function request($ip = null)
    {
        $ip = $ip ? $ip : $_SERVER['REMOTE_ADDR'];
        $curl = new curl\Curl();

        $this->result = json_decode($curl->get($this->url . $ip));

        return $this->result;
    }

    public function __get($name){
        if (isset($this->result->$name)){
            return $this->result->$name;
        }
        return false;
    }


}