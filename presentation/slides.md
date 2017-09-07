name: inverse
layout: true
class: center, middle
---
# Scraping basics
## Everything you always wanted to know about scraping but had no <i class="fa fa-futbol-o"></i> to ask. 
.footnote[Go directly to [project site](https://github.com/gnab/remark)]
---
layout: false
### Who am I? 

 * Web developer

 * Hacker

---

### What is the best way for scraping? 

 * What is best solution for specific case? 

 * What do you know the best? 

 * Something in between! 

---

### Single page scraping

 * Do not use parsers

```php
$items = [];

$lists = explode("<ul>", $data); // Split by opening tag
$list = $lists[1]; // Take first one. Index 0 is for stuff before tag... 

$listItems = explode("<li>", $list); // Split again by another tag if you want to

unset($listItems[0]); // Delete stuff before first tag

forEach($listItems as $item){
	$item = explode("<", $item)[0]; // Get something from tag

	$items[] = $item; // Add it to array
}
```
---

### Unpredictable scraping path

* Synchronous languages

#### Pros

 * Easier to write

 * No too much need for nesting

 * Not too aggressive when it comes to traffic (slow by default)

#### Cons

 * Slow for branching. 

 * You touch it, you buy it. 

.footnote[[Example]() and [scraper]()]
---

### Predictable scraping path

* Asynchronous languages

