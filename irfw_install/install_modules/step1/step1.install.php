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
    
    $host = $_POST['host'];
    $sql_username = $_POST['sql_username'];
    $sql_password = $_POST['sql_password'];
    $database = $_POST['sql_database'];
    
//CAN NOT INDENT THIS AREA.
//==================================================================================
$sqlconfigtext = "<?php
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
    
    \$sql_host = '" . $host . "'; //SQL Host: Usually, localhost
    \$sql_user = '" . $sql_username . "'; // SQL Username
    \$sql_pass = '" . $sql_password . "'; // SQL Password
    \$sql_database = '" . $database . "'; // SQL Database
    
    /** Connect **/
    \$irfw->sql->connect(\$sql_host, \$sql_user, \$sql_pass); // Initiate Connection
    \$irfw->sql->selectDB(\$sql_database); // Select the Database
?>";
//==================================================================================

    //SITE INFORMATION
    $site_url      = $_POST['site_url'];
    $static_url    = $_POST['static_url'];
    $site_name     = $_POST['site_name'];
    $site_desc     = $_POST['site_desc'];
    $site_keywords = $_POST['site_keywords'];
    
    if(empty($host) || empty($sql_username) || empty($database)){
        header("Location: " . INSTALL_FILE . "?error=sqlinfo");
    }elseif(empty($site_url) || empty($site_url)){
        header("Location: " . INSTALL_FILE . "?error=siteinfo");
    }else{
        $error = false;
        if(mysql_connect($host, $sql_username, $sql_password)){
            if(mysql_select_db($database)){
                if($db->install_queries($site_url, $static_url, $site_name, $site_desc, $site_keywords))
                {
                    //Write the SQL File here.
                    //Change the users SQL FIle
                    $sqlFileName = "../irfw_includes/irfw_sql/irfw_sql.config.php";
                    $sqlFileHandle = fopen($sqlFileName, 'w') or die("can't open file");
                    if(fwrite($sqlFileHandle, $sqlconfigtext)){
                        fclose($sqlFileHandle);
                        header("Location: " . INSTALL_FILE . "?mod=step2");
                    }else{
                        header("Location: " . INSTALL_FILE . "?error=filewrite");
                    }
                }
                else
                {
                    Echo "Queries failed.";
                }
            }
            else
            {
               header("Location: " . INSTALL_FILE . "?error=connection");
            }
        }
        else
        {
            header("Location: " . INSTALL_FILE . "?error=connection");
        }
    }
?>    