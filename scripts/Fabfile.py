from __future__ import with_statement
from fabric.api import *

HOSTS = ['172.31.16.102', '172.31.16.103']
USER = 'ubuntu'


def environment():
    env.user = USER
    env.hosts = HOSTS


def deploy():
    run("cd /var/www/html/sample_app && git pull origin master && php composer.phar install && php vendor/bin/phinx migrate -e production")
