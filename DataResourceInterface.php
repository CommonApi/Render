<?php
/**
 * Data Resource Interface
 *
 * @package    Common Api Render
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Data Resource Interface
 *
 * @package    Common Api Render
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface DataResourceInterface
{
    /**
     * Get Data for Rendering View
     *
     * @return  array
     * @since   1.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function getData();
}
