<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Leaflet\MetaModels;


use MetaModels\IItem;
use Netzmacht\Contao\Leaflet\Mapper\DefinitionMapper;
use Netzmacht\LeafletPHP\Definition\Group\LayerGroup;
use Netzmacht\LeafletPHP\Definition\Type\LatLngBounds;

interface Feature
{
    /**
     * Apply feature to an item.
     *
     * @param IItem            $item        Current meta model item.
     * @param LayerGroup       $parentLayer The parent layer.
     * @param DefinitionMapper $mapper      The definition mapper.
     * @param LatLngBounds     $bounds      Optional LatLng bounds.
     *
     * @return
     */
    public function apply(IItem $item, LayerGroup $parentLayer, DefinitionMapper $mapper, LatLngBounds $bounds = null);
}