<?php 

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

// set the default panel language
c::set('panel.language', 'en');

// set the main color for the panel design
// can be any valid css color definition
c::set('panel.color', '#134e8a');

// allowed mime types for file uploads
c::set('upload.allowed', array(
  'image/jpeg', 
  'image/pjpeg',
  'image/png',
  'image/x-png', 
  'image/gif',
  'application/pdf',
  'application/gzip',
  'application/zip',
));