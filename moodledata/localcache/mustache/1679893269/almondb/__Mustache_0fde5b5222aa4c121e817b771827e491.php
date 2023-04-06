<?php

class __Mustache_0fde5b5222aa4c121e817b771827e491 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <label for="qbshowtext">';
        $value = $context->find('str');
        $buffer .= $this->section060adc0f980f767e483a190a860ca07f($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    <select id="qbshowtext" name="qbshowtext" class="searchoptions custom-select align-baseline">
';
        $buffer .= $indent . '        <option value="0"';
        $value = $context->find('selected0');
        $buffer .= $this->section88f3a0425f940581199a6cb7829720ec($context, $indent, $value);
        $buffer .= '>';
        $value = $context->find('str');
        $buffer .= $this->section10409d803152dd2619fc8ada6e59c6aa($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '        <option value="1"';
        $value = $context->find('selected1');
        $buffer .= $this->section88f3a0425f940581199a6cb7829720ec($context, $indent, $value);
        $buffer .= '>';
        $value = $context->find('str');
        $buffer .= $this->sectionBf3fba0bb592527dedabcfd35fa4403e($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '        <option value="2"';
        $value = $context->find('selected2');
        $buffer .= $this->section88f3a0425f940581199a6cb7829720ec($context, $indent, $value);
        $buffer .= '>';
        $value = $context->find('str');
        $buffer .= $this->section92b26db33eead5715b3194ddb7289205($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '    </select>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section060adc0f980f767e483a190a860ca07f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showquestiontext, question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showquestiontext, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88f3a0425f940581199a6cb7829720ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10409d803152dd2619fc8ada6e59c6aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showquestiontext_off, question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showquestiontext_off, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf3fba0bb592527dedabcfd35fa4403e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showquestiontext_plain, question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showquestiontext_plain, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92b26db33eead5715b3194ddb7289205(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showquestiontext_full, question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showquestiontext_full, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
