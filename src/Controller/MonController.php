<?php  
namespace App\Controller ;
use app\Entity\user;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MonController extends AbstractController {

	public  function index () {
	    //dd($this->getUser('id'));
		return $this->render("home/index.html.twig");	
	}

	public function test_var(Request $request){
		$var = $request->query->get('arg','non defini');
		return new Response( " argument est $var");
	}

	public function test_attributes(Request $request){
		$var = $request->attributes->get('var','non defini');
		return new Response( " l'attribut est $var");
	}

	public function show_fiche_client(Request $request){

		return $this->render("client/fiche_client.html.twig");
	}

	/**
	* @Route("/default",name="default")
	*/

	public function you_are_disconnected(){

	    return $this->render("/deconnected.html.twig");
	}

	
}
;

