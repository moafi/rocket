# Issue 1 - Clearing the cache on a timely basis
> So as I first took a look on the question, I came to the idea that this is basic query that can easily be done using the [**rocket_clear_domain**](https://docs.wp-rocket.me/article/494-how-to-clear-cache-via-cron-job) function.
> Later on and after giving it a second thought, I realized that this is going to clear the whole cache and we need to clear the HTML, CSS, and JS only.<br> *After that I realized that the rocket_clear_domain function will not clear the combined CSS/JS files*. So, I did a little research and found [this article](https://hotexamples.com/examples/-/-/rocket_rrmdir/php-rocket_rrmdir-function-examples.html). \
> Then I discussed with one of friends who is a proficient developer and came up with the following code. 
 
