<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Namespaced;

interface NamespacedInterface
{
    public function getNamespaceNameCollection() : NamespaceNameCollectionInterface;
}