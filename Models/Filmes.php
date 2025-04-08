<?php 

class Filmes {
    public $id;
    public $titulo;
    public $descricao;
    public $ano;

    public function query($where, $params){
        $database = new Database(config('database'));
        return $database->query(
         "
            select 
            f.id, f.titulo, f.descricao, f.ano
            from
            Filmes f
            where $where
            group by 
            f.id, f.titulo, f.descricao, f.ano
            ", Filmes::class,
            $params);
    }

    public static function all($filtro = ''){
        return (new self)->query('titulo like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    } 
}