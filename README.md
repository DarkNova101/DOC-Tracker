- Talk to mom about storing info in Mysql doc form with JSON (Not sure How)
  - Username, FullName, pass, email, and ID save in table.
    - Rest of into pushed into a JSON and file name saved in MYSQL TABLE?
    - Pull up ~~JSON~~Mongo data info web browser when searching for a user



2 Bookmarks in Google Chrome about this. Make a file per person that can be edited whenever with JSON stuff and looked up and printed with PHP.


- Start Work on Set Personal Information Page (setdetails.php) example found here (https://securesite.ministrytracker.com/edit_student.cgi?STID=2028892) [OLD SEEL BELOW]
- Work on index page more, similar to (https://securesite.ministrytracker.com/og_profile.cgi)? (account.php)

- ~~Add Events Calendar (Calendar.php)~~ Most likely going to Iframe a Google Calander and figure out a RSVP System Later
- Work on About & Contact Page (contact.php) & (about.php) !!!To Do later in the future

- Implement Texting Page to Admin Panel
  - Reference 2 Newest Bookmarks in Google (SMS Carrier Address & How to use SENDMAIL for WAMP)
  - New Bookmarks refer to from sending from Email - Looking for phone # sending
  - Look into getting a Short Code Phone # for auto text messenger or use Google Voice?


Priority:
 1) Work on Set Personal Information (See 2)
 2) Setup ~~JSON~~ Mongo Storage // Format Done - Need to add Questions to Signup form and input placeholders in the Mongo.php for testing
 3) Index Page to show minimal info on Person (https://gyazo.com/e59d9e499830fbef1447a132303f36d0)




HTML Selector for SIGNUP & STORING phone info
 ``` <option value="">[Select a Provider]</option><option value="">--Popular Providers--</option><option value="alltel">Alltel Wireless</option>
 <option value="@att.txt.net">AT&amp;T</option>
 <option value="@myboostmobile.com">Boost Mobile</option>
 <option value="@sms.mycricket.com">Cricket</option>
 <option value="@messaging.nextel.com">Nextel</option>
 <option value="@messaging.sprintpcs.com">Sprint</option>
 <option value="@tmomail.net">T-Mobile / Voice Stream</option>
 <option value="@tmomail.net">TracFone</option>
 <option value="@vtext.com">Verizon Wireless</option>```
