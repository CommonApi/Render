<?php
/**
 * Event Handler Interface
 *
 * @package    Render
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

use CommonApi\Exception\RuntimeException;

/**
 * Event Handler Interface
 *
 * @package    Render
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface EventInterface
{
    /**
     * Initialise Options Array for Event
     *
     * @return  array
     * @since   1.0
     */
    public function initializeEventOptions();

    /**
     * Schedule Event
     *
     * @param   string $event_name
     * @param   array  $options
     *
     * @return  array
     * @since   1.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function scheduleEvent($event_name, array $options = array());
}
