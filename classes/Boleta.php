<?php 

class Boleta
{
    public $id = null;
    
    public $nombres = null;
    
    public $apellidos = null;
    
    public $direccion = null;
    
    public $dni = null;
    
    public $correo = null;
    
    public $juego = null;
    
    public $importe = null;

    public $fecha = null;
    
    public function __construct( $data = array()){
        if( isset( $data['id'])) $this->id = (int) $data['id'];
        if( isset( $data['nombres'])) $this->nombres =  $data['nombres'];
        if( isset( $data['apellidos'])) $this->apellidos = $data['apellidos'];
        if( isset( $data['direccion'])) $this->direccion =  $data['direccion'];
        if( isset( $data['dni'])) $this->dni =  $data['dni'];
        if( isset( $data['correo'])) $this->correo =  $data['correo'];
        if( isset( $data['juego'])) $this->juego =  $data['juego'];
        if( isset( $data['importe'])) $this->importe = (int) $data['importe'];
        $this->fecha = $data['fecha'];
    }

    public function __construct0($nombres,$apellidos,$direccion,$dni,$correo,$juego,$importe,$fecha){
        $this->nombres= $nombres; 
        $this->apellidos= $apellidos;
        $this->direccion= $direccion;
        $this->dni= $dni;
        $this->correo= $correo;
        $this->juego= $juego;
        $this->importe= $importe;
        $this->fecha = $fecha;
    }

    public function storeFormValues( $params){
        $this->__construct( $params);
    }

    public static function getById( $id) {
        $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT * FROM boletas WHERE id = :id";
        $st = $conn->prepare( $sql);
        $st->bindValue( ":id", $id, PDO::PARAM_INT);
        $st->execute();
        $row = $st->fetch();
        $conn = null;
        if( $row) return new Boleta( $row);
    }

    public static function getList( $numRows = 1000000)
    {
        $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM boletas
                ORDER BY fecha ASC LIMIT :numRows";

        $st = $conn->prepare( $sql);
        $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT);
        $st->execute();
        $list = array();

        while( $row = $st->fetch()){
            $boleta = new Boleta( $row);
            $list[] = $boleta;
        }

        $sql = "SELECT FOUND_ROWS() AS totalRows";
        $totalRows = $conn->query( $sql)->fetch();
        $conn = null;
        return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
    }

    public function insert(){

        if( !is_null( $this->id ) ) trigger_error( "Boleta::insert(): Attemp to insert a Boleta object that alreadyy has its ID properety set (to $this->id)." , E_USER_ERROR);
        
        $conn = new PDO (DB_DNS, DB_USERNAME, DB_PASSWORD);
        $sql = "INSERT INTO boletas ( nombres, apellidos, direccion, dni, correo, juego, importe, fecha) VALUES( :nombres, :apellidos, :direccion, :dni, :correo, :juego, :importe, :fecha )";
        $st = $conn->prepare ( $sql);
        $st->bindValue( ":nombres", $this->nombres, PDO::PARAM_STR);
        $st->bindValue( ":apellidos", $this->apellidos, PDO::PARAM_STR);
        $st->bindValue( ":direccion", $this->direccion, PDO::PARAM_STR);
        $st->bindValue( ":dni", $this->dni, PDO::PARAM_STR);
        $st->bindValue( ":correo", $this->correo, PDO::PARAM_STR);
        $st->bindValue( ":juego", $this->juego, PDO::PARAM_STR);
        $st->bindValue( ":importe", $this->importe, PDO::PARAM_INT);
        $st->bindValue( ":fecha", $this->fecha, PDO::PARAM_STR);
        $st->execute();
        $this->id = $conn->lastInsertId();
        $conn = null;
    }

    public function delete(){
        if( is_null( $this->id ) ) trigger_error( "Boleta::deleted(): Attemp to delete a Boleta object that does not have its property set" , E_USER_ERROR);
    
        $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD);
        $st = $conn->prepare( "DELETE FROM boletas where id = :id LIMIT 1 ");
        $st->bindValue( ":id", $this->id, PDO::PARAM_INT);
        $st->execute();
        $conn = null;
    }
}

//prueba boletas
    /* $boleta = new Boleta();
    $boleta->__construct0("Piero","Pozo","asdasd","12312313","asd","gta",23,13);
    $boleta->insert(); */
?>