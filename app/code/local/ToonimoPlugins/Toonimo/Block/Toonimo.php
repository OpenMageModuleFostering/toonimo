<?php
class ToonimoPlugins_Toonimo_Block_Toonimo extends Mage_Core_Block_Template
{
    public function toonimo_get_script()
    {
    	echo Mage::getStoreConfig('taontab/toon_general/toon_textarea');

         
    }
}
