<?php

class __Mustache_0e22edccaece562798a71a2aa34dfc85 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block19desing1 hy-pt-40 hy-pb-40">
';
        $value = $context->find('block19headerenabled');
        $buffer .= $this->sectionA2119d1bddd8e5c34aff5e4dee2eb544($context, $indent, $value);
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row align-items-center">
';
        $value = $context->find('block19');
        $buffer .= $this->section34cfea555942801495280cdff2c4466d($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionA2119d1bddd8e5c34aff5e4dee2eb544(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <div class="section-title-fp hytext text-center hy-pb-40">
                    <h4>{{{block19header}}}</h4>
                </div>    
                <div class="item-content text-center hy-pt-5">    
                    <p>{{{block19caption}}}</p>
                </div>
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
                
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '            <div class="col-md-12" >
';
                $buffer .= $indent . '                <div class="section-title-fp hytext text-center hy-pb-40">
';
                $buffer .= $indent . '                    <h4>';
                $value = $this->resolveValue($context->find('block19header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                </div>    
';
                $buffer .= $indent . '                <div class="item-content text-center hy-pt-5">    
';
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('block19caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>    
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34cfea555942801495280cdff2c4466d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="text-center col-xs col-sm col-sm-4 col-md hy-pt-10 hy-pb-10">
                <a href="{{{link}}}"><img src="{{{image19}}}" style="width:100%;" alt=""></a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="text-center col-xs col-sm col-sm-4 col-md hy-pt-10 hy-pb-10">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('image19'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="width:100%;" alt=""></a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
