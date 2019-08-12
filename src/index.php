<?php
  include_once('template.php');

  $template = new Template();

  $request = $_SERVER['REQUEST_URI'];

  switch ($request) {
    case '/':
      $template->render('/index.phtml', 'Home');
      break;
    case '/about':
      $template->render('/about.phtml', 'About');
      break;
    case '/contact':
      $template->render('/contact.phtml', 'Contact');
      break;
    default:
      $template->render('/404.phtml', '404');
      break;
  }
?>