<?php
/**
 * Created by PhpStorm.
 * User: dimitar
 * Date: 20.03.18
 * Time: 20:00
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return new JsonResponse([
            'msg' => 'it`s alive'
        ]);
    }
}