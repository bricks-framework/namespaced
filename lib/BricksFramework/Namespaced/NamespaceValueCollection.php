<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Namespaced;

use BricksFramework\PriorityObjectList\PriorityObjectList;

class NamespaceValueCollection extends PriorityObjectList implements NamespaceValueCollectionInterface
{
    protected $objectInterface = 'BricksFramework\Namespaced\NamespaceValue';
}
