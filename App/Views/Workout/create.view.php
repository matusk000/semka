<?php /** @var \Framework\Support\LinkGenerator $link */ ?>
<h1>Pridať tréning</h1>

<form method="post" action="<?= e($link->url('workout.create')) ?>">
    <p>
        <label for="name">Názov tréningu</label>
        <input type="text" id="name" name="name" maxlength="120" required>
    </p>

    <p>
        <label for="trainingDate">Dátum</label>
        <input type="date" id="trainingDate" name="trainingDate" required>
    </p>

    <p>
        <label for="note">Poznámka</label>
        <textarea id="note" name="note"></textarea>
    </p>

    <button type="submit" class="hlavne">Uložiť</button>
    <a href="<?= e($link->url('workout.index')) ?>">Zrušiť</a>
</form>