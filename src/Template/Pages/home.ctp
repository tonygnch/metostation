<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if(!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'BFU MeteoStation';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('fontawesome-all.css') ?>
</head>
<body class="home" style='background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%)'>

    <header class="row">
        <div class="header-title">
        </div>
    </header>

    <div class='container'>
        <div class="row">
            <div class="columns large-3 text-center">
                <h4>Temperature</h4>
                <i class="fas fa-thermometer-half fa-3x"></i>
                <h4><?= $lastTemp . " °C" ?></h4>
            </div>
            <div class="columns large-3 text-center">
                <h4>Wind speed</h4>
                <i class="fab fa-cloudversify fa-3x"></i>
                <h4><?= $lastWind . " m/s" ?></h4>
            </div>
            <div class="columns large-3 text-center">
                <h4>Solar radiation</h4>
                <i class="fas fa-sun fa-3x"></i>
                <h4><?= $lastSolarRadiation . " rad" ?></h4>
            </div>
            <div class="columns large-3 text-center">
                <h4>Energy product</h4>
                <i class="fas fa-bolt fa-3x"></i>
                <h4><?= $lastEnergyProduction . " kW/h" ?></h4>
            </div>
        </div>
    </div>
</body>
</html>
