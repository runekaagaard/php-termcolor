<?php

/**
 * A direct port of http://pypi.python.org/pypi/termcolor to PHP.
 * 
 * @author Rune Kaagaard <rumi.kg@gmail.com>
 * @license None.
 */
$TC_ATTRIBUTES = array_combine(
    array('bold', 'dark', '', 'underline', 'blink', '', 'reverse', 'concealed'),
    range(1, 8)
            
);
unset($TC_ATTRIBUTES['']);

$TC_HIGHLIGHTS = array_combine(
    array('on_grey', 'on_red', 'on_green', 'on_yellow', 'on_blue', 'on_magenta',
          'on_cyan', 'on_white'),
    range(40, 47)
            
);

$TC_COLORS = array_combine(
    array('grey', 'red', 'green', 'yellow', 'blue', 'magenta', 'cyan', 'white'),
    range(30, 37)
);

$TC_RESET = "\033[0m";

/**
 * Returns text formatted with color, backgroundcolor and/or attributes.
 * 
 * @global type $TC_ATTRIBUTES
 * @global type $TC_COLORS
 * @global type $TC_HIGHLIGHTS
 * @global string $TC_RESET
 * @param type $text
 * @param type $color
 *     Available text colors:
 *        red, green, yellow, blue, magenta, cyan, white.
 * @param type $on_color
 *     Available text highlights:
 *         on_red, on_green, on_yellow, on_blue, on_magenta, on_cyan, on_white.
 * @param type $attrs
 *     Available attributes:
 *         bold, dark, underline, blink, reverse, concealed.
 * @example
 *     colored('Hello, World!', 'red', 'on_grey', array('blue', 'blink'));
 *     colored('Hello, World!', 'green');
 * @return string 
 */
function tc_colored($text, $color=null, $on_color=null, $attrs=null) {
    global $TC_ATTRIBUTES, $TC_COLORS, $TC_HIGHLIGHTS, $TC_RESET;
    $fmt_str = "\033[%dm%s";
    if ($color)
        $text = sprintf($fmt_str, $TC_COLORS[$color], $text);

    if ($on_color)
        $text = sprintf($fmt_str, $TC_HIGHLIGHTS[$on_color], $text);

    if ($attrs)
        foreach ($attrs as $attr)
            $text = sprintf($fmt_str, $TC_ATTRIBUTES[$attr], $text);

    $text .= $TC_RESET;
    return $text;
}

/**
 * Echos text formatted with color, backgroundcolor and/or attributes. Adds
 * a new line at the end.
 * 
 * @param type $text
 * @param type $color
 *     Available text colors:
 *        red, green, yellow, blue, magenta, cyan, white.
 * @param type $on_color
 *     Available text highlights:
 *         on_red, on_green, on_yellow, on_blue, on_magenta, on_cyan, on_white.
 * @param type $attrs
 *     Available attributes:
 *         bold, dark, underline, blink, reverse, concealed.
 * @example
 *     colored('Hello, World!', 'red', 'on_grey', array('blue', 'blink'));
 *     colored('Hello, World!', 'green');
 * @return string 
 */
function tcechon($text, $color=null, $on_color=null, $attrs=null) {
    echo tc_colored($text, $color, $on_color, $attrs) . "\n";
}

/**
 * Echos text formatted with color, backgroundcolor and/or attributes.
 * 
 * @param type $text
 * @param type $color
 *     Available text colors:
 *        red, green, yellow, blue, magenta, cyan, white.
 * @param type $on_color
 *     Available text highlights:
 *         on_red, on_green, on_yellow, on_blue, on_magenta, on_cyan, on_white.
 * @param type $attrs
 *     Available attributes:
 *         bold, dark, underline, blink, reverse, concealed.
 * @example
 *     colored('Hello, World!', 'red', 'on_grey', array('blue', 'blink'));
 *     colored('Hello, World!', 'green');
 * @return string 
 */
function tcecho($text, $color=null, $on_color=null, $attrs=null) {
    echo tc_colored($text, $color, $on_color, $attrs) . "\n";
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    echo 'Test basic colors:' . "\n";
    tcechon('Grey color', 'grey');
    tcechon('Red color', 'red');
    tcechon('Green color', 'green');
    tcechon('Yellow color', 'yellow');
    tcechon('Blue color', 'blue');
    tcechon('Magenta color', 'magenta');
    tcechon('Cyan color', 'cyan');
    tcechon('White color', 'white');
    echo str_repeat('-', 78) . "\n";

    echo 'Test highlights:' . "\n";
    tcechon('On grey color', null, 'on_grey');
    tcechon('On red color', null, 'on_red');
    tcechon('On green color', null, 'on_green');
    tcechon('On yellow color', null, 'on_yellow');
    tcechon('On blue color', null, 'on_blue');
    tcechon('On magenta color', null, 'on_magenta');
    tcechon('On cyan color', null, 'on_cyan');
    tcechon('On white color', 'grey', 'on_white');
    echo str_repeat('-', 78) . "\n";

    echo 'Test attributes:' . "\n";
    tcechon('Bold grey color', 'grey', null, array('bold'));
    tcechon('Dark red color', 'red', null, array('dark'));
    tcechon('Underline green color', 'green', null, array('underline'));
    tcechon('Blink yellow color', 'yellow', null, array('blink'));
    tcechon('Reversed blue color', 'blue', null, array('reverse'));
    tcechon('Concealed Magenta color', 'magenta', null, array('concealed'));
    tcechon('Bold underline reverse cyan color', 'cyan', null, array(
            'bold', 'underline', 'reverse'));
    tcechon('Dark blink concealed white color', 'white', null, array(
            'dark', 'blink', 'concealed'));
    echo str_repeat('-', 78) . "\n";

    echo 'Test mixing:' . "\n";
    tcechon('Underline red on grey color', 'red', 'on_grey', array('underline'));
    tcechon('Reversed green on red color', 'green', 'on_red', array('reverse'));
}