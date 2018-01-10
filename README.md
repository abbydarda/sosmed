# sosmed

Sosmed is a simple API using laravel to retrieve, create, update and delete a resource

## Getting Started

You can clone this repository and running on your local machine

### Prerequisites

You can click in the green button to get the key for cloning, you can use HTTP or SSH for clone this repo

## Installation

After you clone this repository, you need install first

### Install Project

Write this command in your terminal

```
composer install
```

### Set Up Database

Before you try this repo, you have to set up your database, you can change file .env to your configuration, if you can't find file .env, you can create your own .env file and copy paste content of the .env.example into .env that had been created in general you just have to change DB_DATABASE,DB_USERNAME, and DB_PASSWORD.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your database name
DB_USERNAME=your database username
DB_PASSWORD=your database password
```
and run this command in terminal to migrate and seed the data

```
php artisan migrate --seed
```

## Usage

### Run the Server

Run the server using this command

```
php artisan serve
```
### Retrieve Client ID and Client Secret for the Authorization

You can retrieve the client ID and client secret with use this command

```
php artisan passport:client --password
```
if you get question `What should we name the password grant client? [Laravel Password Grant Client]`, you can skip it with press enter, and you will get client ID and client secret like this.

```
Client ID: 5
Client Secret: raMVX9iA5z28Dj8OxcvPRUAz9LMAWKX0DCCE1ufb
```
