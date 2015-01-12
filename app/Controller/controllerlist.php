 function _getControllers($controller = null)
    {
        $controllers = array();
        $conf = Configure::getInstance();
 
        $paths      = $conf->controllerPaths;
        $plugPaths  = $conf->pluginPaths;
        $pluglist   = Configure::listObjects('plugin');
 
        foreach($plugPaths as $l)
        {
            foreach($pluglist as $v)
            $paths[] = $l.inflector::underscore($v).DS.'controllers';
        }
 
        if(!$controller)
        {
            $pluglist = array_merge(array(''), $pluglist);
            $controllerList = Configure::listObjects('controller', $paths, false);
 
            foreach($controllerList as $file)
            $controllers[$file] = $this->_getControllerMethods($file, $pluglist);
        }
        else
        {
            $controllers[$controller] = $this->_getControllerMethods($controller, $pluglist);
        }
 
        return $controllers;
    }
 
   
    function _getControllerMethods($controllerName, $plugins)
    {
        $classMethodsCleaned = array();
        $found = false;
 
        foreach($plugins as $plugin)
        {
            if(App::import('Controller', empty($plugin) ? $controllerName : $plugin.'.'.$controllerName))
            {
                $found = true;
                break;
            }
        }
 
        if(!$found) return array();
 
        $parentClassMethods = get_class_methods(get_parent_class(Inflector::camelize($controllerName).'Controller'));
        $subClassMethods    = get_class_methods(Inflector::camelize($controllerName).'Controller');
        $classMethods       = array_diff($subClassMethods, $parentClassMethods);
 
        foreach($classMethods as $method)
        {
            if($method{0} <> "_")
            {
                $classMethodsCleaned[] = $method;
            }
        }
 
        return $classMethodsCleaned;
    }