<?php

namespace App\Http\Controllers;

class MeuControlador extends Controller
{
    public function lista(): void
    {
        $html = '
            <h1>Itens</h1>
            <ol>
                <li>Notebook</li>
                <li>Impressora</li>
                <li>Mouse</li>
            </ol>
        ';
        echo $html;
    }

    /**
     * @param int $n1
     * @param int $n2
     * @return string
     */
    public function multiplicar($n1, $n2): string
    {
        $result = $n1 * $n2;
        return "O resultado da multiplicação é $result";
    }
}
