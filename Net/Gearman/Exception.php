<?php

/**
 * Interface for Danga's Gearman job scheduling system
 *
 * PHP version 5.1.0+
 *
 * LICENSE: This source file is subject to the New BSD license that is
 * available through the world-wide-web at the following URI:
 * http://www.opensource.org/licenses/bsd-license.php. If you did not receive
 * a copy of the New BSD License and are unable to obtain it through the web,
 * please send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Net
 * @package   Net_Gearman
 * @author    Joe Stump <joe@joestump.net>
 * @author    Brian Moon <brianm@dealnews.com>
 * @author    Jason Pirkey <jason@pirkplace.com>
 * @copyright 2007-2008 Digg.com, Inc.
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version   CVS: $Id$
 * @link      https://github.com/brianlmoon/net_gearman
 */

// Check to see if composer class loader is being used instead of PEAR
if ( ! class_exists('Composer\\Autoload\\ClassLoader', false)) {
    require_once 'PEAR/Exception.php';

    /**
     * Exception class for Net_Gearman
     *
     * @category  Net
     * @package   Net_Gearman
     * @author    Joe Stump <joe@joestump.net>
     * @author    Brian Moon <brianm@dealnews.com>
     * @copyright 2007-2008 Digg.com, Inc.
     * @link      https://github.com/brianlmoon/net_gearman
     * @see       PEAR_Exception
     */
    class Net_Gearman_Exception extends PEAR_Exception
    {

    }
}
else {
    /**
     * Exception class for Net_Gearman
     *
     * @category  Net
     * @package   Net_Gearman
     * @author    Joe Stump <joe@joestump.net>
     * @author    Brian Moon <brianm@dealnews.com>
     * @author    Jason Pirkey <jason@pirkplace.com>
     * @copyright 2007-2008 Digg.com, Inc.
     * @link      https://github.com/brianlmoon/net_gearman
     * @see       PEAR_Exception
     */
    class Net_Gearman_Exception extends Exception
    {

    }
}
