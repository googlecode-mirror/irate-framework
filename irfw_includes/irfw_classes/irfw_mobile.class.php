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
    
    class mobile
    {
        //Checks if user is mobile
        //Usage: $irfw->mobile->check();
        //Returns true or false.
        public function check(){
            
            //Set $mobile_browser to false to start.
            $mobile_browser = false;
            
            //Check the User Agent to see if it is a mobile device.
            //========================================================================================
            if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', 
                strtolower($_SERVER['HTTP_USER_AGENT']))) {
                $mobile_browser = true;
            }
            if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or 
               ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
                $mobile_browser = true;
            } 
            //========================================================================================
            
            //Check the User Agent to see if it is a mobile device.
            //========================================================================================   
            $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
            $mobile_agents = array(
                'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
                'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
                'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
                'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
                'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
                'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
                'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
                'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
                'wapr','webc','winw','winw','xda ','xda-');
            if (in_array($mobile_ua,$mobile_agents)) {
                $mobile_browser = true;
            }
            //========================================================================================
            
            //Check the User Agent is using a mobile browser.
            //========================================================================================
            if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini') > 0) {
                $mobile_browser = true;
            }
            if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows') > 0) {
                $mobile_browser = false;
            }
            return $mobile_browser;
            //========================================================================================
        }
    }