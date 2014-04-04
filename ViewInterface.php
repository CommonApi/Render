<?php
/**
 * Render View Interface
 *
 * @package    Common Api Render
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Render View Interface
 *
 * @package    Common Api Render
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ViewInterface
{
    /**
     * Get View required for Rendering
     *
     * @param   object $token
     *
     * @return  $this
     * @since   1.0
     */
    public function getView($token);
}
