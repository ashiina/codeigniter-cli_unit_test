codeigniter-cli_unit_test
======================
A CodeIgniter library extending the unit_test library, for CLI output.
It's a simple extension with a new function `cli_report()` , 
which outputs the test result colored for your CLI.

Please feel free to let me know (or just fork) if you find any bugs or improvements points.

Thanks, -ashiina (https://github.com/ashiina)

Requirements
-----------
1. PHP 5.0 or more
2. CodeIgniter 2.0 or more (http://codeigniter.com)
3. CodeIgniter Redis Library (https://github.com/joelcox/codeigniter-redis)

Guide
-----------
### Installation
Simply add this file into your Codeigniter project's library:
```
cp MY_Unit_test.php /path/to/application/libraries/
```

### Usage
Load the library as you would the Codeigniter's native Unit_test library.
```
$this->load->library('unit_test');
```

Then call the cli_report() function as you would the native report() function.
```
echo $this->unit->cli_report();
```

That's all.
Just execute your test script from your CLI, and you should get a nicely color-formatted result.
```
php index.php path_to_test
```


License
----------
This library is released under the MIT license.


