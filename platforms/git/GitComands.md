# initial git config   
git config --global user.name "Your Name"
    eg: git config --global user.name "innerYho"
git config --global user.email "youremail@yourdomain.com"
    eg: git config --global user.email "yomorales5@misena.edu.co"

git config --list

create a new repository on the command line
echo "# tutoNode" >> README.md
echo #'node_modules/' >> .gitignore


## Create new repo
# in vsc push button "Publish in github"

git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:innerYho/tutoNode.git
git remote add origin https://github.com/innerYho/proyectname.git

git push -u origin main


…or push an existing repository from the command line
git remote add origin git@github.com:innerYho/tutoNode.git
git branch -M main
git push -u origin main



Clonar repositorio desde terminal
git clone [nombre repo]

