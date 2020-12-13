<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Namespaced;

interface NamespaceValueInterface
{
    public function getName() : string;
    public function getValue() : string;
}