## About ##
An (almost) direct port of http://pypi.python.org/pypi/termcolor to PHP. See
the phpdoc in 
[termcolor.php](https://github.com/runekaagaard/php-termcolor/blob/master/termcolor.php)
for detailed documentation.

## Supplied functions ##
php-termcolor provides the following functions:

- `tc_colored()`: Returns text formatted with color, background color and/or 
  attributes.
- `tcechon()`: Echos text formatted with color, background color and/or 
  attributes. Adds a new line at the end.
- `tcecho()`: Echos text formatted with color, background color and/or 
  attributes.
  
The arguments for all three functions are the same. The first is the text to
be colored. Thereafter an arbitrary number of foreground colors, background 
colors and text style attributes can be given. The available choices are:

```
Available text colors:
    red, green, yellow, blue, magenta, cyan, white.
Available text highlights:
    on_red, on_green, on_yellow, on_blue, on_magenta, on_cyan, 
    on_white.
Available attributes:
    bold, dark, underline, blink, reverse, concealed.
```

## Examples ##

```php
<?php
echo 'Test basic colors:' . "\n";
tcechon('Grey color', 'grey');
tcecho('Red color', 'red'); echo "\n";
echo tc_colored('Green color', 'green') . "\n";
tcechon('Yellow color', 'yellow');
tcechon('Blue color', 'blue');
tcechon('Magenta color', 'magenta');
tcechon('Cyan color', 'cyan');
tcechon('White color', 'white');
echo str_repeat('-', 78) . "\n";

echo 'Test highlights:' . "\n";
tcechon('On grey color', 'on_grey');
tcechon('On red color', 'on_red');
tcechon('On green color', 'on_green');
tcechon('On yellow color', 'on_yellow');
tcechon('On blue color', 'on_blue');
tcechon('On magenta color', 'on_magenta');
tcechon('On cyan color', 'on_cyan');
tcechon('On white color', 'grey', 'on_white');
echo str_repeat('-', 78) . "\n";

echo 'Test attributes:' . "\n";
tcechon('Bold grey color', 'grey', 'bold');
tcechon('Dark red color', 'red', 'dark');
tcechon('Underline green color', 'green', 'underline');
tcechon('Blink yellow color', 'yellow', 'blink');
tcechon('Reversed blue color', 'blue', 'reverse');
tcechon('Concealed Magenta color', 'magenta', 'concealed');
tcechon('Bold underline reverse cyan color', 'cyan', 'bold', 'underline', 
        'reverse');
tcechon('Dark blink concealed white color', 'white', array('dark', 'blink', 
        'concealed'));
echo str_repeat('-', 78) . "\n";

echo 'Test mixing:' . "\n";
tcechon('Underline red on grey color', 'red', 'on_grey', 'underline');
tcechon('Reversed green on red color', 'green', 'on_red', 'reverse');
```
