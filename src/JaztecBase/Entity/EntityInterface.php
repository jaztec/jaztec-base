<?php

namespace JaztecBase\Entity;

interface EntityInterface
{
    
    /**
     * Get the database identifier
     * 
     * @return int
     */
    public function getId();
    
    /**
     * Updates the entity from an array, matching the key's to an internal
     * setter
     *
     * @param array $array
     */
    public function fromArray(array $array);

    /**
     * Return all the good parts of the entity in an array.
     *
     * @return array
     */
    public function toArray();
}
