<?php

class __Mustache_531ee904cde67446f9fb2c524d16a15f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block07desing1 container">
';
        $value = $context->find('block07');
        $buffer .= $this->section5dfa16a11cbb3b25f3ea13624393a3ec($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionFc08bbafb78084750a8e0e81db16cd6d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="enrol">
                        {{cost}} {{currency}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="enrol">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('cost'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('currency'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5eedddd0c88d4ba3361aa23d7080264a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{shortname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82b9c46d877938555b177d87932a772b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{fullname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8a99cdf9adddce67b2b7002189b2bf2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 200, {{{summary}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' 200, ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d7b8be4a3d210977fd2e659fc601014(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block07tooltipcategory, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block07tooltipcategory, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9c80d5d95be4a45a84f23052df1ce3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block07tooltipenrolled, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block07tooltipenrolled, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section712e9c57704a5f7ab72a9d2f325a8950(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block07tooltiplastdate, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block07tooltiplastdate, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5dfa16a11cbb3b25f3ea13624393a3ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="card mb-3 h-100"  >
        <div class="row no-gutters">
            <div class="col-lg-4 "> 
                <div class="single-course" style="background-image: url({{imgurl}});">
                {{#block07priceshow}}
                    <div class="enrol">
                        {{cost}} {{currency}}
                    </div>
                {{/block07priceshow}}
                </div>
            </div>
            <div class="col-lg-8 " >
                <div class="card-body">
                    <div class="d-inline-flex" data-toggle="tooltip" data-placement="top" title="Teacher">
                        <div class="h6 hytext"><p> {{{ userpicture }}} {{{teachername}}}</p></div>
                    </div>
                    <h5 class="card-title post-heading">
                        <a href="{{courselink}}" class="text-decoration-none">
                            {{#block07shortname}}{{shortname}}{{/block07shortname}}
                            {{#block07fullname}}{{fullname}}{{/block07fullname}}
                        </a>
                    </h5>
                    <p class="card-text">{{#shortentext}} 200, {{{summary}}} {{/shortentext}}</p>
                    <span class="">&nbsp;</span>
                    <div class="card-text hytext" style="position:absolute; bottom:10px; width:95%; font-size: 13px; font-weight: 500;">
                        <span data-toggle="tooltip" data-placement="top" title="{{#str}}block07tooltipcategory, theme_almondb {{/str}}">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            <a href="{{categorylink}}" class="text-decoration-none"> {{categoryName}} </a>
                        </span>
                        <span class="pl-2 pr-2" data-toggle="tooltip" data-placement="top" title="{{#str}}block07tooltipenrolled, theme_almondb {{/str}}">
                            <i class="fa fa-user-circle-o" aria-hidden="true">  {{studentscount}}</i>
                        </span>
                        <span class="float-right d-none d-sm-block" data-toggle="tooltip" data-placement="top" title="{{#str}}block07tooltiplastdate, theme_almondb {{/str}}">
                            <i class="fa fa-calendar" aria-hidden="true"></i> {{update}}
                        </span>
                    </div>    
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
                
                $buffer .= $indent . '    <div class="card mb-3 h-100"  >
';
                $buffer .= $indent . '        <div class="row no-gutters">
';
                $buffer .= $indent . '            <div class="col-lg-4 "> 
';
                $buffer .= $indent . '                <div class="single-course" style="background-image: url(';
                $value = $this->resolveValue($context->find('imgurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');">
';
                $value = $context->find('block07priceshow');
                $buffer .= $this->sectionFc08bbafb78084750a8e0e81db16cd6d($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="col-lg-8 " >
';
                $buffer .= $indent . '                <div class="card-body">
';
                $buffer .= $indent . '                    <div class="d-inline-flex" data-toggle="tooltip" data-placement="top" title="Teacher">
';
                $buffer .= $indent . '                        <div class="h6 hytext"><p> ';
                $value = $this->resolveValue($context->find('userpicture'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('teachername'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <h5 class="card-title post-heading">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('courselink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="text-decoration-none">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('block07shortname');
                $buffer .= $this->section5eedddd0c88d4ba3361aa23d7080264a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('block07fullname');
                $buffer .= $this->section82b9c46d877938555b177d87932a772b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </h5>
';
                $buffer .= $indent . '                    <p class="card-text">';
                $value = $context->find('shortentext');
                $buffer .= $this->sectionB8a99cdf9adddce67b2b7002189b2bf2($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                    <span class="">&nbsp;</span>
';
                $buffer .= $indent . '                    <div class="card-text hytext" style="position:absolute; bottom:10px; width:95%; font-size: 13px; font-weight: 500;">
';
                $buffer .= $indent . '                        <span data-toggle="tooltip" data-placement="top" title="';
                $value = $context->find('str');
                $buffer .= $this->section6d7b8be4a3d210977fd2e659fc601014($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <i class="fa fa-plus-square" aria-hidden="true"></i>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('categorylink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="text-decoration-none"> ';
                $value = $this->resolveValue($context->find('categoryName'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </a>
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                        <span class="pl-2 pr-2" data-toggle="tooltip" data-placement="top" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionF9c80d5d95be4a45a84f23052df1ce3f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <i class="fa fa-user-circle-o" aria-hidden="true">  ';
                $value = $this->resolveValue($context->find('studentscount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</i>
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                        <span class="float-right d-none d-sm-block" data-toggle="tooltip" data-placement="top" title="';
                $value = $context->find('str');
                $buffer .= $this->section712e9c57704a5f7ab72a9d2f325a8950($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <i class="fa fa-calendar" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('update'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
