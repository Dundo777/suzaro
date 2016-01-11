<?php
namespace SuzaroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class RezervacijaController extends Controller {
    
    public function indexAction() {
        $restClient = $this->container->get('ci.restclient');

        $resp = $restClient->get('http://104.236.71.177/rasus_backend/korisnik');
        $korisnici = json_decode(substr( $resp, strpos($resp, "{") - 1), true);
        return $this->render('SuzaroBundle::korisnik_zau.html.twig', 
                             array('korisnici' => $korisnici));
    }
    
    public function userResAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            $restClient = $this->container->get('ci.restclient');
        
            $resp = $restClient->get('http://104.236.71.177/rasus_backend/korisnik/koristenje/' . 
                                $id);   
            $json = json_decode(substr( $resp, strpos($resp, "{") - 1), true);
            return new JsonResponse(array('json' => $json));
        }
    }
    
    public function opremaAction() {
        $restClient = $this->container->get('ci.restclient');

        $resp = $restClient->get('http://104.236.71.177/rasus_backend/oprema');
        $oprema = json_decode(substr( $resp, strpos($resp, "{") - 1), true);
        return $this->render('SuzaroBundle::oprema_zau.html.twig', 
                             array('oprema' => $oprema));
    }
    
    public function opremaResAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            $restClient = $this->container->get('ci.restclient');
        
            $resp = $restClient->get('http://104.236.71.177/rasus_backend/oprema/koristenje/' . 
                                $id);   
            $json = json_decode(substr( $resp, strpos($resp, "{") - 1), true);
            return new JsonResponse(array('json' => $json));
        }
    }
    
    public function novaAction(Request $request) {
        if ($request->getMethod() === 'POST') {
            $korisnik = $request->request->get('korisnik');
            $oprema = $request->request->get('oprema');
            $datumOd = $request->request->get('datumOd');
            $datumDo = $request->request->get('datumDo');
            
            $restClient = $this->container->get('ci.restclient');

            $resp = $restClient->post('http://104.236.71.177/rasus_backend/korisnik/koristenje/'.
                                      $korisnik,
                                      'vrijemeOd=' . $datumOd . '&' .
                                      'vrijemeDo=' . $datumDo . '&' .
                                      'broj=' . $oprema,
                                      array(CURLOPT_HTTPHEADER => 
                              array('Content-Type: application/x-www-form-urlencoded'))
                                    );

            return new JsonResponse(array('resp' => var_dump($resp)));
        } else {
            $restClient = $this->container->get('ci.restclient');

            $resp = $restClient->get('http://104.236.71.177/rasus_backend/korisnik');
            $korisnici = json_decode(substr( $resp, strpos($resp, "{") - 1), true);

            $resp = $restClient->get('http://104.236.71.177/rasus_backend/oprema');
            $oprema = json_decode(substr( $resp, strpos($resp, "{") - 1), true);

            return $this->render('SuzaroBundle::rezervacija.html.twig',
                                 array('korisnici' => $korisnici, 'oprema' => $oprema));
        }
    }

}

