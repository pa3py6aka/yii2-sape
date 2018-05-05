<?php

namespace pa3py6aka\yii2\sape;


use yii\base\Component;

/**
 * Class Sape
 * @package pa3py6aka\yii2\sape
 */
class Sape extends Component
{
    public $sapeUser;

    public $charset;

    public $client;

    public function init()
    {
        parent::init();
        if (!defined('_SAPE_USER')){
            define('_SAPE_USER', $this->sapeUser);
        }

        $this->charset = $this->charset ?: \Yii::$app->charset;
        $options['charset'] = $this->charset;

        $this->client = new SAPE_client($options);
    }
}