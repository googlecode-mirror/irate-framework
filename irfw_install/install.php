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
    
    /**
     * ================================
     * Setup prefix for Installation
     * Files. Do not change unless you
     * are absolutely sure as to what
     * you're doing.
     * ================================
     **/
    define("INSTALL_PREFIX", "install_");
    define("INSTALL_FILE", "install.php");

    //Include the Installation Global File
    include(INSTALL_PREFIX . 'includes/install.global.php');
    //Include the Installation Module System
    include(INSTALL_PREFIX . 'includes/install.modules.php');
?>