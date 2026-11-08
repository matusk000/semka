<h1>Upraviť tréning</h1>

<form method="post" action="<?= e($link->url('workout.edit', ['id' => $workout->id])) ?>">
    <p>
        <label for="name">Názov tréningu</label>
        <input type="text" id="name" name="name"
               value="<?= e($workout->name) ?>" maxlength="120" required>
    </p>

    <p>
        <label for="trainingDate">Dátum</label>
        <input type="date" id="trainingDate" name="trainingDate"
               value="<?= e($workout->trainingDate) ?>" required>
    </p>

    <p>
        <label for="note">Poznámka</label>
        <textarea id="note" name="note"><?= e($workout->note ?? '') ?></textarea>
    </p>

    <button type="submit" class="hlavne">Uložiť zmeny</button>
    <a href="<?= e($link->url('workout.index')) ?>">Zrušiť</a>
</form>