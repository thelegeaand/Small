<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SmallModel extends CI_Model
{


    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    /**
     * Afegir nou Usuari.
     *
     *@param int $NomUsuari nom del usuari.
     *@param string $Contrasenya contrasenya de l'usuari.
     *@param string $Estat estat actual de l'usuari al ser afegit.
     */
    public function NouUsuari($NomUsuari, $Contrasenya, $Estat)
    {

        $sql = "insert into usuaris(nom_usuari,contrasenya,estat)
    values('" . $NomUsuari . "','" . $Contrasenya . "'," . $Estat . ")";

        $this->db->query($sql);

        $num_files = $this->db->affected_rows();

        return $num_files;
    }

    public function NouClient($idUsuari, $Nom, $Cognom, $Cognom2, $Dni, $Data, $Correu, $Ciutat, $CodiPostal, $Provincia)
    {

        $sql = "insert into client(id_usuari,nom,primer_cognom,segon_cognom,dni,data_naixement,correu,ciutat,província,codi_postal)
    values(" . $idUsuari . ",'" . $Nom . "','" . $Cognom . "','" . $Cognom2 . "','" . $Dni . "','" . $Data . "','" . $Correu . "','" . $Ciutat . "','" . $Provincia . "','" . $CodiPostal . "')";

        $this->db->query($sql);

        $num_files = $this->db->affected_rows();

        return $num_files;
    }

    public function NovaBotiga($id, $NomPropietari, $NomBotiga, $TipusBotiga, $NomEmpresa, $CIF, $CorreuEmpresa, $Ciutat, $Carrer, $Provincia, $CodiPostal, $Iban, $Numero)
    {

        $sql = "insert into botiga(id_usuari,nom_propietari,nom_botiga,nom_empresa,cif,correu,tipus,iban,província,ciutat,codi_postal,carrer,numero)
    values(" . $id . ",'" . $NomPropietari . "','" . $NomBotiga . "','" . $NomEmpresa . "','" . $CIF . "','" . $CorreuEmpresa . "','" . $TipusBotiga . "','" . $Iban . "','" . $Provincia . "','" . $Ciutat . "','" . $CodiPostal . "','" . $Carrer . "'," . $Numero . ")";

        $this->db->query($sql);

        $num_files = $this->db->affected_rows();

        return $num_files;
    }

    public function CodiUsuari($NomUsuari)
    {

        $sql = "SELECT * FROM usuaris WHERE nom_usuari='" . $NomUsuari . "'";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    public function compClient($CodiUsuari)
    {

        $sql = "SELECT * FROM client WHERE id_usuari=" . $CodiUsuari . "";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }
    public function compAdmin($CodiUsuari)
    {

        $sql = "SELECT * FROM administrador WHERE id_usuari=" . $CodiUsuari . "";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }
    public function compBotiga($CodiUsuari)
    {

        $sql = "SELECT * FROM botiga WHERE id_usuari=" . $CodiUsuari . "";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }
    public function compRepartidor($CodiUsuari)
    {

        $sql = "SELECT * FROM repartidor WHERE id_usuari=" . $CodiUsuari . "";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }

    public function compAtencio($CodiUsuari)
    {

        $sql = "SELECT * FROM aclient WHERE id_usuari=" . $CodiUsuari . "";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }

    public function InciarSessio($NomUsuari, $Password)
    {

        $sql = "SELECT * FROM usuaris WHERE nom_usuari='" . $NomUsuari . "' AND contrasenya='" . $Password . "' AND estat=1 ";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }

    public function MostrarBotiguesPer($tipus)
    {

        $sql = "SELECT * FROM botiga b LEFT JOIN usuaris u ON b.id_usuari=u.id_usuari 
    WHERE u.estat=1 AND b.tipus='" . $tipus . "'";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    public function CiutatClient($idUsuari)
    {
        $sql = "SELECT * FROM client c LEFT JOIN usuaris u ON c.id_usuari=u.id_usuari 
    WHERE u.id_usuari=" . $idUsuari . "";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    public function MostrarBotiguesCiutat($tipus, $ciutat)
    {

        $sql = "SELECT * FROM botiga b LEFT JOIN usuaris u ON b.id_usuari=u.id_usuari 
    WHERE u.estat=1 AND b.tipus='" . $tipus . "' AND b.ciutat='" . $ciutat . "'";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    public function Botiga($idbotiga)
    {

        $sql = "SELECT * FROM botiga 
    WHERE id_botiga=" . $idbotiga . "";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    public function Productes($idbotiga)
    {

        $sql = "SELECT * FROM producte
    WHERE id_botiga=" . $idbotiga . "";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    public function ControlProductes($id)
    {

        $sql = "SELECT * FROM producte
    WHERE id_producte=" . $id . "";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    public function Entregada($CodiComanda)
    {

        $complete = "Entregada";

        $data = array(
            'estat' => $complete
        );
        $this->db->where('codi_comanda', $CodiComanda);
        $this->db->update('comanda', $data);
    }

    public function Clients()
    {


        $sql1 = "SELECT * FROM client";

        $dades = $this->db->query($sql1);

        return $dades->result_array();
    }

    public function Botigues()
    {

        $sql1 = "SELECT * FROM botiga";

        $dades = $this->db->query($sql1);

        return $dades->result_array();
    }
    public function Usuari($id)
    {

        $sql1 = "SELECT * FROM usuaris WHERE id_usuari=" . $id . "";

        $dades = $this->db->query($sql1);

        return $dades->result_array();
    }

    function DesactivarUsuari($id)
    {
        $sql = "UPDATE usuaris SET estat=0 WHERE id_usuari=" . $id . "";
        $query = $this->db->query($sql);
    }

    function ActivarUsuari($id)
    {

        $sql = "UPDATE usuaris SET estat=1 WHERE id_usuari=" . $id . "";
        $query = $this->db->query($sql);
    }

    function NovaConsulta($CodiC, $Nom, $Cognom, $Correu, $Motiu)
    {

        if ($CodiC == "") {
            $CodiC = "null";
        }
        $Estat = "Pendent";

        $sql = "insert into consultes(correu,nom,cognom,codi_comanda,estat,motiu)
    values('" . $Correu . "','" . $Nom . "','" . $Cognom . "','" . $CodiC . "','" . $Estat . "','" . $Motiu . "')";

        $this->db->query($sql);
    }

    function Consultes()
    {

        $sql1 = "SELECT * FROM consultes";

        $dades = $this->db->query($sql1);

        return $dades->result_array();
    }
    function InsertarComanda($CodiComanda, $idprod, $idRep, $id, $DireccioEntrega, $Estat, $Telefon)
    {

        $data = array(
            'id_producte' => $idprod,
            'id_repartidor' => $idRep,
            'id_client' => $id,
            'direccio_entrega' => $DireccioEntrega,
            'estat' => $Estat,
            'codi_comanda' => $CodiComanda,
            'telefon' => $Telefon,
        );

        $this->db->insert('comanda', $data);
    }
    function IdClient($id)
    {

        $sql1 = "SELECT * FROM client WHERE id_usuari=" . $id . "";

        $dades = $this->db->query($sql1);

        return $dades->result_array();
    }

    public function CompEstoc($idproducte)
    {

        $sql1 = "SELECT * FROM producte WHERE id_producte=" . $idproducte . "";

        $dades = $this->db->query($sql1);

        return $dades->result_array();
    }


    public function RestarEstocProducte($estocActual, $idproducte)
    {
        $restar = $estocActual - 1;

        $data = array(
            'estoc' => $restar
        );
        $this->db->where('id_producte', $idproducte);
        $this->db->update('producte', $data);
    }

    function detalls($CodiComanda)
    {

        $sql = "SELECT * FROM comanda c LEFT JOIN producte p ON c.id_producte=p.id_producte LEFT JOIN botiga b ON p.id_botiga=b.id_botiga  WHERE codi_comanda='" . $CodiComanda . "' GROUP BY (b.id_botiga)";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    function DadesComandes()
    {

        $sql = "SELECT * FROM comanda GROUP BY codi_comanda";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }
    function Cancel($idcomanda)
    {

        $r = "Cancel·lada";
        $data = array(
            'estat' => $r
        );
        $this->db->where('codi_comanda', $idcomanda);
        $this->db->update('comanda', $data);
    }
    function DadesComandesUsuari($idclient)
    {

        $sql = "SELECT * FROM comanda WHERE id_client=" . $idclient . " GROUP BY codi_comanda";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }

    function IdBotiga($idusuari)
    {
        $sql = "SELECT * FROM botiga WHERE id_usuari=" . $idusuari . "";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }
    function EliminarProducte($idProducte)
    {

        $this->db->where('id_producte', $idProducte);
        $this->db->delete('producte');
    }

    public function PujarnouProducte($idbotiga, $nomproducte, $estoc,$desc,$preu,$CodiProducte,$nomF,$tipusF){

        $contingut = file_get_contents('./uploads/' . $nomF);
        $data = array(
            'id_botiga' => $idbotiga,
            'nom' => $nomproducte,
            'estoc' => $estoc,
            'img_prod' => $contingut,
            'tipus_prod' => $tipusF,
            'preu_kg' => $preu,
            'descripció' => $desc,
            'codi_producte' => $CodiProducte,
        );

        $this->db->insert('producte', $data);

    }
    public function PujarnouBanner($idbotiga, $nomF, $tipusF)
    {

        $contingut = file_get_contents('./uploads/' . $nomF);
        $datas = array(
            'img_banner' => $contingut,
            'tipus_banner' => $tipusF,

        );
        $this->db->where('id_botiga', $idbotiga);
        $this->db->update('botiga', $datas);
    }


    public function PujarnouLogo($idbotiga, $nomF, $tipusF)
    {

        $contingut = file_get_contents('./uploads/' . $nomF);
        $datas = array(
            'img_logo' => $contingut,
            'tipus_logo' => $tipusF,

        );
        $this->db->where('id_botiga', $idbotiga);
        $this->db->update('botiga', $datas);
    }

    function ModificarBotiga($idbotiga, $nombotiga, $contacte, $descripcio)
    {
        $datas = array(
            'nom_botiga' => $nombotiga,
            'contacte' => $contacte,
            'descripció' => $descripcio
        );
        $this->db->where('id_botiga', $idbotiga);
        $this->db->update('botiga', $datas);
    }
    /**
     * Afegir estoc  producte a la botiga.
     *
     *@param int $idproducte id del producte afegir.
     *@param int $estocActual estoc actual del producte afegir.
     */
    function AfegirEstocProducte($estocActual, $idproducte)
    {

        $sumar = $estocActual + 1;

        $data = array(
            'estoc' => $sumar
        );
        $this->db->where('id_producte', $idproducte);
        $this->db->update('producte', $data);
    }

    function CompRep($ciutat)
    {

        $sql = "SELECT * FROM repartidor WHERE ciutat='" . $ciutat . "'";

        $dades = $this->db->query($sql);

        return $dades->result_array();
    }
    function TancarCI($id)
    {

        $tancada = "Tancada";
        $sql = "UPDATE consultes SET estat='" . $tancada . "' WHERE id_consulta=" . $id . "";
        $query = $this->db->query($sql);
    }
}
