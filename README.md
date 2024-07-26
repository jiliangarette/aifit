Before pushing code, make sure your code is up to date

Update your local repository
1. git pull

Option 1: Push code directly to the development branch
1. git checkout development
2. git pull
3. git add .
4. git commit -m "your-message"
5. git push

Option 2: Create a new branch for a feature
1. git checkout development
2. git pull
3. git checkout -b feat/name-of-branch
4. git add .
5. git commit -m "your-message"
6. git push origin feat/name-of-branch

Naming Conventions

1. File Names
Convention: Pascal Case
Example: HomePage

2. Folder Names (dili final)
Convention: Lowercase
Example: pages

3. Class Attribute Styling
Convention: Kebab-case
Example: navbar-button

4. Functions / Variable
Convention: CamelCase
Example: const submitForm

5. Branch Names
Convention: Kebab-case
Example: feat/recipe-calculator
