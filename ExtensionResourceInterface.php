<?php
/**
 * Extension Resource Interface
 *
 * @package    Common Api Render
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Extension Resource Interface
 *
 * @package    Common Api Render
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ExtensionResourceInterface
{
    /**
     * Get Extensions for Resource for Rendering
     *
     * @return  array
     * @since   1.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function getResourceExtension();

    /**
     * Get Data required to render token
     *
     * @param   object $token
     *
     * @return  $this
     * @since   1.0
     */
    public function getExtension($token);
}
