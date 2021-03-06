from __future__ import with_statement
from fabric.api import *
from fabric.contrib.console import confirm
from fabric.contrib.files import exists
from time import sleep
from StringIO import StringIO
import sys 

HOSTS = ['172.31.16.131', '172.31.16.132']
USER = 'sampleuser'


def environment():
    env.user = USER
    env.hosts = HOSTS


def deploy():
    run("cd /var/www/html/sample_app && git pull origin master && php composer.phar install && php vendor/bin/phinx migrate -e production")
