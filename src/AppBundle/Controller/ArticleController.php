<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller{

    /**
     * @Route("/articles", name="articles_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request){
        $data = $request->getContent();
        $article = $this->get('jms_serializer')
                    ->deserialize($data, 'AppBundle\Entity\Article', 'json');

        dump($article); die;
    }

        /**
     * @Route("/articles", name="articles_get")
     * @Method({"GET"})
     */
    public function getAction(Request $request){
        dump("hhhaaaaaa"); die;
    }
}
