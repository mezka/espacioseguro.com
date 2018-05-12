INSTALLING DEPENDENCIES
==

Before cloning you must install git-lfs else website images won't download correctly from github.

~~~
curl -s https://packagecloud.io/install/repositories/github/git-lfs/script.deb.sh | sudo bash
sudo apt-get install git-lfs
git lfs install
~~~

In order to get the images to download correctly you have to run `git lfs install` after installing the package, else images won't download properly.
