# Tp3-symfony

In this repositoy I will have my work concerning the Tp3 for formTypes

## Report:

### Git workflow

In this project i got the opportunity to practice what we learned from videos .
So let s start by mentionning the workflow that i used : - first I had to create a new project so i kinda cloned empty project from your repository (empty_symfony_project) . - I added the dependencies i needed , changed the remote to my own repositoy , created a test controller and tried to pushe . - in order to push i had to pull first since in remote i had 1 commit and local had 2 commits ( 2 commits from profs ) so fard i didnt commit my work .
so i used these commands : - git stash (to stash my work ) - git fetch - git rebase origin/main - git stash pop - git push -u origin main - I created another branch called dev to keep main clean (production) and pushed it . - after that i created a branch feature/create-form --> in which i created my form (no themes yet ). - pushed this feature , MR , approved MR into dev . - Went to dev pulled changes , create a new branch from it called feature/add-theme that has theme for the form. - did same thing as before : MR , approve MR into dev . - last thing i did is specific branch called report in whcih im writing this xD , (ik its not good practice but i also used it to improve one field in form --> it was the default value for select ).

### Actual work :

I created formType with the exact fields , tried to add options for each field , not mention classes in formType to keep it reusable .
Created ProductsController that get instance of the form send it to view and render it .
Created 1 page for theme (/home/nolsky/Tp3/templates/form/themes/product/custom_theme.html.twig) , in which i made 2 blocks , each one is specific
to its own field from the form, while adding the necessary attributs for each one (classes).

### Docs

I promised i used docs most of the time ahahaahh , but there was one case in which i used AI :
form_label(form , null , {'label_attr' : {'class' : "form-label"}})
I didnt notice that we should add null so i treated it same as we do for form_widget ---> form_widget(form , {'attr': {'class': 'form-select'}}) and it didnt work .
funny thing is : after i saw where mistake was using Ai , i went to docs again and it was in front of me the whole time LOL .
