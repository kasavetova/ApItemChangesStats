**Definitely Not Statistics App**
-----------------------------
[1]: http://tns-lol.com
[2]: http://getbootstrap.com/
[3]: https://jquery.com/
[4]: https://github.com/Prinzhorn/skrollr
[5]: http://d3js.org/

Description
-----------
This webapp interactivly shows the differences in AP item usage from patch 5.11 to 5.14. The data used was from two sets of 100,000 ranked matches which was obtained by using the Riot Games API. The website includes many useful statistics based on items, champions and builds which show how these have changed between the two patches.


Live URL
-----------
To visit the website click the following link: [Definitely Not Statistics App][1]
> **Note:**  There might be difficulties when trying to access the website using a mobile device.

Technology Used
-----------
**Backend:** 
We started off by creating a Python script to make API calls for each match ID in order to get the match
information. Once we got all the match data, we started writing Python scripts to calculate various statistics.
These statistics were then put into a MySQL database using PHP. The website uses PHP to get the statistics
from the MySQL database.

**Front End:** 
For the front end, we used HTML, CSS and JavaScript to design the website. The website uses many libraries
to enhance the look and feel of the website.

The libraries include:
  
- [Bootstrap] [2]
- [JQuery][3]
- [skrollr][4]
- [d3][5]