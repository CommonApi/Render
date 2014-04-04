<?php
/**
 * Escape Interface
 *
 * @package    Escape
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Escape Interface
 *
 * @package    Escape
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface EscapeInterface
{
    /**
     * Escape Data prior to Rendering
     *
     * @param   array  $query_results
     * @param   array  $model_registry
     *
     * @return  array
     * @since   1.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function escape(array $query_results = array(), array $model_registry = array());
}
