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
    
    class sqlClass{
        
        var $connection = "NULL";
        var $result     = "false";
        
        /*
            ---------------------------------------------
           |     Function: connect                       |
           |     Description: Connects to the SQL        |
           |                   database.                 |
            ---------------------------------------------
            
        */
        public function connect($host, $user, $password){
            $this->connection = mysql_connect($host, $user, $password) or die("Error: Connection to MySQL Failed.");
            
        }
        
        /*
            ---------------------------------------------
           |     Function: selectDB                      |
           |     Description: Selects the database       |
           |                  For MySQL                  |
            ---------------------------------------------
            
        */
        public function selectDB($database){
            mysql_select_db($database) or die(mysql_error());
        }
        
        /*
            ---------------------------------------------
           |     Function: escape_string                 |
           |     Description: Protects a String          |
            ---------------------------------------------
            
        */
        public function escape_string($String){
            $EscapeString = mysql_real_escape_string($String, $this->connection);
            Return $EscapeString;
        }
        
        /*
            ---------------------------------------------
           |     Function: query                         |
           |     Description: Simple function to         |
           |                  handle the Queries         |
            ---------------------------------------------
            
        */
        public function query($Query){
            $this->result = mysql_query($Query, $this->connection) or die(mysql_error());
            Return $this->result;
        }
        
        /*
            ---------------------------------------------
           |     Function: fetch_array                   |
           |     Description: Handles the SQL function   |
           |                   fetch_array               |
            ---------------------------------------------
            
        */
        public function fetch_array($Query){
            $fetch = mysql_fetch_array($Query);
            Return $fetch;
        }
        
        /*
            ---------------------------------------------
           |     Function: num_rows                      |
           |     Description: Does a SQL row count       |
            ---------------------------------------------
            
        */
        public function num_rows($Query){
            $num_rows = mysql_num_rows($Query);
            Return $num_rows;
        }
        
        /*
            ---------------------------------------------
           |     Function: close                         |
           |     Description: Closes the connection      |
            ---------------------------------------------
            
        */
        public function Close(){
            mysql_close($this->connection);
        }  
    }
?>