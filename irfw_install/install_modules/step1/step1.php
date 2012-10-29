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
    
    //Include header file.
    include(INSTALL_PREFIX . "modules/header/header.php");
    
    //Error Outputting:
    //=========================================================================
    if($_GET['error'] == "install"){
        echo "<div style='width:100%;background:#FF0000;height:30px;line-height:30px;text-align:center;color:#FFF;'>
                Something went wrong.
              </div>";
    }
    elseif($_GET['error'] == "siteinfo"){
        echo "<div style='width:100%;background:#FF0000;height:30px;line-height:30px;text-align:center;color:#FFF;'>
                All site information is required.
              </div>";
    }
    elseif($_GET['error'] == "sqlinfo"){
        echo "<div style='width:100%;background:#FF0000;height:30px;line-height:30px;text-align:center;color:#FFF;'>
                The MySQL Information you have provided is incorrect. Please try again.
              </div>";
    }
    elseif($_GET['error'] == "connection"){
        echo "<div style='width:100%;background:#FF0000;height:30px;line-height:30px;text-align:center;color:#FFF;'>
                MySQL Connection failed. Please check your information.
              </div>";
    }
    elseif($_GET['error'] == "filewrite"){
        echo "<div style='width:100%;background:#FF0000;height:30px;line-height:30px;text-align:center;color:#FFF;'>
                Please check folder permissions for the includes folder.
              </div>";
    }
    //=========================================================================
    
    //HTML OUTPUT:
    //=========================================================================
    echo "    
    <form action='" . INSTALL_FILE . "?mod=step1_install' method='post'>
    <fieldset>
        <legend>MySql Information</legend>
        <table>
            <tr>
                <td width='100'>Host:</td>
                <td><input type='text' name='host' /></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type='text' name='sql_username' /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type='password' name='sql_password' /></td>
            </tr>
            <tr>
                <td>Database:</td>
                <td><input type='text' name='sql_database' /></td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Site Information</legend>
        <table>
            <tr>
                <td width='100'>Site URL:</td>
                <td><input type='text' name='site_url' /></td>
            </tr> 
            <tr>
                <td width='100'>Static URL:</td>
                <td><input type='text' name='static_url' /></td>
            </tr>
            <tr>
                <td width='100'>Site Name:</td>
                <td><input type='text' name='site_name' /></td>
            </tr>
            <tr>
                <td>Site Description:</td>
                <td><input type='text' name='site_desc' /></td>
            </tr>
            <tr>
                <td>Site Keywords:</td>
                <td><input type='text' name='site_keywords' /></td>
            </tr>
        </table>
    </fieldset>
   
    <div style='float:right;'>
        <input type='submit' value='Install' />
    </div>
    </form>";
    //=========================================================================
    
    //Include footer file
    include(INSTALL_PREFIX . "modules/footer/footer.php");
?>