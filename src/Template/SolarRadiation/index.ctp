<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SolarRadiation[]|\Cake\Collection\CollectionInterface $solarRadiation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Solar Radiation'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solarRadiation index large-9 medium-8 columns content">
    <h3><?= __('Solar Radiation') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateAndTime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solarRadiation as $solarRadiation): ?>
            <tr>
                <td><?= $this->Number->format($solarRadiation->ID) ?></td>
                <td><?= h($solarRadiation->DateAndTime) ?></td>
                <td><?= $this->Number->format($solarRadiation->Value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $solarRadiation->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solarRadiation->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solarRadiation->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $solarRadiation->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
