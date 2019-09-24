<?php

namespace App\Controller;

use App\Entity\Article;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractFOSRestController
{
    /**
     * Create Article.
     * @FOSRest\Post("/articles")
     *
     * @return View
     */
    public function postArticleAction(Request $request): View
    {
        $article = new Article();
        $article->name = $request->get('name');
        $article->description = $request->get('description');
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
        return View::create($article, Response::HTTP_CREATED);      
    }
}
