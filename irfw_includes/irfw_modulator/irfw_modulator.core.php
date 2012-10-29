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
      
    //Set Module as Current Module
    $module = $irfw->modulator->current_module();
    
    //If Module Does not Exist
    if(!$irfw->modulator->module_exists($module))
    {
      $irfw->error->display(1);
    }
    //If Module is undergoing maintenance.
    elseif($irfw->modulator->module_info($module, "maintenance"))
    {
      $irfw->error->display(2);
    }
    //If all passes, include the file:
    else
    {
      include(IRFW_PREFIX . $irfw->modulator->module_info($module, "modulepath"));
    }
?>