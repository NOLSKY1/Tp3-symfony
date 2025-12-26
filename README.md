# TP3 – Symfony

In this repository, I present my work concerning **TP3**, focused on **FormTypes**.

---

## Report

### Git Workflow

In this project, I had the opportunity to practice what we learned from the videos.  
Let’s start by mentioning the workflow that I used:

- First, I created a new project by cloning the empty project from your repository (`empty_symfony_project`).
- I added the dependencies I needed, changed the remote to my own repository, created a test controller, and tried to push.
- In order to push, I had to pull first, since the remote had **1 commit** and my local had **2 commits** (2 commits from the professor). At that point, I hadn’t committed my work yet.

To resolve this, I used the following commands:

- `git stash` (to stash my work)
- `git fetch`
- `git rebase origin/main`
- `git stash pop`
- `git push -u origin main`

After that:

- I created another branch called `dev` to keep `main` clean (production) and pushed it.
- Then I created a branch `feature/create-form` from dev, in which I created my form (no themes yet).
- I pushed this feature, created a merge request (MR), and approved the MR into `dev`.
- I went back to `dev`, pulled the changes, and created a new branch called `feature/add-theme`, which contains the theme for the form.
- I repeated the same process: MR, approval, and merge into `dev`.
- The last thing I did was create a specific branch called `report`, in which I’m writing this xD. 
  (I know it’s not good practice, but I also used it to improve one field in the form — setting a default value for a select field).

---

### Actual Work

- I created a `FormType` with the exact fields.
- I added options for each field, without mentioning classes in the `FormType` to keep it reusable.
- I created a `ProductsController` that gets an instance of the form, sends it to the view, and renders it.
- I created one page for the theme:  
  `/home/nolsky/Tp3/templates/form/themes/product/custom_theme.html.twig`  
  In this file, I made **two blocks**, each one specific to its own field from the form, while adding the necessary attributes (classes) for each one.

---

### Documentation

I used the documentation most of the time haha, but there was one case where I used AI.
I didn’t notice that we should add `null` when using `form_label`, so I treated it the same way as `form_widget`, and it didn’t work.
  - form_label(form, null, {'label_attr': {'class': 'form-label'}})
  - form_widget(form, {'attr': {'class': 'form-select'}})

The funny thing is that after I found the mistake using AI, I went back to the docs again, and it was right in front of me the whole time LOL.
