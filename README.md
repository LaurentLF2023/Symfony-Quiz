### My Quizz

Requirement:
```
php 8.1 or above
symfony cli 
```

First create an .env file and provide these variables following symfony documentation:
```
MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=false
DATABASE_URL=
MAILER_DSN=
```

To launch the project run the following commands from withing the project directory:

` composer update`\
` npm install`\
` npm run dev`\
` symfony console doctrine:database:create`\
` symfony console make:migration`\
` symfony console doctrine:migrations:migrate `\


For example data import the bdd.sql file inside your database after the migration