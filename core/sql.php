<?php

//Função para inserir dados de qualquer tabela
function insert (string $entidade, array $dados) : String
{
    $instrucao = "INSERT INTO {$entidade}";

    $campos = implode(', ', array_keys($dados));
    $valores = implode(', ', array_values($dados));

    $instrucao .= "({$campos})";
    $instrucao .= " VALUES ({$valores})";

    return $instrucao;
}

//Função para deletar dados de qualuqer tabela
function delete (string $entidade, array $criterio = []) : String
{
    $instrucao = "DELETE {$entidade}";

    if(!empty($criterio))
    {
        $instrucao .=' WHERE ';

        foreach($criterio as $expressao)
        {
            $instrucao .=' ' . implode(' ', $expressao);
        }
    }

    return $instrucao;
}

//Função para atualizar dados de qualuqer tabela
function update (string $entidade, array $dados, array $criterio = []) : string
{
    $instrucao = "UPDATE {$entidade}";

    foreach ($dados as $campo => $dado)
    {
        $set[] = "{$campo} = {$dado}";
    }
    $instrucao .= ' SET ' . implode(',', $set) ;

    if (!empty($criterio))
    {
        $instrucao .= ' WHERE';
        
        foreach($criterio as $expressao) 
        {
            $instrucao .= ' '. implode (' ',$expressao);
        }
    }
    return $instrucao;
}

//Função para selecionar dados de qualquer tabela
function  select (string $entidade, array $campos, array $criterio = [], string $ordem = null) : string
{
    $instrucao = " SELECT " . implode(',',$campos);
    $instrucao .= " FROM {$entidade}";

    if(!empty($criterio))
    {
        $instrucao .= ' WHERE ';

        foreach ($criterio as $expressao)
        {
            $instrucao .= ' '.implode (' ', $expressao);
        }
    }
    if(!empty($ordem))
    {
        $instrucao .= " ORDER BY $ordem ";
    }
    return $instrucao;
}

?>