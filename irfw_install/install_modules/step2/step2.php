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
    
    //HTML OUTPUT:
    //===========================================================================
    echo "<div style='width:100%;background:#008000;height:30px;line-height:30px;text-align:center;color:#FFF;'>
              Installation Success. Click Finish and we will delete the installation folder.
          </div>
          <form action='" . INSTALL_FILE . "?mod=final' method='post'>
          <div style='float:right;'>
              <input type='submit' value='Finish Installation' />
          </div>
          </form>";
    //===========================================================================
    
    //Include footer file
    include(INSTALL_PREFIX . "modules/footer/footer.php");
?>