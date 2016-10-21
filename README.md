# FileEncryptionService
### NOTE: This repo is still in progress
The purpose of this project is to create a file encryption service that will allow users to make public/private keys during login to later encrypt/decrypt files as needed.

## To test what is done so far:
* Download all files 
* Open login.html
  * You will be given the options of logging in or signing up (back-end implementation still in progress)
  * You will be given an encryption key to be downloaded only once (back-end implementation still in progress)
* Other options are to either Upload files or view Downloaded Files
* Upload file page
  * You can choose a file from your computer
  * Clicking 'Send' will direct you to a page asking for your encryption key (back-end implementation still in progress)
  * After inputting your key, then you can encrypt the file (back-end implementation still in progress)
  * You can continue to upload files as needed
* Download file page 
  * You can view all files uploaded (back-end implementation still in progress)
  * You can download encrypted files using your encryption key only once (back-end implementation still in progress)
  
-------

## In progress work:
* Creating a database that will keep track of who signs up and check user login info
* PHP code that will check the login credentials of those who try to

-------

## Things to do (that has not already been mentioned):
* Add all neccessary data into the database (login info and encryption keys)
* Error checking for login and sign up info (incorrect login & confirm password is incorrect)
* Allow login from other sites 
* Error checking for correct encryption key (what to display when encryption key provided is incorrect when trying to upload/download files?)
* Matching between users and their files

-------

## My work timeline (in order):
* Read instructions and download prerequisites
* Decide layout of the page
* Code up layout and pick the neccessary headers: Login/Create an Account, Upload Files, Download Files
 * CSS files from ajlkn@html5up.net
* Begin login page
 * Add login and sign up forms
* Begin Upload file page
 * Add ability to pick files from your computer
 * Add redirection page that asks for encryption key
 * Add redirection page separate from the root to allow for multiple uploads
* Begin Download file page
* Begin challenge of allowing users to create login info and adding it to the database 
 * Reset password link, thank you for registration, change password pages created but not added
* Stop coding (8:40pm)
* Upload to git
* Write Readme
* Finish Readme - 9:01 pm Final Submission
* Work will not be continued until review is finished
