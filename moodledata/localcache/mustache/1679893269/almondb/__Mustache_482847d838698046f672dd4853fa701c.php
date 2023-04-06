<?php

class __Mustache_482847d838698046f672dd4853fa701c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('readonly');
        $buffer .= $this->section2f1064c0acc35b8a1064cb1b87bdab14($context, $indent, $value);
        $value = $context->find('readonly');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $context->find('label');
            $buffer .= $this->sectionA8b4a8ff0f6d153a55ff0dcf45d3f990($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    <input id="';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" name="';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" type="text" value="';
            $value = $this->resolveValue($context->find('value'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="form-control" ';
            $value = $context->find('tabindex');
            $buffer .= $this->section4c81f215ec0db6a984c448b48336b3a3($context, $indent, $value);
            $buffer .= ' ';
            $value = $context->find('disabled');
            $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '    <input type="hidden" name="old';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" value="';
            $value = $this->resolveValue($context->find('value'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
        }

        return $buffer;
    }

    private function section2f1064c0acc35b8a1064cb1b87bdab14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{value}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8b4a8ff0f6d153a55ff0dcf45d3f990(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<label for="{{name}}" class="accesshide">{{label}}</label>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<label for="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="accesshide">';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c81f215ec0db6a984c448b48336b3a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tabindex="{{.}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tabindex="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
