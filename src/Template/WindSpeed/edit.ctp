<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WindSpeed $windSpeed
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $windSpeed->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $windSpeed->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wind Speed'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="windSpeed form large-9 medium-8 columns content">
    <?= $this->Form->create($windSpeed) ?>
    <fieldset>
        <legend><?= __('Edit Wind Speed') ?></legend>
        <?php
            echo $this->Form->control('DateAndTime');
            echo $this->Form->control('Value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
