<?php
/**
 * Token Interface
 *
 * @package    Token
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Token Interface
 *
 * @package    Token
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface TokenInterface
{
    /**
     * Token output for specified token and data
     *
     * @param   object $token
     * @param   array  $data
     *
     * @return  string
     * @since   1.0.0
     */
    public function processToken($token, array $data = array());
}
