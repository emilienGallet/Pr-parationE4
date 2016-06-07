<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
//use PdoGsb;
class AffectationController extends Controller
{
    /*
     * retourne une collection de véhicule.
     */
    public function indexAction()
    {
        //On récupère la sesssion de l'utilisateur
        $session= $this->container->get('request')->getSession();
        //On récupère l'id du visiteur
        $idVisiteur =  $session->get('idVisiteur');
        //on accède au service pdo afin de pouvoir communiquer avec la base de donnée
        $pdo = $this->get('pg_gsb_frais.pdo');
        //On demande la liste des véhicule
        $ListeAffectation = $pdo->getListeAffectation();

        return $this->render('PgGsbFraisBundle:ListeAffectation:listeAffectation.html.twig',
                array('lesAffectation'=>$ListeAffectation));
    }

    /*
     * retourne un formulaire de saisit de véhicule
     */

    public function addAction()
    {
        //On récupère la sesssion de l'utilisateur
        $session= $this->container->get('request')->getSession();
        //On récupère l'id du visiteur
        $idVisiteur =  $session->get('idVisiteur');
        //on accède au service pdo afin de pouvoir communiquer avec la base de donnée
        $pdo = $this->get('pg_gsb_frais.pdo');
        //On demande la liste des véhicule
        $ListeAffectation = $pdo->getListeAffectation();

        return $this->render('PgGsbFraisBundle:ListeAffectation:listeAffectation.html.twig',
                array('lesAffectation'=>$ListeAffectation));
    }

}






?>