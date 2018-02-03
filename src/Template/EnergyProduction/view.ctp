<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnergyProduction $energyProduction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Energy Production'), ['action' => 'edit', $energyProduction->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Energy Production'), ['action' => 'delete', $energyProduction->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $energyProduction->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Energy Production'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Energy Production'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="energyProduction view large-9 medium-8 columns content">
    <h3><?= h($energyProduction->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($energyProduction->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($energyProduction->Value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateAndTime') ?></th>
            <td><?= h($energyProduction->DateAndTime) ?></td>
        </tr>
    </table>
</div>
