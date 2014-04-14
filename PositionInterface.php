<?php
/**
 * Position Interface
 *
 * @package    Position
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Position Interface
 *
 * @package    Position
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface PositionInterface
{
    /**
     * Retrieve all Template Views for Position
     *
     * @param   string $position_name
     * @param   object $resource_extension
     *
     * @return  string
     * @since   1.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function getPositionTemplateViews($position_name, $resource_extension);
}
