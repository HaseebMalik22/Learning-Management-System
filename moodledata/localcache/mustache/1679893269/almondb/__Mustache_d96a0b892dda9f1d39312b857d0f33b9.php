<?php

class __Mustache_d96a0b892dda9f1d39312b857d0f33b9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block05enabled');
        $buffer .= $this->sectionEe5c9c5c16c1d206c67069b4d7498f93($context, $indent, $value);

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

    private function sectionE345fcc47a4008bc5d6c5da39188b7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="single-choose-item">
                            <h6><a class="text-decoration-none" href="{{link}}"><i>{{#pix}}{{icon}}{{/pix}}</i> {{{title}}}</a></h6>
                            <p>{{{caption}}}</p>
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="single-choose-item">
';
                $buffer .= $indent . '                            <h6><a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i>';
                $value = $context->find('pix');
                $buffer .= $this->sectionBb255b553790721d985b5c11c39036e3($context, $indent, $value);
                $buffer .= '</i> ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h6>
';
                $buffer .= $indent . '                            <p>';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b9801b98c667921c07e908b1a6aac95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="block05desing1 blockbgwhite">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center blockbgwhite-b">
                        <div class="section-title-fp hytext">
                            <h4>{{block05header}}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-img-thumbnail text-center" style = "background-image: url({{{block05image}}});">
                            <a class="video-play" href="https://www.youtube.com/watch?v=SGo1i4BEBL4"><i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{#block05}}
                        <div class="single-choose-item">
                            <h6><a class="text-decoration-none" href="{{link}}"><i>{{#pix}}{{icon}}{{/pix}}</i> {{{title}}}</a></h6>
                            <p>{{{caption}}}</p>
                        </div>
                        {{/block05}}
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
                
                $buffer .= $indent . '        <div class="block05desing1 blockbgwhite">
';
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                    <div class="col-lg-12 text-center blockbgwhite-b">
';
                $buffer .= $indent . '                        <div class="section-title-fp hytext">
';
                $buffer .= $indent . '                            <h4>';
                $value = $this->resolveValue($context->find('block05header'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                    <div class="col-lg-6">
';
                $buffer .= $indent . '                        <div class="video-img-thumbnail text-center" style = "background-image: url(';
                $value = $this->resolveValue($context->find('block05image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');">
';
                $buffer .= $indent . '                            <a class="video-play" href="https://www.youtube.com/watch?v=SGo1i4BEBL4"><i class="fa fa-play-circle"></i></a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="col-lg-6">
';
                $value = $context->find('block05');
                $buffer .= $this->sectionE345fcc47a4008bc5d6c5da39188b7c0($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe5c9c5c16c1d206c67069b4d7498f93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block05">
    {{#block05desing1}}
        <div class="block05desing1 blockbgwhite">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center blockbgwhite-b">
                        <div class="section-title-fp hytext">
                            <h4>{{block05header}}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-img-thumbnail text-center" style = "background-image: url({{{block05image}}});">
                            <a class="video-play" href="https://www.youtube.com/watch?v=SGo1i4BEBL4"><i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{#block05}}
                        <div class="single-choose-item">
                            <h6><a class="text-decoration-none" href="{{link}}"><i>{{#pix}}{{icon}}{{/pix}}</i> {{{title}}}</a></h6>
                            <p>{{{caption}}}</p>
                        </div>
                        {{/block05}}
                    </div>
                </div>
            </div>
        </div>
    {{/block05desing1}}
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block05">
';
                $value = $context->find('block05desing1');
                $buffer .= $this->section6b9801b98c667921c07e908b1a6aac95($context, $indent, $value);
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
