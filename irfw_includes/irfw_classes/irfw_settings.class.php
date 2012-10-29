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
    
    class setClass{
        /**
         * Function: get(field)
         * Example: $irfw->settings->getField(site_title);
         * Description: This function allows you to fetch a settings field
         *              from the sql database.
         **/
        public function get($field){
            $query = mysql_query("SELECT * FROM settings");
            $fetch = mysql_fetch_array($query);
            Return $fetch[$field];
        }
        
        /**
         * Function: updateField(field, new)
         * Example: $irfw->settings->updateField('site_title', 'Iratee Forums');
         * Description: This function allows you to update a settings field
         *              in the sql database.
         **/
        public function updateField($field, $new){
            mysql_query("UPDATE settings SET " . $field . " = '" . $new . "'");
            //Echo for Testing Purposes.
            //echo  "<br> You have updated $field and set it to $new.";
        }  
    }