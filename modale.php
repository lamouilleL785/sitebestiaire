<?php include "/js/modal.js";
?>

<dialog id="favDialog">
    <form method="dialog">
        <p><label>Animal préféré :
                <select>
                    <option></option>
                    <option>Crevette en saumure</option>
                    <option>Panda rouge</option>
                    <option>Singe</option>
                </select>
            </label></p>
        <menu>
            <button value="cancel">Annuler</button>
            <button id="confirmBtn" value="default">Confirmer</button>
        </menu>
    </form>
</dialog>

<menu>
    <button id="updateDetails">Mettre à jour les détails</button>
</menu>

<output aria-live="polite"></output>