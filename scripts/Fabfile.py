from __future__ import with_statement
from fabric.api import *
from fabric.contrib.console import confirm
from fabric.contrib.files import exisits
from time import sleep
from StringIO import StringIO
import sys 

HOSTS = ['52.24.141.141']
USER = 'ubuntu'


def environment():
    env.user = USER
    env.hosts = HOSTS


def deploy():
    run("cd /var/www/html/2015-dev-ops-sample-application && git pull origin master && php composer.phar install && php vendor/bin/phinx migrate -e production")
