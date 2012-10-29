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
      
    $irfw->tpl->setTemplateDir(SMARTY_TEMPLATE_DIRECTORY); // Do not change
    $irfw->tpl->setCompileDir (TEMP_CACHE_DIRECTORY); // Do not change
    $irfw->tpl->setCacheDir   (SMARTY_CACHE_DIRECTORY); // Do not change
    $irfw->tpl->setConfigDir  (SMARTY_CONFIGS_DIRECTORY); // Do not change
    $irfw->tpl->debugging      = SMARTY_DEBUGGING; // For development only. If enabled, a debug popup opens.
    $irfw->tpl->caching        = SMARTY_CACHING; // I have disabled caching for development reasons.
    $irfw->tpl->cache_lifetime = SMARTY_CACHE_LIFETIME; // Caching lifetime.
?>