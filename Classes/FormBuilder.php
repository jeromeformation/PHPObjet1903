<?php

abstract class FormBuilder
{
    abstract public function getDatas(): array;

    public function buildForm(): string
    {
        foreach ($this->getDatas() as $data) {
            $this->formRow($data['label'], $data['id']);
        }
    }

    private function formRow($label, $id)
    {
        //
    }
}