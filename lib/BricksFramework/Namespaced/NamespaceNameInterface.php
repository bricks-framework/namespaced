<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Namespaced;

interface NamespaceNameInterface
{
    public function getNamespaceValueCollection() : NamespaceValueCollectionInterface;
    public function setDefaultNamespace(array $namespace) : void;
    public function getDefaultNamespace() : array;
    public function setCurrentNamespace(array $namespace) : void;
    public function getCurrentNamespace() : array;
}
