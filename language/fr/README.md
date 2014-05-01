French Language Package
=======================

Authors
-------

You can get all the information about authors in the [AUTHORS.md] [1] file.

Version
-------

You can get all the information about version in the [VERSION.md] [2] file.

Support
-------

You are free to post a new topic [in the support section] [3] to ask for help, report issues, or contribute fixes and improvements.

Please note that you have to [create an account] [4] and login on the official forum software website to be able to post a new topic.

Documentation
-------------

#### Download the language package

You can download the latest French language package version from the following locations:

  - **Stable:** https://www.phpbb.com/customise/db/translation/french/
  - **Development:** https://github.com/maelsoucaze/phpbb

Please note that development versions are generally not recommended and should be used locally, available for testing purposes to developers or advanced and inquisitive users.

#### Extract the compressed archive

Once downloaded, you will need to extract the compressed language package. The extracted archive should contain two folders:

  - *language/*
  - *styles/*

The *language/* folder will contain the language files and the *styles/* folder will contain the localized buttons for the prosilver style.

Please note that if you are using a style other than prosilver, you will need to copy the appropriate localized buttons into the theme-images folder of your custom style.

#### Upload the language-related folders

Using [FTP] [5], you will need to upload the *language/* and *styles/* folders (and their subfolders) into your board root. The board root is the one which contains the *config.php* file.

When uploading into the board root via FTP, you will more than likely get a notice warning you that you already have folders called *language/* and *styles/*. If this happens, just click to replace them. This will replace conflicting files only (if this is your first time uploading the language package there should be none) and add the new files into their correct locations.

#### Install the language package

Now that the language package is uploaded to your server, you will have to install it via the *Administration Control Panel*.

To do this you will need to do as follows:

  - Login to your board.
  - Click the *Administration Control Panel* link located in the footer of your board. You should authenticate again.
  - Once in the *Administration Control Panel*, you will need to click the *SYSTEM* tab, located at the top of the page.
  - On the left hand side, you will see a menu split into categories. You will need to click the *Language Packs* link.
  - You should see now a page which lists the language packages uploaded onto your server.
  - Click the install link next to the French language package.

#### Set as board default language

You now have the French language package installed and are now probably wondering how you use it.

The first thing you are probably going to want to do is to set it as the board default language. The board default language will be used for guests visiting the board and for the new users default language setting.

To set the newly installed language pack as the board default, follow the steps below:

  - Login to your board.
  - Click the *Administration Control Panel* link located in the footer of your board. You should authenticate again.
  - Once in the *Administration Control Panel*, you will need to click the *GENERAL* tab, located at the top of the page.
  - On the left hand side, you will see a menu split into categories. You will need to click the *Board Settings* link.
  - You should see now a page which displays the board settings and locate the drop down menu for the option *Default language*.
  - Select the French language in the drop down menu and then click the submit button.

After doing the above steps, you will probably notice that when you start browsing about your board, the French language is still not used. This will be due to the fact that you logged before the language package was installed, meaning you will not have your own language option in the *User Control Panel* set correctly. For details on how to set this read the next section.

#### Set as personal default language

As briefly mentioned above, you can set your own language option in the *User Control Panel*. This allows the board administrator to have several language packages installed and thus the board users can choose the language which they prefer.

The following instructions will tell you how users can set their own language option:

  - Login to your board.
  - Click the *User Control Panel* link located in the header of your board.
  - Once in the *User Control Panel*, you will need to click the *Board Preferences* tab.
  - You should see now a page which displays the global settings and locate the drop down menu for the option *My language*.
  - Select the French language in the drop down menu and then click the submit button.

Once set, the French language will be used regardless of the board default language.

#### Update the language package

When the forum software is updated and a new version is released, only the default British English language pack will be updated.

That is why you will need to obtain the updated French language package from the download locations listed at the top of this page. Once downloaded, you just have to extract the compressed archive and upload to your server the language-related folders (and replace the existing files) to update the French language package.

License
-------

The language pack is released under the [GNU General Public License 2.0] [6].

Please note that the full notice of the license is available for reading from the [LICENSE] [7] file.

[1]:https://github.com/maelsoucaze/phpbb/blob/master/language/fr/AUTHORS.md
[2]:https://github.com/maelsoucaze/phpbb/blob/master/language/fr/VERSION.md
[3]:https://www.phpbb.com/customise/db/translation/french/support/
[4]:https://www.phpbb.com/community/ucp.php?mode=register
[5]:http://en.wikipedia.org/wiki/File_Transfer_Protocol
[6]:http://opensource.org/licenses/gpl-2.0.php
[7]:https://github.com/maelsoucaze/phpbb/blob/master/language/fr/LICENSE