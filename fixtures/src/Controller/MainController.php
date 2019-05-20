<?php

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route(
     *     name="app_reset_password_confirm",
     *     path="/reset-password/confirm/{token}"
     * )
     */
    public function resetPasswordConfirm()
    {
        return $this->index();
    }

    /**
     * @Route(
     *     name="app_index",
     *     path="/"
     * )
     * @Route(
     *     name="vue_pages",
     *     path="/{route}",
     *     requirements={"route"="^(?!.*_wdt|_profiler).+"}
     * )
     */
    public function index()
    {
        return new Response($this->renderView('index.html.twig'));
    }
}