<?php
require_once 'abstract.php';

class Zhibek_Shell_Migrate extends Mage_Shell_Abstract
{
    
    /**
     * Run script
     */
    public function run()
    {
        if ($this->getArg('migrate')) {
                
            Mage::app();
            $updates = Mage_Core_Model_Resource_Setup::applyAllUpdates();

            if ($updates) {
                print('Migrations executed successfully.');
                exit;
            } else {
                print('Migrations did not return success code.');
                exit;
            }
        
        } else {
            print $this->usageHelp();
            exit;
        }
        
    }

    /**
     * Retrieve Usage Help Message
     */
    public function usageHelp()
    {
        return <<<USAGE
Usage:  php -f migrate.php -- [options]
        php -f migrate.php migrate

  migrate           Run Magento resource migrations
  help              This help

USAGE;
    }
}

$shell = new Zhibek_Shell_Migrate();
$shell->run();