<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="index")
     */
     public function indexAction()
        {
            return $this->render('@Admin/Default/index.html.twig');
        }
    
    /**
     * @Route("/comptabilité",name="compta")
     */
     public function comptaAction()
     {
        return $this->render('@Admin/ondev.html.twig');
     }
    
    /**
     * @Route("/ajout",name="add")
     */
     public function addAction()
     {
        return $this->render('@Admin/ondev.html.twig');
     }
    
    /**
     * @Route("/famille",name="famille")
     */
     public function familleAction()
     {   
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AdminBundle:Famille')->findAll();
        return $this->render('@Admin/Default/famille.html.twig', array('familles' => $entities));
     }
    
    /**
     * @Route("/familleAdd", name="familleAdd")
     */
    public function familleAddAction($param) {

         if ($request->isMethod('POST')) {
            return new Reponse("true");
         }

        // $entitie = new Advert();
        // $entitie->setTitle('Recherche développeur Symfony.');
        // $entitie->setAuthor('Alexandre');
        // $entitie->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($entitie);
        // $em->flush();
        // if ($request->isMethod('POST')) {
        //   $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
        //   return $this->render('@Admin/Default/tableauFamille.html.twig', array('familles'=> $entities));
        // }
        
    }
    
    /**
     * @Route("/tag",name="tag")
     */
    public function tagAction()
    {
        return $this->render('@Admin/ondev.html.twig');
    }
    
    /**
     * @Route("/tatoo",name="tatoo")
     */
    public function tatooAction()
    {
        return $this->render('@Admin/ondev.html.twig');
    }
}
