<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Namespaced;

class Namespaced implements NamespacedInterface
{
    /** @var NamespaceNameCollection */
    protected $namespaceNameCollection;

    public function __construct()
    {
        $this->namespaceNameCollection = new NamespaceNameCollection();
    }

    public function getNamespaceNameCollection() : NamespaceNameCollectionInterface
    {
        return $this->namespaceNameCollection;
    }
}
