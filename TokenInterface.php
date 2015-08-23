<?php
/**
 * Token Interface
 *
 * @package    Token
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Render;

/**
 * Token Interface
 *
 * @package    Token
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface TokenInterface
{
    /**
     * Render Output for Specified Token
     *
     * @param   object $token
     *
     * @return  string
     * @since   1.0.0
     */
    public function processToken($token);
}
