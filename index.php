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
    * ==============================
    * IRFW_PREFIX:
    * This is the prefix before all
    * folders that deal with the
    * framework. Note that if this
    * is changed, all folder names
    * must be as well.
    * ==============================
    **/
    define("IRFW_PREFIX", "irfw_"); //DO NOT CHANGE UNLESS YOU KNOW WHAT YOU'RE DOING!
      
    //Include the Global File
    include(IRFW_PREFIX . 'includes/' . IRFW_PREFIX . 'initializer.php');
    //Include the Header Module.
    include(IRFW_PREFIX . 'modules/header/header.php');
    //Include the Modulator.
    include(IRFW_PREFIX . 'includes/' . IRFW_PREFIX . 'modulator/' . IRFW_PREFIX . 'modulator.core.php');
    //Include the Footer Module.
    include(IRFW_PREFIX . 'modules/footer/footer.php');
?>