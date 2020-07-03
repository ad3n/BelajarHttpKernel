<?php

namespace BelajarSymfony;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class Kernel implements HttpKernelInterface
{
    public function handle(Request $request, int $type = self::MASTER_REQUEST, bool $catch = true): Response
    {
        if ('/hello' === $request->getPathInfo()) {
            return new Response('Selamat datang');
        }

        if ('/makan' === $request->getPathInfo()) {
            return new Response('Yuk kuy, gw traktir');
        }

        if ('/symfony' === $request->getPathInfo()) {
            return new Response('Is the best');
        }

        throw new NotFoundHttpException();
    }
}
