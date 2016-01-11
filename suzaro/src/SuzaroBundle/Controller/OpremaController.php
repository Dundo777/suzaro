<?php
namespace SuzaroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class OpremaController extends Controller {
    
    public function indexAction() {
        $restClient = $this->container->get('ci.restclient');

        $resp = $restClient->get('http://104.236.71.177/rasus_backend/oprema');
        $json = json_decode(substr( $resp, strpos($resp, "{") - 1));
        return $this->render('SuzaroBundle::oprema.html.twig', array('resp' => $json));
    }
    
    public function addEquipAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $data = json_decode($request->getContent(), true);
            $restClient = $this->container->get('ci.restclient');
            
            $resp = $restClient->post('http://104.236.71.177/rasus_backend/oprema',
                        'inventar_broj=' . $data['broj'] . '&' .
                        'naziv=' . $data['naziv'],
                        array(CURLOPT_HTTPHEADER => 
                              array('Content-Type: application/x-www-form-urlencoded')));
            $json = json_decode($resp->getContent(), true);
            return new JsonResponse(array('id' => $json['id']));
        }
    }
    
    public function editEquipAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $data = json_decode($request->getContent(), true);
            $restClient = $this->container->get('ci.restclient');
            
            $resp = $restClient->put('http://104.236.71.177/rasus_backend/oprema/' .                                       $data['id'],          
                        'inventar_broj=' . $data['broj'] . '&' .
                        'naziv=' . $data['naziv'],
                        array(CURLOPT_HTTPHEADER => 
                              array('Content-Type: application/x-www-form-urlencoded')));
            return new JsonResponse(array('msg' => var_dump($resp)));
        }
    }
    
    public function deleteEquipAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            $restClient = $this->container->get('ci.restclient');

            $resp = $restClient->delete('http://104.236.71.177/rasus_backend/oprema/' . $id);
            return new JsonResponse(array('msg' => var_dump($resp)));
        }
    }
}

