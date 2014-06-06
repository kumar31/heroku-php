#!/bin/sh

heroku create
git push -u heroku master
heroku open
