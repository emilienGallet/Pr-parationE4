<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
//use PdoGsb;
class SaisirVehiculeController extends Controller
{
    public function indexAction()
    {
        $session= $this->get('request')->getSession();
        $idVisiteur =  $session->get('id');
        $pdo = $this->get('pg_gsb_frais.pdo');
        return $this->render('PgGsbFraisBundle:SaisirVehicule:saisirvehicule.html.twig');
    }
    public function validersaisitvehiculeAction()
    {
        $session= $this->get('request')->getSession();
        $idVisiteur =  $session->get('id');
        $pdo = $this->get('pg_gsb_frais.pdo');
        $request = $this->get('request');
        //récupère les information issue du formulaire
        $numImmat = $request->request->get('numImmat');
        $marque = $request->request->get('marque');
        $model = $request->request->get('model');
        $couleur = $request->request->get('couleur');
        //envoie de la requette
        $req = $pdo->saisirVehicule($numImmat,$marque,$model,$couleur);
        
        return $this->redirectToRoute('pg_gsb_saisirvehicule');
    }
    
}
?>
