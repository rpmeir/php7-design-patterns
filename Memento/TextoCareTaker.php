<?php

namespace Memento;

class TextoCareTaker
{
    protected array $estadosTexto = [];

    public function adicionarMemento(TextoMemento $textoMemento): void
    {
        $this->estadosTexto[] = $textoMemento;
    }

    public function retornarUltimoEstadoSalvo(): TextoMemento
    {
        if (empty($this->estadosTexto)) {
            return new TextoMemento('');
        }

        $textoMemento = end($this->estadosTexto);
        unset($this->estadosTexto[sizeof($this->estadosTexto) -1]);

        return $textoMemento;
    }
}
