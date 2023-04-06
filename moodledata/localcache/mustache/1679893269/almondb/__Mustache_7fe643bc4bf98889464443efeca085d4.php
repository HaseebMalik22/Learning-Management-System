<?php

class __Mustache_7fe643bc4bf98889464443efeca085d4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="alert alert-secondary alert-block fade in">
';
        $buffer .= $indent . '    <iframe id="';
        $value = $this->resolveValue($context->find('iframeid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="w-100 border-0"></iframe>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section3efb517008cc65628463834a46863247($context, $indent, $value);

        return $buffer;
    }

    private function section3efb517008cc65628463834a46863247(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
(function() {
    var iframe = document.getElementById(\'{{iframeid}}\');
    iframe.src = \'{{url}}\';
    window.addEventListener(\'message\', function (event) {
        if (event.source === iframe.contentWindow) {
            iframe.style.height = event.data + \'px\';
        }
    });
})();
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '(function() {
';
                $buffer .= $indent . '    var iframe = document.getElementById(\'';
                $value = $this->resolveValue($context->find('iframeid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    iframe.src = \'';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\';
';
                $buffer .= $indent . '    window.addEventListener(\'message\', function (event) {
';
                $buffer .= $indent . '        if (event.source === iframe.contentWindow) {
';
                $buffer .= $indent . '            iframe.style.height = event.data + \'px\';
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '})();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
