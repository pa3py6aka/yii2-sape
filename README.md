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
        'class' => 'pa3py6aka\yii2\sape\Sape',
        'sapeUser' => 'Ваш код клиента' // Например '4de0b73c786b78ba2e50bc2925941a37'
    ],
    // ....
 ]       
```

В нужном месте в view-файле включить отображение ссылок:
```
<?= Yii::$app->sape->client->return_links($n); ?>
```
Где `$n` - нужное количество ссылок(в последнем вызове число указывать не нужно - см. документацию sape)