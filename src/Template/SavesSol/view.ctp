<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SavesSol $savesSol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Saves Sol'), ['action' => 'edit', $savesSol->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Saves Sol'), ['action' => 'delete', $savesSol->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $savesSol->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Saves Sol'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Saves Sol'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="savesSol view large-9 medium-8 columns content">
    <h3><?= h($savesSol->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($savesSol->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg Co2') ?></th>
            <td><?= $this->Number->format($savesSol->kg_co2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg So2') ?></th>
            <td><?= $this->Number->format($savesSol->kg_so2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg Nox') ?></th>
            <td><?= $this->Number->format($savesSol->kg_nox) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateAndTime') ?></th>
            <td><?= h($savesSol->DateAndTime) ?></td>
        </tr>
    </table>
</div>
