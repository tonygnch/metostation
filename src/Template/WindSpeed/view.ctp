<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WindSpeed $windSpeed
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wind Speed'), ['action' => 'edit', $windSpeed->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wind Speed'), ['action' => 'delete', $windSpeed->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $windSpeed->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Wind Speed'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wind Speed'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="windSpeed view large-9 medium-8 columns content">
    <h3><?= h($windSpeed->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($windSpeed->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($windSpeed->Value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateAndTime') ?></th>
            <td><?= h($windSpeed->DateAndTime) ?></td>
        </tr>
    </table>
</div>
