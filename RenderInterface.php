<?php
/**
 * Render Interface
 *
 * @package    Render
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\Render;

/**
 * Render Interface
 *
 * @package    Render
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface RenderInterface
{
    /**
     * Render Theme and its include Page
     *
     * @param   object $runtime_data
     *
     * @since   1.0
     * @return  string
     */
    public function includeTheme($runtime_data);

    /**
     * Parse rendered output looking for tokens (excluded tokens are head, held until all body rendered)
     *
     * @param   string $rendered_page
     * @param   array  $exclude_tokens
     *
     * @return  array
     * @since   1.0
     */
    public function parseTokens($rendered_page, array $exclude_tokens = array());

    /**
     * Render output for tag discovered in parsing
     *
     * @param   object      $runtime_data
     * @param   object      $parameters
     * @param   array       $query_results
     * @param   null|object $model_registry
     *
     * @return  array
     * @since   1.0
     */
    public function renderView($runtime_data, $parameters, array $query_results = array(), $model_registry = null);

    /**
     * Replace the token discovered during parsing with the associated rendered output
     *
     * @param   string $token
     * @param   string $rendered_view
     * @param   string $rendered_page
     *
     * @return  $this
     * @since   1.0
     */
    public function injectRenderedOutput($token, $rendered_view, $rendered_page);
}
