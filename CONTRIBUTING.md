To fork:

Go to https://github.com/RyanRio/TuckShop2017 and click "fork". This will create a copy of it in your account.

To get on your local computer:

1. Click "clone or download" on https://github.com/RyanRio/TuckShop2017 and then copy link

2. Open a command line

3. Navigate to the a folder that will parent the repository and type:
    git clone `clone link from step 1`

4. To start editing the code `cd` into the repository folder and type:
    code .
This will bring up the folder in visual studio code

After you have forked from RyanRio/TuckShop2017 and cloned into a folder:

To Push your changes to your fork:

    git push origin master

To create a commit:

    git add --all
    git commit -m "some message"
    git push origin master

To update your fork from RyanRio/TuckShop2017:

If not already done, create a local branch 'upstream':

    git remote add upstream https://github.com/RyanRio/TuckShop2017

Now to update:

    git fetch upstream
    git checkout master
    git merge upstream/master

This updates your local folder, so now update your online folder:

    git push origin master

All done!

