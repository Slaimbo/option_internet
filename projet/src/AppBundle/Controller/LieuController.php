<?php
namespace AppBundle\Controller;

use AppBundle\Form\Type\LieuType;
use AppBundle\Entity\Lieu;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LieuController extends Controller
{
    /*
    public function homeAction(Request $request, $message)
    {
        $data = array('msg' => $message,
                      'nav' => $request->server->get('HTTP_USER_AGENT'));
        return $this->render('default/home.html.twig', $data);
    }
    */
    
    public function listLieuAction($message)
    {
        $em = $this->getDoctrine()->getManager();
        $lieu = $em->getRepository(Lieu::class)->findAll();

        return $this->render('lieu/list.html.twig', ['lieu' => $lieu, 'msg' => $message]);
    }
    
    public function deleteLieuAction($message)
    {
        $em = $this->getDoctrine()->getManager();
        $lieu = $em->getRepository(Lieu::class)->find($message);
        
        if (!$lieu)
        {
            return $this->render('default/home.html.twig', ['msg' => "L'objet ".$message."n'existe pas !"]);
        }
        else
        {
            $em->remove($lieu);
            $em->flush();
            //return $this->render('.html.twig', ['msg' => "le lieux : ".$message." a bien été supprimé !"]);
            //$em = $this->getDoctrine()->getManager();
            $lieu = $em->getRepository(Lieu::class)->findAll();

            return $this->render('lieu/list.html.twig', ['lieu' => $lieu, 'msg1' => "le lieux : ".$message." a bien été supprimé !"]);
        }
    }
    
    public function updateLieuAction($lieu_id)
    {
        $em = $this->getDoctrine()->getManager();
        $lieu = $em->getRepository(Lieu::class)->find($lieu_id);
        
        //$lieu.setNom('lol');
        //$em->flush()
                
        $lieu = $em->getRepository(Lieu::class)->findAll();
        return $this->redirectToRoute('listlieux', ['message' => "mise à jour faite !"]);
    }
    
    public function addLieu(Lieu $request, $message)
    {
        
    }
    
    private function handleFrom($From, Lieu $lieu, Request $request)
    {
        
    }
}

