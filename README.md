# Docs
This is a free template for Docs. This can be used to teach users how to install code, use their app, and more. Fill free to make changes in any way see fit. If you would like to contribute, make a pull request and update code.

# Installtion
Download the source code from this GitHub repo and then move the code to your web server.

# Usage
In the **dynamic/** folder you can find the file **header.php**. This contains all of the code that is placed in the header of the pages. The **$landingIndex** is placed in the landing page (index.php in the root folder). The **$docPages** is placed in the header of all of the pages in the **pages/* folder.

## Settings up new pages
To setup a new page you do the following:
1. Copy the **template.php** file and name it what the heading of the page will be.
2. Navigate to the **dynamic/** folder located in the **pages/** folder.
3. Open the **pages.php** document located in **pages/dynamic/** folder.
4. Copy and paste the input tag and edit the following:
```HTML
<input type="submit" class="button-control {1}" value="{2}">
```
  a. Set {1} tag to a unique class name. Take note of this as it will be used in the future.
  b. Set {2} tag to what ever you would like to be button name to be.
5. Copy and paste this set of code and edit the following:
```JavaScript
// {1}
$(document).on('click', '.{2}', function(event){
  document.location.href = `{3}`;
});
```
  a. Set {1} tag to the page over that this will contain. (This is a comment and will not display in on the front-end. This is for making things easier to find if the need to edit comes up.)
  b. Set {2} tag to the class tag that you set in 4.a (This is the action or set of actions that initiates when you click the button.)
  c. Set {3} to the page that you would like to be navigated to when you click the button (Set the value to what you renamed **template.php** to in step 1)
