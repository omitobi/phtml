FROM php:7.3-cli
COPY . /usr/src/phtml
WORKDIR /usr/src/phtml
CMD [ "php", "./index.php" ]