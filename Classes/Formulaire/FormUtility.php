<?php
namespace Classes\Formulaire;

/**
 * Class formUtility : classe permettant de  :
 * - Générer le HTML du formulaire
 * - Effectuer des contrôles sur les variables POST
 */
class FormUtility
{
    /**
     * Créé le HTML (label et input/textarea)
     * @return string HTML (label et input/textarea)
     */
    public function generateHTML(
        string $label,
        string $type,
        string $id,
        ?string $placeholder = ''
    ): string {

        // L'éventuelle ancienne valeur
        $oldValue = (isset($_POST[$id])) ? $_POST[$id] : '';

        // On vérifie le type pour founir soit :
        // Un input : text, number
        // Un texterea : textarea
        switch($type) {
            case 'text':
            case 'number':
            case 'email':
                $widget = $this->getHTMLInput($type, $id, $oldValue, $placeholder);
                break;
            case 'textarea':
                $widget = $this->getHTMLTextArea($id, $oldValue, $placeholder);
                break;
            default:
                die('Le type donné est inconnu');
        }
        return <<<EOT
<div class="form-group">
    <label for="$id">$label</label>
    $widget
</div>
EOT;
    }

    /**
     * Génère un input HTML
     * @param string $type
     * @param string $id
     * @param string $oldValue
     * @param string|null $placeholder
     * @return string
     */
    private function getHTMLInput(string $type, string $id, string $oldValue, ?string $placeholder = ''): string {
        return <<<EOT
<input type="$type" id="$id" name="$id" class="form-control"
placeholder="$placeholder" value="$oldValue" />
EOT;
    }


    private function getHTMLTextArea(string $id, string $oldValue, ?string $placeholder = ''): string {
        return <<<EOT
<textarea name="$id" id="$id" class="form-control" placeholder="$placeholder">
    $oldValue
</textarea>
EOT;
    }

}






