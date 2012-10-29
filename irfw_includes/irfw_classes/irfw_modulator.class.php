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
      
    //Initialize the Modulator Class
    $modulator = new modulator;
    
    //Start the Modulator Class
    class modulator
    {
        //Setup Variable for Current Mod
        public $currentMod;
        //Setup Variable for Default Mod
        public $defaultMod = "index";
      
        //Retrieve the Current Module and Return it
        public function current_module()
        {
            //Retrieve Specified Module from $_GET
            $this->currentMod = mysql_real_escape_string($_GET['mod']);
            //If the Current Module is Empty:
            if(empty($this->currentMod))
            {
                //Set the current Module to the Default Module.
                $this->currentMod = $this->defaultMod;
            }
            //If It's not Empty:
            else
            {
                //Set the Current Module to the Specified Module.
                //(Doing this just incase)
                $this->currentMod = $this->currentMod;
            }
            //Return the Current Module
            return $this->currentMod;
        }
      
        //Check if Module Exists
        //Takes one paramater, Module Name (STRING)
        public function module_exists($mod)
        {
            //Do the Query and get the Number of Rows from it:
            $query = mysql_query("SELECT * FROM modules WHERE modulename = '" . $mod . "'");
            $num_rows = mysql_num_rows($query);
            
            //If There is 0 rows:
            if($num_rows < 1)
            {
                //Return False
                return false;
            }
            //If Atleast 1 row exists:
            else
            {
                //Return True:
                return true;
            }
        }
      
        //Get Module Info:
        //Takes 2 Parameters:
        //Module Name (STRING)
        //Module Field (STRING)
        public function module_info($mod, $field)
        {
             //Do the Query and get the Fetch Array
             $query = mysql_query("SELECT * FROM modules WHERE modulename = '" . $mod . "'");
             $fetch = mysql_fetch_array($query);
             //Return the Specified Field:
             return $fetch[$field]; 
        }
    }
?>