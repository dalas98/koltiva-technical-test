<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
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

4. Run the application 
    ``` sh
    ./vendor/bin/sail up -d
    ```
5. Down the application
    ``` sh
    ./vendor/bin/sail down
    ```