<?php

class __Mustache_02c3970e62939c763a5bd229835c77a3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="enable">
';
        $buffer .= $indent . '    <input type="checkbox" name="';
        $value = $this->resolveValue($context->find('applyname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" value="1" id="';
        $value = $this->resolveValue($context->find('applyname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="ml-0">
';
        $buffer .= $indent . '    <label for="';
        $value = $this->resolveValue($context->find('applyname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('applylabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</label>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<fieldset class="form-inline">
';
        $buffer .= $indent . '    <legend class="accesshide">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</legend>
';
        $buffer .= $indent . '    <label for="';
        $value = $this->resolveValue($context->find('menuname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('menulabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</label>
';
        $buffer .= $indent . '    <select name="';
        $value = $this->resolveValue($context->find('menuname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('menuname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-control custom-select">
';
        $value = $context->find('menuoptions');
        $buffer .= $this->section38b0263669920dc1b2da314d8e865093($context, $indent, $value);
        $buffer .= $indent . '    </select>
';
        $buffer .= $indent . '    <label for="';
        $value = $this->resolveValue($context->find('valuename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('valuelabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</label>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('valuefield'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</fieldset>
';

        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38b0263669920dc1b2da314d8e865093(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}" {{#selected}}selected{{/selected}}>{{name}}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
