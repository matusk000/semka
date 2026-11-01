<form>

    <div class="row">
        <div>
            <label for="nazov">Názov tréningu</label>
            <input type="text" id="nazov" value="Push day">
        </div>
        <div>
            <label for="datum">Dátum</label>
            <input type="date" id="datum">
        </div>
        <div>
            <button type="button" class="hlavne">Dokončiť</button>
        </div>
    </div>

    <div class="row">
        <div class="box modry">Trvanie: <b>1h 13 min</b></div>
        <div class="box zeleny">Objem: <b>2 640 kg</b></div>
        <div class="box cerveny">Série: <b>28</b></div>
    </div>

    <section class="box">
        <h2>Bench press (činka)</h2>
        <input type="text" placeholder="Poznámka k cviku" aria-label="Poznámka k cviku">
        <div class="tabulka">
            <table>
                <tr><th>Séria</th><th>Predtým</th><th>Kg</th><th>Opak.</th><th>OK</th></tr>
                <tr><td>1</td><td>52,5 × 6</td><td>55</td><td>5</td><td><input type="checkbox" aria-label="Séria hotová"></td></tr>
                <tr><td>2</td><td>55 × 5</td><td>55</td><td>5</td><td><input type="checkbox" aria-label="Séria hotová"></td></tr>
                <tr><td>3</td><td>55 × 5</td><td>55</td><td>5</td><td><input type="checkbox" aria-label="Séria hotová"></td></tr>
            </table>
        </div>
        <button type="button" class="tlacidlo-siroke">+ Pridať sériu</button>
    </section>

    <br>

    <section class="box">
        <h2>Arnold press (jednoručky)</h2>
        <input type="text" placeholder="Poznámka k cviku" aria-label="Poznámka k cviku">
        <div class="tabulka">
            <table>
                <tr><th>Séria</th><th>Predtým</th><th>Kg</th><th>Opak.</th><th>OK</th></tr>
                <tr><td>1</td><td>20 × 8</td><td>20</td><td>8</td><td><input type="checkbox" aria-label="Séria hotová"></td></tr>
            </table>
        </div>
        <button type="button" class="tlacidlo-siroke">+ Pridať sériu</button>
    </section>

    <br>

    <button type="button">+ Pridať cvik (z katalógu)</button>
    <button type="button">Zrušiť</button>

</form>