<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Blog Article
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  date: 
    label: Date
    type:  date
    format: mm/dd/yy
  text: 
    label: Text
    type:  textarea
    size:  large