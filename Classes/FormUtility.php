<?php

/**
 * Class FormUtility : classe permettant de  :
 * - Générer le HTML du formulaire
 * - Effectuer des contrôles sur les variables POST
 */
class FormUtility
{
    /**
     * Créé le HTML (label et input/textarea)
     * @return string HTML (label et input/textarea)
     */
    public function generateHTML(string $label): string {
        return <<<EOT
<div class="form-group">
    <label for="item">$label</label>
    <input type="text" id="item" class="form-control"/>
</div>
EOT;

    }
}




