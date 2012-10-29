<?php
   /**
    * Irate Framework
    * Copyright (C) 2011  <Irate Designs || framework@iratedesigns.com>
    * 
    * This program is free software: you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation, either version 3 of the License, or
    * (at your option) any later version.
    * 
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    * GNU General Public License for more details.
    * 
    * You should have received a copy of the GNU General Public License
    * along with this program.  If not, see <http://www.gnu.org/licenses/>.
    **/
    
    //Get Current Specified mod.
    $mod = $_GET['mod'];
    
    //If the module is empty, assign it index.
    if(empty($mod))
    {
        $mod = "index";
    }
    
    //If the module is index, load index.
    if($mod == "index")
    {
        //Loading Index
        include(INSTALL_PREFIX . "modules/step1/step1.php");
    }
    //If the module is step1_install, load it.
    elseif($mod == "step1_install")
    {
        //Loading step1_install
        include(INSTALL_PREFIX . "modules/step1/step1.install.php");
    }
    //If the module is step2, load it.
    elseif($mod == "step2")
    {
        //Loading step 2.
        include(INSTALL_PREFIX . "modules/step2/step2.php");
    }
    //If the module is final, load it.
    elseif($mod == "final")
    {
        //Loading Final Module.
        include(INSTALL_PREFIX . "modules/final/final.php");
    }
    
?>