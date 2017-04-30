<h2>Todo list</h2>
<div class="wrapper">
    <div class="header strong">
        <div class="hidden"><strong>Id</strong></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><strong>Descrição</strong></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><strong>Status</strong></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><strong>Aberta em</strong></div>
    </div>

    <div class="tasks">
        <?php foreach ($tasks as $task): ?>
        <div class="task">
            <div class="hidden"><?= $task->id ?></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <?= $this->Html->link($task->description, ['action' => 'view', $task->id]) ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><?= $task->getStatus() ?></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <?= $task->created->format("d/m/Y à\s h:i:s") ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>