<?php

namespace Aristos\PlazaBundle\Document\Material;

use Aristos\PlazaBundle\Document\Material;
class News extends Material {

    /**
     * @var MongoId $id
     */
    protected $id;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}