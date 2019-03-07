<?php
namespace Classes\Exceptions;

use Throwable;

/**
 * Class BadParamException
 * Cette exception se déclenche lorsqu'un paramètre donné à la fonction
 * est incorrecte :
 * - Trop petit
 * - Trop grand
 */
class BadParamException extends \Exception
{
    /**
     * BadParamException constructor.
     * @param string $property
     * @param string $explication
     */
    public function __construct(string $property, string $explication)
    {
        $message = "Propriété problématique : $property ! Cause : $explication";
        parent::__construct($message, 0, null);
    }
}