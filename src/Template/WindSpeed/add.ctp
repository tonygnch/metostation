<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WindSpeed $windSpeed
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Wind Speed'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="windSpeed form large-9 medium-8 columns content">
    <?= $this->Form->create($windSpeed) ?>
    <fieldset>
        <legend><?= __('Add Wind Speed') ?></legend>
        <?php
            echo $this->Form->control('DateAndTime');
            echo $this->Form->control('Value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
