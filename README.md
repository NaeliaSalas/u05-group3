# u05-group3

## CINEMAH
Is a school project for Chas Academy where we as a group have used Laravel and PHP, CSS, Tailwind and some Java Script to build a movie database like IMDB with an admin panel.

The first thing we, as in our group, think when we see and use IMDB is that the webpage has way too much information and it gives you kind of a headache to use. We wanted to make our design more clean and clear. It is important for our users to fast and simple be able to find the next movie to watch or to write a review very fast and easy. Less is more.

#  Assignment Requirements

Website developed using PHP, JS, HTML and CSS for the frond end and to use a database in SQL. Work with the framwork Laravel. Using migrations to create a SQL-database with tables and data.

The app needs to have a landing page for normal visitors. On page where you are a user that is able to login and write reviews for movies, create, update and delete watchlists for movies

An Admin panel where only a admin can access and have the possibility to approve and delete reviews. There has to be a CRUD-operation for movies and users.

# Installation
Get started

To use this application you will need to have DOCKER, Git installd and we recomend VS code but any text editor will work.

Clone this repo to your local machine.

```bash
  SQL file inserted
```

docker-compose up
Navigate to the root folder of the project in your terminal and run the following command:

```bash
docker-compose up
```

Navigate to left side panel in your VS code editor and click on the docker icon, 
shaped as a whale, find the projects container "u05-group3", right click and attach a Shell terminal to the PHP container. 

In your shell terminal it is crucial to stand in the correct folder, where Artisan is located.

Write the following command
:
```bash
cd [project-name]
```

Then please type this command in the shell terminal
:

```bash
  php artisan serve --host 0.0.0.0 --port 8000
```

Now, command click on the --host 0.0.0.0 --port 8000 and it will take you to the laravel welcomepage.

You are now connected.

Open a new tab and go to 127.0.0.1:8080 to log into the database.

Login credentials can be found in the docker-compose.yml file on line XX-XX.

When logged into the database please find the "Import" link highlighted in blue located to the left panel of the site.

Click the import, and choose "upload file" and choose the "db.sql"-file found in the root folder of the project. Click execute.

Then navigate back to VS code and your shell terminal.

As we are seeding our data please be sure to start Database seeding by writing this command in your terminal. It will both rebuild all models and also seed all the data in to the database.
```bash
  php artisan migrate:fresh --seed
```
You should now be able to see all table with data in the database.

We have the following tables:

	entries	
    comments
	failed_jobs	
	genres	
	migrations	
	movie_genres	
	movies	
	password_resets	
	posts	
	reviews		
	users	
	watchlists
To access the Adminer panel be sure to edit one of the users in the database to a Admin.

To do that navigate to the users table in the database. Click Select data above the table. Now choose the user you want to be Admin and click edit in the left column. Choose number 1 in the "IsAdmin" option and click "save".

Return to the website CIMENHA and log in with the Admin credentials. Your landing page is the Admin dashboard and here you are able to go to Users or Movies in the left side panel.

In the Users page you will be able the edit the Users name, username and email. You are also able to delete a user from this panel.

In the Movie section of the Admin panel you can add, update or delete a movie.

Guest
As a guest you are welcome to browse the website and search for movies.

If you wish to use the website as a registerd user you can simply register by clicking the "Register" icon on the top right corner. Please fill in all requested fields and then continue to log in.

User
As a logged in user you are able to create Watchlists, edit or delete them.

Review movies and also add comments to other users reviews.

Documentation
Documentation

Product Backlog
Find the backlog to our project via the link provided here:

https://github.com/NaeliaSalas/u05-group3/projects/1

