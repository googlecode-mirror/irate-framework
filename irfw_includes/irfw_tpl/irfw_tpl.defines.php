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
      
    $irfw->tpl->assign('url',              $irfw->settings->get('url'));
    $irfw->tpl->assign('site_title',       $irfw->settings->get('site_title'));
    $irfw->tpl->assign('static_url',       $irfw->settings->get('static_url'));
    $irfw->tpl->assign('theme',            $irfw->settings->get('theme'));
    $irfw->tpl->assign('meta_keywords',    $irfw->settings->get('meta_keywords'));
    $irfw->tpl->assign('meta_description', $irfw->settings->get('meta_description'));
    $irfw->tpl->assign('is_mobile',        $irfw->mobile->check());
?>