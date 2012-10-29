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

    //Error Class
    class errorClass{
        //Display an error to the screen:
        public function display($id){
            //Get the error from the Database:
            $errorq = mysql_query("SELECT * FROM errors WHERE error_id = '$id'");
            $error  = mysql_fetch_array($errorq);
            //Echo to the screen:
            //Error Output:
            //========================================================================================================
            Echo "
            <div class='error-contain'>
                <div class='error-header'>
		            <div class='error-header-text'>You have reached an error!</div>
                </div>
                <table class='error-content' cellspacing='0' cellpadding='0' style='padding:20px;margin-bottom:5px;'>
                    <tr>
               	        <td>
               	            <div class='error-text'>
						        <center>" . $error['description'] . "</center>
				            </div>
				        </td>
                    </tr>
		         </table>
            </div>";
            //========================================================================================================
        }
    }
?>