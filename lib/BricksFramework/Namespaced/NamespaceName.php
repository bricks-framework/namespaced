<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Namespaced;

class NamespaceName implements NamespaceNameInterface
{
    /** @var string */
    protected $namespaceName;

    /** @var NamespaceValueCollection */
    protected $namespaceValueCollection;

    protected $defaultNamespace = [];

    protected $currentNamespace = [];

    public function __construct(string $namespaceName)
    {
        $this->namespaceName = $namespaceName;
        $this->namespaceValueCollection = new NamespaceValueCollection();
    }

    public function getNamespaceValueCollection() : NamespaceValueCollection
    {
        return $this->namespaceValueCollection;
    }

    public function setDefaultNamespace(array $namespace) : void
    {
        $this->defaultNamespace = $namespace;
    }

    public function getDefaultNamespace() : array
    {
        return $this->defaultNamespace;
    }

    public function setCurrentNamespace(array $namespace) : void
    {
        $this->currentNamespace = $namespace;
    }

    public function getCurrentNamespace() : array
    {
        return $this->currentNamespace;
    }
}