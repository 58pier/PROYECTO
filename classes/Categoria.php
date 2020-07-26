<?php

class Category
{

public $id = null;

public $nombre = null;

public $descripcion = null;


public function __construct( $data=array() ) {
    if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
    if ( isset( $data['nombre'] ) ) $this->nombre = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['nombre'] );
    if ( isset( $data['descripcion'] ) ) $this->descripcion = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['descripcion'] );
}

public function storeFormValues ( $params ) {

    $this->__construct( $params );
}

public static function getById( $id ) {
    $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT * FROM categorias WHERE id = :id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new Category( $row );
}

public static function getList( $numRows= 1000000 ) {
    $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM categorias
            ORDER BY nombre ASC LIMIT :numRows";

    $st = $conn->prepare( $sql );
    $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
    $st->execute();
    $list = array();

    while ( $row = $st->fetch() ) {
        $categoria = new Category( $row );
        $list[] = $categoria;
    }

    // Now get the total number of categorias that matched the criteria
    $sql = "SELECT FOUND_ROWS() AS totalRows";
    $totalRows = $conn->query( $sql )->fetch();
    $conn = null;
    return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
}

public function insert() {

    // Does the Category object already have an ID?
    if ( !is_null( $this->id ) ) trigger_error ( "Category::insert(): Attempt to insert a Category object that already has its ID property set (to $this->id).", E_USER_ERROR );

    // Insert the Category
    $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD );
    $sql = "INSERT INTO categorias ( nombre, descripcion ) VALUES ( :nombre, :descripcion )";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":nombre", $this->nombre, PDO::PARAM_STR );
    $st->bindValue( ":descripcion", $this->descripcion, PDO::PARAM_STR );
    $st->execute();
    $this->id = $conn->lastInsertId();
    $conn = null;
}


public function update() {

    // Does the Category object have an ID?
    if ( is_null( $this->id ) ) trigger_error ( "Category::update(): Attempt to update a Category object that does not have its ID property set.", E_USER_ERROR );

    // Update the Category
    $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD );
    $sql = "UPDATE categorias SET nombre=:nombre, descripcion=:descripcion WHERE id = :id";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":nombre", $this->nombre, PDO::PARAM_STR );
    $st->bindValue( ":descripcion", $this->descripcion, PDO::PARAM_STR );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
}

public function delete() {

    // Does the Category object have an ID?
    if ( is_null( $this->id ) ) trigger_error ( "Category::delete(): Attempt to delete a Category object that does not have its ID property set.", E_USER_ERROR );

    // Delete the Category
    $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare ( "DELETE FROM categorias WHERE id = :id LIMIT 1" );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
}

}
?>
