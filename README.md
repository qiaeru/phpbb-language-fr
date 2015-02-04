French Language Package
=======================
[![Build Status](https://travis-ci.org/maelsoucaze/phpbb.svg?branch=ascraeus)](https://travis-ci.org/maelsoucaze/phpbb)

Welcome to the official French language package for the phpBB® forum software.

Authors
-------

The full list of authors notable for their feedbacks and contributions to the language package.

Please note that the authors list is available for reading from the [AUTHORS] [1] file.

Version
-------

The language package version information and its compatibility with the forum software.

Please note that those version informations are available for reading from the [VERSION] [2] file.

Changelog
---------

The changelog containing all code changes between the different language package versions.

Please note that the changelog is available for reading from the [CHANGELOG] [3] file.

Support
-------

Feel free to post a new topic [in the support section] [4] to ask for help, report issues, or contribute fixes and improvements. Please note that you have to [register] [5] and login to be able to post.

Documentation
-------------

#### Download the language package

It is strongly recommended that you do not download the package from any website other than those below to always have the very latest, virus-free language package version.

  - **Forum Software Website:** https://www.phpbb.com/customise/db/translation/french/
  - **GitHub Repository Releases:** https://github.com/maelsoucaze/phpbb/releases

Please note that development versions (recognizable with the use of *-dev* in the version number) are not usually recommended and should be used locally, available for testing purposes.

#### Extract the compressed archive

Once the compressed language package downloaded, you will need to extract (or unzip) the archive.

For information, the *language/* folder will contain all the language files and the *styles/* folder will contain the localized user online image and its stylesheet for the prosilver style.

Please note that if you are using a style other than prosilver, you will need to copy the appropriate localized images into the theme-images folder of your custom style, using *fr* as folder name.

#### Upload the language-related folders

Using [FTP] [6], you will need to upload the *language/* and *styles/* folders (and their subfolders) into your board root. The board root is the one which contains the *config.php* file.

Please note that you will more than likely get a notice warning you that you already have those folders when uploading into the board root via FTP. If this happens, just click to replace them. This will replace conflicting files only (if this is your first time uploading the language package there should be none) and add the new files into their correct locations.

#### Install the language package

Now that the language package is uploaded to your server, you will have to install it via the *Administration Control Panel*.

  - Login to your board.
  - Click the *Administration Control Panel* link located in the footer of your board.
  - Once in the *Administration Control Panel*, you will need to click the *CUSTOMISE* tab.
  - Now you will need to click the *Language Packs* link located in the left menu.
  - You should see now a page which lists the language packages uploaded onto your server.
  - Click the install link next to the French language package.

#### Set as board default language

You now have the language package installed and are now probably wondering how to use it.

The first thing you are probably going to want to do is to set it as the board default language which will be used for guests visiting the board and for the new users default language setting.

  - Login to your board.
  - Click the *Administration Control Panel* link located in the footer of your board.
  - Once in the *Administration Control Panel*, you will need to click the *GENERAL* tab.
  - Now you will need to click the *Board Settings* link located in the left menu.
  - You should see now a page which displays the board settings.
  - Locate the drop down menu for the option *Default language*.
  - Select the French language in the drop down menu and then click the submit button.

After doing the above steps, you will probably notice that when you start browsing about your board, the French language is still not used. This will be due to the fact that you logged before the language package was installed, meaning you will not have your own language option in the *User Control Panel* set correctly. For details on how to set this read the next section.

#### Set as personal default language

You can set your own language option in the *User Control Panel*. This allows the board administrator to have several language packages installed which can be selected by your board users.

  - Login to your board.
  - Click the *User Control Panel* link located in the header of your board.
  - Once in the *User Control Panel*, you will need to click the *Board Preferences* tab.
  - You should see now a page which displays the global settings.
  - Locate the drop down menu for the option *My language*.
  - Select the French language in the drop down menu and then click the submit button.

After doing the above steps, the French language package will be associated with your account, regardless of the board default language.

#### Update the language package

When a new version of the forum software is released and your board is updated, the default British English language package will be the only language package to be up-to-date. That is why you will need to download the latest French language package version.

Once the French language package is downloaded, you just have to extract the compressed archive, upload the *language/* and *styles/* folders to your server and replace the existing files. This will then update the French language package.

License
-------

Because the forum software is released under the [GNU General Public License 2.0] [7], the French language package, which is based on the default one, inherits from that open source license.

Please note that the full notice of the license is available for reading from the [LICENSE] [8] file.

[1]:https://github.com/maelsoucaze/phpbb/blob/ascraeus/language/fr/AUTHORS
[2]:https://github.com/maelsoucaze/phpbb/blob/ascraeus/language/fr/VERSION
[3]:https://github.com/maelsoucaze/phpbb/blob/ascraeus/language/fr/CHANGELOG
[4]:https://www.phpbb.com/customise/db/translation/french/support
[5]:https://www.phpbb.com/community/ucp.php?mode=register
[6]:http://en.wikipedia.org/wiki/File_Transfer_Protocol
[7]:http://opensource.org/licenses/GPL-2.0
[8]:https://github.com/maelsoucaze/phpbb/blob/ascraeus/language/fr/LICENSE
