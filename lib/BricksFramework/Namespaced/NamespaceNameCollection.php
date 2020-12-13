<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Namespaced;

use BricksFramework\PriorityObjectList\PriorityObjectList;

class NamespaceNameCollection extends PriorityObjectList implements NamespaceNameCollectionInterface
{
    protected $objectInterface = 'BricksFramework\Namespaced\NamespaceName';
}
