# git-deployment-workflow
Sample script for automating deployment from a Git repository to a Web server


mkdir distributors_prod                     # execute this from Shell
chown -R apache:apache distributors_prod    # execute this from Shell
cd /mnt/data/vhosts/ccr3i.com/distributors_prod
git clone git@bitbucket.org:martinsarsini/ccr3i.distributors.git
///// ignore any errors you get from this, check the dir :)
git init .
git remote add -t \* -f origin git@bitbucket.org:martinsarsini/ccr3i.distributors.git
git checkout master
mkdir www/assets
chmod www/assets 777
mkdir runtime
chown -R apache:apache runtime
