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

