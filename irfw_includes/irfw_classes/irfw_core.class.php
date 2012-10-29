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
    
    //Include all Classes:
    //===========================================
    include(IRFW_PREFIX . "dir.class.php");
    include(IRFW_PREFIX . "msg.class.php");
    include(IRFW_PREFIX . "sql.class.php");
    include(IRFW_PREFIX . "error.class.php");
    include(IRFW_PREFIX . "settings.class.php");
    include(IRFW_PREFIX . "modulator.class.php");
    include(IRFW_PREFIX . "time.class.php");
    include(IRFW_PREFIX . "mobile.class.php");
    include("Smarty/template.class.php");
    //===========================================
    
    $irfw = new IRFW_CORE;
    
    class IRFW_INITIALIZER
    {
        //DIR Class
        public $dir;
        //MSG Class
        public $msg;
        //SQL Class
        public $sql;
        //ERROR Class
        public $error;
        //SETTINGS Class
        public $settings;
        //TPL Class
        public $tpl;
        //Modulator
        public $modulator;
        //Time Class
        public $time;
        //Mobile Class
        public $mobile;
        
        public function __construct()
        {
            //Set classes as sub classes
            //of the IRFW core.
            //Example of Access to classes:
            //$irfw->dir->exists();
            //==============================
            $this->dir = new dir;
            $this->msg = new msgClass;
            $this->sql = new sqlClass;
            $this->error = new errorClass;
            $this->settings = new setClass;
            $this->tpl = new Smarty;
            $this->modulator = new modulator;
            $this->time = new time;
            $this->mobile = new mobile;
            //==============================
        }
    }
    
    class IRFW_CORE extends IRFW_INITIALIZER
    {
        //Do nothing here, this just wraps
        //all the IRFW CORE classes together.
    }
?>