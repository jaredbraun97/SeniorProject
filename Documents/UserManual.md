# Table of Contents:

-   Initial setup

    -   Deployment method

    -   Configuring the domain

-   Login

-   Prayer request management

-   Video Management

-   Admin Management

-   Updates

    -   What to update

    -   What not to update

# Initial setup:

-   Deployment method

There are 2 deployment options, using a local server and online Hosting.

Online Hosting has the advantage of not needing to worry about getting a
static IP to use, having no physical maintenance concerns, and having
very high accessibility and reliability to users. It is a consistent
cost that may be more expensive in the long term. It is also hard to
gain access for purposes of configuration.

I'll broadly cover the steps to get the vm from its current state to
running as in aws. I no longer have access to a aws account so I'll just
go over the steps I won't be able to confirm their success but in the
first submission of the project you will recall that it was successfully
hosted on a aws server. Log in to your aws mangent console, navigate to
the s3 service and create a new bucket, follow the wizard. After the
bucket is made select it, click the upload button to start the wizard,
click the add files button and select vmdk file(s). make sure you have
the seeting you need and then click the upload button to start the
upload process. navigate to the ec2 page and select to AMI page, select
import/export button, click import image, in the import from section put
amazon s3. Then enter the url of your bucket. Specify the path and
necessary permissions. Set the architecture, OS ,and platform to the
settings of the vm. Name the import and click next. If all is good click
the create image button. Go back to the ec2 section and select Launch
instance button. For the instance setup select my AMI's on the left
panel, and choose the one you just made, complete the other
configuration setting to your needs and then launch the instance.

You can also install vm on the server and just run it all the time but
you would need to use the business vm ware service.

Local Hosting is much more direct but has a higher upfront cost, lower
reliability, and accessibility. The vm may need to be converted to an
OVA file but you use that file as starting image to. Or even intstall vm
ware on the machine. You also need a static IP address from your ISP,
and usually permission to host from them as well. The machine could be
anything from an old pc someone wasn't using to a small purpose-built
server. The server would need to never or rarely turnoff and have
constant internet access.

-   Configuring domain

This is a longer process, but it costs money which is why its not
configured on the machine. First You need to purchase the domain name
from a domain registrar like Namecheap, go daddy, or google domains.
After the name is purchased you need to locate the DNS settings. Get the
information from the hosting solution. Update the domain\'s name servers
to point to your hosting provider\'s name servers. Configure the dns
records such as "A Record, CNAME, MX Record. Check out this video for a
more detailed explanation <https://www.youtube.com/watch?v=p1QU3kLFPdg>.

# Login:

This section is very straightforward just use the username and password
given the default is jbraun for the user name and password is braun.

In the event that login is not possible: first connect to the server,
this can be done by using ssh or login if its local. Next open the
terminal and use the command (myql -u root -p) the password is braun.
Then select the database (USE finalSub). The we need to add login
credentials to the admins table ( INSERT INTO admins (username,
password) VALUES ( "TheUsernameYouWant" , "ThePasswordForIT"); that
should add the login info and you should be able to login. Type exit to
leave and close out of everything.

# Prayer request Management:

You can add prayer requests as well as document who wrote them and their
title. Follow the directions on the site and you should be good. It's a
good idea that if you want a specific font text size or color that you
should write the text in a dedicated text editor and copy it and past it
into the request text box. To delete a request just type its id in the
delete field.

# Video Management:

You can add videos but the catch is that they need to be downloaded onto
the server first. You can do this by downloading them on the machine,
you may need to gain remote access to do this but I enabled that in the
settings as well as installing the vnc software. You can store the files
anywhere on the server but I designated the /var/www/html/Videos folder.
Take note of where you store the file because you will need it to add it
to the videos page

# Admin Management: 

This is pretty straightforward, add the people who need access, it can
be removed fairly easily.

# Updates:

-   What to update

Almost everything can be updated, from my understanding it isn't very
import a lot of the methods I use are very old and would work in much
older versions and continue to work in the versions today. apache2, ufw
should both be updated anually

-   What not to update

> I would probably not update php & mysql just because the site uses so
> much of them and its not worth the risk even if its almost
> non-existent.
