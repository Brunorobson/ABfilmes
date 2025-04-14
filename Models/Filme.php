<?php 

class Filme {
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
            ", Filme::class,
            $params);
    }

    public static function get($id){
        return (new self)->query('f.id = :id',["id"=> $id])->fetch();
    }

    public static function all($filtro = ''){
        return (new self)->query('titulo like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    } 
}