# yii2-telize
Get  location by IP address use telize API

http://www.telize.com/

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "tprog/yii2-telize": "*@dev"
    }
}
```

Usage
-----
```php
<?
// ...

use tprog\telize\GeoIP;

$GeoIP = new GeoIP();

$GeoIP->request();

echo $GeoIP->longitude;
echo $GeoIP->latitude;
echo $GeoIP->continent_code;
echo $GeoIP->city;
echo $GeoIP->timezone;
echo $GeoIP->region;
echo $GeoIP->country_code;
echo $GeoIP->isp;
echo $GeoIP->country_code3;
echo $GeoIP->country;
echo $GeoIP->region_code;

```