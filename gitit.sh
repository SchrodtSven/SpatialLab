# Script committing and pushing recent changes after running tree, cloc & PHPUnit and updating README.md
if [ $# -eq 0 ]
  then
    echo "Please add a commit message as agument (\$1)!"
    exit 23
fi

cp  README.md.tpl  README.md


# Add current project file structure (filtered) to README.md
tree -I "archive|dump|cache|phpunit"  >> README.md
# Counting lines of code (filtered by .cloc contents) and add to README.md
cloc . >> README.md
# Processing unit tests and add results to README.md
phpunit >> README.md
# Sanitizing markup in README.md
echo "</code>" >> README.md
echo "</pre>" >> README.md

# Adding, committing & pushing with message from STDIN
git add .
git commit -m "$1"
git push origin
echo "... done!"
