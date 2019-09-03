<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

class ClientsController extends Controller
{
    private $client_data = [
        [
            'id' => '0',
            'title' => 'ms',
            'firstname' => 'Jamile',
            'address' => 'Helsinki',
            'email' => 'jan@email.com',

        ],
        [
            'id' => '1',
            'title' => 'mr',
            'firstname' => 'Jan',
            'address' => 'Helsinki',
            'email' => 'jan@email.com',

        ],
        [
            'id' => '2',
            'title' => 'mr',
            'firstname' => 'Valentine',
            'address' => 'Espoo',
            'email' => 'valentine@email.com',

        ],
        [
            'id' => '3',
            'title' => 'mr',
            'firstname' => 'Dipendra',
            'address' => 'Vantaa',
            'email' => 'dipendra@email.com'

        ]
    ];

    private function callApi($method, $url, $data = false)
   {
       $curl = curl_init();

       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       $result = curl_exec($curl);
       
       $result = json_decode($result);
       curl_close($curl);
       return $result->results;
   } 

    /**
     * @Route("/guests", name="index_clients")
     */
    
    public function showIndex()
    {
        $data = [];

        $this->client_data = $this->callAPI("GET", "https://randomuser.me/api/?results=200");
        $data['clients'] = $this->client_data;
        return $this->render("clients/index.html.twig", $data);
        
    }
    public function showNew()
    {

        
    }

}