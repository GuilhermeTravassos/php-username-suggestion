# php-username-suggestion
username_suggestion - suggests username from full name.

# Description
username_suggestion(string $name): string
> Returns a string with the suggested username from a string with full name

Note that a surname that is less than two characters long is not taken into account. This is because it is unfeasible when the surname is "De", it would result in a contestable suggestion. 

# Parameters
`name`
An input string with the user's full name.

# Return Values
Returns the string with the suggested username

# Example
```
<?php
$name = "Guilherme de Lima Travassos Filho";
$username = username_suggestion($name);
print $username; // Print guilhermelima
```
