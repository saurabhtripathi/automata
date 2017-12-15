<?php

	switch ($_ENV['siteenv']) {
    case 'prod':
    case 'preprod':
	case 'preprod2':
    case 'training':
	case 'load':
 
			 $conf['some_conf'] = 'some value';
 
			break;
  }

  switch ($_ENV['siteenv']) {
    case 'prod':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'test':
     $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'preprod':

      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'preprod2':
     $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'training':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'dev2':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'test2':
     $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'dev3':
    case 'dev-ddsdab':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'dev4':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'test3':
	  $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'test4':
    $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'dev5':
     $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'test5':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'dev6':
  $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
    break;

    case 'test6':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
    break;

  case 'test9':
 $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
    break;
    case 'test7':
  $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;

    case 'load':
      $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;
  }
} else {
  
 $conf['some_conf'] = 'some value';
      $conf['some_conf2'] = 'some value2';
      break;
}
?>