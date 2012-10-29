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
      
    //If site will report errors (SITE WIDE)
    define("REPORT_ERRORS",             false);
    //If site has sessions
    define("REQUIRE_SESSION_START",     true);
    //Define the realpath to includes folder
    define("INCLUDES_PATH",             str_replace("\\", "/", realpath("./") . "/" . IRFW_PREFIX . "includes/"));
    //Define the Install Directory
    define("INSTALL_DIRECTORY",         IRFW_PREFIX . "install/");
    //Message to display incase the install directory does exist:
    define("INSTALL_EXIST_ERROR_MSG",   "Your installation directory exists! Please install Irate Framework, 
                                         or delete the directory. <br /><br /> 
                                         <b>Click <a href=\"" . IRFW_PREFIX . "install/install.php\">
                                         Here</a> to install.</b>");
    //Install Error Message Type:
    define("INSTALL_ERROR_MSG_TYPE",    "install");
    //Smarty Template Directory (DEFINE THE MODULES DIRECTORY)
    define("SMARTY_TEMPLATE_DIRECTORY", IRFW_PREFIX . "modules/");
    //Template Cache Directory
    define("TEMP_CACHE_DIRECTORY",      IRFW_PREFIX . "caching/tpl_c");
    //Smarty Cache Directory
    define("SMARTY_CACHE_DIRECTORY",    IRFW_PREFIX . "caching/cache");
    //Smarty Configs Directory
    define("SMARTY_CONFIGS_DIRECTORY",  IRFW_PREFIX . "caching/configs");
    //Smarty Debugging
    define("SMARTY_DEBUGGING",          false);
    //Smarty Caching
    define("SMARTY_CACHING",            false);
    //Smarty Cache Lifetime
    define("SMARTY_CACHE_LIFETIME",     60);
?>