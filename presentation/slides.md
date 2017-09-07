name: inverse
layout: true
class: center, middle
---
# Scraping basics <i class="fa fa-search fa-fw"></i>
## Everything you always wanted to know about scraping but had no <i class="fa fa-futbol-o"></i> to ask. 
.footnote[<i class="fa fa-pencil fa-fw"></i> Created by [nemanjan00](https://github.com/nemanjan00/)]
---
# Scraping basics <i class="fa fa-search fa-fw"></i>
## What I think you should do since I think I am smarter than you. 
.footnote[<i class="fa fa-pencil fa-fw"></i> Created by [nemanjan00](https://github.com/nemanjan00/)]
---
layout: false
###Who am I? <i class="fa fa-user fa-fw"></i> 

 * Web developer

 * Hacker

 * Cool 😎

 * Narcisistic person

 * I do not f\*cking curse

---

### What is the best way for scraping? <i class="fa fa-trophy fa-fw"></i> 

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

$listItems = explode("<li>", $list); // Split again by another tag

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

.footnote[[Example](https://github.com/nemanjan00/scraping/tree/master/example1) and [scraper](https://github.com/nemanjan00/scraping/tree/master/example1-scraper)]
---

### Predictable scraping path

* Asynchronous languages

.footnote[[Example](https://github.com/nemanjan00/scraping/tree/master/example2) and [scraper](https://github.com/nemanjan00/scraping/tree/master/example2-scraper)]
---
