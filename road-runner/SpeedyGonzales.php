<?php

    class SpeedyGonzales
    {

        static function getMarvin()
        {
            $content = file_get_contents("marvin.json");

            if($content) :
                return json_decode($content, false);

                else :

                return false;
            endif;
        }

        static function getSiteTitle() : string
        {
            return (isset($_GET['component'])) ? self::getMarvin()->name . ' - ' . $_GET['component'] : self::getMarvin()->name;
        }

        static function getUrlDomain($value = null) : string
        {
            return self::getMarvin()->install->domain . '/' . $value;
        }

        static function getPathRoot($value = null) : string
        {
            return  $_SERVER['DOCUMENT_ROOT'] . '/' . self::getMarvin()->install->folder . '/' . $value;
        }

        static function getStyleComponents()
        {
            $components = self::getMarvin()->components;

            if($components) :

                foreach($components as $componet) :

                    $name = $componet->name;
                    $path = self::getPathRoot("src/components/{$name}/css/style.css");

                    if(file_exists($path)) :
                        echo file_get_contents($path) . "\n";
                    endif;

                endforeach;

            endif;

        }

        static function getStyleTheme($name)
        {
            //Carrega o css do tema
            $theme_path = self::getPathRoot("src/theme/{$name}.css");

            if(file_exists($theme_path)) :
                include_once($theme_path);
            endif;
        }

        static function getStylePage($name)
        {
            //Carrega o css do tema
            $page_path = self::getPathRoot("src/pages/{$name}/css/style.css");

            if(file_exists($page_path)) :
                include_once($page_path);
            endif;
        }

        static function getScriptPage($name)
        {
            //Carrega o css do tema
            $page_path = self::getPathRoot("src/pages/{$name}/js/script");

            if(file_exists($page_path)) :
                include_once($page_path);
            endif;
        }

        static function getBodyClass() : string {
            if(isset($_GET['component'])) :

                $name = $_GET['component'];
                return "components-{$name}";

                elseif(isset($_GET['test'])) :

                $name = $_GET['test'];
                return "test-{$name}";

                elseif(isset($_GET['page'])) :

                $name = $_GET['page'];
                return "page-{$name}";

                else :
                return 'page-home';

            endif;


        }

        static function getScriptComponents()
        {
            $components = self::getMarvin()->components;

            if($components) :

                foreach($components as $componet) :

                    $name = $componet->name;
                    $path = self::getPathRoot("src/components/{$name}/js/script.js");

                    if(file_exists($path)) :
                        echo file_get_contents($path) . "\n";
                    endif;

                endforeach;

            endif;

        }

        static function getImageComponent($component_name, $filename)
        {
            if($component_name && $filename) :
                return self::getUrlDomain("src/components/{$component_name}/img/$filename");
            endif;
        }

        static function getTotalComponents() : int
        {
            $components = self::getMarvin()->components;

            if($components) :
                return (int) count($components);

                    else :
                return 1;
            endif;
        }

        static function getVersion() : int
        {
            return self::getMarvin()->version;
        }

        static function linkComponent($name, $template = null) : string
        {
            $template = (!empty($template)) ? "&template={$template}" : null;
            return self::getUrlDomain("index.php?component={$name}{$template}");
        }

        static function loadContent()
        {
            if(isset($_GET['component'])) :

                $name = $_GET['component'];
                $path = self::getPathRoot("src/components/{$name}/html.php");

                if(file_exists($path)) :
                    include_once($path);
                endif;

            elseif(isset($_GET['test'])) :

                $name = $_GET['test'];
                $path = self::getPathRoot("src/test/{$name}/index.php");

                if(file_exists($path)) :
                    include_once($path);
                endif;

            else :
                $path = self::getPathRoot('src/pages/home/index.php');

                if(file_exists($path)) :
                    include_once($path);
                endif;

            endif;



        }

        static function loadComponent($name)
        {
            $path = self::getPathRoot("src/components/{$name}/html.php");

            if(file_exists($path)) :
                include($path);
            endif;
        }

        static function loadTemplate() {
            if(isset($_GET['template'])) :

                $template = $_GET['template'];
                $path = self::getPathRoot("src/template/{$template}.php");

                if(file_exists($path)) :
                    include($path);
                endif;

                else :
                    $path = self::getPathRoot("src/template/full.php");

                    if(file_exists($path)) :
                        include($path);
                    endif;

            endif;
        }

        static function loadTestBlock($test_name, $block_name)
        {
            if($test_name && $block_name) :
                $path = self::getPathRoot("src/test/{$test_name}/blocks/{$block_name}.php");
                if(file_exists($path)) :
                    include  $path;
                endif;
            endif;
        }
    }