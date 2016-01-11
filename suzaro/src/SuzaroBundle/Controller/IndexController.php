<?php
namespace SuzaroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller {
    
    public function indexAction() {
        
        $restClient = $this->container->get('ci.restclient');

        $resp = $restClient->get('http://104.236.71.177/rasus_backend/korisnik/4');
        $json = json_decode(substr( $resp, strpos($resp, "{")));
        return $this->render('SuzaroBundle::index.html.twig', array('resp' => $json));
    }
}

