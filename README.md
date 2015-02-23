# quotemarks
Replace quotes according best language practices but leaves HTML markup untouched

###Example
```
$text = "some text with \"double quotes\", 'single quotes' and tags <a href='github.com'>github</a>\"more quotes\" and more tags <p class=\"whatever\">";
$newText = new quotes($text);
```
>
```
XX: some text with "double quotes", 'single quotes' and tags <a href='github.com'>github</a>"more quotes" and more tags <p class="whatever">
sv: some text with ”double quotes”, ’single quotes’ and tags <a href='github.com'>github</a>”more quotes” and more tags <p class="whatever">
fr: some text with «double quotes», ’single quotes’ and tags <a href='github.com'>github</a>«more quotes» and more tags <p class="whatever">
en: some text with “double quotes”, ’single quotes’ and tags <a href='github.com'>github</a>“more quotes” and more tags <p class="whatever">
de: some text with „double quotes“, ’single quotes’ and tags <a href='github.com'>github</a>„more quotes“ and more tags <p class="whatever">
en: some text with “double quotes”, ’single quotes’ and tags <a href='github.com'>github</a>“more quotes” and more tags <p class="whatever">
es: some text with «double quotes», ’single quotes’ and tags <a href='github.com'>github</a>«more quotes» and more tags <p class="whatever">
```

