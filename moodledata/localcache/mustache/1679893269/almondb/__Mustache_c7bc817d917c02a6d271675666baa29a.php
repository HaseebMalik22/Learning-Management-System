<?php

class __Mustache_c7bc817d917c02a6d271675666baa29a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<!-- Start Header Area -->
';
        $value = $context->find('frontpagenavchoice2');
        $buffer .= $this->sectionDce1745bb299b24e91500b027087e548($context, $indent, $value);
        $value = $context->find('frontpagenavchoice3');
        $buffer .= $this->sectionE4c33f5b65e02cd911c54cc2b6de9e37($context, $indent, $value);
        $buffer .= $indent . '<!-- End Header Area -->
';
        $buffer .= $indent . '<!-- Start Slider Area  -->
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/slider')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $value = $context->find('frontpagenavchoice1');
        $buffer .= $this->sectionF1dfe7367cc7deb33c261ae52ad50d3f($context, $indent, $value);
        $buffer .= $indent . '<!-- End Slider Area -->
';
        $buffer .= $indent . '<!-- Start section -->
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/frontpage_1')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '<!-- End section -->
';
        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <a role="button" href="#" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section87920055d712ea912d6afd650a063f4a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <i class="fa fa-angle-up scrollUp"></i>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/setup1')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>   
';
        $buffer .= $indent . '</html>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section552605dceb485f6995e14dcf3e9954da($context, $indent, $value);

        return $buffer;
    }

    private function sectionDce1745bb299b24e91500b027087e548(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         {{> theme_almondb/frontpage/header2}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/header2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '         ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4c33f5b65e02cd911c54cc2b6de9e37(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         {{> theme_almondb/frontpage/header3}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/header3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '         ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1dfe7367cc7deb33c261ae52ad50d3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         {{> theme_almondb/frontpage/header1}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/header1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '         ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87920055d712ea912d6afd650a063f4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totop, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' totop, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section552605dceb485f6995e14dcf3e9954da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending(\'theme_boost/loader\');
    require([\'theme_boost/loader\'], function() {
        M.util.js_complete(\'theme_boost/loader\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '    require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '        M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
