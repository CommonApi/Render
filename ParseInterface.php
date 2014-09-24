<?php
/**
 * Parse Interface
 *
 * @package    Parse
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

use CommonApi\Exception\RuntimeException;

/**
 * Parse Interface
 *
 * @package    Parse
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ParseInterface
{
    /**
     * Parse rendered output returning an array of tokens to be rendered
     *
     * @param   string $rendered_page
     * @param   array  $exclude_tokens
     * @param   string $parse_mask
     *
     * @return  array
     * @since   1.0.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function parseRenderedOutput(
        $rendered_page,
        array $exclude_tokens = array(),
        $parse_mask = null
    );
}
