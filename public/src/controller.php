<?php 
    class Controller{
        function runAction($actionName)
        {
            $actionName .= 'Action';
            if(method_exists($this,$actionName))
            {
                $this->$actionName();

            }
            else
            {
                include 'view/status-pages/404.html';
            }
        }
    }
    