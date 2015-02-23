# quotemarks
Replace quotes according best language practices but leaves HTML markup untouched

###Example
````
$text = "some text with \"double quotes\", 'single quotes' and tags <a href='github.com'>github</a>\"more quotes\" and more tags <p class=\"whatever\">";
$newText = new quotes($text);
````
>
```
some text with "double quotes", 'single quotes' and tags <a href='github.com'>github</a>"more quotes" and more tags <p class="whatever">
some text with ”double quotes”, ’single quotes’ and tags <a href='github.com'>github</a>”more quotes” and more tags <p class="whatever">
```

