<?php

namespace App\Controller;

use App\Description;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class GetBook
{
    /**
     * @Description\GetBookDescription
     * 
     * @Route(
     *     path="/api/book/{bookId}",
     *     name="api_book_get",
     *     methods={"GET"}
     * )
     */
    public function index($bookId)
    {
        return new Response('OK'); 
    }
}
