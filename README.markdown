## About ##
A direct port of http://pypi.python.org/pypi/termcolor to PHP. See
the phpdoc for documentation.

## Examples ##

```php
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
```
