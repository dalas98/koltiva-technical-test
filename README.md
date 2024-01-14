<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

This is an list you need to run this project.
* Docker

### Installation

1. Clone the repo
   ```sh
   https://github.com/dalas98/koltiva-technical-test.git
   ```
2. Install Composer packages
   ```sh
   docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsail/php83-composer:latest \
        composer install --ignore-platform-reqs
   ```
3. Copy .env.example and name it .env

4. Run the migration and seed 
    ``` sh
    ./vendor/bin/sail artisan migrate:fresh --seed
    ```

5. Run the application 
    ``` sh
    ./vendor/bin/sail up -d
    ```
6. Down the application
    ``` sh
    ./vendor/bin/sail down
    ```