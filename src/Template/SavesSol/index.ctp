<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SavesSol[]|\Cake\Collection\CollectionInterface $savesSol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Saves Sol'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="savesSol index large-9 medium-8 columns content">
    <h3><?= __('Saves Sol') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateAndTime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kg_co2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kg_so2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kg_nox') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($savesSol as $savesSol): ?>
            <tr>
                <td><?= $this->Number->format($savesSol->ID) ?></td>
                <td><?= h($savesSol->DateAndTime) ?></td>
                <td><?= $this->Number->format($savesSol->kg_co2) ?></td>
                <td><?= $this->Number->format($savesSol->kg_so2) ?></td>
                <td><?= $this->Number->format($savesSol->kg_nox) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $savesSol->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $savesSol->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $savesSol->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $savesSol->ID)]) ?>
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
