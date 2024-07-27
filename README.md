Before pushing code, make sure your code is up to date

Update your local repository
1. git pull

Option 1: Push code directly to the development branch
1. git checkout development
2. git pull
3. git add .
4. git commit -m "your-message"
5. git push
6. open pull request on github
7. compare the changes `base: development`
8. create pull request
9. engna me para ma `merge`

Option 2: Create a new branch for a feature
1. git checkout development
2. git pull
3. git checkout -b feat/name-of-branch
4. git add .
5. git commit -m "your-message"
6. git push origin feat/name-of-branch
6. open pull request on github
7. compare the changes `base: development` `compare: feat/your-branch`
8. create pull request
9. engna me para ma `merge`

Naming Conventions

### File Names
1. Convention: Pascal Case
2. Example: HomePage

###. Folder Names (dili final)
1. Convention: Lowercase
2. Example: pages

### Class Attribute Styling
1. Convention: Kebab-case
2. Example: navbar-button

### Functions / Variable
1. Convention: CamelCase
2. Example: const submitForm

### Branch Names
1. Convention: Kebab-case
2. Example: feat/recipe-calculator
