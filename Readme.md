Hello Guys 
You should see 5 directories in this folder, this are not the final number of folder but just the basic to start with

I have created a php script to import all ui libraries, simple add this inside your head tag <?php include 'includes/styles_js_importer.php'; ?>
You can look at the root directory to understand what i mean.

installing this directory
1 > Make sure you have xampp, or maybe wamp installed on your pc
2 > Download the zip of this repo from the github link
3 > unzip and place the folder in this directory YOUR_XAMPP_FOLDER/htdocs/PLACE_YOUR_FOLDER_HERE  rename the project folder to learningplatform
4 > start your xampp
5 > visit the link on your browser localhost/learningplatform  you should see a blue screen

images folder
this folder contains the general images we will use in developing this platform

upload folder
This folder will contain all images and files which are uploaded on our platform

includes folder
There are includes folder found in different location and all of them should carry files with same characteristics.
all files found in any includes folder should contain little or no html tag(no ui attribute), javascript might be permitted. this file should 
should contain only the logic required for interaction between ui and database.


Children folder
 It should contain all the files that have to deal with the children account, this include the ui files, css files particular to children
 and js file aswell.
 Inside this folder the is an include folder which should contain all the logic code that is responsible with interaction from the children files database.
 all ui element should be found in this folder, pls no extra ui folder to store ui files

Parent folder
 It should contain all the files that have to deal with the parent account, this include the ui files, css files particular to parent
 and js file aswell.
 Inside this folder the is an include folder which should contain all the logic code that is responsible with interaction from the parent files database.
 all ui element should be found in this folder, pls no extra ui folder to store ui files

*Note please considering that all php file are compatible with html as you can verify from the index.php file, name all your files with the
extension .php