<div class="container">
    <div class="input-field">
        <input type="text" name="Title" placeholder="Titre de votre recette..." />
    </div>
    <div id="steps">
        <ul>
            <li data-stepNumber="1">
                <h3>Étape 1</h3>
                <textarea id="textAreaAdd" maxlength="20" placeholder="Mélanger la farine avec les oeufs"></textarea>
                <input type="button" value="+" name="addStep" onclick="addStep()"/>
            </li>

        </ul>

    </div>
</div>