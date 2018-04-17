Yii2 wrapper for Sape.ru
=======================

Компонент для установки ссылок с биржи sape.ru

Installation
------------
Install with composer:
```
composer require pa3py6aka/yii2-sape
```
or add
```
"pa3py6aka/yii2-sape": "*"
```
to the require section of your composer.json file.

Usage
-----
Включить компонент в настройках:
```
'components' => [
    // ....
    'sape' => [
        'class' => 'pa3py6aka\yii2\sape\SAPE_client',
    ],
    // ....
 ]       
```

В нужном месте в view-файле включить отображение ссылок:
```
<?= Yii::$app->sape->return_links($n); ?>
```
Где `$n` - нужное количество ссылок(в последнем вызове число указывать не нужно - см. документацию sape)