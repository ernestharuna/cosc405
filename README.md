# Instructions for Pulling, Making Changes, and Committing HTML/CSS Code

This repository contains HTML and CSS files for a web project. Follow the instructions below to pull the latest changes, make modifications to the HTML and CSS code, and commit the changes to the repository.

## Prerequisites

- Git installed on your local machine
- Basic understanding of HTML and CSS

## Steps

1. **Clone the Repository:**

    ```bash
    git clone <repository_url>
    ```

    Replace `<repository_url>` with the URL of the repository you want to clone.

2. **Navigate to the Project Directory:**

    ```bash
    cd <project_directory>
    ```

    Replace `<project_directory>` with the name of the directory where the repository was cloned.

3. **Pull Latest Changes:**

    Before making any modifications, it's a good practice to pull the latest changes from the remote repository to ensure you're working with the most up-to-date code.

    ```bash
    git pull origin main
    ```

    This command fetches the latest changes from the `main` branch of the remote repository and merges them into your local branch.

4. **Make Changes to HTML/CSS Files:**

    Open the HTML and CSS files in your preferred code editor (e.g., Visual Studio Code, Sublime Text) and make the necessary modifications.

5. **Preview Changes:**

    To preview your changes locally, open the HTML file in a web browser.

6. **Stage Changes:**

    Once you're satisfied with your modifications, stage the changed files for commit.

    ```bash
    git add .
    ```

    This command stages all modified and new files for commit.

7. **Commit Changes:**

    Commit the staged changes with a descriptive commit message.

    ```bash
    git commit -m "Add/update HTML/CSS styles for <feature>"
    ```

    Replace `<feature>` with a brief description of the feature or changes you've made.

8. **Push Changes to Remote Repository:**

    Finally, push your committed changes to the remote repository.

    ```bash
    git push origin main
    ```

    This command sends your changes to the `main` branch of the remote repository.

9. **Verify Changes on GitHub:**

    Visit the GitHub repository page to verify that your changes have been successfully pushed.

## Additional Notes

- Table schema can be found in the database folder of the repository.

