<?php

class __Mustache_3671b47d4f64ef77c2ba70526637266e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="navbarhy">
';
        $buffer .= $indent . '    <nav class="navbar header-area fixed-top ';
        $value = $this->resolveValue($context->find('frontpagenavlightdark'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' bg-hynavbar navbar-expand header-wrapper moodle-has-zindex" 
';
        $buffer .= $indent . '        aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $context->find('navbarcontainer');
        $buffer .= $this->section82cc598fe3f26eccd378a5053c8e51cb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('navbarcontainer');
        if (empty($value)) {
            
            $buffer .= '<div class="container-fluid" >';
        }
        $buffer .= '
';
        $buffer .= $indent . '            <button class="navbar-toggler aabtn d-block d-lg-none px-1 my-1 border-0" data-toggler="drawers" 
';
        $buffer .= $indent . '                data-action="toggle" data-target="theme_boost-drawers-primary">
';
        $buffer .= $indent . '                <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="navbar-brand d-none d-xl-flex align-items-center m-0 mr-4 p-0 aabtn">
';
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section1557a7f464dd45d91bc0699c868ee1ad($context, $indent, $value);
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '            </a>
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section90614e0cdec7d1be67c891fa8aa3ed3c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="navbar-nav d-none d-lg-flex my-1 px-1">
';
        $buffer .= $indent . '                <!-- page_heading_menu -->
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="navbar-nav mr-auto">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('frontpagenavlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div id="usernavigation" class="navbar-nav ml-auto">
';
        $value = $context->findDot('output.search_box');
        $buffer .= $this->sectionBe2fe226e8001ac40c9be798b643c24c($context, $indent, $value);
        $value = $context->find('langmenu');
        $buffer .= $this->section216241c98eabf85778f365d6a3ce8c79($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
';
        $value = $context->find('usermenu');
        $buffer .= $this->sectionD6ae3107dbc57e9d1fa9c88b00f926bd($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </nav>
';
        if ($partial = $this->mustache->loadPartial('theme_boost/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section4c718dbc0625bfa83ef4392ea1fa1f4c($context, $indent, $value);

        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82cc598fe3f26eccd378a5053c8e51cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="container" >';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="container" >';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section513a539ade0af67043fd4e27fd4e1783(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <img src="{{output.get_compact_logo_url}}" class="logo mr-1" alt="{{sitename}}">
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="logo mr-1" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf9d0de6ff816b50f5564f36a83d72ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <img src="{{output.get_logo_url}}" class="logo mr-1" alt="{{sitename}}">
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->findDot('output.get_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="logo mr-1" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1557a7f464dd45d91bc0699c868ee1ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#headerlogocompact}}
                        <img src="{{output.get_compact_logo_url}}" class="logo mr-1" alt="{{sitename}}">
                    {{/headerlogocompact}}
                    {{#headerlogo}}
                        <img src="{{output.get_logo_url}}" class="logo mr-1" alt="{{sitename}}">
                    {{/headerlogo}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('headerlogocompact');
                $buffer .= $this->section513a539ade0af67043fd4e27fd4e1783($context, $indent, $value);
                $value = $context->find('headerlogo');
                $buffer .= $this->sectionCf9d0de6ff816b50f5564f36a83d72ed($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90614e0cdec7d1be67c891fa8aa3ed3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="primary-navigation">
                    {{!> core/moremenu }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="primary-navigation">
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe2fe226e8001ac40c9be798b643c24c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{ output.search_box }}}
                    <div class="divider border-left h-75 align-self-center mx-1"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.search_box'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section216241c98eabf85778f365d6a3ce8c79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> theme_boost/language_menu }}
                    <div class="divider border-left h-75 align-self-center mx-1"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                    <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6ae3107dbc57e9d1fa9c88b00f926bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/user_menu }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c718dbc0625bfa83ef4392ea1fa1f4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    window.onscroll = function() {navFunction()};
    var navbar = document.getElementById("navbarhy");
    var sticky = navbar.offsetTop;
    function navFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("stickyhy")
        } else {
            navbar.classList.remove("stickyhy");
        }
    }
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    window.onscroll = function() {navFunction()};
';
                $buffer .= $indent . '    var navbar = document.getElementById("navbarhy");
';
                $buffer .= $indent . '    var sticky = navbar.offsetTop;
';
                $buffer .= $indent . '    function navFunction() {
';
                $buffer .= $indent . '        if (window.pageYOffset >= sticky) {
';
                $buffer .= $indent . '            navbar.classList.add("stickyhy")
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            navbar.classList.remove("stickyhy");
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
