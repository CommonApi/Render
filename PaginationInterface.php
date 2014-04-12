<?php
/**
 * Pagination Interface
 *
 * @package    Render
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Pagination Interface
 *
 * @package    Render
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0.0
 */
interface PaginationInterface
{
    /**
     * Get Pagination Row Object for input data to rendering
     *
     * << < 1 2 3 > >>
     *
     * @param   int      $display_items_per_page_count
     * @param   int      $display_page_link_count
     * @param   boolean  $create_sef_url_indicator
     * @param   boolean  $display_index_in_url_indicator
     * @param   int      $total_items
     * @param   string   $visited_page_url
     * @param   int      $current_start_parameter
     * @param   array    $other_query_parameters
     *
     * @since   1.0
     * @return  object
     */
    public function getPaginationData(
        $display_items_per_page_count = 5,
        $display_page_link_count = 10,
        $create_sef_url_indicator = false,
        $display_index_in_url_indicator = true,
        $total_items,
        $visited_page_url,
        $current_start_parameter,
        $other_query_parameters
    );
}
