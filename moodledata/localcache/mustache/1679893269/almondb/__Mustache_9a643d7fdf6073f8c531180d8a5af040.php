<?php

class __Mustache_9a643d7fdf6073f8c531180d8a5af040 extends Mustache_Template
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
        $buffer .= $indent . '        <div class="navitem">
';
        $buffer .= $indent . '            <a class="btn btn-secondary mr-2" href="';
        $value = $this->resolveValue($context->find('backurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->sectionDb2144c0c0f428ce943c45f2b35b5194($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('userreport');
        $buffer .= $this->section0caf76eea47779002c97e968b561f370($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('heading');
        $buffer .= $this->section317d5294b0743e273e8398186fd5d009($context, $indent, $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionDb2144c0c0f428ce943c45f2b35b5194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'back, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'back, core ';
                $context->pop();
            }
        }
    
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

    private function section317d5294b0743e273e8398186fd5d009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{heading}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<h2>';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
