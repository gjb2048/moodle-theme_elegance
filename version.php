<?php
// This file is part of the custom Moodle elegance theme
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Theme settings
 *
 * @package    theme_elegance
 * @copyright  2014 Julian Ridden http://moodleman.net
 * @copyright  2015 Bas Brands http://basbrands.nl
 * @authors    Bas Brands -  Bootstrap 3 work by Bas Brands, David Scotson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2016010600;
$plugin->release = '3.0.0';
$plugin->maturity = MATURITY_STABLE;
$plugin->requires  = 2015051100;
$plugin->component = 'theme_elegance';
$plugin->dependencies = array('theme_bootstrap' => 2015102600);
