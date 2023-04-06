<?php

class __Mustache_a5944c3da116cc97cad5c47b7439327d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block06desing1 working-with-us-area gray-bg" ';
        $value = $context->find('block06color');
        $buffer .= $this->section81608f97d17f962f318d3de82a2d3437($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="container"> 
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-md-6 col-12 text-center d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="hire-us-content hytext">
';
        $buffer .= $indent . '                    <div class="section-title-fp">
';
        $buffer .= $indent . '                        <h4>';
        $value = $this->resolveValue($context->find('block06header'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <p>';
        $value = $this->resolveValue($context->find('block06caption'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                    <a href="';
        $value = $this->resolveValue($context->find('block06buttonlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="hybtn hire-us-btn">';
        $value = $this->resolveValue($context->find('block06button'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-6 d-none d-md-block">
';
        $buffer .= $indent . '                <div class="hire-us-img">
';
        $buffer .= $indent . '                    <img src="';
        $value = $this->resolveValue($context->find('block06image'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" alt="">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section81608f97d17f962f318d3de82a2d3437(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background-color: {{block06color}};"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="background-color: ';
                $value = $this->resolveValue($context->find('block06color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
