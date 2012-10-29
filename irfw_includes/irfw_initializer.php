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
    
    /**
    * ==============================
    * Include the global files here.
    * ==============================
    **/
    include(IRFW_PREFIX . "global/global.defines.php");
    
    /**
    * ==============================
    * Check if session is required.
    * ==============================
    **/
    if(REQUIRE_SESSION_START)
    {
        Session_Start();
    }
    
    /**
    * ==============================
    * Check Error Reporting State.
    * ==============================
    **/
    if(!REPORT_ERRORS)
    {
        error_reporting(0);
    }
    
    /**
    * ==============================
    * Include IRFW Core class.
    * ==============================
    **/
    include(IRFW_PREFIX . 'classes/' . IRFW_PREFIX . 'core.class.php');
    
    /**
    * ==============================
    * Check for install directory.
    * ==============================
    **/
    if($irfw->dir->exists(INSTALL_DIRECTORY)){
        //Display the Message if it does exist.
        $irfw->msg->display(INSTALL_EXIST_ERROR_MSG, INSTALL_ERROR_MSG_TYPE);
        //Exit so nothing else is initiated.
        exit;
    }else{
        //Include SQL Config file.
        include(IRFW_PREFIX . 'sql/' . IRFW_PREFIX . 'sql.config.php');
        //Include Template Initializer
        include(IRFW_PREFIX . 'tpl/' . IRFW_PREFIX . 'tpl.initialize.php');
        //Include Template Global Variables
        include(IRFW_PREFIX . 'tpl/' . IRFW_PREFIX . 'tpl.defines.php');
    }
?>