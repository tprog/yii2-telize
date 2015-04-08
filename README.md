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

vardump ($GeoIP->request());
```