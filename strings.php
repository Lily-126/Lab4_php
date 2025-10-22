<?php
$user = 'Aisha';
$heredoc = <<<TXT
Hello, $user!
This is a multi-line string with interpolation.
TXT;

$nowdoc = <<<'TXT'
Nowdoc does not interpolate: $user is literal here.
TXT;

echo "<pre>$heredoc
---
$nowdoc</pre>";