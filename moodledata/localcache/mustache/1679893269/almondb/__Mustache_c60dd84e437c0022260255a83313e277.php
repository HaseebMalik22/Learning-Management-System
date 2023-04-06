<?php

class __Mustache_c60dd84e437c0022260255a83313e277 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block07enabled');
        $buffer .= $this->section549ae4895661064c1856818faa8c0ea1($context, $indent, $value);

        return $buffer;
    }

    private function sectionC501a5845251cbdf731e7ca71e9cf9e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block07_1 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block07_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section885898b561f9ae0c9114b3d988cbbc75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block07_2 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block07_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section405cee0aab0281c8a72e71e5c10162ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block07_3 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block07_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e87a72f8d7ef66be62e760636aa18cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block07_4 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block07_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1dbb99b38e9870083f0c98506014b45d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block07_5 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block07_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section549ae4895661064c1856818faa8c0ea1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block07">
    <div class="blockbgwhite">
        <div class="container">
            <div class="row">
                {{! Courses }}
                <div class="col-md-12" >
                    <div class="section-title-fp  hytext text-center">
                        <h4>{{block07header}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{#block07desing1}}
        {{> theme_almondb/frontpage/block07_1 }}
    {{/block07desing1}}          
    {{#block07desing2}}
        {{> theme_almondb/frontpage/block07_2 }}
    {{/block07desing2}}  
    {{#block07desing3}}
        {{> theme_almondb/frontpage/block07_3 }}
    {{/block07desing3}}  
    {{#block07desing4}}
        {{> theme_almondb/frontpage/block07_4 }}
    {{/block07desing4}} 
    {{#block07desing5}}
        {{> theme_almondb/frontpage/block07_5 }}
    {{/block07desing5}}
    <div class="d-flex justify-content-center hy-pt-5 blockbgcolor-b">
        <div class="hire-us-btn">
            <a class="hybtn" href="{{block07buttonlink}}">{{block07button}}</a>
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
                
                $buffer .= $indent . '<section id="block07">
';
                $buffer .= $indent . '    <div class="blockbgwhite">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                <div class="col-md-12" >
';
                $buffer .= $indent . '                    <div class="section-title-fp  hytext text-center">
';
                $buffer .= $indent . '                        <h4>';
                $value = $this->resolveValue($context->find('block07header'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h4>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $value = $context->find('block07desing1');
                $buffer .= $this->sectionC501a5845251cbdf731e7ca71e9cf9e7($context, $indent, $value);
                $value = $context->find('block07desing2');
                $buffer .= $this->section885898b561f9ae0c9114b3d988cbbc75($context, $indent, $value);
                $value = $context->find('block07desing3');
                $buffer .= $this->section405cee0aab0281c8a72e71e5c10162ac($context, $indent, $value);
                $value = $context->find('block07desing4');
                $buffer .= $this->section9e87a72f8d7ef66be62e760636aa18cf($context, $indent, $value);
                $value = $context->find('block07desing5');
                $buffer .= $this->section1dbb99b38e9870083f0c98506014b45d($context, $indent, $value);
                $buffer .= $indent . '    <div class="d-flex justify-content-center hy-pt-5 blockbgcolor-b">
';
                $buffer .= $indent . '        <div class="hire-us-btn">
';
                $buffer .= $indent . '            <a class="hybtn" href="';
                $value = $this->resolveValue($context->find('block07buttonlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('block07button'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
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
