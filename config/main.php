<?php
error_reporting(E_ALL);
/**
 * CONATINS ALL GLOBALLY USABLE INFORMATION
 */

/**
 * 
 * This will be / if the mvc is installed at the document root. 
 */
//define('BASE_URL', '/');
define('BASE_URL', '/');

/**
 * 
 * The name of the default controller class
 * This will be used when no cotroller is given and when the requested
 * controller does not exist
 */
//define('DEFAULT_CONTROLLER', "Index");
define('DEFAULT_CONTROLLER', 'Index');

/**
 * 
 * The name of the default method to call when no method is given and when
 * the requested method does not exist
 */
//define('DEFAULT_METHOD', 'Index');
define('DEFAULT_METHOD', 'Index');

/**
 * 
 * SFDC Username for Integration
 */
define('SFDC_API_USER', 'scrowe@ito.qtc.dev');

/**
 * SFDC Password for Integration
 */
define('SFDC_API_PASSWORD', 'Benchpre55!');

/**
 * SFDC API Token for Integration
 */
define('SFDC_API_TOKEN', '');

/**
 * SETTING THE LOCALE
 * @todo make this multi currency based on the Browser locale if needed
 */
setlocale(LC_MONETARY, 'en_US');


/**
 * Set Company Image URL
 */
define('IMGURL', 'https://i.kinja-img.com/gawker-media/image/upload/s--pEKSmwzm--/c_scale,fl_progressive,q_80,w_800/1414228815325188681.jpg');



/**
 * Set Company primary color
 */
define('PRIM', 'EA2D31');

/**
 * Set Company primary color
 */
define('SECO', '00FF00');

/**
 * Set Company Name
 */
define('CNAME', 'Sean Company');

/**
 * Set Company Caption
 */
define('CCAP', 'Commercial Power Equipment');

/**
 * Set Company Main Product
 */
define('CPROD', 'Generators');
