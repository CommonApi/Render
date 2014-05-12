<?php
/**
 * Render Interface
 *
 * @package    Render
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Render Interface
 *
 * @package    Render
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface RenderInterface
{
    /**
     * Render output for specified file and data
     *
     * @param   string $include_file
     * @param   array  $data
     *
     * @return  string
     * @since   1.0
     */
    public function renderOutput($include_file, array $data = array());
}
