<?php

namespace App\Description;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations\JsonContent;
use OpenApi\Annotations\Operation;
use OpenApi\Annotations\Response;
use Nelmio\ApiDocBundle\Annotation as Nelmio;

/**
 * @Annotation
 * 
 * @Nelmio\Security(name="Bearer")
 */
class GetBookDescription extends Operation
{
    public $method = 'get';

    public $summary = 'Best method in the world';

    public $responses = [];

    public $tags = ['Special'];

    public function __construct($properties)
    {
        parent::__construct($properties);

        $this->responses[] = new Response([
            'response' => 200,
            'description' => 'Book successfully receveid',
            '_unmerged' => [new JsonContent([
                'ref' => new Model([ 'type' => \App\Entity\Book::class ])
            ])]
        ]);
        $this->responses[] = new Response([
            'response' => 404,
            'description' => 'Book not found',
            '_unmerged' => [new JsonContent([
                'example' => [ 'message' => 'Book not found' ]
            ])]
        ]);
        $this->responses[] = new Response([
            'response' => 403,
            'description' => 'Restricted access',
            '_unmerged' => [new JsonContent([
                'example' => [ 'message' => 'Restricted access' ]
            ])]
        ]);
    }
}
