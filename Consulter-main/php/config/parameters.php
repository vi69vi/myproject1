<?php

return array (
  'dbHost' => '127.0.0.1',
  'dbPort' => '3306',
  'dbUser' => 'root',
  'dbPassword' => 'root',
  'dbName' => 'mirrormx_customer_chat',
  'superUser' => 'admin',
  'superPass' => 'admin',
  'services' => 
  array (
    'mailer' => 
    array (
      'smtp' => '',
      'smtpSecure' => 'ssl',
      'smtpHost' => '',
      'smtpPort' => '465',
      'smtpUser' => '',
      'smtpPass' => '',
    ),
  ),
  'appSettings' => 
  array (
    'contactMail' => 'admin@domain.com',
  ),
);

?>