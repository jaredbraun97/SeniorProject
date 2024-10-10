# In This Document I'll go over the general flow and though of the Code on a high level

I want to acknowledge a design feature I didn't find out till the very
end of the development of the Site. Each of the pages I made is lay out
like so (Header, nav, content, Footer) I didn't know that with php you
can break up a html file into separate php files as long as they the
final stitched product would read a complete file its good to go. Doing
this would have improved the readability of my code and also helped it
run fast because the files don't get reloaded.

My code heavily features flexboxes each of the major sections is a flex
box and the content is flex boxes within flexboxes, sometimes 3 layer
deep. The page uses 2 css themes that are togglable, a light and dark
theme, I used a little js to make the sight default to whether it was
night or day according to the time. There is a different layout css file
for every page besides the admin folder which shares just on folder.

There are still some features id like to add or spend more time on and
that the is the modal video player and adding the ability to email to
the server. I tried a few methods to get the email to work. First, I
looked at hosting the email server locally, but that requires a domain
which I wasn't going to configure because of the cost. The second method
was using gmail's email server but that had some issues I couldn't
solve. I am fairly sure that they were related to my account and not my
code. With the modal video player, I just wanted it to be as full
featured as the one on the site.

I took a few security precautions in the this project using prepared
statesments is a big one that was used extensively, another is storing
the connection file outside the served files. I configured the firewall
to also help with security. And the donations are handled by a third
party. And the nature of the content I feel helps as a natural deterrent
because it's a non profit and its not handling money makes it way less
likely to be attacked. And the limit nature of the things that can be
changed also helps, even in a worse case scenario reentering the data if
it all got deleted would be very easy, just a few minutes if you were
familiar with the system.
