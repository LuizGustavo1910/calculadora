FROM php:8.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
# CMD [ "php", "./index.php" ]
EXPOSE 8000
CMD [ "php" , "-S","0.0.0.0:8000"]