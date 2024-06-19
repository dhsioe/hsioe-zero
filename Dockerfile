FROM centos:centos7


# install yum-utils
RUN yum -y install yum-utils

# install libevent
RUN yum -y install libevent libevent-devel

# install php8.1 libs
RUN yum -y install epel-release
RUN yum -y install https://mirrors.aliyun.com/remi/enterprise/remi-release-7.rpm
RUN yum-config-manager --enable remi-php81
RUN yum -y install php-yac \
    php-cli \
    php-event \
    php-posix \
    php-pcntl \
    php-zip \
    php-openssl \
    php-devel \
    php-gd \
    php-mbstring \
    php-curl \
    php-xml \
    php-simplexml \
    php-fileinfo \
    php-sodium \
    php-pear \
    php-bcmath \
    php-json \
    php-mysqlnd \
    php-redis \
    php-amqp \
    php-imagick  \
    --skip-broken

# 开启YAC缓存
RUN  echo "yac.enable_cli=1" >> /etc/php.ini

# copy project
RUN mkdir /app
COPY ./ /app
RUN chmod -R 777 /app/public /app/runtime

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
RUN composer install --no-dev --working-dir=/app

# clean all
RUN yum clean all

# 后台端口
EXPOSE 8788
# websocket端口
EXPOSE 3131
ENTRYPOINT ["php", "/app/start.php", "start"]