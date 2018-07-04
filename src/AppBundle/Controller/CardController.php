<?php

namespace AppBundle\Controller;

use AppBundle\Entity\World\World;
use AppBundle\Entity\Card;
use AppBundle\Entity\World\Deck\Deck;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CardController extends Controller

{

    /**
     * @Route("/", name="homepage")
     * @Template("default/index.html.twig")
     */

    public function showDeck()
    {
        $repository = $this->getDoctrine()->getRepository(Card::class);
        $card = $repository->findAll();
        $array['cuisine'] = $card[0];
        $array['cinema'] = $card[1];
        $data = $this->get('jms_serializer')->serialize($array, 'json');
        $response = json_decode($data, true);

        return array('cuisine'=>$response["cuisine"], 'cinema'=>$response["cinema"]);
    }


    /**
     * @Route("/articles/{card}", name="article_show")
     * @Method ({"GET"})
     */
    public function showAction(Card $card)
    {
        $data = $this->get('jms_serializer')->serialize($card, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/articles", name="article_post")
     * @Method ({"POST"})
     */
    public function createAction(Request $request)
    {
        $data = $request->getContent();
        $article = $this->get('jms_serializer')
                    ->deserialize($data, 'AppBundle\Entity\Card', 'json');

        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return new Response('', Response::HTTP_CREATED);
    }

}