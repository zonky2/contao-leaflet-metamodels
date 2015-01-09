<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Leaflet\MetaModels\Model;


/**
 * @property int latitudeAttribute
 * @property int longitudeAttribute
 * @property int customIcon
 * @property mixed|null iconAttribute
 * @property mixed|null addPopup
 * @property mixed|null renderSettings
 * @property mixed|null popupAttribute
 * @property mixed|null options
 */
class FeatureModel extends \Model
{
    protected static $strTable = 'tl_leaflet_mm_feature';

}