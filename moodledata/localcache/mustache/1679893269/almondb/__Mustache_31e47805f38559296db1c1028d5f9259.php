<?php

class __Mustache_31e47805f38559296db1c1028d5f9259 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block01enabled');
        $buffer .= $this->section9d7a3e77ed6d81272a809f61b1abacf6($context, $indent, $value);

        return $buffer;
    }

    private function section748babd4c47a6ca22114e001440c1870(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background-color: {{block01color}};"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="background-color: ';
                $value = $this->resolveValue($context->find('block01color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8d1a19c7dca5ebe62b19e30e7559783(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-lg-7 col-md-9 col-12">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="col-lg-7 col-md-9 col-12">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA46e6249d5bc881bad7bbf8223ea6671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-lg-3 col-md-3  offset-lg-2 col-12 text-right">
                    <a class="hybtn hire-us-button" href="{{{block01buttonlink}}}">{{{block01button}}}</a>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="col-lg-3 col-md-3  offset-lg-2 col-12 text-right">
';
                $buffer .= $indent . '                    <a class="hybtn hire-us-button" href="';
                $value = $this->resolveValue($context->find('block01buttonlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('block01button'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d7a3e77ed6d81272a809f61b1abacf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block01">
    <div class="hire-us-area theme-bg" {{#block01color}}style="background-color: {{block01color}};"{{/block01color}}>
        <div class="container">
            <div class="row">
                {{#block01button}}
                <div class="col-lg-7 col-md-9 col-12">
                {{/block01button}}
                    <div class="hire-us-content">
                        {{{block01caption}}} 
                    </div>  
                </div>
                {{#block01button}}
                <div class="col-lg-3 col-md-3  offset-lg-2 col-12 text-right">
                    <a class="hybtn hire-us-button" href="{{{block01buttonlink}}}">{{{block01button}}}</a>
                </div>
                {{/block01button}}
            </div>
        </div>
    </div>
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block01">
';
                $buffer .= $indent . '    <div class="hire-us-area theme-bg" ';
                $value = $context->find('block01color');
                $buffer .= $this->section748babd4c47a6ca22114e001440c1870($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row">
';
                $value = $context->find('block01button');
                $buffer .= $this->sectionC8d1a19c7dca5ebe62b19e30e7559783($context, $indent, $value);
                $buffer .= $indent . '                    <div class="hire-us-content">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('block01caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' 
';
                $buffer .= $indent . '                    </div>  
';
                $buffer .= $indent . '                </div>
';
                $value = $context->find('block01button');
                $buffer .= $this->sectionA46e6249d5bc881bad7bbf8223ea6671($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
