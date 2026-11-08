<h1>Tréningy</h1>
<p><a href="<?= e($link->url('workout.create')) ?>">Pridať tréning</a></p>

<?php if ($workouts === []): ?>
    <p>Zatiaľ nemáš žiadne tréningy.</p>

<?php else: ?>
    <ul>
        <?php foreach ($workouts as $workout): ?>
            <li>
                <strong><?= e($workout->name) ?></strong>
                (<?= e($workout->trainingDate) ?>)
                <?= e($workout->note ?? '') ?>
                <a href="<?= e($link->url('workout.edit', ['id' => $workout->id])) ?>">
                    Upraviť
                </a>
                <form method="post" action="<?= e($link->url('workout.delete', ['id' => $workout->id])) ?>">
                    <button type="submit">Odstrániť</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>