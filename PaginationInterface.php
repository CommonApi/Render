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
     * Set pagination values
     *
     * << < 1 2 3 > >>
     *
     * @param  array  $data             Data to be displayed (not full results)
     * @param  string $page_url         URL for page on which paginated appears
     * @param  array  $query_parameters URL Query Parameters (other than page)
     * @param  int    $total_items      Total items in full resultset for data
     * @param  int    $per_page         Number of items per page
     * @param  int    $display_links    Number of page number "buttons" to show
     * @param  int    $page             Current page
     *
     * @since  1.0
     */
    public function setPagination(
        array $data = array(),
        $page_url,
        array $query_parameters = array(),
        $total_items,
        $per_page,
        $display_links,
        $page
    );

    /**
     * Get the first page number (always page=1)
     *
     * @return  int
     * @since   1.0
     */
    public function getFirstPage();

    /**
     * Get the page number previous to the current page
     *
     * @return  int
     * @since   1.0
     */
    public function getPrevPage();

    /**
     * Get the current page number
     *
     * @return  int
     * @since   1.0
     */
    public function getCurrentPage();

    /**
     * Get the page number following the current page
     *
     * @return  int
     * @since   1.0
     */
    public function getNextPage();

    /**
     * Get the final page number
     *
     * @return  int
     * @since   1.0
     */
    public function getLastPage();

    /**
     * Get the first page number to use when looping through the display page number buttons
     *
     * @return  int
     * @since   1.0
     */
    public function getStartLinksPage();

    /**
     * Get the last page number to use when looping through the display page number buttons
     *
     * @return  int
     * @since   1.0
     */
    public function getStopLinksPage();

    /**
     * Get data paginated
     *
     * @return  array
     * @since   1.0
     */
    public function getData();

    /**
     * Get the total number of items in the recordset (not just those displayed on the page)
     *
     * @return  int
     * @since   1.0
     */
    public function getTotalItems();

    /**
     * Get the URL for the specified key
     *
     * @param   int $page_number
     *
     * @return  string
     * @since   1.0
     */
    public function getPageUrl($page_number);
}
