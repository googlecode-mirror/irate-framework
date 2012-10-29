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
    
    //Initialize the class.
    $db = new database;
    
    //Start Database class.
    class database
    {
        
        /**
         * =============================================
         * Install Queries
         * This will install all SQL tables for us.
         * =============================================
         **/
        public function install_queries($site_url, $static_url, $site_name, $site_desc, $site_keywords)
        {
            //Errors Table:
            //============================================================================
            mysql_query("CREATE TABLE IF NOT EXISTS `errors` (
                          `error_id` int(255) NOT NULL AUTO_INCREMENT,
                          `description` longtext COLLATE utf8_unicode_ci NOT NULL,
                          PRIMARY KEY (`error_id`)
                        )") or die(mysql_error());
                        
            mysql_query("INSERT INTO `errors` (`error_id`, `description`) VALUES
                        (1, 'The module you have selected does not exist. Please try again.'),
                        (2, 'The module you have selected is currently undergoing maintenance. We apologize for any inconvinience this may cause.')
                        ") or die(mysql_error());
            //MODULES TABLE
            //============================================================================
            mysql_query("CREATE TABLE IF NOT EXISTS `modules` (
                          `moduleid` int(255) NOT NULL AUTO_INCREMENT,
                          `modulename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                          `modulepath` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
                          `groups` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
                          `maintenance` int(255) NOT NULL,
                          `mod_site_title` varchar(900) COLLATE utf8_unicode_ci NOT NULL,
                          PRIMARY KEY (`moduleid`)
                        )") or die(mysql_error());
                        
            mysql_query("INSERT INTO `modules` (`moduleid`, `modulename`, `modulepath`, `groups`, `maintenance`, `mod_site_title`) VALUES
                        (1, 'index', 'modules/index/index.php', '0', 0, 'Module Description')
                        ") or die(mysql_error());
            //SETTINGS TABLE
            //============================================================================
            mysql_query("CREATE TABLE IF NOT EXISTS `settings` (
                          `site_title` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
                          `site_footer` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
                          `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                          `url` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
                          `static_url` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
                          `meta_keywords` longtext COLLATE utf8_unicode_ci NOT NULL,
                          `meta_description` longtext COLLATE utf8_unicode_ci NOT NULL
                        )") or die(mysql_error());
            
            mysql_query("INSERT INTO `settings` (`site_title`, `site_footer`, `theme`, `url`, `static_url`, `meta_keywords`, `meta_description`) VALUES
                        ('" . $site_name . "', 'Copyright &copy <sitename and year>', 'default', '" . $site_url . "', '" . $static_url . "', '" . $site_keywords . "', '" . $site_desc . "')
                        ") or die(mysql_error());
            
            //Return true, we can do this because if there is a mysql error, it dies
            //so technically it would never get here if a error occured.
            return true;
        }
        
    }
    
?>