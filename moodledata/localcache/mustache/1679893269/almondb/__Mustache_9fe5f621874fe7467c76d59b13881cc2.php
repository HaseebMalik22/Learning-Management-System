<?php

class __Mustache_9fe5f621874fe7467c76d59b13881cc2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block04desing1 black-bg blockbgcolor">
';
        $buffer .= $indent . '    <div class="container blockbgcolor-b">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-sm-12 hy-pb-20">
';
        $buffer .= $indent . '                <div class="section-title-fp text-center hytext">
';
        $buffer .= $indent . '                    <h4>';
        $value = $this->resolveValue($context->find('block04header'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="container text-center d-none d-sm-none d-md-block">
';
        $buffer .= $indent . '            <div class="d-none d-sm-none d-md-block ml-auto pb-3">
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <a class="btn-sm float-sm-left block04desing1__arrow text-decoration-none" href="#block04desing1Carousel" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
';
        $buffer .= $indent . '                    <a class="hire-us-btn hybtn" href="';
        $value = $this->resolveValue($context->find('block04buttonlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('block04button'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '                    <a class="btn-sm float-sm-right block04desing1__arrow text-decoration-none" href="#block04desing1Carousel" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div id="block04desing1Carousel" class="carousel slide w-100" data-ride="carousel">
';
        $buffer .= $indent . '                <div class="carousel-inner w-100 " role="listbox">
';
        $buffer .= $indent . '                    <div class="carousel-item row no-gutters active">
';
        $value = $context->find('block04_1');
        $buffer .= $this->sectionD328f68901cb22dadbd55e08a478c841($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="carousel-item row no-gutters">
';
        $value = $context->find('block04_2');
        $buffer .= $this->sectionC569fbfdc5301c59bff73e76487ce856($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="d-none d-sm-block d-md-none d-block d-sm-none">
';
        $buffer .= $indent . '                    <a class="carousel-control-prev " href="#block04desing1Carousel" data-slide="prev">
';
        $buffer .= $indent . '                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '                        <span class="sr-only">Previous</span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a class="carousel-control-next" href="#block04desing1Carousel"  data-slide="next">
';
        $buffer .= $indent . '                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '                        <span class="sr-only">Next</span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>    
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="container text-center my-3 d-md-none d-lg-none d-xl-none">
';
        $buffer .= $indent . '            <div class="blockbgcolor-b">
';
        $buffer .= $indent . '                <a class="hire-us-btn hybtn" href="';
        $value = $this->resolveValue($context->find('block04buttonlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('block04button'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '            </div>  
';
        $buffer .= $indent . '            <div id="block04desing1CarouselMobile" class="carousel slide w-100" data-ride="carousel">
';
        $buffer .= $indent . '                <div class="carousel-inner w-100" >
';
        $value = $context->find('block04');
        $buffer .= $this->sectionBfd7848a7d3a4e3ad7607b7395505604($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="carousel-control-prev " href="#block04desing1CarouselMobile" data-slide="prev">
';
        $buffer .= $indent . '                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '                    <span class="sr-only">Previous</span>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '                <a class="carousel-control-next" href="#block04desing1CarouselMobile"  data-slide="next">
';
        $buffer .= $indent . '                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '                    <span class="sr-only">Next</span>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD328f68901cb22dadbd55e08a478c841(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-md-3 float-left">
                            <div class="single-project" style= "background-image: url({{{image}}});">
                                <div class="project-inner">
                                    <h5><a class="text-decoration-none" href="{{link}}">{{title}}</a></h5>
                                    <p>{{caption}}</p>
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
                
                $buffer .= $indent . '                        <div class="col-md-3 float-left">
';
                $buffer .= $indent . '                            <div class="single-project" style= "background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');">
';
                $buffer .= $indent . '                                <div class="project-inner">
';
                $buffer .= $indent . '                                    <h5><a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h5>
';
                $buffer .= $indent . '                                    <p>';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>   
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC569fbfdc5301c59bff73e76487ce856(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-md-3 float-left">
                            <div class="single-project" style= "background-image: url({{{image}}});">
                                <div class="project-inner">
                                    <h5><a class="text-decoration-none" href="{{link}}">{{title}}</a></h5>
                                    <p>{{caption}}</p>
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
                
                $buffer .= $indent . '                        <div class="col-md-3 float-left">
';
                $buffer .= $indent . '                            <div class="single-project" style= "background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');">
';
                $buffer .= $indent . '                                <div class="project-inner">
';
                $buffer .= $indent . '                                    <h5><a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h5>
';
                $buffer .= $indent . '                                    <p>';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfd7848a7d3a4e3ad7607b7395505604(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="carousel-item col-md-3 float-left {{#active}}active{{/active}} ">
                        <div class="single-project" style = "background-image: url({{{image}}});">
                            <div class="project-inner">
                                <h5><a class="text-decoration-none" href="{{link}}">{{title}}</a></h5>
                                <p>{{caption}}</p>
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
                
                $buffer .= $indent . '                    <div class="carousel-item col-md-3 float-left ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ">
';
                $buffer .= $indent . '                        <div class="single-project" style = "background-image: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');">
';
                $buffer .= $indent . '                            <div class="project-inner">
';
                $buffer .= $indent . '                                <h5><a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h5>
';
                $buffer .= $indent . '                                <p>';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>    
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
