<?php

class Filme
{
    public $id;
    public $titulo;
    public $descricao;
    public $ano;
    public $usuario_id;


    public function query($where, $params)
    {
        $database = new Database(config('database'));
        return $database->query(
            "
            select 
            f.id, f.titulo, f.descricao, f.ano
            from
            Filmes f
            where $where
            group by 
            f.id, f.titulo, f.descricao, f.ano, f.usuario_id
            ",
            Filme::class,
            $params
        );
    }

    public static function get($id)
    {
        return (new self)->query('f.id = :id', ["id" => $id])->fetch();
    }

    public static function all($filtro = '')
    {
        return (new self)->query('titulo like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }

    public static function meus($usuario_id, $filtro = '')
    {
        return (new self)->query(
            'f.usuario_id = :usuario_id AND (f.titulo LIKE :filtro OR f.descricao LIKE :filtro OR f.ano LIKE :filtro)',
            ['usuario_id' => $usuario_id, 'filtro' => "%$filtro%"]
        )->fetchAll();
    }
}
