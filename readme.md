Infos in this repo are from \
https://phpunit.readthedocs.io/en/9.5 \
https://thephp.website/en/issue/php-docker-quick-setup/ \
https://riptutorial.com/phpunit \
https://codesamplez.com/development/phpunit-tutorial-beginners \
https://semaphoreci.com/community/tutorials/getting-started-with-phpunit-in-laravel \

get the docker started \
`$ docker-compose up nginx` \
(Browser: localhost:8080)

make the composer dump-autoload \
`$ docker-compose run composer -- dump-autoload`

run the tests \
`$ docker-compose run phpunit`

install something with composer \
`$ docker-compose run composer require something/something`


