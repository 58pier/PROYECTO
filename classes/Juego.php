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

        public $categoriaId = null; 

        public function __construct( $data = array(), $accion = 0)
        {
            /* Imagenes */
            $trailer_1= $data['trailer_1'];
                
            $portada= $data['portada']; 
                
            $gameplay_1= $data['gameplay_1']; 
                
            $gameplay_2= $data['gameplay_2']; 
            
            $logo = $data['logo'];  

            if( $accion !=0 ) $data['trailer'] = $portada . "," . $gameplay_1 . "," . $gameplay_2 . "," . $logo . "," . $trailer_1 ;

        /* Requerimientos */

            $procesador = $data['procesador'];

            $so = $data['so'];

            $memoria = $data['memoria'];

            $tarjeta = $data['tarjeta'];

            if ($accion != 0) $data['requerimientos'] = $procesador . "," . $so . "," . $memoria . "," . $tarjeta;
        
        /* Idiomas */

            $español = $data['español'];
            $ingles = $data['ingles'];
            $frances = $data['frances'];
            $ruso = $data['ruso'];

            if ($accion != 0 ) $data['idiomas'] = $español . "," . $ingles . "," . $frances . "," . $ruso;


            
            if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
            if ( isset( $data['nombre'] ) ) $this->nombre = $data['nombre'];
            if ( isset( $data['fecha'] ) ) $this->fecha = (int) $data['fecha'];
            if ( isset( $data['idiomas'] ) ) $this->idiomas = $data['idiomas'];
            if ( isset( $data['precio'] ) ) $this->precio = (int) $data['precio'];
            if ( isset( $data['desarrollador'] ) ) $this->desarrollador = $data['desarrollador'];
            if ( isset( $data['plataforma'] ) ) $this->plataforma = $data['plataforma'];
            if ( isset( $data['clasificacion'] ) ) $this->clasificacion = $data['clasificacion'];
            if ( isset( $data['resumen'] ) ) $this->resumen = $data['resumen'];
            if ( isset( $data['requerimientos'] ) ) $this->requerimientos = $data['requerimientos'];
            if ( isset( $data['pagina_web'] ) ) $this->pagina_web = $data['pagina_web'];
            if ( isset( $data['derechos_autor'] ) ) $this->derechos_autor = $data['derechos_autor'];
            if ( isset( $data['trailer'] ) ) $this->trailer = $data['trailer'];
            if ( isset( $data['descripcion'] ) ) $this->descripcion = $data['descripcion'];
            if ( isset( $data['categoriaId'])) $this->categoriaId = (int) $data['categoriaId'];
        } 


        public function storeFormValues ($params, $accion)
        {

            $this->__construct($params, $accion);

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
            $sql = "SELECT * , UNIX_TIMESTAMP(fecha) AS fecha FROM juegos WHERE id = :id";
            $st = $conn->prepare( $sql);
            $st->bindValue( ":id", $id, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            $conn = null;
            if ( $row) return new Juego ($row);
        }

    public static function getList($numRows = 1000000, $categoriaId = null)
    {
        
            $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD);
            $categoryClause = $categoriaId ? "WHERE categoriaId = :categoriaId" : "";
            $sql = "SELECT SQL_CALC_FOUND_ROWS * , UNIX_TIMESTAMP(fecha) AS fecha 
                    FROM juegos $categoryClause
                    ORDER BY fecha DESC LIMIT :numRows";
            $st = $conn->prepare( $sql);
            $st->bindValue(":numRows", $numRows, PDO::PARAM_INT);
            if( $categoriaId) $st->bindValue( ":categoriaId", $categoriaId, PDO::PARAM_INT);
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
            return (array ( "results" => $list, "totalRows" => $totalRows[0]));

    }

        public function insert(){
            if( !is_null( $this->id)) trigger_error( "Juego::insert() Attempt to insert an Article object that already has its ID property set (to $this->id).", E_USER_ERROR);
            
            $conn = new PDO(DB_DNS, DB_USERNAME,DB_PASSWORD);
            $sql = "INSERT INTO juegos (nombre,fecha,idiomas,precio,desarrollador,plataforma,clasificacion,resumen,requerimientos,pagina_web,derechos_autor,trailer,descripcion, categoriaId) VALUES (:nombre, FROM_UNIXTIME(:fecha),:idiomas,:precio,:desarrollador,:plataforma,:clasificacion,:resumen,:requerimientos,:pagina_web,:derechos_autor,:trailer,:descripcion, :categoriaId)";
            $st = $conn->prepare ($sql);
            $st->bindValue(":nombre",$this->nombre, PDO::PARAM_STR);
            $st->bindValue(":fecha",$this->fecha, PDO::PARAM_INT);
            $st->bindValue(":idiomas",$this->idiomas, PDO::PARAM_STR);
            $st->bindValue(":precio",$this->precio, PDO::PARAM_INT);
            $st->bindValue(":desarrollador",$this->desarrollador, PDO::PARAM_STR);
            $st->bindValue(":plataforma",$this->plataforma, PDO::PARAM_STR);
            $st->bindValue(":clasificacion",$this->clasificacion, PDO::PARAM_STR);
            $st->bindValue(":resumen",$this->resumen, PDO::PARAM_STR);
            $st->bindValue(":requerimientos",$this->requerimientos, PDO::PARAM_STR);
            $st->bindValue(":pagina_web",$this->pagina_web, PDO::PARAM_STR);
            $st->bindValue(":derechos_autor",$this->derechos_autor, PDO::PARAM_STR);
            $st->bindValue(":trailer",$this->trailer, PDO::PARAM_STR);
            $st->bindValue(":descripcion",$this->descripcion, PDO::PARAM_STR);
            $st->bindValue(":categoriaId", $this->categoriaId, PDO::PARAM_INT);

            $st->execute();
            $this->id=$conn->lastInsertId();
            $conn=null;

            $this->insertKeys();
        }

        public function update()
        {
            if( is_null( $this->id))trigger_error( "Juego::update(): Attempt to update a Juego object that does not have its ID property set.", E_USER_ERROR);
            
            $conn = new PDO( DB_DNS, DB_USERNAME, DB_PASSWORD);
            $sql = "UPDATE  juegos SET nombre=:nombre, fecha=FROM_UNIXTIME(:fecha), idiomas=:idiomas, precio=:precio,desarrollador=:desarrollador,plataforma=:plataforma,clasificacion=:clasificacion,resumen=:resumen,requerimientos=:requerimientos,pagina_web=:pagina_web,derechos_autor=:derechos_autor,trailer=:trailer,descripcion=:descripcion, categoriaId=:categoriaId  WHERE id= :id";
            $st = $conn->prepare($sql);
            $st->bindValue(":nombre", $this->nombre, PDO::PARAM_STR);
            $st->bindValue(":fecha", $this->fecha, PDO::PARAM_INT);
            $st->bindValue(":idiomas", $this->idiomas, PDO::PARAM_STR);
            $st->bindValue(":precio", $this->precio, PDO::PARAM_INT);
            $st->bindValue(":desarrollador", $this->desarrollador, PDO::PARAM_STR);
            $st->bindValue(":plataforma", $this->plataforma, PDO::PARAM_STR);
            $st->bindValue(":clasificacion", $this->clasificacion, PDO::PARAM_STR);
            $st->bindValue(":resumen", $this->resumen, PDO::PARAM_STR);
            $st->bindValue(":requerimientos", $this->requerimientos, PDO::PARAM_STR);
            $st->bindValue(":pagina_web", $this->pagina_web, PDO::PARAM_STR);
            $st->bindValue(":derechos_autor", $this->derechos_autor, PDO::PARAM_STR);
            $st->bindValue(":trailer", $this->trailer, PDO::PARAM_STR);
            $st->bindValue(":descripcion", $this->descripcion, PDO::PARAM_STR);
            $st->bindValue(":categoriaId", $this->categoriaId, PDO::PARAM_INT);
            $st->bindValue(":id" , $this->id,PDO::PARAM_INT);
            $st->execute();
            $con=null;
        }

        public function delete()
        {
            if( is_null($this->id) ) trigger_error( "Juego::delete(): Attempt to delete a Juego object that does not have its ID property set.", E_USER_ERROR);

            $conn = new PDO(DB_DNS, DB_USERNAME, DB_PASSWORD);
            $st = $conn->prepare( "DELETE FROM juegos WHERE id = :id LIMIT 1");
            $st->bindValue(":id",$this->id, PDO::PARAM_INT);
            $st->execute();
            $conn = null;
            $this->deleteKey(1);
        }

        public function getImages($parametro = 5)
        {
            //Las imagenes seran insertadas en la forma portada, gameplay 1, gameplay2, logo, trailer
            $arreglo = explode(",", $this->trailer);
            if ($parametro == 5)    return $arreglo;
            else {
                return $arreglo[$parametro];
            }
        }

        public function getRequerimientos($parametro = 4)
        {
            //Las imagenes seran insertadas en la forma procesador, Sistema Operativo, Memoria Ram, tarjeta grafica
            $arreglo = explode(",", $this->requerimientos);
            if ($parametro == 4)    return $arreglo;
            else {
                return $arreglo[$parametro];
            }
        }

        public function getIdiomas($parametro = 4)
        {
            //Las imagenes seran insertadas en la forma procesador, Sistema Operativo, Memoria Ram, tarjeta grafica
            $arreglo = explode(",", $this->idiomas);
            if ($parametro == 4)    return $arreglo;
            else {
                return $arreglo[$parametro];
            }
        }

        public static function generateKeys($strength=16){
            $keys = array();
            $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $input_length = strlen($input);
            $random_string = '';
            for ($j = 0; $j<5; $j++ ){
                for ($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
                    if( $i==3 || $i ==  7 || $i == 11){
                        $random_string .= "-";
                    }
                }
                $keys[$j]= $random_string;
                $random_string ='';
            }
            return $keys;
        }

        public function insertKeys(){
            $idjuego = $this->id;
            $arreglokeys = $this->generateKeys();

            for ($i=0; $i < 5; $i++) {
            $digitalkey = $arreglokeys[$i];
            $conn = new PDO("mysql:host=localhost;dbname=proyecto", "root", "");
            $sql = "INSERT INTO digitalkey ( idjuego, digitalkey) VALUES (:idjuego, :digitalkey)";
            $st = $conn->prepare($sql);
            $st->bindValue(":idjuego", $idjuego, PDO::PARAM_INT);
            $st->bindValue(":digitalkey", $digitalkey, PDO::PARAM_STR);
            $st->execute();
            $conn = null;
            }            
        }

        public function getKey(){
            $idjuego= $this->id;
            $conn = new PDO(DB_DNS, DB_USERNAME, DB_PASSWORD);
            $sql = "SELECT * FROM digitalkey WHERE idjuego = :idjuego LIMIT 1";
            $st = $conn->prepare($sql);
            $st->bindValue(":idjuego", $idjuego, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            $conn = null;
            if ($row) return $row['digitalkey'];
        }

        public function deleteKey($accion= 0)
        {
            if( $accion==0){
        $idjuego = $this->id;
        $conn = new PDO(DB_DNS, DB_USERNAME, DB_PASSWORD);
        $st = $conn->prepare("DELETE FROM digitalkey WHERE idjuego = :idjuego LIMIT 1");
        $st->bindValue(":idjuego", $idjuego, PDO::PARAM_INT);
        $st->execute();
        $conn = null;}
        else{
            $idjuego = $this->id;
            $conn = new PDO(DB_DNS, DB_USERNAME, DB_PASSWORD);
            $st = $conn->prepare("DELETE FROM digitalkey WHERE idjuego = :idjuego ");
            $st->bindValue(":idjuego", $idjuego, PDO::PARAM_INT);
            $st->execute();
            $conn = null;
        }
        }
        

        
    }

?>

