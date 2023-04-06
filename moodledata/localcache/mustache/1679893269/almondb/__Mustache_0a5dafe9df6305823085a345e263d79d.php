<?php

class __Mustache_0a5dafe9df6305823085a345e263d79d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block02enabled');
        $buffer .= $this->section9a501c19cccd37cbe454070d3daa7d9f($context, $indent, $value);

        return $buffer;
    }

    private function sectionBb255b553790721d985b5c11c39036e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{icon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf655eae6d015ddea1a47878e6a337db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{{count}}}">
                    <div class="single-icon-box" style= "background-image: url({{{image}}});" >
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading"><i>{{#pix}}{{icon}}{{/pix}}</i> {{{title}}}  </h6>
                            <div class="iconbox-content-body">
                                {{{caption}}}
                                <a class="hybtn hybtn-inline read-more-btn" href="{{{buttonurl}}}"><i class="fa fa-plus-square"></i> {{{button}}}</a>
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="single-icon-box" style= "background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');" >
';
                $buffer .= $indent . '                        <div class="icon-box-content">
';
                $buffer .= $indent . '                            <h6 class="iconbox-content-heading"><i>';
                $value = $context->find('pix');
                $buffer .= $this->sectionBb255b553790721d985b5c11c39036e3($context, $indent, $value);
                $buffer .= '</i> ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '  </h6>
';
                $buffer .= $indent . '                            <div class="iconbox-content-body">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                <a class="hybtn hybtn-inline read-more-btn" href="';
                $value = $this->resolveValue($context->find('buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-plus-square"></i> ';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a501c19cccd37cbe454070d3daa7d9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block02">
    <div class="blockbgwhite">
        <div class="container">
            <div class="row">
                {{#block02}}
                <div class="{{{count}}}">
                    <div class="single-icon-box" style= "background-image: url({{{image}}});" >
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading"><i>{{#pix}}{{icon}}{{/pix}}</i> {{{title}}}  </h6>
                            <div class="iconbox-content-body">
                                {{{caption}}}
                                <a class="hybtn hybtn-inline read-more-btn" href="{{{buttonurl}}}"><i class="fa fa-plus-square"></i> {{{button}}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{/block02}}
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
                
                $buffer .= $indent . '<section id="block02">
';
                $buffer .= $indent . '    <div class="blockbgwhite">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row">
';
                $value = $context->find('block02');
                $buffer .= $this->sectionAf655eae6d015ddea1a47878e6a337db($context, $indent, $value);
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
