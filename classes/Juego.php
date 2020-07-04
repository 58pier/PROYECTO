<?php

    class Juego
    {

        public $id = null;

        public $nombre = null;

        public $fecha = null;

        public $idiomas = null;

        public $precio = null;

        public $desarrollador = null;

        public $plataforma = null;

        public $clasificacion = null;

        public $resumen = null;

        public $requerimientos = null;

        public $pagina_web = null;

        public $derechos_autor = null;

        public $trailer = null;

        public $descripcion = null;

        public function __construct( $data = array())
        {
            if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
            if ( isset( $data['nombre'] ) ) $this->nombre = $data['nombre'];
            if ( isset( $data['fecha'] ) ) $this->fecha = (int) $data['id'];
            if ( isset( $data['idiomas'] ) ) $this->idiomas = $data['idiomas'];
            if ( isset( $data['precio'] ) ) $this->precio = (int) $data['precio'];
            if ( isset( $data['desarrollador'] ) ) $this->desarrollador = $data['desarrolador'];
            if ( isset( $data['plataforma'] ) ) $this->plataforma = $data['plataforma'];
            if ( isset( $data['clasificacion'] ) ) $this->clasificacion = $data['clasificacion'];
            if ( isset( $data['resumen'] ) ) $this->resumen = $data['resumen'];
            if ( isset( $data['requerimientos'] ) ) $this->requerimientos = $data['requerimientos'];
            if ( isset( $data['pagina_web'] ) ) $this->pagina_web = $data['pagina_web'];
            if ( isset( $data['derechos_autor'] ) ) $this->derechos_autor = $data['derechos_autor'];
            if ( isset( $data['trailer'] ) ) $this->trailer = $data['trailer'];
            if ( isset( $data['descripcion'] ) ) $this->descripcion = $data['descripcion'];

        } 


        public function storeFormValues ($params)
        {

            $this->__construct($params);

            if (isset($params['fecha']))
            {
                $fecha = explode('-',$params['fecha']);

                if( count( $fecha) ==3)
                {
                    list ( $y, $m, $d ) = $fecha;
                    $this->fecha = mktime ( 0, 0, 0, $m, $d, $y);
                }
            }
        }

        public static function getById( $id)
        {
            $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD);
            $sql = "SELECT *, UNIXTIMESTAMP(fecha) AS fecha FROM juegos WHERE id = :id";
            $st->bindValue( ":id", $id, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            $conn = null;
            if ( $row) return new Juego ($row);
        }

        public static function getList ($numRows=1000000)
        {
            $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD);
            $sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIXTIMESTAMP(fecha) AS fecha FROM juegos
                    ORDER BY fecha DESC LIMIT :numRows";
            $st->bindValue( ":id", $id, PDO::PARAM_INT);
            $st->execute();
            $list = array();

            while ( $row = $st->fetch())
            {
                $juego = new Juego ($row);
                $list[] = $juego;
            }

            $sql = "SELECT FOUND_ROWS() AS totalRows";
            $totalRows = $conn->query($sql)->fetch();
            $conn = null;
            retunr (array ( "results" => $list, "totalRows" => $totalRows[0]));
        }

        public 
    }


?>
