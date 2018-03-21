<?php

/**
 * @file
 * some file.
 *
  
 * 
 */
$somesomevar = array();
 
$someothervar = FALSE;

 
$somevar = '';
 
 if (isset($_ENV['someconf`'])) {

  /**
	*    some settings
	*/

	if (isset($conf['somevar'])) {
		$conf['somevar'][] = 'somevar';
		$conf['somevar'] = 'somevar';
	}

	switch ($_ENV['someconf']) {
    case 'env1':
    case 'env2':
    case 'env3':
    case 'env4':
    case 'env5':
      $conf['someconf2'] = 5;
      $conf['someconf2'] = 5;
      $conf['someconf2'] = 555;
      break;
  }
    /**Switch something**/
  switch ($_ENV['someconf']) {
    case 'env1':
    case 'env2':
        $conf['someconf'] = 5;
        $conf['someconf'] = 5;
        $conf['someconf'] = 555;
        break;
    case 'env1':
    case 'env2':
    case 'env3':
    case 'env4':
    case 'env5':
    case 'env6':
    case 'env7':
    case 'env8':
    case 'env9':
    case 'env10':
        $conf['someconf3'] = 5;
        $conf['someconf2'] = 5;
        $conf['someconf2'] = 555;
        break;
  }
 switch ($_ENV['someconf']) {
    case 'env1':
       $conf['someconf3'] = 5;
       $conf['someconf2'] = 5;
       $conf['someconf2'] = 555;
      break;

    case 'env2':
        $conf['someconf3'] = 5;
        $conf['someconf2'] = 5;
        $conf['someconf2'] = 555;
      break;

    case 'env3':
        $conf['someconf3'] = 5;
        $conf['someconf2'] = 5;
        $conf['someconf2'] = 555;
      break;

    case 'env4':
        $conf['someconf3'] = 5;
        $conf['someconf2'] = 5;
        $conf['someconf2'] = 555;
      break;
  }
} else {
  $conf['someconf3'] = 5;
  $conf['someconf2'] = 5;
  $conf['someconf2'] = 555;
}

 
include_once('something');

 
 


 
