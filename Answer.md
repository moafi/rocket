# Issue 1 - Clearing the cache on a timely basis
> So as I first took a look at the question, I came to the idea that this is a basic query that can easily be done using the [**rocket_clear_domain**](https://docs.wp-rocket.me/article/494-how-to-clear-cache-via-cron-job) function.
> After giving it a second thought, I realized that this is going to clear the whole cache and we need to clear the HTML, CSS, and JS only.<br> *Later on, I realized that the rocket_clear_domain function [will not clear](https://docs.wp-rocket.me/article/1135-when-does-wp-rocket-delete-which-files) the minified CSS/JS files*. So, I did a little research and found [this article](https://hotexamples.com/examples/-/-/rocket_rrmdir/php-rocket_rrmdir-function-examples.html). \
> Then I discussed with one of my friends who is a proficient developer and came up with [this code](https://github.com/moafi/rocket/blob/main/Cron.php). 
## Answer 1
Hello Customer First Name!

I’m Mahdi from the WP Rocket support team, and I’m going to assist you further with your query.

As far as I understood, you want to clear the cache on a timely basis.

To achieve your requirement, WP Rocket provides custom functions for clearing and preloading the cache. To run these at specific times each day, you can use a cron job on your server. You can refer to [this article](https://docs.wp-rocket.me/article/494-how-to-clear-cache-via-cron-job) for more information.

By the way, this may not be the perfect solution for your requirement as it will clear the whole cache, and you mentioned you need to clear HTML, minified, and combined CSS & JS only. 

So, I consulted with one of our developers, and we wrote the following PHP code for your custom requirement. 

Here’s the custom code: <https://github.com/moafi/rocket/blob/main/Cron.php>

If you need help with setting up a cron job, please refer to the following article on our knowledge base:

[CRON and WP Rocket](https://docs.wp-rocket.me/article/494-how-to-clear-cache-via-cron-job)

If you still had any difficulties setting up your cron job, feel free to contact your hosting provider support.


# Issue 2 - Cron job not working
> As far as I'm concerned, when a real cron job is not working, it's mostly a server-related issue as it is beyond WordPress and software level. <br>
> If a WP-Cron weren’t working, I would be happy to take the initiative and help the user troubleshoot it, but when a real cron job is not working, it's better to let the hosting provider support tackle that.

## Answer 2
Hello Customer First Name!

Thank you for getting back to us.

This is strange as we’ve tested the code at our end, and it worked flawlessly, so it seems more like a server-related issue.

As you may know, there are some restrictions on some servers for cron jobs due to security reasons.

Can you please contact your hosting provider and once check with them?
