<?php
/**
 * This configures which meta data will be editable through
 * the media manager. Each field of the array is an array with the
 * following contents:
 *   fieldname - Where data will be saved (EXIF or IPTC field)
 *   label     - key to lookup in the $lang var, if not found printed as is
 *   htmltype  - 'text', 'textarea' or 'date'
 *   lookups   - array additional fields to lookup the data (EXIF or IPTC fields)
 *
 * The fields are not ordered continously to make inserting additional items
 * in between simpler.
 *
 * This is a PHP snippet, so PHP syntax applies.
 *
 * Note: $fields is not a global variable and will not be available to any
 *       other functions or templates later
 *
 * You may extend or overwrite this variable in a optional
 * conf/mediameta.local.php file
 *
 * For a list of available EXIF/IPTC fields refer to
 * http://www.dokuwiki.org/devel:templates:detail.php
 */


$fields = array(
    15 => array('Text.Title',
                'Title',
                'text'),
    16 => array('Text.PhysicalLocation',
                'Current Location',
                'text'),
    17 => array('Text.Source',
                'Source',
                'text'),
    18 => array('Text.Date',
                'Date',
                'text'),
    19 => array('Text.Creator',
                'Creator',
                'text'),
    20 => array('Text.Comment',
                'Comment',
                'text'),
    
    21 => array('',
                'Date Modified',
                'date',
                array('Date.EarliestTime')),

    30 => array('',
                'img_fname',
                'text',
                array('File.Name')),

    70 => array('',
                'img_format',
                'text',
                array('File.Format')),

    80 => array('',
                'img_fsize',
                'text',
                array('File.NiceSize')),

    90 => array('',
                'img_width',
                'text',
                array('File.Width')),

    100 => array('',
                'img_height',
                'text',
                array('File.Height')),

);
