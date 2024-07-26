## Before pushing code, make sure your code is up to date

## Update your local repository
git pull

## Option 1: Push code directly to the development branch
git checkout development
git pull
git add .
git commit -m "your-message"
git push

## Option 2: Create a new branch for a feature
git checkout development
git pull
git checkout -b feat/name-of-branch
git add .
git commit -m "your-message"
git push origin feat/name-of-branch

## Naming Conventions

### 1. File Names
### Convention: Pascal Case
### Example: HomePage

### 2. Folder Names (dili final)
### Convention: Lowercase
### Example: pages

### 3. Class Attribute Styling
### Convention: Kebab-case
### Example: navbar-button

### 4. Functions / Variable
### Convention: CamelCase
### Example: const submitForm

### 5. Branch Names
### Convention: Kebab-case
### Example: feat/recipe-calculator
