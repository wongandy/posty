
# Posty

A web app where users can post anything they want

## Features

- Login/register user functionality
- Users can post
- User can view other users' post
- Users can delete their post only


## Tech Stack

**Front-end framework:** TailwindCSS

**Back-end framework:** Laravel

## Installation

First, install backend dependencies

```bash
  composer install
```
Generate an .env file and edit it with your own database details

```bash
  cp .env.example .env
```
Then generate keys

```bash
  php artisan key:generate
```
Install frontend dependencies 

```bash
  npm install && npm run dev
```

Run migration code to setup database schema

```bash
  php artisan migrate
```
