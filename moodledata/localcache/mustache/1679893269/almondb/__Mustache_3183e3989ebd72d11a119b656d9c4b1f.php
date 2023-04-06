<?php

class __Mustache_3183e3989ebd72d11a119b656d9c4b1f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('scormreports');
        $buffer .= $this->section0caf76eea47779002c97e968b561f370($context, $indent, $value);
        $value = $context->find('candownload');
        $buffer .= $this->section30ad97a607b60db13dab471552dff1ad($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0caf76eea47779002c97e968b561f370(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core/url_select}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBadb6d328cddcc9819928d66fa0a1917(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' download ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' download ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ef83d06a164ee821ea4b7873faa68fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' downloadods ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' downloadods ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8cd6f9f88337a42a2866a82db2d69bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' downloadexcel ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' downloadexcel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section167c1c1ef49e75a454407286ecaf8e1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' downloadtext ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' downloadtext ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30ad97a607b60db13dab471552dff1ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem ml-auto">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{#str}} download {{/str}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ downloadods }}">{{#str}} downloadods {{/str}}</a>
                        <a class="dropdown-item" href="{{ downloadexcel }}">{{#str}} downloadexcel {{/str}}</a>
                        <a class="dropdown-item" href="{{ downloadtext }}">{{#str}} downloadtext {{/str}}</a>
                    </div>
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem ml-auto">
';
                $buffer .= $indent . '                <div class="dropdown">
';
                $buffer .= $indent . '                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionBadb6d328cddcc9819928d66fa0a1917($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
';
                $buffer .= $indent . '                        <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('downloadods'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section8ef83d06a164ee821ea4b7873faa68fe($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('downloadexcel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionE8cd6f9f88337a42a2866a82db2d69bc($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('downloadtext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section167c1c1ef49e75a454407286ecaf8e1a($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
