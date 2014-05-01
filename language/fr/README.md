FRENCH LANGUAGE PACKAGE
=======================

SUPPORT
-------

To ask for help, report bugs or to contribute fixes and improvements, you are free to post a new topic [in the appropriate section from the official forum software website] [1].

DOCUMENTATION
-------------

#### Download the language package

You can download the latest French language package version from the following locations:

  - **Stable Versions:** https://www.phpbb.com/customise/db/translation/french/
  - **Development Versions:** https://github.com/maelsoucaze/phpbb

Please note that development versions are generally not recommended and should be used locally, available for testing purposes to developers or advanced and inquisitive users.

#### Extract the compressed archive

Once downloaded, you will need to extract the compressed language package. The extracted archive should contain two folders:

  - *language/*
  - *styles/*

The *language/* folder will contain the language files and the *styles/* folder will contain the localized buttons for the prosilver style.

Please note that if you are using a style other than prosilver, you will need to copy the appropriate localized buttons into the theme-images folder of your custom style.

#### Upload the language-related folders

Using [FTP] [2], you will need to upload the *language/* and *styles/* folders (and their subfolders) into your board root. The board root is the one which contains the board's *config.php* file.

When uploading into the board root via FTP, you will more than likely get a notice warning you that you already have folders called *language/* and *styles/*. If this happens, just click to replace them. This will replace conflicting files only (if this is your first time uploading the language package there should be none) and add the new files into their correct locations.

#### Install the language package

Now that the language package is uploaded to your server, you will have to install it via the *Administration Control Panel*.

To do this you will need to do as follows:

  - Login to your board.
  - Click the *Administration Control Panel* link located in the footer of your board. You should authenticate again.
  - Once inside the *Administration Control Panel*, you will need to click the *SYSTEM* tab, located at the top of the page.
  - On the left hand side, you will have a menu split into categories. In this left hand menu, you will see the link *Language Packs* which you need to click.
  - You should see now a page which lists the language packages you have uploaded onto your server. Those which have not been installed yet will show with an install link.
  - Next to the French language package, you have to click the install link.

#### Set as board default language

You now have the French language package installed and are now probably wondering how you use it.

The first thing you are probably going to want to do is to set it as the board default language. The board default language will be used for guests visiting the board and for the new users default language setting.

To set the newly installed language pack as the board default, follow the steps below:

  - Login to your board.
  - Click the *Administration Control Panel* link located in the footer of your board. You should authenticate again.
  - Once inside the *Administration Control Panel*, you will need to click the *GENERAL* tab, located at the top of the page.
  - On the left hand side, you will have a menu split into categories. In this left hand menu, you will see the link *Board Settings* which you need to click.
  - You should see now a page which displays the board settings. On this page you should be able to see the drop down menu for the option *Default language*.
  - Select the French language in the drop down menu and then click the submit button.

After doing the above steps, you will probably notice that when you start browsing about your board, the French language is still not used. This will be due to the fact that you logged before the language package was installed, meaning you will not have your own language option in the *User Control Panel* set correctly. For details on how to set this read the next section.

#### Set as personal default language

As briefly mentioned above, you can set your own language option in the *User Control Panel*. This allows the board administrator to have several language packages installed and thus the board users can choose the language which they prefer.

The following instructions will tell you how users can set their own language option:

  - Login to your board.
  - Click the *User Control Panel* link located in the header of your board.
  - Once inside the *User Control Panel*, you will need to click the *Board Preferences* tab.
  - You should see now a page which displays the global settings. On this page you should be able to see the drop down menu for the option *My language*.
  - Select the French language in the drop down menu and then click the submit button.

Once set, the French language will be used regardless of the board default language.

#### Update the language package

When the forum software is updated and a new version is released, only the default British English language pack will be updated as necessary.

That's why you will need to obtain the updated French language package from the download locations listed at the top of this page. Once downloaded, you just have to extract the compressed archive and upload the language-related folders (and replace the existing files) to update the French language package.

[1]:https://www.phpbb.com/customise/db/translation/french/support/
[2]:http://en.wikipedia.org/wiki/File_Transfer_Protocol