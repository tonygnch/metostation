<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExternalTemperature $externalTemperature
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit External Temperature'), ['action' => 'edit', $externalTemperature->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete External Temperature'), ['action' => 'delete', $externalTemperature->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $externalTemperature->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List External Temperature'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New External Temperature'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="externalTemperature view large-9 medium-8 columns content">
    <h3><?= h($externalTemperature->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($externalTemperature->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($externalTemperature->Value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateAndTime') ?></th>
            <td><?= h($externalTemperature->DateAndTime) ?></td>
        </tr>
    </table>
</div>
