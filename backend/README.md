## Steps to run this project locally

1. Clone the repository:

    ```bash
    git clone https://github.com/Jgarette0/aifit.git
    ```

2. Navigate to the project directory:

    ```bash
    cd aifit
    ```

3. Navigate to backend code.

    ```bash
    cd backend
    ```

4. Install PHP dependencies:

    ```bash
    composer install
    ```

5. Copy the example environment file and configure it:

    ```bash
    cp .env.example .env
    ```

6. Generate an application key:

    ```bash
    php artisan key:generate
    ```

7. Compile the assets:

    ```bash
    php artisan migrate
    ```

8. Serve the application:

    ```bash
    php artisan db:seed
    ```

9. Navigate to aifit directory

    ```bash
    cd ..
    ```

10. Navigate to frontend code

    ```bash
    cd frontend
    ```

11. Install Node.js dependencies:

    ```bash
    npm install
    ```

12. Compile the assets:

    ```bash
    npm run dev
    ```

13. Serve the application in the backend directory:

    ```bash
    php artisan serve
    ```
