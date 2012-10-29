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

    class msgClass{
        //Display Message:
        public function display($text, $type){
            
            //if Message Type is "Install"
            if($type == "install"){
                $checkertext = "<b><font color='green'>Checking for installation directory... </font> 
                                <font color='red'>Does Exist!</font></b><br /><br />";
            }
            
            //Message CSS:
            //===================================================
            Echo "
            <style type='text/css'>
                .msg-contain{
                    width:400px;
                    min-height:200px;
                    position:absolute;
                    top:50%;
                    left:50%;
                    margin-left:-200px;
                    margin-top:-100px;
                    background:#DDD;
                    border:1px solid #BBB;
                    border-radius:4px;
                }
                
                .msg-header{
                    width:100%;
                }
                
                .msg-header-text{
                    font-weight:bold;
                    padding:5px;
                    border-bottom:1px solid #000;
                }
             </style>";
             //===================================================
            
             //Message OUTPUT:
             //===================================================
             Echo "<div class='msg-contain'>
             <div class='msg-header'>
		            <div class='msg-header-text'>System Message:</div>
		         </div>
		         <table class='msg-content' cellspacing='0' cellpadding='0' style='padding:20px;margin-bottom:5px;'>
                     <tr>
                         <td>
          	                 <div class='msg-text'>
								        <center>" . $checkertext . $text . "</center>
			                 </div>
			             </td>
			         </tr>
		         </table>
             </div>";
            //===================================================
        }
    }
?>