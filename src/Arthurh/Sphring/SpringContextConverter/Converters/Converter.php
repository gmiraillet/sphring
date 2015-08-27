<?php
/**
 * Copyright (C) 2015 Arthur Halet
 *
 * This software is distributed under the terms and conditions of the 'MIT'
 * license which can be found in the file 'LICENSE' in this package distribution
 * or at 'http://opensource.org/licenses/MIT'.
 *
 * Author: Arthur Halet
 * Date: 09/06/2015
 */


namespace Arthurh\Sphring\SpringContextConverter\Converters;


interface Converter
{
    function convert(array $arrayXml, array &$source);
}